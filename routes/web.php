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
Route::get('/theme-1', [InvitationController::class, 'preview'])->defaults('theme', 'theme-1');
Route::get('/theme-2', [InvitationController::class, 'preview'])->defaults('theme', 'theme-2');
Route::get('/theme-3', [InvitationController::class, 'preview'])->defaults('theme', 'theme-3');
Route::get('/theme-4', [InvitationController::class, 'preview'])->defaults('theme', 'theme-4');
Route::get('/theme-5', [InvitationController::class, 'preview'])->defaults('theme', 'theme-5');
Route::get('/theme-6', [InvitationController::class, 'preview'])->defaults('theme', 'theme-6');

// Public Invitation
Route::get('/v/{slug}', [InvitationController::class, 'show'])->name('invitation.show');
Route::post('/v/{slug}/rsvp', [InvitationController::class, 'rsvp'])->name('invitation.rsvp');
Route::post('/rsvp', [InvitationController::class, 'rsvp'])->name('rsvp.store');

// Dashboard (Protected)
Route::prefix('dashboard')->middleware(['auth', 'role:user'])->group(function () {
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
    Route::post('/guests/{id}/reset-rsvp', [DashboardController::class, 'resetRSVP'])->name('dashboard.invitations.reset_rsvp');
    Route::delete('/guests/{id}', [DashboardController::class, 'destroyGuest'])->name('dashboard.invitations.destroy_guest');
    // Gallery management
    Route::delete('/gallery-photo/{id}', [DashboardController::class, 'deleteGalleryPhoto'])->name('dashboard.invitations.delete_gallery');
    // Profile/Cover Photo reset
    Route::delete('/invitations/{id}/photo/{type}', [DashboardController::class, 'deletePhoto'])->name('dashboard.invitations.delete_photo');
});

// Super Admin (Protected)
use App\Http\Controllers\AdminController;
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/templates', [AdminController::class, 'templates'])->name('admin.templates');
    Route::get('/templates/create', [AdminController::class, 'createTemplate'])->name('admin.templates.create');
    Route::post('/templates', [AdminController::class, 'storeTemplate'])->name('admin.templates.store');
    Route::get('/templates/{id}/edit', [AdminController::class, 'editTemplate'])->name('admin.templates.edit');
    Route::put('/templates/{id}', [AdminController::class, 'updateTemplate'])->name('admin.templates.update');
    Route::get('/packages', [AdminController::class, 'packages'])->name('admin.packages');
    Route::get('/packages/{id}/edit', [AdminController::class, 'editPackage'])->name('admin.packages.edit');
    Route::put('/packages/{id}', [AdminController::class, 'updatePackage'])->name('admin.packages.update');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
});
