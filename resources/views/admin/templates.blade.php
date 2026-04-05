@extends('admin.layout')

@section('title', 'Manajemen Template')

@section('content')
    <div class="flex items-center justify-between mb-10">
        <div>
            <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">Daftar Template</h2>
            <p class="text-slate-500 text-lg">Kelola semua desain undangan yang tersedia di platform.</p>
        </div>
        <a href="{{ route('admin.templates.create') }}" class="bg-indigo-600 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-indigo-500/20 hover:scale-105 hover:bg-indigo-700 transition-all duration-300 flex items-center gap-2">
            <span>✨</span> Template Baru
        </a>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded-2xl flex items-center gap-3 animate-fade-in shadow-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span class="text-sm font-bold tracking-wide transition-all">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden overflow-x-auto shadow-sm shadow-slate-100">
        <table class="w-full text-left min-w-[800px]">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200">
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest">Preview</th>
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest">Template Name</th>
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest">Slug</th>
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest">Status</th>
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest">Created At</th>
                    <th class="px-8 py-6 text-xs font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($templates as $template)
                <tr class="hover:bg-slate-50 transition-all duration-300 group">
                    <td class="px-8 py-6">
                        <div class="w-16 h-20 rounded-xl bg-slate-100 flex items-center justify-center text-2xl shadow-inner border border-slate-200 overflow-hidden">
                            @if($template->preview_image)
                                <img src="{{ asset($template->preview_image) }}" alt="" class="w-full h-full object-cover">
                            @else
                                🎨
                            @endif
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800 text-lg group-hover:text-indigo-600 transition">{{ $template->name }}</p>
                        <p class="text-xs text-slate-400 uppercase tracking-widest font-bold">Premium Collection</p>
                    </td>
                    <td class="px-8 py-6">
                        <code class="px-3 py-1.5 bg-slate-100 text-slate-600 rounded-lg text-xs">{{ $template->slug }}</code>
                    </td>
                    <td class="px-8 py-6">
                        @if($template->is_active)
                        <span class="px-4 py-1.5 bg-emerald-50 text-emerald-600 rounded-full text-[10px] font-bold uppercase tracking-widest border border-emerald-200 shadow-sm">Active</span>
                        @else
                        <span class="px-4 py-1.5 bg-slate-100 text-slate-400 rounded-full text-[10px] font-bold uppercase tracking-widest border border-slate-200 shadow-sm">Inactive</span>
                        @endif
                    </td>
                    <td class="px-8 py-6 text-slate-500 text-sm">
                        {{ $template->created_at->format('d M Y') }}
                    </td>
                    <td class="px-8 py-6 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="/{{ $template->slug }}" target="_blank" class="p-3 bg-white border border-slate-100 rounded-xl text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300 shadow-sm" title="Preview">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </a>
                            <a href="{{ route('admin.templates.edit', $template->id) }}" class="p-3 bg-white border border-slate-100 rounded-xl text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-all duration-300 shadow-sm" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                            <button class="p-3 bg-white border border-slate-100 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-all duration-300 shadow-sm" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach

                @if($templates->isEmpty())
                <tr>
                    <td colspan="6" class="px-8 py-20 text-center">
                        <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-4xl grayscale opacity-30">📤</span>
                        </div>
                        <p class="text-slate-400 font-bold mb-6">Belum ada template di sistem</p>
                        <button class="text-indigo-600 font-bold hover:text-indigo-700 transition">Klik untuk menambah &rarr;</button>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
