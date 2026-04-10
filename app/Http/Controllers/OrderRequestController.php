<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderRequest;

class OrderRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'package_name' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        OrderRequest::create($validated);

        // Redirect to WhatsApp
        $adminPhone = '6285179792137';
        $message = "Halo Admin, saya ingin memesan paket *{$request->package_name}*.\n\n"
                 . "*Data Pemesan:*\n"
                 . "• Nama: {$request->name}\n"
                 . "• WhatsApp: {$request->phone}\n"
                 . "• Email: " . ($request->email ?? '-') . "\n"
                 . "• Catatan: " . ($request->notes ?? '-');

        $url = "https://wa.me/{$adminPhone}?text=" . rawurlencode($message);
        
        return redirect()->away($url);
    }
}
