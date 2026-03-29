@extends('dashboard.layout')

@section('title', 'Buat Undangan Baru')

@section('content')
<div class="mb-10">
    <a href="{{ route('dashboard.templates') }}" class="text-slate-400 hover:text-rose-500 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
        &larr; Pilih Template Lain
    </a>
    <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">Konfigurasi Undangan</h2>
    <p class="text-slate-500 text-lg">Anda memilih template <span class="text-rose-500 font-bold">"{{ $template->name }}"</span>. Silakan lengkapi detail di bawah ini.</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
    <!-- Form Side -->
    <div class="lg:col-span-2">
        <form action="{{ route('dashboard.invitations.store') }}" method="POST" class="space-y-8">
            @csrf
            <input type="hidden" name="template_id" value="{{ $template->id }}">

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
                                <input type="text" name="slug" placeholder="emma-sophia-wedding" class="w-full bg-slate-50 border border-slate-100 rounded-2xl pl-12 pr-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
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
                                <input type="text" name="bride_name" placeholder="Emma Sophia Watson" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Orang Tua (Wanita)</label>
                                <input type="text" name="bride_parents" placeholder="Daughter of Mr. George & Mrs. Marie" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Username Instagram (Wanita)</label>
                                <input type="text" name="bride_ig" placeholder="@emma_sophia" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                        </div>
                        <!-- Pria -->
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Mempelai Pria</label>
                                <input type="text" name="groom_name" placeholder="James Arthur Bond" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Orang Tua (Pria)</label>
                                <input type="text" name="groom_parents" placeholder="Son of Mr. Andrew & Mrs. Diana" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Username Instagram (Pria)</label>
                                <input type="text" name="groom_ig" placeholder="@james_bond" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
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
                            <input type="text" name="akad_time" placeholder="10:00 AM - 12:00 PM" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lokasi Akad</label>
                            <input type="text" name="akad_location" placeholder="St. Patrick's Cathedral" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Alamat Lengkap Akad</label>
                            <textarea name="akad_address" rows="2" placeholder="5th Ave, New York, NY 10022, United States" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all"></textarea>
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
                            <input type="text" name="resepsi_time" placeholder="07:00 PM - 10:00 PM" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lokasi Resepsi</label>
                            <input type="text" name="resepsi_location" placeholder="The Plaza Hotel" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Alamat Lengkap Resepsi</label>
                            <textarea name="resepsi_address" rows="2" placeholder="768 5th Ave, New York, NY 10019, United States" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all"></textarea>
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Link Google Maps (Iframe SRC / URL)</label>
                            <input type="text" name="maps_url" placeholder="https://www.google.com/maps/embed?..." class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-50">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center text-sm">5</span>
                        Informasi Utama (Countdown)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Tanggal Utama (Untuk Countdown)</label>
                            <input type="date" name="wedding_date" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Lokasi Utama (Kota/Singkat)</label>
                            <input type="text" name="location" placeholder="New York City, USA" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-rose-500 text-white px-12 py-5 rounded-2xl font-bold shadow-xl shadow-rose-200 hover:scale-105 hover:bg-rose-600 transition-all duration-300">
                    Buat Undangan Sekarang
                </button>
            </div>
        </form>
    </div>

    <!-- Preview Side -->
    <div class="hidden lg:block">
        <div class="sticky top-10">
             <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                <div class="mb-4 flex items-center justify-between">
                    <h4 class="text-sm font-bold text-slate-800 uppercase tracking-widest">Selected Theme</h4>
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
@endsection
