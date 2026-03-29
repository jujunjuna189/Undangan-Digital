@extends('dashboard.layout')

@section('title', 'Dashboard Overview')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-rose-100/50 transition-all duration-300 group">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-500 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                    📜
                </div>
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Undangan</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_invitations'] }}</h3>
            <p class="text-sm text-gray-500">Total undangan dibuat</p>
        </div>
        <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-pink-100/50 transition-all duration-300 group">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 rounded-2xl bg-pink-50 text-pink-500 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                    🎨
                </div>
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Template</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['active_templates'] }}</h3>
            <p class="text-sm text-gray-500">Template yang tersedia</p>
        </div>
        <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-100/50 transition-all duration-300 group">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-500 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                    👥
                </div>
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Tamu</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_guests'] }}</h3>
            <p class="text-sm text-gray-500">Tamu yang sudah terdaftar</p>
        </div>
    </div>

    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-1 font-playfair">Undangan Saya</h2>
            <p class="text-gray-500">Kelola dan update data undangan Anda di sini</p>
        </div>
        <button class="bg-gradient-to-r from-rose-500 to-pink-500 text-white px-6 py-3 rounded-2xl font-bold shadow-lg shadow-rose-200 hover:scale-105 hover:shadow-rose-300 transition-all duration-300 flex items-center gap-2">
            <span>✨</span> Buat Undangan Baru
        </button>
    </div>

    <!-- Invitation List / Empty State -->
    @if($invitations->isEmpty())
    <div class="bg-white rounded-[2.5rem] border-2 border-dashed border-gray-100 p-12 text-center">
        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl grayscale opacity-50">📤</span>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Belum ada undangan</h3>
        <p class="text-gray-500 max-w-sm mx-auto mb-8">Anda belum memiliki undangan. Mulai buat momen indah Anda dengan memilih template yang tersedia.</p>
        <button class="text-rose-500 font-bold hover:text-rose-600 transition">Lihat Pilihan Template &rarr;</button>
    </div>
    @else
    <div class="grid grid-cols-1 gap-4">
        @foreach($invitations as $invitation)
        <div class="bg-white p-6 rounded-[2rem] border border-gray-100 flex items-center justify-between group hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-6">
                <div class="w-16 h-16 rounded-2xl bg-rose-50 flex items-center justify-center text-2xl group-hover:bg-rose-500 group-hover:text-white transition duration-300">
                    💍
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">{{ $invitation->bride_name }} & {{ $invitation->groom_name }}</h4>
                    <p class="text-sm text-gray-500">{{ $invitation->wedding_date->format('d M Y') }} • {{ $invitation->template->name }}</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('invitation.show', $invitation->slug) }}" target="_blank" class="p-3 rounded-xl border border-gray-100 text-gray-400 hover:text-rose-500 hover:bg-rose-50 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </a>
                <button class="p-3 rounded-xl border border-gray-100 text-gray-400 hover:text-blue-500 hover:bg-blue-50 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Template Grid Preview -->
    <div class="mt-16 mb-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-1 font-playfair">Template Pilihan</h2>
         <p class="text-gray-500">Pilih desain yang paling menggambarkan cerita Anda</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($templates as $template)
        <div class="bg-white rounded-[2rem] overflow-hidden border border-gray-100 hover:shadow-2xl hover:shadow-rose-100/50 transition-all duration-300 group">
            <div class="relative aspect-[3/4] bg-gray-100 overflow-hidden">
                @if($template->preview_image)
                    <img src="{{ asset($template->preview_image) }}" alt="{{ $template->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                @else
                    <div class="absolute inset-0 flex items-center justify-center text-4xl opacity-50 group-hover:scale-110 transition duration-500">🎨</div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute bottom-4 left-4 right-4 flex gap-2">
                    <a href="/{{ $template->slug }}" target="_blank" class="flex-1 bg-white/90 backdrop-blur-sm text-gray-900 py-2 rounded-xl text-xs font-bold hover:bg-white transition text-center">Preview</a>
                </div>
            </div>
            <div class="p-5">
                <h4 class="font-bold text-gray-900">{{ $template->name }}</h4>
                <p class="text-xs text-rose-500 font-bold mt-1">Premium Collection</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
