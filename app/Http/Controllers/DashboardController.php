<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Template;
use App\Models\Guest;
use App\Models\InvitationGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private function processImage($file, $prefix)
    {
        $filename = time() . '_' . $prefix . '_' . uniqid() . '.webp';
        $path = public_path('uploads/invitations');
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $sourcePath = $file->getRealPath();
        $destinationPath = $path . '/' . $filename;

        // Use GD to convert to WebP
        $info = getimagesize($sourcePath);
        $mime = $info['mime'];

        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($sourcePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($sourcePath);
                imagealphablending($image, false);
                imagesavealpha($image, true);
                break;
            default:
                // Fallback to normal move if not supported
                $file->move($path, $filename);
                return 'uploads/invitations/' . $filename;
        }

        // Save as WebP with 80% quality
        imagewebp($image, $destinationPath, 80);
        imagedestroy($image);

        return 'uploads/invitations/' . $filename;
    }

    private function processGalleryImage($file)
    {
        $filename = time() . '_gallery_' . uniqid() . '.webp';
        $path = public_path('uploads/gallery');
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $sourcePath = $file->getRealPath();
        $destinationPath = $path . '/' . $filename;

        $info = getimagesize($sourcePath);
        $mime = $info['mime'];

        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($sourcePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($sourcePath);
                imagealphablending($image, false);
                imagesavealpha($image, true);
                break;
            default:
                $file->move($path, $filename);
                return 'uploads/gallery/' . $filename;
        }

        imagewebp($image, $destinationPath, 80);
        imagedestroy($image);

        return 'uploads/gallery/' . $filename;
    }

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
            'bride_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'groom_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except(['bride_photo', 'groom_photo', 'cover_photo', 'gallery', 'stories']);
        $data['user_id'] = Auth::id();

        foreach (['bride_photo', 'groom_photo', 'cover_photo'] as $photo) {
            if ($request->hasFile($photo)) {
                $data[$photo] = $this->processImage($request->file($photo), $photo);
            }
        }

        $invitation = Invitation::create($data);

        if ($request->has('stories')) {
            foreach ($request->stories as $index => $storyData) {
                if (!empty($storyData['title']) || !empty($storyData['content'])) {
                    $invitation->stories()->create([
                        'title' => $storyData['title'] ?? 'Momen',
                        'content' => $storyData['content'] ?? '',
                        'date_info' => $storyData['date_info'] ?? null,
                        'order_num' => $index,
                    ]);
                }
            }
        }

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $this->processGalleryImage($file);
                $invitation->galleries()->create(['image_path' => $path]);
            }
        }

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
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'slug' => 'required|unique:invitations,slug,'.$id,
            'bride_name' => 'required',
            'groom_name' => 'required',
            'wedding_date' => 'required|date',
            'location' => 'required',
            'bride_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'groom_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except(['bride_photo', 'groom_photo', 'cover_photo', 'gallery', 'stories']);

        foreach (['bride_photo', 'groom_photo', 'cover_photo'] as $photo) {
            if ($request->hasFile($photo)) {
                if ($invitation->$photo && file_exists(public_path($invitation->$photo))) {
                    unlink(public_path($invitation->$photo));
                }
                $data[$photo] = $this->processImage($request->file($photo), $photo);
            }
        }

        $invitation->update($data);

        if ($request->has('stories')) {
            $invitation->stories()->delete();
            foreach ($request->stories as $index => $storyData) {
                if (!empty($storyData['title']) || !empty($storyData['content'])) {
                    $invitation->stories()->create([
                        'title' => $storyData['title'] ?? 'Momen',
                        'content' => $storyData['content'] ?? '',
                        'date_info' => $storyData['date_info'] ?? null,
                        'order_num' => $index,
                    ]);
                }
            }
        }

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $this->processGalleryImage($file);
                $invitation->galleries()->create(['image_path' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan!');
    }

    public function deleteGalleryPhoto($id)
    {
        $gallery = InvitationGallery::findOrFail($id);
        $invitation = $gallery->invitation;

        if ($invitation->user_id !== Auth::id()) {
            abort(403);
        }

        if (file_exists(public_path($gallery->image_path))) {
            unlink(public_path($gallery->image_path));
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Foto galeri berhasil dihapus!');
    }

    public function deletePhoto($id, $type)
    {
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $column = $type . '_photo';

        if (in_array($type, ['bride', 'groom', 'cover'])) {
            if ($invitation->$column && file_exists(public_path($invitation->$column))) {
                unlink(public_path($invitation->$column));
            }
            $invitation->$column = null;
            $invitation->save();
            return redirect()->back()->with('success', 'Foto berhasil dihapus! Sekarang undangan menggunakan foto default template.');
        }

        return redirect()->back()->with('error', 'Tipe foto tidak valid.');
    }

    public function destroyInvitation($id)
    {
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        $invitation->delete();

        return redirect()->route('dashboard.invitations')->with('success', 'Undangan berhasil dihapus!');
    }

    public function guests(Request $request, $id)
    {
        $search = $request->input('search');
        $invitation = Invitation::where('user_id', Auth::id())->findOrFail($id);
        
        $total_guests = $invitation->guests()->count();
        
        $guests = $invitation->guests()
            ->when($search, function($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->latest()
            ->get();

        return view('dashboard/invitations/guests', compact('invitation', 'guests', 'search', 'total_guests'));
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

    public function resetRSVP($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->update([
            'is_rsvp' => false,
            'is_attending' => false,
            'message' => null,
        ]);

        return back()->with('success', 'Konfirmasi kehadiran berhasil dihapus, tamu tetap ada di daftar!');
    }
}
