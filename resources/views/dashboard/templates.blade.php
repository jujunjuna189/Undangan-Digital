@extends('dashboard.layout')

@section('title', 'Pilihan Template')

@section('content')
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-2 font-playfair">Template Undangan</h2>
        <p class="text-gray-500 text-lg">Pilih desain terbaik untuk momen spesial Anda. Semua template dapat dikustomisasi.</p>
    </div>

    <!-- Filter Categories -->
    <div class="flex flex-wrap gap-3 mb-10">
        <button class="px-6 py-2.5 rounded-xl bg-rose-500 text-white font-bold shadow-lg shadow-rose-200 transition-all">Semua</button>
        <button class="px-6 py-2.5 rounded-xl bg-white border border-gray-100 text-gray-500 font-bold hover:bg-gray-50 transition-all">Minimalist</button>
        <button class="px-6 py-2.5 rounded-xl bg-white border border-gray-100 text-gray-500 font-bold hover:bg-gray-50 transition-all">Elegant</button>
        <button class="px-6 py-2.5 rounded-xl bg-white border border-gray-100 text-gray-500 font-bold hover:bg-gray-50 transition-all">Floral</button>
        <button class="px-6 py-2.5 rounded-xl bg-white border border-gray-100 text-gray-500 font-bold hover:bg-gray-50 transition-all">Modern</button>
    </div>

    <!-- Template Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($templates as $template)
        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 hover:shadow-[0_20px_50px_-20px_rgba(244,63,94,0.3)] transition-all duration-500 group flex flex-col">
            <!-- Preview Image -->
            <div class="relative aspect-[4/5] bg-gray-50 overflow-hidden">
                @if($template->preview_image)
                    <img src="{{ asset($template->preview_image) }}" alt="{{ $template->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                @else
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-gray-300">
                        <span class="text-6xl mb-4 group-hover:scale-110 transition duration-500">🎨</span>
                        <p class="font-bold text-sm uppercase tracking-widest group-hover:text-rose-400 transition">Preview Soon</p>
                    </div>
                @endif
                
                <!-- Overlay Tags -->
                <div class="absolute top-6 left-6 flex flex-col gap-2">
                    <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-bold text-rose-500 uppercase tracking-wider shadow-sm">Premium</span>
                    @if($template->is_active)
                        <span class="px-4 py-1.5 bg-emerald-500/90 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider shadow-sm">Available</span>
                    @endif
                </div>

                <!-- Hover Actions -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-8">
                    <div class="flex gap-3 w-full animate-fadeInUp">
                        <a href="/{{ $template->slug }}" target="_blank" class="flex-1 bg-white text-gray-900 py-3.5 rounded-2xl font-bold text-sm hover:bg-rose-500 hover:text-white transition-all shadow-xl text-center">Live Preview</a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8 flex-1 flex flex-col">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="text-2xl font-bold text-gray-900 group-hover:text-rose-500 transition">{{ $template->name }}</h4>
                    <div class="flex gap-0.5">
                        <span class="text-amber-400">★</span>
                        <p class="text-sm font-bold text-gray-900 ml-1">4.9</p>
                    </div>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    {{ $template->description ?? 'Desain eksklusif dengan fitur animasi mewah dan layout yang responsif untuk semua perangkat.' }}
                </p>
                <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                    <div class="flex -space-x-3">
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-rose-100 flex items-center justify-center text-[10px]">✨</div>
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-blue-100 flex items-center justify-center text-[10px]">📱</div>
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-emerald-100 flex items-center justify-center text-[10px]">🌿</div>
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-50 flex items-center justify-center text-[10px] text-gray-400 font-bold">+5</div>
                    </div>
                    <a href="{{ route('dashboard.invitations.create', $template->id) }}" class="text-rose-500 font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                        Pakai Template 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
