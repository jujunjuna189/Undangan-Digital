<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\Package;
use App\Models\OrderRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index', [
            'stats' => [
                'total_templates' => Template::count(),
                'total_packages' => Package::count(),
                'pending_orders' => OrderRequest::where('status', 'pending')->count(),
                'total_users' => User::count(),
            ]
        ]);
    }

    public function templates()
    {
        $templates = Template::all();
        return view('admin/templates', compact('templates'));
    }

    public function packages()
    {
        $packages = Package::all();
        return view('admin/packages', compact('packages'));
    }

    public function editPackage($id)
    {
        $package = Package::findOrFail($id);
        return view('admin/packages/edit', compact('package'));
    }

    public function updatePackage(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
        ]);

        $package->name = $request->name;
        $package->price = $request->price;
        $package->description = $request->description;
        $package->features = $request->features ? array_filter($request->features) : [];
        $package->save();

        return redirect()->route('admin.packages')->with('success', 'Package updated successfully.');
    }

    public function createTemplate()
    {
        return view('admin/templates/create');
    }

    public function storeTemplate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:templates',
            'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('preview_image')) {
            $imageName = time().'.'.$request->preview_image->extension();
            $request->preview_image->move(public_path('assets/image'), $imageName);
            $data['preview_image'] = 'assets/image/'.$imageName;
        }

        Template::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'preview_image' => $data['preview_image'] ?? null,
            'description' => $data['description'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.templates')->with('success', 'Template created successfully.');
    }

    public function editTemplate($id)
    {
        $template = Template::findOrFail($id);
        return view('admin/templates/edit', compact('template'));
    }

    public function updateTemplate(Request $request, $id)
    {
        $template = Template::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:templates,slug,'.$template->id,
            'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('preview_image')) {
            // Delete old image if exists
            if ($template->preview_image && file_exists(public_path($template->preview_image))) {
                unlink(public_path($template->preview_image));
            }

            $imageName = time().'.'.$request->preview_image->extension();
            $request->preview_image->move(public_path('assets/image'), $imageName);
            $data['preview_image'] = 'assets/image/'.$imageName;
        } else {
            $data['preview_image'] = $template->preview_image;
        }

        $template->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'preview_image' => $data['preview_image'],
            'description' => $data['description'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.templates')->with('success', 'Template updated successfully.');
    }

    public function orders()
    {
        $orders = OrderRequest::latest()->get();
        return view('admin/orders', compact('orders'));
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('admin/users', compact('users'));
    }

    public function createUser()
    {
        return view('admin/users/create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin/users/edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        // Prevent admin from changing their own role to 'user' if they are the current user
        if ($user->id === auth()->id() && $request->role !== 'admin') {
            return back()->with('error', 'You cannot change your own admin role to user.');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->password) {
            $user->password = \Illuminate\Support\Facades\Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        
        // Prevent deleting self
        if ($user->id === auth()->id()) {
            return back()->with('error', 'You cannot delete yourself.');
        }

        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }
}
