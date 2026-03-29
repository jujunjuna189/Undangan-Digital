@extends('admin.layout')

@section('title', 'Tambah Template Baru')

@section('content')
    <div class="mb-10">
        <a href="{{ route('admin.templates') }}" class="text-slate-400 hover:text-indigo-600 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
            &larr; Kembali ke Daftar
        </a>
        <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">Buat Template Baru</h2>
        <p class="text-slate-500 text-lg">Lengkapi informasi di bawah untuk menambahkan desain undangan baru ke sistem.</p>
    </div>

    <div class="max-w-4xl">
        <form action="{{ route('admin.templates.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
            <div class="bg-white p-8 lg:p-12 rounded-[2.5rem] border border-slate-200 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Template Name -->
                    <div class="space-y-2">
                        <label for="name" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Template Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Contoh: Royal Garden" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all" required>
                        @error('name') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Slug -->
                    <div class="space-y-2">
                        <label for="slug" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Slug (URL)</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" placeholder="Contoh: royal-garden" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all" required>
                        @error('slug') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2 space-y-2">
                        <label for="description" class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Description</label>
                        <textarea name="description" id="description" rows="4" placeholder="Jelaskan keunikan dari desain ini..." class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all">{{ old('description') }}</textarea>
                    </div>

                    <!-- Preview Image -->
                    <div class="md:col-span-2 space-y-2">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Preview Image</label>
                        <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-100 border-dashed rounded-[2rem] hover:border-indigo-200 transition-all group">
                            <div class="space-y-1 text-center">
                                <span class="text-4xl group-hover:scale-110 inline-block transition duration-300">🖼️</span>
                                <div class="flex text-sm text-slate-600 mt-4">
                                    <label for="preview_image" class="relative cursor-pointer bg-white rounded-md font-bold text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="preview_image" name="preview_image" type="file" class="sr-only" onchange="previewFile()">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-slate-400">PNG, JPG, WEBP up to 2MB</p>
                                <div id="preview-box" class="mt-4 hidden animate-fadeIn">
                                    <img id="image-preview" src="#" alt="Preview" class="max-w-[200px] rounded-2xl border border-slate-100 shadow-lg mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Is Active Switch -->
                    <div class="flex items-center gap-4">
                        <div class="relative inline-block w-12 h-6 transition duration-200 ease-in-out">
                            <input type="checkbox" name="is_active" id="is_active" class="sr-only" checked>
                            <label for="is_active" class="block w-full h-full bg-slate-200 rounded-full cursor-pointer transition-colors duration-200 ease-in-out"></label>
                            <span id="switch-handle" class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform duration-200 ease-in-out transform shadow-md pointer-events-none"></span>
                        </div>
                        <label for="is_active" class="text-xs font-bold text-slate-400 uppercase tracking-widest cursor-pointer">Template Aktif</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <button type="submit" class="bg-indigo-600 text-white px-12 py-5 rounded-2xl font-bold shadow-xl shadow-indigo-500/20 hover:scale-105 hover:bg-indigo-700 transition-all duration-300">
                    Simpan Template
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
    <script>
        // Simple JS for image preview
        function previewFile() {
            const preview = document.querySelector('#image-preview');
            const file = document.querySelector('#preview_image').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
                document.querySelector('#preview-box').classList.remove('hidden');
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // Custom Switch logic
        const checkbox = document.querySelector('#is_active');
        const handle = document.querySelector('#switch-handle');
        const bg = checkbox.nextElementSibling;
        
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                handle.style.transform = 'translateX(24px)';
                bg.style.backgroundColor = '#4f46e5';
            } else {
                handle.style.transform = 'translateX(0)';
                bg.style.backgroundColor = '#e2e8f0';
            }
        });
        
        // Initial state
        if (checkbox.checked) {
            handle.style.transform = 'translateX(24px)';
            bg.style.backgroundColor = '#4f46e5';
        }
    </script>
    @endpush
@endsection
