@extends('admin.layout')

@section('title', 'Edit Template Undangan')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.templates') }}" class="text-slate-400 hover:text-indigo-600 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Daftar
        </a>
        <h2 class="text-3xl font-bold text-slate-800 font-playfair">Edit Template Undangan</h2>
        <p class="text-slate-500">Perbarui identitas dan visual template undangan digital</p>
    </div>

    <div class="max-w-4xl">
        <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 md:p-12 shadow-sm">
            <form action="{{ route('admin.templates.update', $template->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Nama Template</label>
                        <input type="text" name="name" value="{{ old('name', $template->name) }}" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="Contoh: Blossom Romance" required>
                        @error('name') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Slug Template</label>
                        <input type="text" name="slug" value="{{ old('slug', $template->slug) }}" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="theme-x" required>
                        <p class="text-[10px] text-slate-400 px-1">Slug ini harus sesuai dengan nama folder di resources/views/public/template/</p>
                        @error('slug') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="3" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="Jelaskan karakteristik template ini">{{ old('description', $template->description) }}</textarea>
                    @error('description') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-4">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Gambar Preview (Thumbnail)</label>
                    
                    @if($template->preview_image)
                    <div class="mb-4 group relative w-full aspect-video rounded-3xl overflow-hidden border border-slate-200 max-w-sm">
                        <img src="{{ asset($template->preview_image) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="text-white text-xs font-bold uppercase tracking-widest">Gambar Saat Ini</span>
                        </div>
                    </div>
                    @endif

                    <div class="relative group">
                        <input type="file" name="preview_image" id="preview_image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="w-full px-6 py-10 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl group-hover:border-indigo-500 group-hover:bg-indigo-50/30 transition-all flex flex-col items-center justify-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-white border border-slate-100 flex items-center justify-center shadow-sm text-slate-400 group-hover:text-indigo-500 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            </div>
                            <div class="text-center">
                                <p class="text-sm font-bold text-slate-700">Pilih gambar baru</p>
                                <p class="text-xs text-slate-400 mt-1">PNG, JPG atau WebP (Max. 2MB)</p>
                            </div>
                        </div>
                    </div>
                    @error('preview_image') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 p-6 bg-slate-50 rounded-3xl border border-slate-100">
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-slate-800">Aktifkan Template</h4>
                        <p class="text-xs text-slate-500">Tentukan apakah template ini bisa dipilih oleh pelanggan.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $template->is_active ? 'checked' : '' }}>
                        <div class="w-14 h-7 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-indigo-600"></div>
                    </label>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-500/25 hover:bg-indigo-700 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest text-sm italic">
                        Perbarui Template Undangan
                    </button>
                    <p class="text-center text-[10px] text-slate-400 mt-4 uppercase tracking-widest font-bold italic">Terakhir diperbarui: {{ $template->updated_at->diffForHumans() }}</p>
                </div>
            </form>
        </div>
    </div>
@endsection
