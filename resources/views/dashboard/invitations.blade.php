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
                    <button type="button" 
                        onclick="shareConfig('{{ $invitation->bride_name }}', '{{ $invitation->bride_parents }}', '{{ $invitation->bride_ig }}', '{{ $invitation->groom_name }}', '{{ $invitation->groom_parents }}', '{{ $invitation->groom_ig }}', '{{ $invitation->wedding_date->translatedFormat('l, d F Y') }}', '{{ $invitation->akad_time }}', '{{ $invitation->akad_location }}', '{{ $invitation->resepsi_time }}', '{{ $invitation->resepsi_location }}', '{{ $invitation->bank_name }}', '{{ $invitation->bank_account }}', '{{ $invitation->bank_holder }}', '{{ url('/v/' . $invitation->slug) }}')" 
                        class="p-3 rounded-xl bg-white border border-gray-100 text-gray-400 hover:text-green-500 hover:bg-green-50 transition-all duration-300 shadow-sm"
                        title="Share Config ke Client">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.626 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </button>
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
    function shareConfig(bride, bride_parents, bride_ig, groom, groom_parents, groom_ig, date, akad_time, akad_loc, resepsi_time, resepsi_loc, bank, bank_acc, bank_holder, url) {
        const text = `*KONFIGURASI UNDANGAN DIGITAL*
--------------------------------------------------
Berikut adalah rincian data yang telah diisi:

1. Nama mempelai wanita: ${bride || '-'}
2. Nama Bapak & Ibu mempelai wanita: ${bride_parents || '-'}
3. Username Instagram mempelai wanita: ${bride_ig || '-'}
4. Nama mempelai pria: ${groom || '-'}
5. Nama Bapak & Ibu mempelai pria: ${groom_parents || '-'}
6. Username Instagram mempelai pria: ${groom_ig || '-'}
7. Tanggal & Hari Pernikahan: ${date}
8. Waktu/Jam Akad Nikah: ${akad_time || '-'}
9. Nama Lokasi Akad: ${akad_loc || '-'}
10. Waktu/Jam Resepsi: ${resepsi_time || '-'}
11. Nama Lokasi Resepsi: ${resepsi_loc || '-'}
12. Rekening Bank: ${bank || '-'} (${bank_acc || '-'})
13. Atas Nama Rekening: ${bank_holder || '-'}
14. Link Preview: ${url}

--------------------------------------------------
Mohon dicek kembali. Jika ada perubahan, silakan kabari kami. Terima kasih!`;

        const waUrl = `https://wa.me/?text=${encodeURIComponent(text)}`;
        window.open(waUrl, '_blank');
    }

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
