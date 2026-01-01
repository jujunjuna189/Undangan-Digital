@extends('public.template.theme-2.app', ['nav_bar' => false])

@section('content')
<div id="cover" class="fixed inset-0 z-[100] flex items-center justify-center bg-stone-900 transition-opacity duration-1000">

    <div id="bg-image" class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0 scale-110"
        style="background-image: url('<?= asset('assets/image/img-1.webp') ?>');">
    </div>

    <div class="absolute inset-0 bg-black/40"></div>

    <div id="cover-content" class="relative z-10 text-center text-white px-6 opacity-0 translate-y-4 transition-all duration-1000">
        <span class="text-rose-400 font-bold tracking-[0.4em] text-xs uppercase mb-4 block">The Wedding of</span>
         <!-- Couple Photo in Cover -->
        <div class="w-48 h-48 mx-auto mb-6 rounded-full border-4 border-[#d4af37] overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 bg-[#d4af37] opacity-20"></div>
            <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover">
        </div>
        <h1 class="text-5xl md:text-7xl font-serif mb-8 italic">Juna & Furi</h1>
        <button onclick="openInvitation()" class="bg-rose-500 text-white px-10 py-4 rounded-full font-bold uppercase text-xs tracking-[0.2em] hover:bg-pink-600 transition-all shadow-2xl">
            Buka Undangan
        </button>
    </div>
</div>

<section id="hero" class="relative min-h-screen flex items-center justify-center bg-batik overflow-hidden">
    <!-- Top & Bottom Batik Border -->
    <div class="absolute top-0 left-0 w-full z-20">
        <div class="batik-border-y"></div>
    </div>
    <div class="absolute bottom-0 left-0 w-full z-20">
         <div class="batik-border-y"></div>
    </div>

    <!-- Gapura / Wayang Silhouette Sides -->
    <div class="gapura-container">
        <div class="gapura-side gapura-left" data-aos="fade-right" data-aos-duration="1500"></div>
        <div class="gapura-side gapura-right" data-aos="fade-left" data-aos-duration="1500"></div>
    </div>
    
    <div class="ornament-corner ornament-tl"></div>
    <div class="ornament-corner ornament-tr"></div>
    <div class="ornament-corner ornament-bl"></div>
    <div class="ornament-corner ornament-br"></div>

    <div class="text-center z-10 px-6 relative" data-aos="zoom-in" data-aos-duration="2000">
        <!-- Optional Top Small Ornament -->
        <div class="w-24 h-24 mx-auto mb-4 opacity-80" style="background-image: url('{{ asset('assets/image/gunungan.jpg') }}'); background-size: cover; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>

        <p class="font-sunda text-xl uppercase mb-8 tracking-[0.6em] text-[#d4af37] font-bold shadow-sm">Wilujeng Sumping</p>
        
        <h1 class="text-7xl md:text-9xl font-serif text-stone-900 mb-6 italic drop-shadow-md">
            Juna <span class="text-[#d4af37]">&</span> Furi
        </h1>
        
        <div class="divider-kujang scale-125 my-8">
            <!-- SVG Kujang Icon representing Sundanese culture -->
            <svg width="40" height="60" viewBox="0 0 100 150" fill="#d4af37">
               <path d="M30,10 C40,5 60,5 70,20 C80,40 60,60 50,80 C40,100 60,120 70,140 L30,140 C40,120 20,100 20,80 C20,50 20,20 30,10 Z" /> 
            </svg>
        </div>

        <div class="bg-white/80 backdrop-blur-sm px-8 py-2 inline-block rounded-full border border-[#d4af37]/50 mb-8">
             <span class="text-stone-800 text-sm tracking-[0.5em] uppercase font-bold">26 Desember 2025</span>
        </div>

        <!-- Countdown Timer -->
        <div class="flex justify-center gap-4 text-white uppercase tracking-widest text-xs font-bold mb-8" data-aos="fade-up" data-aos-delay="500">
            <div class="bg-stone-900/80 backdrop-blur p-3 rounded border border-[#d4af37] w-20">
                <span id="days" class="text-3xl font-serif block mb-1">00</span> Hari
            </div>
            <div class="bg-stone-900/80 backdrop-blur p-3 rounded border border-[#d4af37] w-20">
                <span id="hours" class="text-3xl font-serif block mb-1">00</span> Jam
            </div>
            <div class="bg-stone-900/80 backdrop-blur p-3 rounded border border-[#d4af37] w-20">
                <span id="minutes" class="text-3xl font-serif block mb-1">00</span> Menit
            </div>
            <div class="bg-stone-900/80 backdrop-blur p-3 rounded border border-[#d4af37] w-20">
                <span id="seconds" class="text-3xl font-serif block mb-1">00</span> Detik
            </div>
        </div>
        
        <p class="mt-10 text-stone-700 italic font-light text-xl max-w-2xl mx-auto leading-relaxed">"Kanyaah nu moal luntur ku waktu, kacinta nu moal laas ku mangsa."</p>
    </div>
</section>

<section class="py-24 bg-white text-center px-6 relative">
    <div class="max-w-4xl mx-auto" data-aos="zoom-in">
        <div class="mb-8 opacity-40 flex justify-center">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="#d4af37">
                <path d="M12 2l2.4 7.2h7.6l-6.2 4.5 2.4 7.3-6.2-4.5-6.2 4.5 2.4-7.3-6.2-4.5h7.6z" />
            </svg>
        </div>
        <p class="text-stone-600 italic leading-loose text-xl font-light mb-8">
            "Mugia ridho Allah SWT nyarengan lengkah simkuring sakulawargi, nalika ngahijikeun dua hate dina beungkeutan suci pernikahan."
        </p>
        <div class="h-px w-20 bg-[#d4af37] mx-auto"></div>
    </div>
</section>

<section class="py-32 bg-stone-50 overflow-hidden relative">
    <div class="ornament-corner ornament-tl"></div>
    <div class="ornament-corner ornament-br"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-16 mb-40">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="sunda-border rotate-2 hover:rotate-0 transition duration-700">
                    <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-[650px] object-cover filter grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-6" data-aos="fade-left">
                <h3 class="font-sunda text-lg tracking-[0.3em] font-bold">Calon Panganten Pameget</h3>
                <h2 class="text-6xl font-serif text-stone-800 italic">Rizky Ramadhan, S.T.</h2>
                <div class="h-px w-24 bg-[#d4af37]"></div>
                <p class="text-stone-600 text-lg leading-relaxed font-light">
                    Putra cikal ti pasangan anu dipihormat:<br>
                    <span class="text-stone-900 font-bold text-xl mt-3 block">Bapa Ahmad Subagja</span>
                    <span class="text-stone-900 font-bold text-xl block">& Ibu Siti Aminah</span>
                </p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row-reverse items-center gap-16">
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <div class="sunda-border -rotate-2 hover:rotate-0 transition duration-700">
                    <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-[650px] object-cover filter grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-6 text-right" data-aos="fade-right">
                <h3 class="font-sunda text-lg tracking-[0.3em] font-bold">Calon Panganten Istri</h3>
                <h2 class="text-6xl font-serif text-stone-800 italic">Aulia Putri, S.E.</h2>
                <div class="h-px w-24 bg-[#d4af37] ml-auto"></div>
                <p class="text-stone-600 text-lg leading-relaxed font-light">
                    Putri bungsu ti pasangan anu dipihormat:<br>
                    <span class="text-stone-900 font-bold text-xl mt-3 block">Bapa Bambang Wijaya</span>
                    <span class="text-stone-900 font-bold text-xl block">& Ibu Larasati</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-stone-900 text-white relative overflow-hidden">
    <!-- Batik Pattern Overlay for Dark Background -->
    <div class="absolute inset-0 opacity-5 bg-[url('https://www.transparenttextures.com/patterns/batik.png')] bg-repeat"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-24" data-aos="fade-down">
            <h2 class="text-6xl font-serif italic text-amber-500 mb-6">Acara Syukuran</h2>
            <div class="divider-kujang opacity-60">
                <svg width="30" height="40" viewBox="0 0 100 150" fill="#d4af37">
                   <path d="M30,10 C40,5 60,5 70,20 C80,40 60,60 50,80 C40,100 60,120 70,140 L30,140 C40,120 20,100 20,80 C20,50 20,20 30,10 Z" /> 
                </svg>
            </div>
            <p class="tracking-[0.5em] text-xs mt-4 opacity-80 uppercase font-sunda">Matak Atoh Upami Kasumpingan</p>
        </div>

        <div class="grid md:grid-cols-2 gap-16">
            <!-- Akad Nikah -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 border border-amber-500/30 transform translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-500"></div>
                <div class="relative p-12 bg-stone-800/80 backdrop-blur-sm border border-amber-500/50 text-center">
                    <div class="absolute top-0 left-0 w-16 h-16 border-t-2 border-l-2 border-amber-500"></div>
                    <div class="absolute bottom-0 right-0 w-16 h-16 border-b-2 border-r-2 border-amber-500"></div>
                    
                    <h4 class="font-sunda text-xl mb-6 text-amber-500">Akad Nikah</h4>
                    <p class="text-5xl font-serif mb-2">08.00</p>
                    <p class="text-sm uppercase tracking-widest mb-8 opacity-60">Sampai Selesai</p>
                    
                    <div class="h-px w-16 bg-amber-500/50 mx-auto mb-8"></div>
                    
                    <p class="text-amber-100 font-bold text-lg mb-2">Masjid Raya Istiqlal</p>
                    <p class="text-sm opacity-70 leading-relaxed font-light">Jl. Taman Wijaya Kusuma, Jakarta Pusat</p>
                </div>
            </div>

            <!-- Resepsi -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="300">
                 <div class="absolute inset-0 border border-amber-500/30 transform translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-500"></div>
                <div class="relative p-12 bg-stone-800/80 backdrop-blur-sm border border-amber-500/50 text-center">
                    <div class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-amber-500"></div>
                    <div class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-amber-500"></div>
                    
                    <h4 class="font-sunda text-xl mb-6 text-amber-500">Resepsi</h4>
                    <p class="text-5xl font-serif mb-2">11.00</p>
                     <p class="text-sm uppercase tracking-widest mb-8 opacity-60">Sampai Selesai</p>
                    
                    <div class="h-px w-16 bg-amber-500/50 mx-auto mb-8"></div>
                    
                    <p class="text-amber-100 font-bold text-lg mb-2">Hotel Indonesia Kempinski</p>
                    <p class="text-sm opacity-70 leading-relaxed font-light">Grand Ballroom, Menteng, Jakarta Pusat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="story" class="py-32 bg-stone-50 overflow-hidden relative">
    <div class="ornament-corner ornament-tl"></div>
    <div class="ornament-corner ornament-br"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-down">
            <h2 class="text-5xl font-serif italic text-stone-800 mb-6">Carita Cinta</h2>
             <div class="divider-kujang">
                <!-- SVG Kujang Icon -->
                <svg width="30" height="45" viewBox="0 0 100 150" fill="#d4af37">
                   <path d="M30,10 C40,5 60,5 70,20 C80,40 60,60 50,80 C40,100 60,120 70,140 L30,140 C40,120 20,100 20,80 C20,50 20,20 30,10 Z" /> 
                </svg>
            </div>
            <p class="font-sunda text-xs text-[#d4af37] uppercase tracking-widest mt-4">Perjalanan Kasih</p>
        </div>

        <div class="relative max-w-4xl mx-auto space-y-16">
            <!-- Central Line -->
            <div class="absolute left-1/2 top-0 bottom-0 w-px bg-[#d4af37] opacity-30 transform -translate-x-1/2"></div>

            <!-- Item 1 -->
            <div class="relative flex items-center justify-between w-full" data-aos="fade-right">
                <div class="w-5/12 text-right pr-8">
                    <h3 class="font-sunda text-lg text-stone-800 font-bold mb-2">Pertemuan Pertama</h3>
                    <p class="text-stone-500 text-sm leading-relaxed italic">Desember 2020</p>
                    <p class="text-stone-600 mt-2 font-light">"Di hiji acara réuni sakola, panon paamprok, hate ngageter."</p>
                </div>
                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-[#d4af37] border-4 border-white shadow-lg z-10"></div>
                <div class="w-5/12 pl-8"></div>
            </div>

            <!-- Item 2 -->
            <div class="relative flex items-center justify-between w-full" data-aos="fade-left">
                <div class="w-5/12 text-right pr-8"></div>
                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-[#d4af37] border-4 border-white shadow-lg z-10"></div>
                <div class="w-5/12 pl-8 text-left">
                    <h3 class="font-sunda text-lg text-stone-800 font-bold mb-2">Lamaran</h3>
                    <p class="text-stone-500 text-sm leading-relaxed italic">Agustus 2024</p>
                    <p class="text-stone-600 mt-2 font-light">"Niat suci di baledog ku dua kulawarga, ngabeungkeut jangji pasini."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="py-32 bg-[#fcfbf7] text-center relative overflow-hidden">
     <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
     
     <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-5xl font-serif italic text-stone-800 mb-6" data-aos="fade-down">Galeri Potret</h2>
        <p class="font-sunda text-xs text-[#d4af37] uppercase tracking-widest mb-16" data-aos="fade-up">Momen Kabagjaan</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
             <div class="md:col-span-1 md:row-span-2 group overflow-hidden rounded-none border border-[#d4af37]/20 cursor-pointer" data-aos="zoom-in">
                <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000">
            </div>
             <div class="group overflow-hidden rounded-none border border-[#d4af37]/20 cursor-pointer" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-1000">
            </div>
             <div class="group overflow-hidden rounded-none border border-[#d4af37]/20 cursor-pointer" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-1000">
            </div>
             <div class="md:col-span-2 group overflow-hidden rounded-none border border-[#d4af37]/20 cursor-pointer" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-1000">
            </div>
        </div>
     </div>
</section>

<section id="maps" class="py-32 bg-stone-100 relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl font-serif italic text-stone-800 mb-4">Peta Lokasi</h2>
            <p class="text-stone-500 font-light">Mugia tiasa sumping dina waktosna</p>
        </div>
        
        <div class="p-2 border-2 border-[#d4af37] bg-white shadow-xl max-w-4xl mx-auto" data-aos="flip-up">
            <div class="w-full aspect-video">
                 <!-- Placeholder Map -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28318687786!2d106.7441893325603!3d-6.22957121652758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Special%20Capital%20Region%20of%20Jakarta!5e0!3m2!1sen!2sid!4v1655095325852!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
            <div class="text-center py-6">
                <a href="https://goo.gl/maps/example" target="_blank" class="inline-block bg-[#d4af37] text-white px-8 py-3 rounded-none uppercase tracking-widest text-xs font-bold hover:bg-[#b5952f] transition">
                    Buka Google Maps
                </a>
            </div>
        </div>
    </div>
</section>

<section id="gifts" class="py-32 bg-stone-900 text-white relative">
    <!-- Batik Pattern Overlay for Dark Background -->
    <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>

    <div class="ornament-corner ornament-tl border-stone-500"></div>
    <div class="ornament-corner ornament-tr border-stone-500"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <h2 class="text-5xl font-serif italic text-[#d4af37] mb-8" data-aos="fade-down">Tanda Kanyaah</h2>
        <p class="max-w-xl mx-auto text-stone-300 font-light leading-relaxed mb-16" data-aos="fade-up">
            Tanpa ngirangan rasa hormat, kanggo para wargi anu bade masihan tanda kanyaah ka calon panganten, tiasa dikirim ka:
        </p>

        <div class="flex flex-col md:flex-row justify-center gap-8">
            <!-- Bank 1 -->
            <div class="p-8 border border-[#d4af37]/30 bg-white/5 backdrop-blur rounded-none w-full md:w-1/3" data-aos="flip-left">
                <div class="h-12 flex items-center justify-center mb-6">
                    <span class="text-2xl font-bold font-serif italic text-white">BCA</span>
                </div>
                <p class="text-2xl tracking-widest mb-2 font-mono">123 456 7890</p>
                <p class="text-sm uppercase tracking-widest opacity-60">A.N. Rizky Ramadhan</p>
                <button class="mt-6 text-xs text-[#d4af37] underline hover:text-white" onclick="navigator.clipboard.writeText('1234567890')">Salin Nomor</button>
            </div>

             <!-- Bank 2 -->
             <div class="p-8 border border-[#d4af37]/30 bg-white/5 backdrop-blur rounded-none w-full md:w-1/3" data-aos="flip-right" data-aos-delay="100">
                 <div class="h-12 flex items-center justify-center mb-6">
                    <span class="text-2xl font-bold font-serif italic text-white">MANDIRI</span>
                </div>
                <p class="text-2xl tracking-widest mb-2 font-mono">098 765 4321</p>
                <p class="text-sm uppercase tracking-widest opacity-60">A.N. Aulia Putri</p>
                 <button class="mt-6 text-xs text-[#d4af37] underline hover:text-white" onclick="navigator.clipboard.writeText('0987654321')">Salin Nomor</button>
            </div>
        </div>
    </div>
</section>

<!-- Turut Mengundang Section -->
<section id="inviting" class="py-24 bg-stone-50 text-center relative">
    <div class="ornament-corner ornament-tl"></div>
    <div class="ornament-corner ornament-br"></div>
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-5xl font-serif italic text-stone-800 mb-12" data-aos="fade-down">Turut Mengundang</h2>
        
        <div class="grid md:grid-cols-2 gap-8 text-stone-600 font-light text-lg leading-relaxed" data-aos="fade-up">
            <div class="space-y-4">
                <p>Kel. Besar Bagoes Soeharto (Alm)</p>
                <p>Kel. Besar H. Moersidi (Alm)</p>
                <p>Kel. Besar R. Soedarsono (Alm)</p>
            </div>
            <div class="space-y-4">
                <p>Kel. Besar H. Mukidjo (Alm)</p>
                <p>Kel. Besar R. Koeslan (Alm)</p>
                <p>Kel. Besar Moch. Zaeni (Alm)</p>
            </div>
        </div>
    </div>
</section>

<!-- Filter Instagram Section -->
<section class="py-24 bg-[#fcfbf7] text-center relative">
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-5xl font-serif italic text-stone-800 mb-6" data-aos="fade-down">Filter Instagram</h2>
        <p class="text-stone-500 mb-8 max-w-xl mx-auto">Bagikan momen spesialmu pakai Filter Instagram dan bagikan ke teman-teman!</p>
        
        <a href="#" class="inline-block bg-stone-800 text-white px-8 py-3 rounded-full uppercase tracking-widest text-xs font-bold hover:bg-[#d4af37] hover:text-white transition shadow-xl" data-aos="zoom-in">
            Coba Filter Instagram
        </a>
    </div>
</section>

<!-- Protokol Kesehatan Section -->
<section class="py-24 bg-stone-100 text-center relative overflow-hidden">
     <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-5xl font-serif italic text-stone-800 mb-6" data-aos="fade-down">Protokol Kesehatan</h2>
        <p class="text-stone-500 mb-12 max-w-2xl mx-auto font-light">
            Mengingat kondisi pandemi saat ini, kami menghimbau Bapak/Ibu/Saudara/i tamu undangan agar tetap memperhatikan protokol kesehatan dalam rangka upaya pencegahan penyebaran virus Covid-19.
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Masker -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-[#d4af37]/20" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto mb-4">
                     <svg class="w-8 h-8 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-700 text-sm uppercase tracking-wider">Memakai Masker</h4>
            </div>
             <!-- Cuci Tangan -->
             <div class="bg-white p-6 rounded-lg shadow-sm border border-[#d4af37]/20" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto mb-4">
                     <svg class="w-8 h-8 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-700 text-sm uppercase tracking-wider">Mencuci Tangan</h4>
            </div>
             <!-- Suhu Tubuh -->
             <div class="bg-white p-6 rounded-lg shadow-sm border border-[#d4af37]/20" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto mb-4">
                     <svg class="w-8 h-8 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-700 text-sm uppercase tracking-wider">Cek Suhu Tubuh</h4>
            </div>
             <!-- Jaga Jarak -->
             <div class="bg-white p-6 rounded-lg shadow-sm border border-[#d4af37]/20" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto mb-4">
                     <svg class="w-8 h-8 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-700 text-sm uppercase tracking-wider">Menjaga Jarak</h4>
            </div>
        </div>
    </div>
</section>

<!-- Adab Walimah Section -->
<section class="py-24 bg-[#fcfbf7] text-center relative">
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-5xl font-serif italic text-stone-800 mb-12" data-aos="fade-down">Adab Walimah</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            <div class="space-y-4" data-aos="fade-up">
                <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                    <!-- Icon placeholder -->
                   <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Mendoakan Kedua Mempelai</p>
            </div>
             <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                   <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Memperhatikan Adab Makan & Minum</p>
            </div>
             <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Berpakaian Sopan & Menutup Aurat</p>
            </div>
             <div class="space-y-4" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Tidak Berlebihan</p>
            </div>
             <div class="space-y-4" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Memohon Doa Restu</p>
            </div>
            <div class="space-y-4" data-aos="fade-up" data-aos-delay="500">
                 <div class="w-20 h-20 mx-auto rounded-full bg-stone-100 border border-[#d4af37] flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <p class="text-xs font-bold uppercase tracking-widest text-stone-600">Dilarang Mengambil Foto Tanpa Ijin</p>
            </div>
        </div>
    </div>
</section>

<!-- Informasi Tambahan Section -->
<section class="py-24 bg-stone-50 text-center">
    <div class="container mx-auto px-6">
        <div class="border-2 border-stone-200 p-8 md:p-12 relative max-w-4xl mx-auto" data-aos="zoom-in">
             <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-stone-50 px-4">
                 <h2 class="text-4xl font-serif italic text-stone-800">Informasi Tambahan</h2>
             </div>
             
             <p class="text-stone-600 leading-loose text-lg font-light mt-4">
                 Tamu yang hendak hadir dimohon untuk memiliki monitor dan tidak membawa bayi.
             </p>
        </div>
    </div>
</section>

<!-- Ucapan & Doa Section -->
<section id="rsvp" class="py-32 bg-stone-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    <div class="ornament-corner ornament-tl border-stone-600"></div>
    <div class="ornament-corner ornament-tr border-stone-600"></div>
    <div class="ornament-corner ornament-bl border-stone-600"></div>
    <div class="ornament-corner ornament-br border-stone-600"></div>
    
    <div class="container mx-auto px-6 relative z-10 max-w-3xl">
        <h2 class="text-5xl font-serif italic text-[#d4af37] text-center mb-12" data-aos="fade-down">Ucapan & Doa</h2>
        
        <form class="space-y-6" data-aos="fade-up">
            <div>
                <label class="block text-[#d4af37] text-xs uppercase tracking-widest mb-2">Nama</label>
                <input type="text" class="w-full bg-stone-800 border border-stone-700 rounded p-4 text-white focus:outline-none focus:border-[#d4af37] transition" placeholder="Nama Lengkap">
            </div>
             <div>
                <label class="block text-[#d4af37] text-xs uppercase tracking-widest mb-2">Hadir Sebagai</label>
                 <select class="w-full bg-stone-800 border border-stone-700 rounded p-4 text-white focus:outline-none focus:border-[#d4af37] transition">
                    <option>Tamu Undangan</option>
                    <option>Keluarga</option>
                    <option>Kerabat Kerja</option>
                </select>
            </div>
             <div>
                <label class="block text-[#d4af37] text-xs uppercase tracking-widest mb-2">Ucapan & Doa</label>
                <textarea class="w-full bg-stone-800 border border-stone-700 rounded p-4 text-white focus:outline-none focus:border-[#d4af37] transition h-32" placeholder="Tulis ucapan dan doa..."></textarea>
            </div>
             <div>
                <label class="block text-[#d4af37] text-xs uppercase tracking-widest mb-2">Konfirmasi Kehadiran</label>
                 <select class="w-full bg-stone-800 border border-stone-700 rounded p-4 text-white focus:outline-none focus:border-[#d4af37] transition">
                    <option>Hadir</option>
                    <option>Mungkin Hadir</option>
                    <option>Tidak Hadir</option>
                </select>
            </div>
            
            <button type="button" class="w-full bg-[#d4af37] text-stone-900 font-bold uppercase tracking-widest py-4 rounded hover:bg-[#b5952f] transition">Kirim Ucapan</button>
        </form>
        
        <div class="mt-16 space-y-4 max-h-96 overflow-y-auto pr-2 custom-scrollbar">
            <!-- Comment Dummy 1 -->
            <div class="bg-stone-800/50 p-4 border-l-2 border-[#d4af37]">
                <h4 class="font-bold text-[#d4af37] text-sm">Budi Santoso</h4>
                <p class="text-xs text-stone-400 mb-2">Hadir • 2 Menit yang lalu</p>
                <p class="text-stone-300 italic text-sm">"Selamat menempuh hidup baru bro! Semoga sakinah mawaddah warahmah."</p>
            </div>
             <!-- Comment Dummy 2 -->
            <div class="bg-stone-800/50 p-4 border-l-2 border-[#d4af37]">
                <h4 class="font-bold text-[#d4af37] text-sm">Siti Nurhaliza</h4>
                <p class="text-xs text-stone-400 mb-2">Hadir • 5 Menit yang lalu</p>
                <p class="text-stone-300 italic text-sm">"Barakallahu lakuma! Cantik banget undangannya 😍"</p>
            </div>
        </div>
    </div>
</section>

<footer class="py-12 bg-[#fcfbf7] text-center">
    <div class="container mx-auto px-6">
         <p class="text-stone-600 italic font-light leading-relaxed max-w-2xl mx-auto mb-8">
            Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan doa restu kepada kedua mempelai.
        </p>
        
        <h3 class="font-sunda text-sm text-[#d4af37] uppercase tracking-widest font-bold mb-2">Hormat Kami Yang Mengundang</h3>
        <h2 class="text-3xl font-serif text-stone-800 italic mb-8">Rizky & Aulia</h2>
        
        <p class="text-xs text-stone-400 uppercase tracking-widest">Digital Invitation by Undangan Digital</p>
    </div>
</footer>

@endsection