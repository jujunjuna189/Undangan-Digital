<!-- Navigation -->
<nav class="bg-white/95 backdrop-blur-md fixed w-full top-0 z-50 shadow-sm border-b border-rose-100">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-3xl">💝</span>
                <span class="text-2xl font-bold bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent">
                    Aku <span class="text-gray-700">Undang</span>
                </span>
            </div>
            <ul class="hidden md:flex space-x-8">
                <li><a href="#home" class="text-gray-700 hover:text-rose-500 transition font-medium">Home</a></li>
                <li><a href="#template" class="text-gray-700 hover:text-rose-500 transition font-medium">Template</a></li>
                <li><a href="#harga" class="text-gray-700 hover:text-rose-500 transition font-medium">Daftar Harga</a></li>
                <li><a href="#kontak" class="text-gray-700 hover:text-rose-500 transition font-medium">Kontak</a></li>
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