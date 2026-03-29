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

        return back()->with('success', 'Permintaan pesanan Anda telah terkirim! Tim kami akan segera menghubungi Anda.');
    }
}
