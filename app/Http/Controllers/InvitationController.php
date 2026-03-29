<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function show($slug)
    {
        $invitation = Invitation::with('template')
            ->where('slug', $slug)
            ->firstOrFail();

        // Increment Guest View Count if 'to' parameter exists
        if (request()->has('to')) {
            $guestName = request('to');
            $guest = $invitation->guests()
                ->where('name', 'LIKE', $guestName)
                ->first();
            
            if ($guest) {
                $guest->increment('views_count');
            }
        }

        $theme = $invitation->template->slug;

        // Map theme-1 -> public/template/theme-1/theme-1
        return view("public.template.{$theme}.{$theme}", compact('invitation'));
    }
}
