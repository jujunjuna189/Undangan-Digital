<!-- Navigation -->
<nav class="bg-white/70 backdrop-blur-xl fixed w-full top-0 z-50 border-b border-gray-50/50">
    <div class="container mx-auto px-6 lg:px-20 py-6">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3 group">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-rose-200 group-hover:scale-110 transition duration-500">
                    <span class="text-white text-xl">💍</span>
                </div>
                <span class="font-playfair text-2xl font-bold bg-gradient-to-r from-gray-900 to-gray-500 bg-clip-text text-transparent">
                    Undangan.
                </span>
            </div>
            <ul class="hidden md:flex space-x-12 items-center">
                <li><a href="#home" class="text-[10px] uppercase tracking-[0.3em] text-gray-400 hover:text-rose-500 transition font-bold">Home</a></li>
                <li><a href="#template" class="text-[10px] uppercase tracking-[0.3em] text-gray-400 hover:text-rose-500 transition font-bold">Designs</a></li>
                <li><a href="#harga" class="text-[10px] uppercase tracking-[0.3em] text-gray-400 hover:text-rose-500 transition font-bold">Pricing</a></li>
                <li><a href="/dashboard" class="px-8 py-3 rounded-full bg-gray-900 text-white text-[10px] uppercase tracking-[0.3em] font-bold hover:bg-rose-500 transition-all duration-500 shadow-xl shadow-gray-200">Dashboard</a></li>
            </ul>
            <button class="md:hidden text-rose-500" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <ul id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
            <li><a href="#home" class="block text-gray-700 hover:text-rose-500 transition py-2">Home</a></li>
            <li><a href="#template" class="block text-gray-700 hover:text-rose-500 transition py-2">Template</a></li>
            <li><a href="#harga" class="block text-gray-700 hover:text-rose-500 transition py-2">Daftar Harga</a></li>
            <li><a href="#kontak" class="block text-gray-700 hover:text-rose-500 transition py-2">Kontak</a></li>
        </ul>
    </div>
</nav>