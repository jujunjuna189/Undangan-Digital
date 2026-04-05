@extends('admin.layout')

@section('title', 'Overview')

@section('content')
    <div class="mb-10">
        <h2 class="text-3xl font-bold text-slate-800 mb-2 font-playfair">System Overview</h2>
        <p class="text-slate-500 text-lg">Statistik dan ringkasan manajemen sistem undangan digital.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all duration-300">
            <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-500 flex items-center justify-center text-2xl mb-6">
                🎨
            </div>
            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Total Template</div>
            <h3 class="text-4xl font-bold text-slate-800">{{ $stats['total_templates'] }}</h3>
            <div class="mt-4 flex items-center gap-2 text-xs text-emerald-500 font-bold">
                <span>↑ 12%</span>
                <span class="text-slate-400 font-normal">this month</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-emerald-500/5 transition-all duration-300">
            <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-2xl mb-6">
                💰
            </div>
            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Total Paket</div>
            <h3 class="text-4xl font-bold text-slate-800">{{ $stats['total_packages'] }}</h3>
            <div class="mt-4 flex items-center gap-2 text-xs text-emerald-500 font-bold">
                <span>↑ 3 aktif</span>
                <span class="text-slate-400 font-normal">on display</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-rose-500/5 transition-all duration-300">
            <div class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-500 flex items-center justify-center text-2xl mb-6">
                🛍️
            </div>
            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Pesanan Pending</div>
            <h3 class="text-4xl font-bold text-slate-800">{{ $stats['pending_orders'] }}</h3>
            <div class="mt-4 flex items-center gap-2 text-xs text-rose-500 font-bold">
                <span>⚠ Perlu dicek</span>
                <span class="text-slate-400 font-normal">segera</span>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-500 flex items-center justify-center text-2xl mb-6">
                👥
            </div>
            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Total Pelanggan</div>
            <h3 class="text-4xl font-bold text-slate-800">{{ $stats['total_users'] }}</h3>
            <div class="mt-4 flex items-center gap-2 text-xs text-blue-500 font-bold">
                <span>↑ 100%</span>
                <span class="text-slate-400 font-normal">active users</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 bg-white rounded-[2.5rem] border border-slate-200 p-8">
            <h4 class="text-xl font-bold text-slate-800 mb-6 font-playfair">Aksi Cepat</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="{{ route('admin.templates') }}" class="p-6 rounded-3xl border border-slate-100 hover:bg-slate-50 hover:border-indigo-200 transition-all flex items-center gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-500 flex items-center justify-center text-xl group-hover:scale-110 transition duration-300">➕</div>
                    <div>
                        <p class="font-bold text-slate-800">Tambah Template</p>
                        <p class="text-sm text-slate-500">Buat desain undangan baru</p>
                    </div>
                </a>
                <a href="{{ route('admin.packages') }}" class="p-6 rounded-3xl border border-slate-100 hover:bg-slate-50 hover:border-emerald-200 transition-all flex items-center gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-xl group-hover:scale-110 transition duration-300">🏷️</div>
                    <div>
                        <p class="font-bold text-slate-800">Update Pricing</p>
                        <p class="text-sm text-slate-500">Ubah harga paket layanan</p>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="bg-indigo-600 rounded-[2.5rem] p-8 text-white relative overflow-hidden flex flex-col justify-between">
            <div class="relative z-10">
                <h4 class="text-2xl font-bold mb-2 font-playfair">System Health</h4>
                <p class="text-indigo-100 text-sm">Database connection is stable. Performance is optimal.</p>
            </div>
            <div class="relative z-10 mt-8">
                <div class="text-3xl font-bold mb-1">100%</div>
                <p class="text-xs uppercase tracking-widest text-indigo-200 font-bold">Uptime verified</p>
            </div>
            <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
        </div>
    </div>
@endsection
