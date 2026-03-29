<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Template;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $invitations = Invitation::where('user_id', Auth::id())->with('template')->get();
        $templates = Template::all();
        return view('dashboard/index', [
            'invitations' => $invitations,
            'templates' => $templates,
            'stats' => [
                'total_invitations' => $invitations->count(),
                'active_templates' => $templates->count(),
                'total_guests' => Guest::whereIn('invitation_id', $invitations->pluck('id'))->count(),
            ]
        ]);
    }

    public function invitations()
    {
        $invitations = Invitation::where('user_id', Auth::id())->with('template')->get();
        
        return view('dashboard/invitations', [
            'invitations' => $invitations,
        ]);
    }

    public function templates()
    {
        $templates = Template::all();
        
        return view('dashboard/templates', [
            'templates' => $templates,
        ]);
    }

    public function createInvitation($template_id)
    {
        $template = Template::findOrFail($template_id);
        return view('dashboard/invitations/create', compact('template'));
    }

    public function storeInvitation(Request $request)
    {
        $request->validate([
            'template_id' => 'required|exists:templates,id',
            'slug' => 'required|unique:invitations,slug',
            'bride_name' => 'required',
            'groom_name' => 'required',
            'wedding_date' => 'required|date',
            'location' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        
        $invitation = Invitation::create($data);

        return redirect()->route('dashboard.invitations.guests', $invitation->id)->with('success', 'Data undangan utama berhasil disimpan! Sekarang, silakan masukkan daftar tamu Anda.');
    }

    public function editInvitation($id)
    {
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $template = $invitation->template;
        return view('dashboard/invitations/edit', compact('invitation', 'template'));
    }

    public function updateInvitation(Request $request, $id)
    {
        $request->validate([
            'slug' => 'required|unique:invitations,slug,'.$id,
            'bride_name' => 'required',
            'groom_name' => 'required',
            'wedding_date' => 'required|date',
            'location' => 'required',
        ]);

        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $invitation->update($request->all());

        return redirect()->route('dashboard.invitations')->with('success', 'Undangan berhasil diperbarui!');
    }

    public function destroyInvitation($id)
    {
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $invitation->delete();

        return redirect()->route('dashboard.invitations')->with('success', 'Undangan berhasil dihapus!');
    }

    public function guests($id)
    {
        $invitation = Invitation::where('user_id', Auth::id())->with('guests')->findOrFail($id);
        return view('dashboard/invitations/guests', compact('invitation'));
    }

    public function storeGuest(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $invitation->guests()->create($request->all());

        return back()->with('success', 'Tamu berhasil ditambahkan!');
    }

    public function destroyGuest($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return back()->with('success', 'Tamu berhasil dihapus!');
    }
}
