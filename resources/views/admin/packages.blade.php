@extends('admin.layout')

@section('title', 'Manajemen Paket & Pricing')

@section('content')
    <div class="flex items-center justify-between mb-12">
        <div>
            <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">Daftar Paket & Pricing</h2>
            <p class="text-slate-500 text-lg">Sesuaikan harga dan keuntungan setiap tingkatan paket layanan.</p>
        </div>
        <button class="bg-emerald-600 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-emerald-500/20 hover:scale-105 hover:bg-emerald-700 transition-all duration-300 flex items-center gap-2">
            <span>➕</span> Paket Baru
        </button>
    </div>

    <!-- Package List Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        @foreach($packages as $package)
        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-200 shadow-sm hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 group relative">
            <div class="absolute top-8 right-8 flex gap-2">
                <a href="{{ route('admin.packages.edit', $package->id) }}" class="w-10 h-10 bg-white border border-slate-100 rounded-xl text-slate-400 hover:text-emerald-500 hover:bg-emerald-50 transition-all duration-300 shadow-sm flex items-center justify-center"><svg class="w-5 h-5 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></a>
            </div>
            
            <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-3xl mb-8 group-hover:scale-110 transition duration-500 shadow-inner border border-emerald-100 italic font-playfair font-black">
                {{ substr($package->name, 0, 1) }}
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-2 font-playfair">{{ $package->name }}</h3>
                <div class="flex items-baseline gap-2 mb-4">
                    <span class="text-3xl font-bold text-emerald-600 tracking-tight">Rp{{ number_format($package->price, 0, ',', '.') }}</span>
                    <span class="text-slate-400 text-sm font-bold uppercase tracking-widest text-[10px]">Per Undangan</span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ $package->description ?? 'Paket eksklusif untuk momen pernikahan Anda.' }}</p>
            </div>

            <div class="space-y-4 mb-10 pt-8 border-t border-slate-50">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Included Features</p>
                @php $features = is_array($package->features) ? $package->features : json_decode($package->features, true) ?? []; @endphp
                @if(!empty($features))
                    @foreach($features as $feature)
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center text-[10px] font-bold">✓</div>
                        <span class="text-slate-600 text-sm font-medium">{{ $feature }}</span>
                    </div>
                    @endforeach
                @else
                    <p class="text-slate-400 text-sm italic">Tidak ada fitur yang didefinisikan secara eksplisit.</p>
                @endif
            </div>

            <div class="grid grid-cols-1 gap-2">
                <a href="{{ route('admin.packages.edit', $package->id) }}" class="w-full bg-slate-50 border border-slate-100 py-3 rounded-2xl text-slate-600 font-bold hover:bg-slate-100 transition-all text-xs text-center">Ubah Detail</a>
            </div>
        </div>
        @endforeach

        @if($packages->isEmpty())
        <div class="md:col-span-3 bg-white border-2 border-dashed border-slate-200 rounded-[2.5rem] p-24 text-center">
            <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-8">
                <span class="text-5xl grayscale opacity-30">📦</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-800 mb-3">Belum ada paket produk</h3>
            <p class="text-slate-500 max-w-sm mx-auto mb-10 text-lg">Definisikan paket harga dan keuntungan yang bisa dipilih oleh pengguna.</p>
            <button class="bg-emerald-600 text-white px-10 py-4 rounded-2xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100 shadow-indigo-100">Tambah Paket Sekarang &rarr;</button>
        </div>
        @endif
    </div>
@endsection
