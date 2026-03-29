@extends('admin.layout')

@section('title', 'Daftar Pesanan')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-1 font-playfair">Daftar Pesanan</h2>
            <p class="text-gray-500">Kelola permintaan undangan digital dari pelanggan</p>
        </div>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="px-8 py-5 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">Pelanggan</th>
                        <th class="px-8 py-5 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">Kontak</th>
                        <th class="px-8 py-5 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">Paket</th>
                        <th class="px-8 py-5 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">Status</th>
                        <th class="px-8 py-5 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($orders as $order)
                    <tr class="hover:bg-gray-50/30 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-500 flex items-center justify-center font-bold">
                                    {{ substr($order->name, 0, 1) }}
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">{{ $order->name }}</p>
                                    <p class="text-[10px] text-gray-400 uppercase tracking-widest font-medium mt-0.5">{{ $order->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="space-y-1">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $order->phone) }}" target="_blank" class="flex items-center gap-2 text-sm text-gray-600 hover:text-rose-500 transition">
                                    <span>📱</span> {{ $order->phone }}
                                </a>
                                @if($order->email)
                                <p class="flex items-center gap-2 text-xs text-gray-400">
                                    <span>✉️</span> {{ $order->email }}
                                </p>
                                @endif
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-4 py-1.5 rounded-full bg-gray-900 text-white text-[10px] font-bold uppercase tracking-widest">
                                {{ $order->package_name }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            @if($order->status == 'pending')
                                <span class="flex items-center gap-1.5 text-amber-600 font-bold text-[10px] uppercase tracking-widest bg-amber-50 px-3 py-1 rounded-full border border-amber-100 w-fit">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span> Pending
                                </span>
                            @elseif($order->status == 'contacted')
                                <span class="flex items-center gap-1.5 text-blue-600 font-bold text-[10px] uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full border border-blue-100 w-fit">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Dihubungi
                                </span>
                            @else
                                <span class="flex items-center gap-1.5 text-emerald-600 font-bold text-[10px] uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100 w-fit">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Selesai
                                </span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2.5 rounded-xl border border-gray-100 text-gray-400 hover:text-rose-500 hover:bg-rose-50 transition" title="Detail & Catatan" onclick="Swal.fire({title: 'Catatan Pesanan', text: '{{ $order->notes ?: 'Tidak ada catatan.' }}', confirmButtonColor: '#f43f5e', customClass: {popup: 'rounded-[2rem]'}})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </button>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $order->phone) }}?text=Halo%20{{ $order->name }},%20saya%20tertarik%20membahas%20pesanan%20undangan%20{{ $order->package_name }}%20Anda." target="_blank" class="p-2.5 rounded-xl bg-emerald-500 text-white hover:bg-emerald-600 transition shadow-lg shadow-emerald-100">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.67-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-3xl opacity-30">📦</span>
                            </div>
                            <p class="text-gray-500 font-medium">Belum ada pesanan masuk</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
