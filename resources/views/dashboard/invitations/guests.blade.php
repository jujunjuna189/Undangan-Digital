@extends('dashboard.layout')

@section('title', 'Daftar Tamu')

@section('content')
<div class="mb-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
    <div class="text-center md:text-left">
        <a href="{{ route('dashboard.invitations') }}" class="text-slate-400 hover:text-rose-500 font-bold text-xs uppercase tracking-widest flex items-center justify-center md:justify-start gap-2 mb-4 transition">
            &larr; Kembali ke Daftar Undangan
        </a>
        <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-2 font-playfair">Daftar Tamu Undangan</h2>
        <p class="text-slate-500 text-sm md:text-lg">Kelola siapa saja yang akan Anda undang untuk <span class="text-rose-500 font-bold">"{{ $invitation->bride_name }} & {{ $invitation->groom_name }}"</span></p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
    <!-- Add Guest Form -->
    <div class="lg:col-span-1">
        <div class="bg-white p-6 md:p-8 rounded-[2rem] md:rounded-[2.5rem] border border-slate-100 shadow-sm sticky top-10">
            <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-2">
                <span class="text-rose-500 text-base">➕</span> Tambah Tamu
            </h3>
            <form action="{{ route('dashboard.invitations.store_guest', $invitation->id) }}" method="POST" class="space-y-4">
                @csrf
                <div class="space-y-2">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lengkap Tamu</label>
                    <input type="text" name="name" placeholder="Contoh: Bapak Ahmad & Keluarga" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-5 py-4 text-sm focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                </div>
                <div class="space-y-2">
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest">No. WhatsApp (Opsional)</label>
                    <input type="text" name="phone" placeholder="Contoh: 08123456789" class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-5 py-4 text-sm focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                </div>
                <button type="submit" class="w-full bg-rose-500 text-white py-4 rounded-2xl font-bold text-sm shadow-lg shadow-rose-100 hover:bg-rose-600 transition-all">
                    Simpan Tamu
                </button>
            </form>
        </div>
    </div>

    <!-- Guest Tabs & Management -->
    <div class="lg:col-span-2" x-data="{ tab: 'guests' }">
        <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
            <!-- Tab Headers -->
            <div class="flex border-b border-slate-50">
                <button @click="tab = 'guests'"
                    :class="tab === 'guests' ? 'text-rose-500 border-b-2 border-rose-500 bg-rose-50/50' : 'text-slate-400 hover:text-slate-600'"
                    class="flex-1 py-6 font-bold text-sm uppercase tracking-widest transition-all">
                    👥 Semua Tamu ({{ $invitation->guests->count() }})
                </button>
                <button @click="tab = 'rsvps'"
                    :class="tab === 'rsvps' ? 'text-rose-500 border-b-2 border-rose-500 bg-rose-50/50' : 'text-slate-400 hover:text-slate-600'"
                    class="flex-1 py-6 font-bold text-sm uppercase tracking-widest transition-all">
                    💌 Konfirmasi Kehadiran ({{ $invitation->guests->where('is_rsvp', true)->count() }})
                </button>
            </div>

            <!-- Tab Content: Guest List -->
            <div x-show="tab === 'guests'">
                @if($invitation->guests->isEmpty())
                    <div class="p-20 text-center">
                        <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            👥
                        </div>
                        <p class="text-slate-400">Belum ada tamu yang ditambahkan.</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/50 hidden md:table-row">
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Tamu & Link</th>
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Status</th>
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @foreach($invitation->guests as $guest)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="px-8 py-6">
                                            <div class="font-bold text-slate-800">{{ $guest->name }}</div>
                                            <div class="text-xs text-slate-400">{{ $guest->phone ?? 'Tanpa WhatsApp' }}</div>
                                        </td>
                                        <td class="px-8 py-6 text-center">
                                            <div class="flex flex-col items-center gap-1.5">
                                                <!-- Views Badge -->
                                                @if($guest->views_count > 0)
                                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 text-[9px] font-bold uppercase tracking-tight border border-emerald-100/50">
                                                        <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                                        Dilihat {{ $guest->views_count }}x
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-slate-50 text-slate-400 text-[9px] font-bold uppercase tracking-tight border border-slate-100/50">
                                                        Belum Dilihat
                                                    </span>
                                                @endif

                                                <!-- RSVP Badge -->
                                                @if($guest->is_rsvp)
                                                    @if($guest->is_attending)
                                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 text-[9px] font-extrabold uppercase tracking-tight border border-emerald-100/50">
                                                            Hadir
                                                        </span>
                                                    @else
                                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-rose-50 text-rose-600 text-[9px] font-extrabold uppercase tracking-tight border border-rose-100/50">
                                                            Tidak Hadir
                                                        </span>
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            @php
                                                $guestLink = route('invitation.show', $invitation->slug) . '?to=' . urlencode($guest->name);
                                            @endphp
                                            <div class="flex items-center gap-2">
                                                <input type="text" readonly value="{{ $guestLink }}" class="bg-slate-100 border-none text-[10px] rounded-lg px-3 py-2 w-48 focus:ring-0">
                                                <button onclick="copyLink('{{ $guestLink }}')" class="p-2 bg-rose-50 text-rose-500 rounded-lg hover:bg-rose-500 hover:text-white transition-all shadow-sm" title="Salin Link">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                                                </button>
                                                @if($guest->phone)
                                                   <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $guest->phone) }}?text={{ urlencode('Halo ' . $guest->name . ', kami mengundang Anda ke acara pernikahan kami. Berikut link undangannya: ' . $guestLink) }}" target="_blank" class="p-2 bg-emerald-50 text-emerald-500 rounded-lg hover:bg-emerald-500 hover:text-white transition-all shadow-sm" title="Kirim WhatsApp">
                                                       <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                                   </a>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <form action="{{ route('dashboard.invitations.destroy_guest', $guest->id) }}" method="POST" class="delete-form inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete(this.form)" class="p-2 text-slate-300 hover:text-rose-500 transition-colors">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <!-- Tab Content: RSVP List -->
            <div x-show="tab === 'rsvps'" style="display: none;">
                @if($invitation->guests->where('is_rsvp', true)->isEmpty())
                    <div class="p-20 text-center">
                        <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            💌
                        </div>
                        <p class="text-slate-400">Belum ada konfirmasi kehadiran (RSVP).</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/50 hidden md:table-row">
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Tamu & Pesan</th>
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Kehadiran</th>
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Waktu</th>
                                    <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @foreach($invitation->guests->where('is_rsvp', true) as $rsvp)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="px-8 py-6">
                                            <div class="font-bold text-slate-800">{{ $rsvp->name }}</div>
                                            <div class="text-xs text-slate-500 italic max-w-md mt-1">"{{ $rsvp->message ?? 'Tidak ada pesan' }}"</div>
                                        </td>
                                        <td class="px-8 py-6 text-center">
                                            @if($rsvp->is_attending)
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 text-[9px] font-extrabold uppercase tracking-tight border border-emerald-100/50">
                                                    Hadir
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-rose-50 text-rose-600 text-[9px] font-extrabold uppercase tracking-tight border border-rose-100/50">
                                                    Tidak Hadir
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-8 py-6 text-center">
                                            <div class="text-xs text-slate-400 font-medium">
                                                {{ $rsvp->updated_at->diffForHumans() }}
                                            </div>
                                            <div class="text-[10px] text-slate-300 mt-0.5">
                                                {{ $rsvp->updated_at->format('d/m/Y H:i') }}
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <form action="{{ route('dashboard.invitations.reset_rsvp', $rsvp->id) }}" method="POST" class="reset-rsvp-form inline">
                                                    @csrf
                                                    <button type="button" onclick="confirmResetRSVP(this.form)" class="p-2 text-slate-300 hover:text-rose-500 transition-colors" title="Hapus Konfirmasi Saja">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function copyLink(link) {
        navigator.clipboard.writeText(link).then(() => {
            Swal.fire({
                title: 'Tersalin!',
                text: 'Link undangan berhasil disalin ke clipboard.',
                icon: 'success',
                timer: 1500,
                showConfirmButton: false,
                customClass: {
                    popup: 'rounded-[2rem]'
                }
            });
        });
    }

    function confirmDelete(form) {
        Swal.fire({
            title: 'Hapus Tamu?',
            text: "Data tamu ini akan dihapus permanen.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f43f5e',
            cancelButtonColor: '#94a3b8',
            confirmButtonText: 'Ya, Hapus!',
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

    function confirmResetRSVP(form) {
        Swal.fire({
            title: 'Hapus Konfirmasi?',
            text: "Status kehadiran dan pesan tamu akan dihapus, namun tamu tersebut tetap ada di daftar undangan.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#f43f5e',
            cancelButtonColor: '#94a3b8',
            confirmButtonText: 'Ya, Hapus Konfirmasi!',
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
