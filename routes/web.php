<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrderRequestController;
use App\Http\Controllers\AuthController;

use App\Models\Template;
use App\Models\Package;

Route::get('/', function () {
    $templates = Template::where('is_active', true)->get();
    $packages = Package::all();
    return view('public/welcome/welcome', compact('templates', 'packages'));
});

Route::post('/order-request', [OrderRequestController::class, 'store'])->name('order.request');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Theme Preview Routes (Mocked Data)
function mockInvitation($theme) {
    $invitation = new \App\Models\Invitation();
    $invitation->bride_name = "Emma Sophia Watson";
    $invitation->groom_name = "James Arthur Bond";
    $invitation->wedding_date = now()->addMonths(2);
    $invitation->location = "New York City, USA";
    $invitation->bride_parents = "Putri dari Mr. George & Mrs. Marie";
    $invitation->groom_parents = "Putra dari Mr. Andrew & Mrs. Diana";
    $invitation->bride_ig = "@emma_sophia";
    $invitation->groom_ig = "@james_bond";
    $invitation->akad_time = "10:00 - 12:00";
    $invitation->akad_location = "St. Patrick's Cathedral";
    $invitation->akad_address = "5th Ave, New York, NY 10022";
    $invitation->resepsi_time = "19:00 - 21:00";
    $invitation->resepsi_location = "The Plaza Hotel";
    $invitation->resepsi_address = "768 5th Ave, New York, NY 10019";
    $invitation->maps_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25280821814!2d-74.11976373946229!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sid!4v1740578496854!5m2!1sen!2sid";
    
    return view("public/template/{$theme}/{$theme}", compact('invitation'));
}

Route::get('/theme-1', function () { return mockInvitation('theme-1'); });
Route::get('/theme-2', function () { return mockInvitation('theme-2'); });
Route::get('/theme-3', function () { return mockInvitation('theme-3'); });
Route::get('/theme-4', function () { return mockInvitation('theme-4'); });

// Public Invitation
Route::get('/v/{slug}', [InvitationController::class, 'show'])->name('invitation.show');

// Dashboard (Protected)
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/invitations', [DashboardController::class, 'invitations'])->name('dashboard.invitations');
    Route::get('/templates', [DashboardController::class, 'templates'])->name('dashboard.templates');
    Route::get('/invitations/create/{template_id}', [DashboardController::class, 'createInvitation'])->name('dashboard.invitations.create');
    Route::post('/invitations', [DashboardController::class, 'storeInvitation'])->name('dashboard.invitations.store');
    Route::get('/invitations/{id}/edit', [DashboardController::class, 'editInvitation'])->name('dashboard.invitations.edit');
    Route::put('/invitations/{id}', [DashboardController::class, 'updateInvitation'])->name('dashboard.invitations.update');
    Route::delete('/invitations/{id}', [DashboardController::class, 'destroyInvitation'])->name('dashboard.invitations.destroy');
    
    // Guests management
    Route::get('/invitations/{id}/guests', [DashboardController::class, 'guests'])->name('dashboard.invitations.guests');
    Route::post('/invitations/{id}/guests', [DashboardController::class, 'storeGuest'])->name('dashboard.invitations.store_guest');
    Route::delete('/guests/{id}', [DashboardController::class, 'destroyGuest'])->name('dashboard.invitations.destroy_guest');
});

// Super Admin (Protected)
use App\Http\Controllers\AdminController;
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/templates', [AdminController::class, 'templates'])->name('admin.templates');
    Route::get('/templates/create', [AdminController::class, 'createTemplate'])->name('admin.templates.create');
    Route::post('/templates', [AdminController::class, 'storeTemplate'])->name('admin.templates.store');
    Route::get('/packages', [AdminController::class, 'packages'])->name('admin.packages');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
});
