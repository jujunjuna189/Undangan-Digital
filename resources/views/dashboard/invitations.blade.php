@extends('dashboard.layout')

@section('title', 'Undangan Saya')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-1 font-playfair text-center md:text-left">Daftar Undangan</h2>
            <p class="text-gray-500 text-sm md:text-lg text-center md:text-left">Kelola semua undangan yang telah Anda buat</p>
        </div>
        <a href="{{ route('dashboard.templates') }}" class="bg-gradient-to-r from-rose-500 to-pink-500 text-white px-6 py-4 rounded-2xl font-bold shadow-lg shadow-rose-200 hover:scale-105 hover:shadow-rose-300 transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base">
            <span>✨</span> Buat Undangan Baru
        </a>
    </div>

    <!-- Search & Filter -->
    <div class="mb-8 flex flex-col md:flex-row gap-4">
        <div class="flex-1 relative">
            <input type="text" placeholder="Cari nama pengantin..." class="w-full bg-white border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all shadow-sm">
            <span class="absolute right-6 top-1/2 -translate-y-1/2 grayscale opacity-50">🔍</span>
        </div>
        <select class="bg-white border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all shadow-sm text-gray-500 md:w-48">
            <option>Semua Status</option>
            <option>Aktif</option>
            <option>Draft</option>
        </select>
    </div>

    <!-- Invitation List -->
    @if($invitations->isEmpty())
    <div class="bg-white rounded-[2.5rem] border-2 border-dashed border-gray-100 p-20 text-center">
        <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-8">
            <span class="text-5xl grayscale opacity-50">📤</span>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum ada undangan</h3>
        <p class="text-gray-500 max-w-sm mx-auto mb-10 text-lg">Mulai buat momen indah Anda dengan memilih salah satu template eksklusif kami.</p>
        <a href="{{ route('dashboard.templates') }}" class="bg-rose-500 text-white px-10 py-4 rounded-2xl font-bold hover:bg-rose-600 transition shadow-lg shadow-rose-100 italic inline-block">Pilih Template Sekarang &rarr;</a>
    </div>
    @else
    <div class="grid grid-cols-1 gap-6">
        @foreach($invitations as $invitation)
        <div class="bg-white p-6 md:p-8 rounded-[2rem] md:rounded-[2.5rem] border border-gray-100 flex flex-col lg:flex-row lg:items-center justify-between gap-6 group hover:shadow-2xl hover:shadow-rose-100/50 transition-all duration-500 border-l-4 border-l-rose-500">
            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-8 text-center md:text-left">
                <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl md:rounded-3xl bg-rose-50 flex items-center justify-center text-2xl md:text-3xl group-hover:bg-rose-500 group-hover:text-white transition duration-500 shadow-inner shrink-0">
                    💍
                </div>
                <div>
                    <h4 class="text-xl md:text-2xl font-bold text-gray-900 mb-1">{{ $invitation->bride_name }} & {{ $invitation->groom_name }}</h4>
                    <div class="flex flex-wrap justify-center md:justify-start items-center gap-3 md:gap-4">
                        <span class="text-gray-500 text-sm flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            {{ $invitation->wedding_date->format('d M Y') }}
                        </span>
                        <span class="hidden md:block w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                        <span class="text-rose-500 font-semibold bg-rose-50 px-3 py-0.5 rounded-full text-xs">
                            {{ $invitation->template->name }}
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <div class="flex flex-1 sm:flex-none gap-2">
                    <a href="{{ route('dashboard.invitations.guests', $invitation->id) }}" class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gray-50 text-gray-600 text-sm font-bold hover:bg-rose-50 hover:text-rose-500 transition-all duration-300 border border-gray-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        Tamu
                    </a>
                    <a href="{{ route('invitation.show', $invitation->slug) }}" target="_blank" class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gray-50 text-gray-600 text-sm font-bold hover:bg-rose-50 hover:text-rose-500 transition-all duration-300 border border-gray-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        Lihat
                    </a>
                </div>
                <div class="flex justify-center gap-2">
                    <a href="{{ route('dashboard.invitations.edit', $invitation->id) }}" class="p-3 rounded-xl bg-white border border-gray-100 text-gray-400 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </a>
                    <form action="{{ route('dashboard.invitations.destroy', $invitation->id) }}" method="POST" class="delete-form inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete(this.form)" class="p-3 rounded-xl bg-white border border-gray-100 text-gray-400 hover:text-rose-600 hover:bg-rose-50 transition-all duration-300 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection

@push('scripts')
<script>
    function confirmDelete(form) {
        Swal.fire({
            title: 'Hapus Undangan?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f43f5e', // rose-500
            cancelButtonColor: '#94a3b8', // slate-400
            confirmButtonText: 'Ya, Hapus Sekarang!',
            cancelButtonText: 'Batal',
            customClass: {
                popup: 'rounded-[2rem]',
                confirmButton: 'rounded-xl px-6 py-3 font-bold',
                cancelButton: 'rounded-xl px-6 py-3 font-bold'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    }
</script>
@endpush
