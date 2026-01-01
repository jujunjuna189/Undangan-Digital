@extends('components.public.layouts.app', ['nav_bar' => false])

@section('content')
<!-- Hero Section -->
<section id="home" class="relative pt-32 pb-24 overflow-hidden bg-gradient-to-br from-rose-50 via-pink-50 to-blue-50">
    <div class="absolute inset-0 bg-rose-pattern"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left animate-fadeInUp">
                <h1 class="font-playfair text-5xl md:text-7xl font-bold mb-6 text-gray-800 leading-tight">
                    Ciptakan Momen
                    <span class="bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent"> Indah</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-600 leading-relaxed">
                    Undangan pernikahan digital yang elegan, mudah dibagikan, dan ramah lingkungan
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#template" class="inline-block bg-gradient-to-r from-rose-500 to-pink-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition transform text-center">
                        Lihat Template
                    </a>
                    <a href="#harga" class="inline-block bg-white text-rose-500 px-8 py-4 rounded-full font-semibold text-lg border-2 border-rose-500 hover:bg-rose-50 transition text-center">
                        Cek Harga
                    </a>
                </div>
            </div>
            <div class="relative animate-float hidden md:block">
                <div class="w-full h-96 bg-gradient-to-br from-rose-200 via-pink-200 to-purple-200 rounded-3xl shadow-2xl flex items-center justify-center text-9xl overflow-hidden">
                    <img src="{{ asset('assets/image/img-1.webp') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Mengapa Memilih Kami?
            </h2>
            <p class="text-gray-600 text-lg">Keunggulan yang membuat hari spesial Anda lebih berkesan</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center p-8 rounded-2xl hover:bg-rose-50 transition group">
                <div class="text-6xl mb-6 group-hover:scale-110 transition">📱</div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Mobile Friendly</h3>
                <p class="text-gray-600">Tampil sempurna di semua perangkat, kapan saja</p>
            </div>
            <div class="text-center p-8 rounded-2xl hover:bg-rose-50 transition group">
                <div class="text-6xl mb-6 group-hover:scale-110 transition">⚡</div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Proses Cepat</h3>
                <p class="text-gray-600">Siap dalam 1x24 jam setelah data diterima (Khusus Untuk Template Yang Sudah Tersedia)</p>
            </div>
            <div class="text-center p-8 rounded-2xl hover:bg-rose-50 transition group">
                <div class="text-6xl mb-6 group-hover:scale-110 transition">🎨</div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Design Premium</h3>
                <p class="text-gray-600">Template elegan hasil karya designer profesional</p>
            </div>
            <div class="text-center p-8 rounded-2xl hover:bg-rose-50 transition group">
                <div class="text-6xl mb-6 group-hover:scale-110 transition">🌿</div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Ramah Lingkungan</h3>
                <p class="text-gray-600">Tanpa kertas, lebih hemat dan peduli bumi</p>
            </div>
        </div>
    </div>
</section>

<!-- Template Section -->
<section id="template" class="py-20 bg-gradient-to-br from-rose-50 to-pink-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Template Pilihan
            </h2>
            <p class="text-gray-600 text-lg">Desain eksklusif yang dapat disesuaikan dengan tema pernikahan Anda</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Template Card 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 group">
                <div class="relative h-80 bg-gradient-to-br from-rose-300 via-pink-300 to-rose-400 flex items-center justify-center overflow-hidden">
                    <div class="text-white text-8xl group-hover:scale-110 transition duration-300">🌸</div>
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-full text-rose-600 font-semibold text-sm">
                        Terpopuler
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Blossom Romance</h3>
                    <p class="text-gray-600 mb-4">Desain romantis dengan sentuhan floral yang lembut dan elegan</p>
                    <ul class="space-y-2 mb-6 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Animasi smooth</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Background music</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Countdown timer</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-3 rounded-xl hover:shadow-lg transition font-semibold">
                        Lihat Demo
                    </button>
                </div>
            </div>

            <!-- Template Card 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 group">
                <div class="relative h-80 bg-gradient-to-br from-blue-300 via-indigo-300 to-purple-400 flex items-center justify-center overflow-hidden">
                    <div class="text-white text-8xl group-hover:scale-110 transition duration-300">✨</div>
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Starry Night</h3>
                    <p class="text-gray-600 mb-4">Tema malam berbintang yang magis dan penuh pesona</p>
                    <ul class="space-y-2 mb-6 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Efek parallax</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Dark mode elegant</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Gallery interaktif</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-3 rounded-xl hover:shadow-lg transition font-semibold">
                        Lihat Demo
                    </button>
                </div>
            </div>

            <!-- Template Card 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 group">
                <div class="relative h-80 bg-gradient-to-br from-amber-300 via-orange-300 to-rose-400 flex items-center justify-center overflow-hidden">
                    <div class="text-white text-8xl group-hover:scale-110 transition duration-300">👑</div>
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Golden Luxury</h3>
                    <p class="text-gray-600 mb-4">Kemewahan klasik dengan aksen emas yang memukau</p>
                    <ul class="space-y-2 mb-6 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Ornamen mewah</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Animasi premium</li>
                        <li class="flex items-center"><span class="text-rose-500 mr-2">✓</span> Typography elegan</li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-3 rounded-xl hover:shadow-lg transition font-semibold">
                        Lihat Demo
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center">
            <p class="text-gray-600 mb-4">Dan masih banyak template lainnya!</p>
            <a href="#" class="inline-flex items-center text-rose-500 font-semibold hover:text-rose-600 transition">
                Lihat Semua Template
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="harga" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Paket Harga
            </h2>
            <p class="text-gray-600 text-lg">Pilih paket yang sesuai dengan kebutuhan Anda</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Basic Package -->
            <div class="bg-white rounded-3xl p-8 shadow-lg border-2 border-gray-100 hover:border-rose-200 hover:shadow-2xl transition-all duration-300">
                <div class="text-center mb-6">
                    <div class="text-5xl mb-4">🌸</div>
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Paket Dasar</h3>
                    <p class="text-gray-600 text-sm">Cocok untuk acara sederhana</p>
                </div>
                <div class="text-center mb-8">
                    <div class="text-5xl font-bold bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent mb-2">
                        150K
                    </div>
                    <p class="text-gray-500 text-sm">per undangan</p>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">1 Template pilihan</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Galeri foto (max 5)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Google Maps lokasi</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Countdown timer</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Revisi 1x</span>
                    </li>
                </ul>
                <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-4 rounded-xl font-semibold text-lg hover:shadow-xl hover:scale-105 transition transform">
                    Pilih Paket
                </button>
            </div>

            <!-- Premium Package -->
            <div class="bg-gradient-to-br from-rose-500 to-pink-500 text-white rounded-3xl p-8 shadow-2xl transform scale-105 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-amber-400 text-gray-800 px-6 py-2 rounded-full font-bold text-sm shadow-lg">
                    ⭐ TERPOPULER
                </div>
                <div class="text-center mb-6 mt-4">
                    <div class="text-5xl mb-4">💎</div>
                    <h3 class="font-playfair text-2xl font-bold mb-2">Paket Premium</h3>
                    <p class="text-rose-100 text-sm">Pilihan terbaik untuk momen spesial</p>
                </div>
                <div class="text-center mb-8">
                    <div class="text-5xl font-bold mb-2">
                        250K
                    </div>
                    <p class="text-rose-100 text-sm">per undangan</p>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Semua fitur Paket Dasar</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Galeri foto (max 15)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Background music</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>RSVP & Buku tamu digital</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Love story timeline</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-amber-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Revisi 3x</span>
                    </li>
                </ul>
                <button class="w-full bg-white text-rose-500 py-4 rounded-xl font-semibold text-lg hover:bg-rose-50 hover:shadow-xl transition">
                    Pilih Paket
                </button>
            </div>

            <!-- Platinum Package -->
            <div class="bg-white rounded-3xl p-8 shadow-lg border-2 border-gray-100 hover:border-rose-200 hover:shadow-2xl transition-all duration-300">
                <div class="text-center mb-6">
                    <div class="text-5xl mb-4">👑</div>
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Paket Platinum</h3>
                    <p class="text-gray-600 text-sm">Eksklusif tanpa batas</p>
                </div>
                <div class="text-center mb-8">
                    <div class="text-5xl font-bold bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent mb-2">
                        450K
                    </div>
                    <p class="text-gray-500 text-sm">per undangan</p>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9     10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Semua fitur Paket Premium</span>
                    </li>

                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Unlimited galeri foto</span>
                    </li>

                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Custom domain (namapengantin.com)</span>
                    </li>

                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Video prewedding</span>
                    </li>

                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Admin panel (kelola tamu & RSVP)</span>
                    </li>

                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Revisi tanpa batas</span>
                    </li>
                </ul>

                <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 text-white py-4 rounded-xl font-semibold text-lg hover:shadow-xl hover:scale-105 transition transform">
                    Pilih Paket
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-24 bg-white">
    <div class="container mx-auto px-6">

        <div class="text-center mb-20">
            <span class="text-rose-500 font-bold uppercase tracking-[0.3em] text-xs">Our Work</span>
            <h2 class="text-4xl md:text-5xl font-extrabold mt-3 mb-6 text-gray-900">
                Portfolio <span class="bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent">Kami</span>
            </h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">
                Beberapa karya terbaik yang kami kerjakan dengan detail dan estetika tinggi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

            <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 hover:border-rose-200 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300">
                <div class="relative overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('assets/image/img-2.webp') }}" alt="Project 1"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-rose-500/80 to-pink-500/20 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                        <p class="text-white font-bold text-2xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Juna & Furi</p>
                        <p class="text-rose-100 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">Elegant Wedding Theme</p>
                    </div>
                </div>

                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-rose-50 text-rose-500 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Paket Dasar
                        </span>
                        <div class="flex gap-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-rose-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-pink-500"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Desain minimalis yang mengutamakan kejelasan informasi dan kenyamanan visual.
                    </p>
                </div>
            </div>

            <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 hover:border-rose-200 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300">
                <div class="relative overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('assets/image/img-4.webp') }}" alt="Project 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-500/80 to-pink-500/20 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                        <p class="text-white font-bold text-2xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Juna & Furi</p>
                        <p class="text-rose-100 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">Romantic Floral Theme</p>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-rose-50 text-rose-500 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Paket Premium
                        </span>
                        <div class="flex gap-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-rose-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-pink-500"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Kombinasi animasi romantis dengan fitur musik latar yang membangun suasana.
                    </p>
                </div>
            </div>

            <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 hover:border-rose-200 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300">
                <div class="relative overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('assets/image/img-3.webp') }}" alt="Project 3" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-500/80 to-pink-500/20 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                        <p class="text-white font-bold text-2xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Juna & Furi</p>
                        <p class="text-rose-100 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">Luxury Wedding Theme</p>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-rose-50 text-rose-500 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Paket Platinum
                        </span>
                        <div class="flex gap-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-rose-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-pink-500"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Layanan eksklusif dengan domain khusus dan integrasi sistem RSVP.
                    </p>
                </div>
            </div>

        </div>

        <div class="text-center mt-20">
            <a href="#harga"
                class="inline-block bg-gradient-to-r from-rose-500 to-pink-500 text-white px-12 py-4 rounded-full font-bold text-sm uppercase tracking-widest hover:shadow-[0_10px_20px_-10px_rgba(244,63,94,0.5)] transition-all duration-300 transform hover:-translate-y-1">
                Lihat Semua Paket
            </a>
        </div>

    </div>
</section>

@endsection