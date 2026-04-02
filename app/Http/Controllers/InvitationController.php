<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Guest;
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
            $guestName = trim(request('to'));
            $guest = $invitation->guests()
                ->where('name', $guestName)
                ->first();
            
            // Fallback for case-insensitive if exact match fails
            if (!$guest) {
                $guest = $invitation->guests()
                    ->whereRaw('LOWER(name) = ?', [strtolower($guestName)])
                    ->first();
            }
            
            if ($guest) {
                $guest->increment('views_count');
            }
        }

        $theme = $invitation->template->slug;

        return view("public.template.{$theme}.{$theme}", compact('invitation'));
    }
    public function preview($theme)
    {
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
        
        // Ensure wedding_date is treated correctly if it's a Carbon instance
        if ($invitation->wedding_date instanceof \Carbon\Carbon) {
            // It's already carbon
        } else {
            $invitation->wedding_date = \Carbon\Carbon::parse($invitation->wedding_date);
        }

        return view("public.template.{$theme}.{$theme}", compact('invitation'));
    }

    public function rsvp(Request $request, $slug)
    {
        $invitation = Invitation::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'is_attending' => 'required|boolean',
            'message' => 'nullable|string|max:1000',
        ]);

        // Find if this guest already exists (by name) for this invitation
        $guest = Guest::where('invitation_id', $invitation->id)
            ->where('name', 'LIKE', $request->name)
            ->first();

        if ($guest) {
            $guest->update([
                'is_attending' => $request->is_attending,
                'message' => $request->message,
                'is_rsvp' => true,
            ]);
        } else {
            Guest::create([
                'invitation_id' => $invitation->id,
                'name' => $request->name,
                'is_attending' => $request->is_attending,
                'message' => $request->message,
                'is_rsvp' => true,
            ]);
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih atas konfirmasi kehadiran Anda!'
            ]);
        }

        return back()->with('success', 'Terima kasih atas konfirmasi kehadiran Anda!');
    }
}
