<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Undangan Digital</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6">
    <div class="w-full max-w-md">
        <!-- Logo Area -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-[2rem] bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-xl shadow-rose-200 mx-auto mb-4">
                <span class="text-white text-3xl">💍</span>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 font-playfair">Selamat Datang Kembali</h1>
            <p class="text-gray-500 text-sm mt-1 focus:outline-none">Masuk untuk mengelola undangan digital Anda</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-gray-200/50 border border-gray-100">
            @if($errors->any())
            <div class="mb-6 p-4 bg-rose-50 border border-rose-100 rounded-2xl text-rose-600 text-sm">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-5 py-4 bg-gray-50 border-0 rounded-2xl focus:ring-2 focus:ring-rose-500 focus:bg-white transition-all outline-none text-gray-900" placeholder="nama@email.com">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Password</label>
                    <input type="password" name="password" required class="w-full px-5 py-4 bg-gray-50 border-0 rounded-2xl focus:ring-2 focus:ring-rose-500 focus:bg-white transition-all outline-none text-gray-900" placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between ml-1">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-rose-500 focus:ring-rose-500">
                        <span class="text-sm text-gray-500 group-hover:text-gray-900 transition">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm font-bold text-rose-500 hover:text-rose-600 transition">Lupa Password?</a>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-4 rounded-2xl font-bold shadow-lg shadow-rose-200 hover:scale-[1.02] active:scale-95 transition-all duration-300">
                    Masuk Sekarang
                </button>
            </form>
        </div>

        <p class="text-center mt-8 text-sm text-gray-500">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="font-bold text-rose-500 hover:text-rose-600 underline underline-offset-4 decoration-rose-500/30 transition">Daftar secara gratis</a>
        </p>
    </div>
</body>
</html>
