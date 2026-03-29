<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\Package;
use App\Models\OrderRequest;
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

    public function orders()
    {
        $orders = OrderRequest::latest()->get();
        return view('admin/orders', compact('orders'));
    }
}
