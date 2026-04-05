@extends('admin.layout')

@section('title', 'Tambah Pelanggan')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.users') }}" class="text-slate-400 hover:text-indigo-600 font-bold text-xs uppercase tracking-widest flex items-center gap-2 mb-4 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Daftar
        </a>
        <h2 class="text-3xl font-bold text-slate-800 font-playfair">Tambah Pelanggan Baru</h2>
        <p class="text-slate-500">Daftarkan akun pelanggan baru secara manual</p>
    </div>

    <div class="max-w-2xl">
        <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 md:p-12 shadow-sm">
            <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all" placeholder="Masukkan nama lengkap" required>
                    @error('name') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Alamat Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-300" placeholder="email@contoh.com" required>
                        @error('email') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Role / Hak Akses</label>
                        <select name="role" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all appearance-none cursor-pointer" required>
                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Pelanggan (User)</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrator</option>
                        </select>
                        @error('role') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Password</label>
                        <input type="password" name="password" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all" placeholder="Min. 8 karakter" required>
                        @error('password') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-widest px-1">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:border-indigo-500 focus:bg-white outline-none transition-all" placeholder="Ulangi password" required>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-500/25 hover:bg-indigo-700 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest text-sm italic">
                        Simpan Akun Pelanggan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
