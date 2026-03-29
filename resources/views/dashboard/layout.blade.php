<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - Digital Invitation</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            --font-playfair: 'Playfair Display', serif;
        }
    </style>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #E2E8F0; border-radius: 10px; }

        @keyframes bounce-subtle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }
        .animate-bounce-subtle {
            animation: bounce-subtle 2s ease-in-out infinite;
        }
    </style>
    @stack('styles')
</head>
<body class="h-full selection:bg-rose-100 selection:text-rose-600">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-100 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out lg:static lg:inset-0 lg:flex flex-col shadow-2xl lg:shadow-none">
            <div class="p-6 flex flex-col h-full">
                <div class="flex items-center justify-between mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-rose-200">
                            <span class="text-white text-xl">💍</span>
                        </div>
                        <span class="font-playfair text-xl font-bold bg-gradient-to-r from-gray-800 to-gray-500 bg-clip-text text-transparent">Undangan.</span>
                    </div>
                    <!-- Close Button for Mobile -->
                    <button onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-400 hover:text-rose-500 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <nav class="space-y-1">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl {{ Request::routeIs('dashboard') ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} group transition">
                        <svg class="w-5 h-5 {{ Request::routeIs('dashboard') ? 'text-rose-500' : 'group-hover:text-rose-500 transition' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('dashboard.invitations') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl {{ Request::routeIs('dashboard.invitations') ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} group transition">
                        <svg class="w-5 h-5 {{ Request::routeIs('dashboard.invitations') ? 'text-rose-500' : 'group-hover:text-rose-500 transition' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        Undangan Saya
                    </a>
                    <a href="{{ route('dashboard.templates') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl {{ Request::routeIs('dashboard.templates') ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} group transition">
                        <svg class="w-5 h-5 {{ Request::routeIs('dashboard.templates') ? 'text-rose-500' : 'group-hover:text-rose-500 transition' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Pilihan Template
                    </a>
                </nav>

                <div class="mt-auto">
                    <div class="p-4 rounded-3xl bg-gradient-to-br from-gray-900 to-gray-800 text-white relative overflow-hidden shadow-xl">
                        <div class="relative z-10">
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-1">Status Akun</p>
                            <p class="font-bold mb-3 text-sm">{{ Auth::user()->package->name ?? 'Free Tier' }}</p>
                            <div class="h-1.5 bg-white/10 rounded-full mb-3 overflow-hidden">
                                <div class="h-full bg-rose-500 w-full rounded-full"></div>
                            </div>
                            <button class="w-full bg-rose-500 py-2.5 rounded-xl text-[10px] font-bold uppercase tracking-widest hover:bg-rose-600 transition shadow-lg shadow-rose-900/40">Upgrade Plan</button>
                        </div>
                        <div class="absolute -bottom-8 -right-8 w-24 h-24 bg-rose-500/20 rounded-full blur-3xl"></div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Mobile Overlay -->
        <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity"></div>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0 bg-white lg:bg-gray-50 overflow-hidden">
            <!-- Header -->
            <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-6 lg:px-10 shrink-0">
                <div class="flex items-center gap-4 lg:hidden">
                    <button onclick="toggleSidebar()" class="p-2 -ml-2 text-gray-500 hover:text-gray-900 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <h1 class="text-lg font-bold text-gray-900">@yield('title', 'Dashboard')</h1>

                <div class="flex items-center gap-4">
                    <!-- Notifications -->
                    <div class="relative" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = !open" class="p-2 text-gray-400 hover:text-rose-500 transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-rose-500 rounded-full border-2 border-white"></span>
                        </button>
                        
                        <!-- Notification Dropdown -->
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                             class="absolute right-0 mt-4 w-80 bg-white rounded-[2rem] shadow-2xl border border-gray-100 py-4 z-50 overflow-hidden" 
                             style="display: none;">
                            <div class="px-6 py-2 border-b border-gray-50 flex items-center justify-between mb-4">
                                <h3 class="font-bold text-gray-900">Notifikasi</h3>
                                <span class="bg-rose-50 text-rose-500 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Baru</span>
                            </div>
                            <div class="max-h-[300px] overflow-y-auto px-2">
                                <div class="p-4 hover:bg-gray-50 rounded-2xl transition cursor-pointer flex gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center shrink-0">💍</div>
                                    <div>
                                        <p class="text-[13px] font-semibold text-gray-900 leading-tight">Undangan Baru Berhasil Dibuat!</p>
                                        <p class="text-[11px] text-gray-500 mt-1">10 menit yang lalu</p>
                                    </div>
                                </div>
                                <div class="p-4 hover:bg-gray-50 rounded-2xl transition cursor-pointer flex gap-3 opacity-60">
                                    <div class="w-10 h-10 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">💰</div>
                                    <div>
                                        <p class="text-[13px] font-semibold text-gray-900 leading-tight">Paket Anda hampir habis masa aktifnya.</p>
                                        <p class="text-[11px] text-gray-500 mt-1">2 jam yang lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-6 py-3 bg-gray-50 mt-2 text-center">
                                <a href="#" class="text-[11px] font-bold text-gray-400 hover:text-gray-900 uppercase tracking-widest transition">Lihat Semua</a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Dropdown -->
                    <div class="relative" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = !open" class="flex items-center gap-3 pl-4 border-l border-gray-100 group">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-gray-900 group-hover:text-rose-500 transition">{{ Auth::user()->name }}</p>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">{{ Auth::user()->package->name ?? 'Free Tier' }}</p>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-white shadow-sm overflow-hidden group-hover:border-rose-200 transition">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random" alt="User">
                            </div>
                        </button>

                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                             class="absolute right-0 mt-4 w-64 bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 p-2 z-50" 
                             style="display: none;">
                            <div class="p-6 text-center border-b border-gray-50 mb-2">
                                <div class="w-16 h-16 rounded-3xl bg-gray-100 mx-auto mb-3 overflow-hidden border-4 border-white shadow-lg">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random" alt="User" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 text-sm mb-1">{{ Auth::user()->name }}</h4>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest px-2 py-0.5 bg-gray-100 rounded-full inline-block">{{ Auth::user()->package->name ?? 'Free Tier' }}</p>
                            </div>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition group">
                                    <span class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-rose-100 transition">👤</span>
                                    <span class="text-xs font-bold">Profil Akun</span>
                                </a>
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition group">
                                    <span class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-rose-100 transition">📦</span>
                                    <span class="text-xs font-bold">Ganti Paket</span>
                                </a>
                                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition group border-t border-gray-50 pt-2">
                                    <span class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-rose-100 transition">⚙️</span>
                                    <span class="text-xs font-bold">Pengaturan</span>
                                </a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-500 hover:bg-rose-50 transition group">
                                        <span class="w-8 h-8 rounded-lg bg-rose-50 flex items-center justify-center group-hover:bg-rose-100 transition">🚪</span>
                                        <span class="text-xs font-bold text-[11px] uppercase tracking-wider">Logout Sekarang</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 overflow-y-auto custom-scrollbar p-6 lg:p-10">
                <div class="max-w-6xl mx-auto">
                    @if(session('success'))
                    <div class="mb-8 flex items-center justify-between p-6 bg-emerald-50 border border-emerald-100 rounded-[2rem] animate-bounce-subtle">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-200">
                                <span>✅</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-emerald-900">Berhasil!</h4>
                                <p class="text-emerald-600 text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-900 transition">✕</button>
                    </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const isHidden = sidebar.classList.contains('-translate-x-full');

            if (isHidden) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
