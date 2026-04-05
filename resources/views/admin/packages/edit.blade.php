@extends('admin.layout')

@section('title', 'Edit Paket Layanan')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.packages') }}" class="text-slate-400 hover:text-indigo-600 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Daftar
        </a>
        <h2 class="text-3xl font-bold text-slate-800 font-playfair">Edit Paket Layanan</h2>
        <p class="text-slate-500">Sesuaikan harga dan fitur paket untuk pelanggan</p>
    </div>

    <div class="max-w-4xl">
        <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 md:p-12 shadow-sm">
            <form action="{{ route('admin.packages.update', $package->id) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Nama Paket</label>
                        <input type="text" name="name" value="{{ old('name', $package->name) }}" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="Contoh: Paket Premium" required>
                        @error('name') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Harga (IDR)</label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 -translate-y-1/2 text-slate-400 font-bold">Rp</span>
                            <input type="number" name="price" value="{{ old('price', (int)$package->price) }}" class="w-full pl-14 pr-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="0" required>
                        </div>
                        @error('price') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="3" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="Jelaskan paket ini secara singkat">{{ old('description', $package->description) }}</textarea>
                    @error('description') <p class="text-rose-500 text-xs mt-1 px-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-6 pt-6 border-t border-slate-50">
                    <div>
                        <h4 class="text-sm font-bold text-slate-700 mb-1 uppercase tracking-wider italic">Daftar Fitur</h4>
                        <p class="text-xs text-slate-400">Tuliskan fitur-fitur yang didapatkan pelanggan untuk paket ini</p>
                    </div>

                    <div id="features-container" class="space-y-3">
                        @php $features = is_array($package->features) ? $package->features : json_decode($package->features, true) ?? []; @endphp
                        @foreach($features as $feature)
                        <div class="flex items-center gap-3 feature-row">
                            <input type="text" name="features[]" value="{{ $feature }}" class="flex-1 px-6 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:border-indigo-500 focus:bg-white outline-none transition-all text-sm" placeholder="Contoh: Unlimited Tamu">
                            <button type="button" onclick="this.parentElement.remove()" class="p-3 text-rose-500 hover:bg-rose-50 rounded-xl transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        @endforeach
                    </div>

                    <button type="button" onclick="addFeatureRow()" class="flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-bold text-xs uppercase tracking-widest px-1 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Tambah Baris Fitur
                    </button>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-500/25 hover:bg-indigo-700 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest text-sm italic">
                        Perbarui Paket Layanan
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        function addFeatureRow() {
            const container = document.getElementById('features-container');
            const div = document.createElement('div');
            div.className = 'flex items-center gap-3 feature-row animate-fade-in';
            div.innerHTML = `
                <input type="text" name="features[]" class="flex-1 px-6 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:border-indigo-500 focus:bg-white outline-none transition-all text-sm" placeholder="Contoh: Fitur Baru">
                <button type="button" onclick="this.parentElement.remove()" class="p-3 text-rose-500 hover:bg-rose-50 rounded-xl transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            `;
            container.appendChild(div);
            div.querySelector('input').focus();
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeIn 0.3s ease-out; }
    </style>
    @endpush
@endsection
