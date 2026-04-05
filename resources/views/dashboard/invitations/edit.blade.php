@extends('dashboard.layout')

@section('title', 'Edit Undangan')

@section('content')
<div class="mb-10">
    <a href="{{ route('dashboard.invitations') }}" class="text-slate-400 hover:text-rose-500 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
        &larr; Kembali ke Daftar
    </a>
    <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">Edit Konfigurasi Undangan</h2>
    <p class="text-slate-500 text-lg">Mengedit undangan untuk <span class="text-rose-500 font-bold">"{{ $invitation->bride_name }} & {{ $invitation->groom_name }}"</span></p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
    <!-- Form Side -->
    <div class="lg:col-span-2">
        <form action="{{ route('dashboard.invitations.update', $invitation->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')
            
            <div class="bg-white p-8 lg:p-12 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-8">
                <div>
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">1</span>
                        Informasi Dasar
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Judul Undangan / Slug URL</label>
                            <div class="relative">
                                <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-medium">/v/</span>
                                <input type="text" name="slug" value="{{ $invitation->slug }}" placeholder="emma-sophia-wedding" class="w-full bg-slate-50 border border-slate-100 rounded-2xl pl-12 pr-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                            </div>
                            <p class="text-[10px] text-slate-400">URL ini yang akan Anda bagikan ke tamu: domain.com/v/your-slug</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">2</span>
                        Mempelai & Orang Tua
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Wanita -->
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Mempelai Wanita</label>
                                <input type="text" name="bride_name" value="{{ $invitation->bride_name }}" placeholder="Emma Sophia Watson" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Orang Tua (Wanita)</label>
                                <input type="text" name="bride_parents" value="{{ $invitation->bride_parents }}" placeholder="Daughter of Mr. George & Mrs. Marie" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Username Instagram (Wanita)</label>
                                <input type="text" name="bride_ig" value="{{ $invitation->bride_ig }}" placeholder="@emma_sophia" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                        </div>
                        <!-- Pria -->
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Mempelai Pria</label>
                                <input type="text" name="groom_name" value="{{ $invitation->groom_name }}" placeholder="James Arthur Bond" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Orang Tua (Pria)</label>
                                <input type="text" name="groom_parents" value="{{ $invitation->groom_parents }}" placeholder="Son of Mr. Andrew & Mrs. Diana" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Username Instagram (Pria)</label>
                                <input type="text" name="groom_ig" value="{{ $invitation->groom_ig }}" placeholder="@james_bond" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">3</span>
                        Detail Acara Akad
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Waktu Akad</label>
                            <input type="text" name="akad_time" value="{{ $invitation->akad_time }}" placeholder="10:00 AM - 12:00 PM" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lokasi Akad</label>
                            <input type="text" name="akad_location" value="{{ $invitation->akad_location }}" placeholder="St. Patrick's Cathedral" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Alamat Lengkap Akad</label>
                            <textarea name="akad_address" rows="2" placeholder="5th Ave, New York, NY 10022, United States" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">{{ $invitation->akad_address }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">4</span>
                        Detail Acara Resepsi & Maps
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Waktu Resepsi</label>
                            <input type="text" name="resepsi_time" value="{{ $invitation->resepsi_time }}" placeholder="07:00 PM - 10:00 PM" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lokasi Resepsi</label>
                            <input type="text" name="resepsi_location" value="{{ $invitation->resepsi_location }}" placeholder="The Plaza Hotel" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Alamat Lengkap Resepsi</label>
                            <textarea name="resepsi_address" rows="2" placeholder="768 5th Ave, New York, NY 10019, United States" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">{{ $invitation->resepsi_address }}</textarea>
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Link Google Maps (Iframe SRC / URL)</label>
                            <input type="text" name="maps_url" value="{{ $invitation->maps_url }}" placeholder="https://www.google.com/maps/embed?..." class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">5</span>
                        Media & Galeri (Khusus Template Berfoto)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="space-y-4">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Foto Mempelai Wanita</label>
                             <div class="relative group mx-auto w-32 h-32 group/photo">
                                 <div class="w-32 h-32 rounded-full overflow-hidden bg-slate-100 border-4 border-white shadow-md relative">
                                     <img id="preview-bride" src="{{ $invitation->bride_photo ? asset($invitation->bride_photo) : 'https://ui-avatars.com/api/?name=W&background=random' }}" class="w-full h-full object-cover">
                                     <label class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                                         <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                         <input type="file" name="bride_photo" class="hidden" onchange="previewImage(this, 'preview-bride')">
                                     </label>
                                 </div>
                                 @if($invitation->bride_photo)
                                 <button type="button" onclick="confirmDelete('bride')" class="absolute -top-1 -right-1 w-8 h-8 bg-rose-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover/photo:opacity-100 transition-opacity z-30 shadow-lg border-2 border-white">
                                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                 </button>
                                 @endif
                             </div>
                        </div>

                        <div class="space-y-4">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Foto Mempelai Pria</label>
                             <div class="relative group mx-auto w-32 h-32 group/photo">
                                 <div class="w-32 h-32 rounded-full overflow-hidden bg-slate-100 border-4 border-white shadow-md relative">
                                     <img id="preview-groom" src="{{ $invitation->groom_photo ? asset($invitation->groom_photo) : 'https://ui-avatars.com/api/?name=P&background=random' }}" class="w-full h-full object-cover">
                                     <label class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                                         <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                         <input type="file" name="groom_photo" class="hidden" onchange="previewImage(this, 'preview-groom')">
                                     </label>
                                 </div>
                                 @if($invitation->groom_photo)
                                 <button type="button" onclick="confirmDelete('groom')" class="absolute -top-1 -right-1 w-8 h-8 bg-rose-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover/photo:opacity-100 transition-opacity z-30 shadow-lg border-2 border-white">
                                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                 </button>
                                 @endif
                             </div>
                        </div>

                        <div class="space-y-4">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Foto Cover / Hero</label>
                            <div class="relative group mx-auto w-full max-w-[200px]">
                                <div class="aspect-[16/9] rounded-2xl overflow-hidden bg-slate-100 border border-slate-100 shadow-sm relative group/photo">
                                    <img id="preview-cover" src="{{ $invitation->cover_photo ? asset($invitation->cover_photo) : 'https://placehold.co/600x400?text=Cover+Photo' }}" class="w-full h-full object-cover">
                                    <label class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover/photo:opacity-100 transition-opacity cursor-pointer">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <input type="file" name="cover_photo" class="hidden" onchange="previewImage(this, 'preview-cover')">
                                    </label>
                                    @if($invitation->cover_photo)
                                    <button type="button" onclick="confirmDelete('cover')" class="absolute top-2 right-2 w-8 h-8 bg-rose-500 text-white rounded-lg flex items-center justify-center opacity-0 group-hover/photo:opacity-100 transition-opacity z-30 shadow-lg">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">6</span>
                        Galeri Foto
                    </h3>
                    
                    <!-- Existing Gallery -->
                    @if($invitation->galleries->count() > 0)
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        @foreach($invitation->galleries as $photo)
                        <div class="relative group aspect-square rounded-2xl overflow-hidden shadow-sm border border-slate-100">
                            <img src="{{ asset($photo->image_path) }}" class="w-full h-full object-cover">
                            <button type="submit" form="delete-photo-{{ $photo->id }}" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity w-10 h-10 bg-rose-500 text-white rounded-xl flex items-center justify-center shadow-lg hover:bg-rose-600 transition-all" onclick="return confirm('Hapus foto ini dari galeri?')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        @endforeach
                    </div>

                    @endif

                    <!-- Upload New -->
                    <div class="space-y-4">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Tambah Foto Baru ke Galeri</label>
                        <div class="border-2 border-dashed border-slate-100 rounded-[2rem] p-10 text-center hover:border-rose-200 transition-colors cursor-pointer group relative overflow-hidden">
                            <input type="file" name="gallery[]" id="gallery-input-edit" multiple class="absolute inset-0 opacity-0 cursor-pointer z-20" onchange="previewGallery(this)" accept="image/*">
                            <div class="space-y-4 relative z-10">
                                <div class="w-12 h-12 bg-rose-50 text-rose-500 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </div>
                                <p class="text-slate-400 text-sm font-medium">Klik untuk menambah foto</p>
                                <p class="text-slate-300 text-xs italic text-center">Pilih beberapa foto sekaligus</p>
                            </div>
                        </div>
                        <div id="gallery-previews" class="grid grid-cols-3 md:grid-cols-5 gap-4 mt-6"></div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-slate-800 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">7</span>
                            Kisah Cinta (Timeline)
                        </h3>
                        <button type="button" onclick="addStory()" class="px-4 py-2 bg-rose-50 text-rose-500 rounded-full text-xs font-bold hover:bg-rose-100 transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            Tambah Momen
                        </button>
                    </div>
                    <div id="story-container" class="space-y-6">
                        @foreach($invitation->stories as $index => $story)
                        <div class="story-item p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4 relative group">
                            <button type="button" onclick="this.parentElement.remove()" class="absolute -top-2 -right-2 w-8 h-8 bg-white text-rose-500 rounded-full shadow-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <input type="text" name="stories[{{ $index }}][date_info]" value="{{ $story->date_info }}" placeholder="Waktu (Contoh: 2020)" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                                <input type="text" name="stories[{{ $index }}][title]" value="{{ $story->title }}" placeholder="Judul Momen" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all md:col-span-2">
                            </div>
                            <textarea name="stories[{{ $index }}][content]" placeholder="Ceritakan momen ini..." rows="2" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">{{ $story->content }}</textarea>
                        </div>
                        @endforeach
                        
                        @if($invitation->stories->count() == 0)
                        <div class="story-item p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4 relative group">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <input type="text" name="stories[0][date_info]" placeholder="Waktu (Contoh: 2020)" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                                <input type="text" name="stories[0][title]" placeholder="Judul Momen" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all md:col-span-2">
                            </div>
                            <textarea name="stories[0][content]" placeholder="Ceritakan momen ini..." rows="2" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all"></textarea>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">8</span>
                        Hadiah Pernikahan (Data Rekening)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Bank 1 -->
                        <div class="p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Rekening Utama</p>
                            <input type="text" name="bank_name" value="{{ $invitation->bank_name }}" placeholder="Nama Bank (Contoh: BCA, BSI)" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            <input type="text" name="bank_account" value="{{ $invitation->bank_account }}" placeholder="Nomor Rekening" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            <input type="text" name="bank_holder" value="{{ $invitation->bank_holder }}" placeholder="Atas Nama (Nama Pemilik)" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <!-- Bank 2 -->
                        <div class="p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Rekening Tambahan (Opsional)</p>
                            <input type="text" name="bank_name_2" value="{{ $invitation->bank_name_2 }}" placeholder="Nama Bank" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            <input type="text" name="bank_account_2" value="{{ $invitation->bank_account_2 }}" placeholder="Nomor Rekening" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            <input type="text" name="bank_holder_2" value="{{ $invitation->bank_holder_2 }}" placeholder="Atas Nama" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">9</span>
                        Informasi Utama (Countdown)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Tanggal Utama (Untuk Countdown)</label>
                            <input type="date" name="wedding_date" value="{{ $invitation->wedding_date->format('Y-m-d') }}" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Lokasi Utama (Kota/Singkat)</label>
                            <input type="text" name="location" value="{{ $invitation->location }}" placeholder="New York City, USA" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-rose-500 text-white px-12 py-5 rounded-2xl font-bold shadow-xl shadow-rose-200 hover:scale-105 hover:bg-rose-600 transition-all duration-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <!-- Preview Side -->
    <div class="hidden lg:block">
        <div class="sticky top-10">
             <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                <div class="mb-4 flex items-center justify-between">
                    <h4 class="text-sm font-bold text-slate-800 uppercase tracking-widest">Current Theme</h4>
                    <span class="px-3 py-1 bg-amber-100 text-amber-600 text-[10px] font-bold rounded-full">Premium</span>
                </div>
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-slate-100 mb-4">
                    @if($template->preview_image)
                        <img src="{{ asset($template->preview_image) }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-slate-300">
                            No Preview
                        </div>
                    @endif
                </div>
                <h5 class="text-lg font-bold text-slate-800">{{ $template->name }}</h5>
                <p class="text-sm text-slate-400 mt-1 italic">"{{ $template->description ?? 'Desain elegan untuk momen yang tak terlupakan.' }}"</p>
             </div>
        </div>
    </div>
</div>

<!-- Hidden Delete Forms Outside Main Form -->
@foreach($invitation->galleries as $photo)
<form id="delete-photo-{{ $photo->id }}" action="{{ route('dashboard.invitations.delete_gallery', $photo->id) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>
@endforeach

@foreach(['bride', 'groom', 'cover'] as $photoType)
<form id="delete-photo-{{ $photoType }}" action="{{ route('dashboard.invitations.delete_photo', ['id' => $invitation->id, 'type' => $photoType]) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>
@endforeach

@push('scripts')
<script>
    let storyIndex = {{ max($invitation->stories->count(), 1) }};
    function addStory() {
        const container = document.getElementById('story-container');
        const html = `
            <div class="story-item p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4 relative group animate-fade-in">
                <button type="button" onclick="this.parentElement.remove()" class="absolute -top-2 -right-2 w-8 h-8 bg-white text-rose-500 rounded-full shadow-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="text" name="stories[${storyIndex}][date_info]" placeholder="Waktu (Contoh: 2020)" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                    <input type="text" name="stories[${storyIndex}][title]" placeholder="Judul Momen" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all md:col-span-2">
                </div>
                <textarea name="stories[${storyIndex}][content]" placeholder="Ceritakan momen ini..." rows="2" class="w-full bg-white border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all"></textarea>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        storyIndex++;
    }

    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    let allGalleryFiles = [];

    function previewGallery(input) {
        if (!input.files) return;
        
        // Push new files to our global array
        Array.from(input.files).forEach(file => {
            allGalleryFiles.push(file);
        });

        // Sync files back to input using DataTransfer
        syncGalleryInput(input);
        
        // Refresh UI
        renderGalleryPreviews(input);
    }

    function syncGalleryInput(input) {
        const dt = new DataTransfer();
        allGalleryFiles.forEach(file => dt.items.add(file));
        input.files = dt.files;
    }

    function removeSelectedGallery(index, inputId) {
        allGalleryFiles.splice(index, 1);
        const input = document.getElementById(inputId);
        syncGalleryInput(input);
        renderGalleryPreviews(input);
    }

    function renderGalleryPreviews(input) {
        const previewContainer = document.getElementById('gallery-previews');
        previewContainer.innerHTML = '';
        
        allGalleryFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const div = document.createElement('div');
                div.className = 'relative group aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-200';
                div.innerHTML = `
                    <img src="${e.target.result}" class="w-full h-full object-cover">
                    <button type="button" onclick="removeSelectedGallery(${index}, '${input.id}')" 
                        class="absolute top-1 right-1 w-6 h-6 bg-rose-500 text-white rounded-lg flex items-center justify-center shadow-lg hover:bg-rose-600 transition-all z-30">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                `;
                previewContainer.appendChild(div);
            }
            reader.readAsDataURL(file);
        });
    }

    function confirmDelete(type) {
        let label = type === 'bride' ? 'Mempelai Wanita' : (type === 'groom' ? 'Mempelai Pria' : 'Cover');
        Swal.fire({
            title: 'Hapus Foto?',
            text: "Anda akan mengembalikan foto " + label + " ke tampilan default template.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#065f46',
            cancelButtonColor: '#f43f5e',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            background: '#fff',
            customClass: {
                popup: 'rounded-[2rem]',
                confirmButton: 'rounded-full px-6 py-2 font-bold uppercase tracking-widest text-[10px] mx-2',
                cancelButton: 'rounded-full px-6 py-2 font-bold uppercase tracking-widest text-[10px] mx-2'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-photo-' + type).submit();
            }
        })
    }

    function shareConfig() {
        const text = `*FORM DATA KONFIGURASI INVITATION*
--------------------------------------------------
Mohon isi data berikut untuk pembuatan undangan:

1. Nama mempelai wanita:
2. Nama Bapak & Ibu mempelai wanita:
3. Username Instagram mempelai wanita: 
4. Nama mempelai pria:
5. Nama Bapak & Ibu mempelai pria:
6. Username Instagram mempelai pria: 
7. Tanggal & Hari Akad Nikah:
8. Waktu/Jam Akad Nikah:
9. Nama Lokasi & Alamat Akad Nikah:
10. Tanggal & Hari Resepsi:
11. Waktu/Jam Resepsi:
12. Nama Lokasi & Alamat Resepsi:
13. Link Google Maps Lokasi:
14. Rekening Bank (Nama Bank, No Rek, Atas Nama):
15. Judul Undangan/Slug URL:
16. Kisah Cinta/Story (Singkat):
17. Foto-foto (Mempelai & Gallery):

--------------------------------------------------
Silakan isi dan kirimkan kembali kepada kami. Terima kasih!`;

        const waUrl = `https://wa.me/?text=${encodeURIComponent(text)}`;
        window.open(waUrl, '_blank');
    }
</script>
@endpush

@push('head')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@endsection
