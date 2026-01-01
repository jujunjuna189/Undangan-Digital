@extends('public.template.theme-1.app', ['nav_bar' => false])

@section('content')
<!-- Cover Section -->
<div id="cover" class="fixed inset-0 z-[100] flex items-center justify-center bg-stone-900 transition-opacity duration-1500">
    <!-- Dynamic Background -->
    <div id="bg-image" class="absolute inset-0 bg-cover bg-center transition-all duration-[3000ms] opacity-0 scale-110 ease-out"
        style="background-image: url('{{ asset('assets/image/img-1.webp') }}');">
    </div>
    
    <!-- Gradient Overlay for Readability -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/60 backdrop-blur-[2px]"></div>
    
    <!-- Ornamental Border (Fixed) -->
    <div class="absolute inset-4 md:inset-8 border border-white/20 rounded-[2rem] pointer-events-none z-20"></div>
    <div class="absolute inset-5 md:inset-9 border border-white/10 rounded-[1.8rem] pointer-events-none z-20"></div>

    <div id="cover-content" class="relative z-30 text-center text-white px-6 opacity-0 translate-y-10 transition-all duration-1000 delay-500">
        <div class="mb-8 relative inline-block">
            <span class="block font-[Poppins] text-[10px] md:text-xs tracking-[0.4em] uppercase text-white/90 mb-2">The Wedding of</span>
            <div class="h-px w-full bg-gradient-to-r from-transparent via-white/50 to-transparent"></div>
        </div>

        <h1 class="text-7xl md:text-9xl font-[Pinyon_Script] mb-6 text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.3)] leading-none">
            Juna <span class="text-[#FFD700] mx-2">&</span> Furi
        </h1>
        
        <div class="flex items-center justify-center gap-4 mb-12 opacity-90">
            <div class="h-px w-8 bg-white/50"></div>
            <p class="font-[Playfair_Display] italic text-xl md:text-2xl font-light tracking-wide">26 Desember 2025</p>
            <div class="h-px w-8 bg-white/50"></div>
        </div>
        
        <div class="space-y-4">
            <p class="font-[Poppins] text-[10px] uppercase tracking-widest opacity-70">Kepada Yth. Bapak/Ibu/Saudara/i</p>
            <div class="bg-white/10 backdrop-blur-md px-8 py-3 rounded-xl border border-white/20 inline-block min-w-[200px]">
                <p class="font-[Playfair_Display] text-lg italic">Tamu Undangan</p>
            </div>
        </div>

        <div class="mt-12">
            <button onclick="openInvitation()" class="group relative px-10 py-4 bg-white text-stone-900 rounded-full overflow-hidden shadow-[0_0_20px_rgba(255,255,255,0.3)] transition-all hover:scale-105 hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] active:scale-95">
                <div class="absolute inset-0 bg-white/20 group-hover:bg-white/0 transition-colors"></div>
                <span class="relative z-10 font-[Poppins] text-xs font-bold tracking-[0.2em] uppercase flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"/></svg>
                    Buka Undangan
                </span>
            </button>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden py-20 md:py-0">
    <!-- Background Image with Blur -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover blur-[3px] scale-110 opacity-60">
        <div class="absolute inset-0 bg-[#FDFBF7]/60"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#FDFBF7] via-transparent to-[#FDFBF7]/50"></div>
    </div>
    
    <!-- Floating Card -->
    <div class="relative z-10 bg-white/80 backdrop-blur-md p-8 md:p-24 rounded-[3rem] shadow-[0_30px_60px_-15px_rgba(212,136,141,0.15)] border border-white/50 max-w-4xl w-full mx-4 text-center transform hover:scale-[1.002] transition-transform duration-1000" data-aos="zoom-in" data-aos-duration="1500">
        <!-- Inner Frame Border -->
        <div class="absolute inset-4 md:inset-8 border border-[#D4888D]/20 rounded-[2.5rem] md:rounded-[3rem] pointer-events-none"></div>
        <div class="absolute inset-5 md:inset-9 border border-[#D4888D]/10 rounded-[2.2rem] md:rounded-[2.8rem] pointer-events-none"></div>
        
        <!-- Floral Ornaments (Top Left) -->
        <div class="absolute top-6 left-6 md:top-8 md:left-8 w-16 h-16 md:w-24 md:h-24 pointer-events-none opacity-60">
            <svg viewBox="0 0 100 100" fill="none" stroke="#D4888D" stroke-width="1.5" class="w-full h-full">
                <path d="M20,20 Q40,20 50,50 Q20,30 20,20 Z" fill="#D4888D" opacity="0.1"/>
                <path d="M20,20 C20,50 50,80 80,80 M20,20 C50,20 80,50 80,80"/>
                <circle cx="20" cy="20" r="3" fill="#D4888D"/>
                <circle cx="80" cy="80" r="2" fill="#D4888D"/>
                <path d="M30,30 Q40,10 60,20" stroke-width="1"/>
            </svg>
        </div>

        <!-- Floral Ornaments (Top Right) -->
        <div class="absolute top-6 right-6 md:top-8 md:right-8 w-16 h-16 md:w-24 md:h-24 pointer-events-none opacity-60 transform rotate-90">
             <svg viewBox="0 0 100 100" fill="none" stroke="#D4888D" stroke-width="1.5" class="w-full h-full">
                <path d="M20,20 Q40,20 50,50 Q20,30 20,20 Z" fill="#D4888D" opacity="0.1"/>
                <path d="M20,20 C20,50 50,80 80,80 M20,20 C50,20 80,50 80,80"/>
                <circle cx="20" cy="20" r="3" fill="#D4888D"/>
                <circle cx="80" cy="80" r="2" fill="#D4888D"/>
                <path d="M30,30 Q40,10 60,20" stroke-width="1"/>
            </svg>
        </div>

        <!-- Floral Ornaments (Bottom Left) -->
        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 w-16 h-16 md:w-24 md:h-24 pointer-events-none opacity-60 transform -rotate-90">
             <svg viewBox="0 0 100 100" fill="none" stroke="#D4888D" stroke-width="1.5" class="w-full h-full">
                <path d="M20,20 Q40,20 50,50 Q20,30 20,20 Z" fill="#D4888D" opacity="0.1"/>
                <path d="M20,20 C20,50 50,80 80,80 M20,20 C50,20 80,50 80,80"/>
                <circle cx="20" cy="20" r="3" fill="#D4888D"/>
                <circle cx="80" cy="80" r="2" fill="#D4888D"/>
                <path d="M30,30 Q40,10 60,20" stroke-width="1"/>
            </svg>
        </div>

        <!-- Floral Ornaments (Bottom Right) -->
        <div class="absolute bottom-6 right-6 md:bottom-8 md:right-8 w-16 h-16 md:w-24 md:h-24 pointer-events-none opacity-60 transform rotate-180">
             <svg viewBox="0 0 100 100" fill="none" stroke="#D4888D" stroke-width="1.5" class="w-full h-full">
                <path d="M20,20 Q40,20 50,50 Q20,30 20,20 Z" fill="#D4888D" opacity="0.1"/>
                <path d="M20,20 C20,50 50,80 80,80 M20,20 C50,20 80,50 80,80"/>
                <circle cx="20" cy="20" r="3" fill="#D4888D"/>
                <circle cx="80" cy="80" r="2" fill="#D4888D"/>
                <path d="M30,30 Q40,10 60,20" stroke-width="1"/>
            </svg>
        </div>

        <div class="space-y-4 md:space-y-6 relative z-10">
            <div data-aos="fade-down" data-aos-delay="200">
                <p class="font-[Poppins] text-[#D4888D] text-[10px] md:text-sm font-bold tracking-[0.4em] uppercase mb-2">The Wedding Of</p>
                <div class="w-px h-6 md:h-8 bg-[#D4888D] mx-auto opacity-50"></div>
            </div>
            
            <div class="relative py-2 md:py-4">
                 <h1 class="font-[Playfair_Display] text-5xl md:text-8xl text-stone-800 leading-[1.1] tracking-tight drop-shadow-sm flex flex-col md:block" data-aos="zoom-in" data-aos-delay="300">
                    <span>Juna</span> 
                    <span class="font-[Pinyon_Script] text-4xl md:text-7xl text-[#D4888D] mx-2 font-thin my-2">&</span>
                    <span>Furi</span>
                </h1>
            </div>

            <div class="flex items-center justify-center gap-4 md:gap-8 text-[#D4888D]" data-aos="fade-up" data-aos-delay="400">
                <svg class="w-8 md:w-10" height="2" viewBox="0 0 40 2"><path d="M0 1h40" stroke="currentColor" stroke-opacity="0.3"/></svg>
                <p class="font-[Playfair_Display] text-lg md:text-3xl text-stone-700 italic font-medium whitespace-nowrap">
                    26 . 12 . 2025
                </p>
                <svg class="w-8 md:w-10" height="2" viewBox="0 0 40 2"><path d="M0 1h40" stroke="currentColor" stroke-opacity="0.3"/></svg>
            </div>
            
            <div class="pt-4 md:pt-6" data-aos="fade-up" data-aos-delay="500">
                 <div class="inline-flex items-center gap-2 md:gap-3 px-6 md:px-8 py-2 md:py-3 border border-[#D4888D]/20 rounded-full bg-white/50 backdrop-blur-sm shadow-sm group hover:border-[#D4888D]/50 transition-colors cursor-default">
                    <svg class="w-3 h-3 md:w-4 md:h-4 text-[#D4888D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span class="font-[Poppins] text-[10px] md:text-xs text-stone-600 tracking-[0.2em] uppercase font-bold group-hover:text-[#D4888D] transition-colors">Jakarta, Indonesia</span>
                 </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-4 md:bottom-8 left-1/2 -translate-x-1/2 animate-bounce text-[#D4888D] text-center z-20">
        <span class="block text-[8px] md:text-[9px] uppercase tracking-[0.3em] mb-2 md:mb-3 opacity-70 font-bold">Scroll Down</span>
        <div class="w-5 h-9 md:w-6 md:h-10 border-2 border-[#D4888D]/30 rounded-full flex justify-center p-1 mx-auto">
            <div class="w-1 h-2 bg-[#D4888D] rounded-full animate-scroll-down"></div>
        </div>
    </div>
    <style>
        @keyframes scroll-down {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(15px); opacity: 0; }
        }
        .animate-scroll-down {
            animation: scroll-down 1.5s infinite;
        }
    </style>
</section>

<!-- Salam Section -->
<section class="py-24 md:py-32 bg-white relative">
    <div class="container mx-auto px-6 max-w-3xl text-center">
        <div class="mb-8 text-[#D4888D]" data-aos="fade-up">
            <svg class="mx-auto w-12 h-12 opacity-80" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        
        <h2 class="font-[Playfair_Display] text-3xl md:text-4xl text-stone-800 mb-6 italic" data-aos="fade-up" data-aos-delay="100">Assalamualaikum Wr. Wb.</h2>
        
        <p class="font-[Poppins] text-stone-500 font-light leading-loose mb-10 text-sm md:text-base" data-aos="fade-up" data-aos-delay="200">
            Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah semoga ridho-Mu tercurah mengiringi pernikahan putra-putri kami:
        </p>

        <div class="relative py-8 px-4" data-aos="zoom-in">
             <div class="absolute inset-0 flex items-center justify-center opacity-10">
                 <span class="font-[Pinyon_Script] text-9xl text-[#D4888D]">Qs</span>
             </div>
             <p class="relative z-10 font-[Playfair_Display] italic text-stone-600 text-lg md:text-xl leading-relaxed">
                "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang."
            </p>
            <p class="mt-4 font-[Poppins] text-xs font-bold text-[#D4888D] tracking-widest uppercase">(Ar-Rum: 21)</p>
        </div>
    </div>
</section>

<!-- Couple Section -->
<section class="py-24 bg-[#FDFBF7] relative overflow-hidden">
    <div class="container mx-auto px-6 max-w-6xl">
        <!-- Groom -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-20 md:mb-32">
            <div class="w-full md:w-5/12 order-1 md:order-1" data-aos="fade-right">
                <div class="relative mx-auto w-64 h-80 md:w-80 md:h-[28rem]">
                     <div class="absolute inset-0 border border-[#D4888D]/30 rounded-t-[10rem] rounded-b-[2rem] translate-x-3 translate-y-3"></div>
                     <div class="absolute inset-0 rounded-t-[10rem] rounded-b-[2rem] overflow-hidden shadow-xl">
                         <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover">
                     </div>
                </div>
            </div>
            <div class="w-full md:w-7/12 order-2 md:order-2 text-center md:text-left space-y-4" data-aos="fade-left">
                <h3 class="font-[Pinyon_Script] text-5xl md:text-6xl text-stone-800">Ujun Junaedi</h3>
                <p class="font-[Playfair_Display] italic text-stone-500 text-lg">Putra ketiga dari Bpk. Emuh & Ibu Neni Rohaeni</p>
                <div class="pt-4">
                     <a href="#" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-white border border-stone-200 text-stone-500 text-xs tracking-widest uppercase hover:bg-[#D4888D] hover:text-white hover:border-[#D4888D] transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        @ujunjunaedi
                    </a>
                </div>
            </div>
        </div>

        <!-- Bride -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="w-full md:w-5/12" data-aos="fade-left">
                 <div class="relative mx-auto w-64 h-80 md:w-80 md:h-[28rem]">
                     <div class="absolute inset-0 border border-[#D4888D]/30 rounded-t-[10rem] rounded-b-[2rem] -translate-x-3 translate-y-3"></div>
                     <div class="absolute inset-0 rounded-t-[10rem] rounded-b-[2rem] overflow-hidden shadow-xl">
                         <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover">
                     </div>
                </div>
            </div>
            <div class="w-full md:w-7/12 text-center md:text-right space-y-4" data-aos="fade-right">
                <h3 class="font-[Pinyon_Script] text-5xl md:text-6xl text-stone-800">Furi Intan Rahayu</h3>
                <p class="font-[Playfair_Display] italic text-stone-500 text-lg">Putri bungsu dari Bpk. - & Ibu -</p>
                 <div class="pt-4 flex justify-center md:justify-end">
                     <a href="#" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-white border border-stone-200 text-stone-500 text-xs tracking-widest uppercase hover:bg-[#D4888D] hover:text-white hover:border-[#D4888D] transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                         @furiintan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#D4888D] text-xs font-bold tracking-[0.2em] uppercase block mb-2">The Journey</span>
            <h2 class="font-[Playfair_Display] text-4xl text-stone-800 italic">Love Story</h2>
        </div>

        <div class="relative">
             <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-stone-200 md:-translate-x-1/2"></div>
             
             <!-- Story Item 1 -->
             <div class="relative flex flex-col md:flex-row items-center justify-between mb-12 group" data-aos="fade-up">
                 <div class="w-full md:w-5/12 pl-12 md:pl-0 md:pr-12 md:text-right">
                     <span class="inline-block px-3 py-1 bg-[#D4888D]/10 text-[#D4888D] text-[10px] font-bold tracking-widest rounded-full mb-3">2020</span>
                     <h4 class="font-[Playfair_Display] text-xl mb-2 text-stone-800">Pertemuan Pertama</h4>
                     <p class="text-sm font-light text-stone-500 leading-relaxed">Bertemu di perpustakaan kampus, sebuah pertemuan tak sengaja yang menjadi awal cerita kami.</p>
                 </div>
                 <div class="absolute left-4 md:left-1/2 -translate-x-1/2 w-3 h-3 bg-white border-2 border-[#D4888D] rounded-full z-10 group-hover:bg-[#D4888D] transition-colors"></div>
                 <div class="w-full md:w-5/12"></div>
             </div>

             <!-- Story Item 2 -->
             <div class="relative flex flex-col md:flex-row items-center justify-between group" data-aos="fade-up" data-aos-delay="100">
                 <div class="w-full md:w-5/12 order-last md:order-first"></div>
                 <div class="absolute left-4 md:left-1/2 -translate-x-1/2 w-3 h-3 bg-white border-2 border-[#D4888D] rounded-full z-10 group-hover:bg-[#D4888D] transition-colors"></div>
                 <div class="w-full md:w-5/12 pl-12 md:pl-12">
                      <span class="inline-block px-3 py-1 bg-[#D4888D]/10 text-[#D4888D] text-[10px] font-bold tracking-widest rounded-full mb-3">2025</span>
                     <h4 class="font-[Playfair_Display] text-xl mb-2 text-stone-800">Lamaran</h4>
                     <p class="text-sm font-light text-stone-500 leading-relaxed">Setelah 5 tahun bersama, kami memutuskan untuk melangkah ke jenjang yang lebih serius.</p>
                 </div>
             </div>
        </div>
    </div>
</section>

<!-- Countdown Section -->
<section class="py-20 bg-[#2D2D2D] text-white relative overflow-hidden">
     <!-- Texture Overlay -->
    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/black-linen.png');"></div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <h3 class="font-[Pinyon_Script] text-3xl md:text-5xl text-[#E5CWB8] mb-12 text-[#D4888D] drop-shadow-lg">Menuju Hari Bahagia</h3>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-12 max-w-4xl mx-auto font-[Playfair_Display]">
            <div class="text-center p-4 border border-white/10 rounded-2xl backdrop-blur-sm bg-white/5 relative group">
                <span id="days" class="block text-4xl md:text-6xl font-italic mb-2 group-hover:text-[#D4888D] transition-colors">00</span>
                <span class="text-[10px] md:text-xs font-[Poppins] tracking-[0.3em] uppercase opacity-60">Hari</span>
            </div>
            <div class="text-center p-4 border border-white/10 rounded-2xl backdrop-blur-sm bg-white/5 relative group">
                <span id="hours" class="block text-4xl md:text-6xl font-italic mb-2 group-hover:text-[#D4888D] transition-colors">00</span>
                <span class="text-[10px] md:text-xs font-[Poppins] tracking-[0.3em] uppercase opacity-60">Jam</span>
            </div>
            <div class="text-center p-4 border border-white/10 rounded-2xl backdrop-blur-sm bg-white/5 relative group">
                <span id="minutes" class="block text-4xl md:text-6xl font-italic mb-2 group-hover:text-[#D4888D] transition-colors">00</span>
                <span class="text-[10px] md:text-xs font-[Poppins] tracking-[0.3em] uppercase opacity-60">Menit</span>
            </div>
            <div class="text-center p-4 border border-white/10 rounded-2xl backdrop-blur-sm bg-white/5 relative group">
                <span id="seconds" class="block text-4xl md:text-6xl font-italic mb-2 group-hover:text-[#D4888D] transition-colors">00</span>
                <span class="text-[10px] md:text-xs font-[Poppins] tracking-[0.3em] uppercase opacity-60">Detik</span>
            </div>
        </div>
    </div>
</section>

<!-- Event Details Section -->
<section class="py-24 bg-[#FDFBF7] relative">
     <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');"></div>
    
    <div class="container mx-auto px-6 max-w-5xl relative z-10">
         <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="font-[Playfair_Display] text-4xl md:text-5xl text-stone-800 italic relative inline-block">
                Rangkaian Acara
                <div class="absolute -bottom-4 left-0 w-full h-1 bg-[#D4888D]/20 rounded-full"></div>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 md:gap-12">
            <!-- Akad Card -->
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] md:rounded-[3rem] border border-stone-100 shadow-[0_20px_40px_-10px_rgba(0,0,0,0.08)] text-center group hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden" data-aos="fade-up">
                 <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4888D]/5 rounded-bl-[100%] transition-colors group-hover:bg-[#D4888D]/10"></div>
                 
                 <div class="w-20 h-20 mx-auto bg-[#FDFBF7] rounded-[2rem] flex items-center justify-center text-[#D4888D] mb-8 border border-[#D4888D]/20 shadow-sm relative z-10 group-hover:scale-110 transition-transform">
                     <span class="font-[Pinyon_Script] text-4xl">A</span>
                 </div>
                 
                <h3 class="font-[Playfair_Display] text-3xl mb-3 font-italic text-stone-800">Akad Nikah</h3>
                <div class="w-16 h-px bg-[#D4888D]/30 mx-auto my-6"></div>
                
                <div class="space-y-3 mb-8 font-[Poppins]">
                    <p class="text-xl font-medium text-stone-800">08:00 - 10:00 WIB</p>
                    <p class="text-sm text-stone-500 uppercase tracking-widest">Jumat, 26 Desember 2025</p>
                </div>
                
                <div class="bg-[#F9F9F9] rounded-2xl p-6 mb-8 border border-stone-100">
                    <p class="font-bold text-stone-700 mb-1">Masjid Raya Istiqlal</p>
                    <p class="text-xs text-stone-500 leading-relaxed max-w-[220px] mx-auto">Jl. Taman Wijaya Kusuma, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat</p>
                </div>
                
                 <a href="https://goo.gl/maps/example" class="inline-flex items-center gap-2 px-8 py-3 bg-stone-800 text-white rounded-full text-xs tracking-[0.2em] uppercase hover:bg-[#D4888D] hover:shadow-lg hover:shadow-[#D4888D]/30 transition-all">
                    <span>Google Maps</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>
            </div>

            <!-- Resepsi Card -->
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] md:rounded-[3rem] border border-stone-100 shadow-[0_20px_40px_-10px_rgba(0,0,0,0.08)] text-center group hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                 <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4888D]/5 rounded-bl-[100%] transition-colors group-hover:bg-[#D4888D]/10"></div>
                 
                 <div class="w-20 h-20 mx-auto bg-[#FDFBF7] rounded-[2rem] flex items-center justify-center text-[#D4888D] mb-8 border border-[#D4888D]/20 shadow-sm relative z-10 group-hover:scale-110 transition-transform">
                     <span class="font-[Pinyon_Script] text-4xl">R</span>
                 </div>
                 
                <h3 class="font-[Playfair_Display] text-3xl mb-3 font-italic text-stone-800">Resepsi</h3>
                <div class="w-16 h-px bg-[#D4888D]/30 mx-auto my-6"></div>
                
                <div class="space-y-3 mb-8 font-[Poppins]">
                    <p class="text-xl font-medium text-stone-800">11:00 - 13:00 WIB</p>
                    <p class="text-sm text-stone-500 uppercase tracking-widest">Jumat, 26 Desember 2025</p>
                </div>
                
                 <div class="bg-[#F9F9F9] rounded-2xl p-6 mb-8 border border-stone-100">
                    <p class="font-bold text-stone-700 mb-1">Hotel Indonesia Kempinski</p>
                    <p class="text-xs text-stone-500 leading-relaxed max-w-[220px] mx-auto">Menteng, Jakarta Pusat, DKI Jakarta</p>
                </div>
                
                 <a href="https://goo.gl/maps/example" class="inline-flex items-center gap-2 px-8 py-3 bg-stone-800 text-white rounded-full text-xs tracking-[0.2em] uppercase hover:bg-[#D4888D] hover:shadow-lg hover:shadow-[#D4888D]/30 transition-all">
                    <span>Google Maps</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Runtuyan Adat Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Texture Overlay -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');"></div>

    <div class="container mx-auto px-6 max-w-4xl relative z-10">
        <div class="text-center mb-16">
            <span class="text-[#D4888D] text-xs font-bold tracking-[0.2em] uppercase block mb-3">Ceremonial Timeline</span>
            <h2 class="font-[Playfair_Display] text-3xl md:text-4xl text-stone-800 italic" data-aos="fade-up">Runtuyan Adat</h2>
        </div>
        
        <div class="relative space-y-12 pl-12 md:pl-0">
             <!-- Vertical Line -->
             <div class="absolute left-4 top-2 bottom-2 w-px bg-stone-200 md:left-1/2 md:-translate-x-1/2"></div>
             
             <!-- Item 1: Siraman -->
             <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between" data-aos="fade-up">
                 <div class="w-full md:w-5/12 md:text-right md:pr-12 mb-2 md:mb-0">
                     <h4 class="font-[Playfair_Display] text-2xl text-stone-800 italic">Siraman</h4>
                     <p class="font-[Poppins] text-sm text-stone-400 tracking-wider">08.00 WIB</p>
                 </div>
                  <div class="absolute left-[-2rem] md:left-1/2 -translate-x-[5px] md:-translate-x-1/2 w-8 h-8 bg-white border border-[#D4888D] rounded-full z-10 flex items-center justify-center shadow-sm">
                    <div class="w-2 h-2 bg-[#D4888D] rounded-full"></div>
                  </div>
                 <div class="w-full md:w-5/12 md:pl-12">
                     <p class="text-sm text-stone-500 font-light leading-relaxed">Prosesi pembersihan diri lahir batin sebelum melangkah ke jenjang pernikahan.</p>
                 </div>
             </div>

             <!-- Item 2: Seserahan -->
             <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between" data-aos="fade-up" data-aos-delay="100">
                 <div class="w-full md:w-5/12 md:text-right md:pr-12 md:order-1 mb-2 md:mb-0">
                     <p class="text-sm text-stone-500 font-light leading-relaxed md:text-right">Penyerahan tanda kasih keluarga sebagai simbol keseriusan.</p>
                 </div>
                  <div class="absolute left-[-2rem] md:left-1/2 -translate-x-[5px] md:-translate-x-1/2 w-8 h-8 bg-white border border-[#D4888D] rounded-full z-10 flex items-center justify-center shadow-sm">
                    <div class="w-2 h-2 bg-[#D4888D] rounded-full"></div>
                  </div>
                 <div class="w-full md:w-5/12 md:pl-12 md:order-2">
                     <h4 class="font-[Playfair_Display] text-2xl text-stone-800 italic">Seserahan</h4>
                     <p class="font-[Poppins] text-sm text-stone-400 tracking-wider">10.00 WIB</p>
                 </div>
             </div>

             <!-- Item 3: Upacara Adat -->
             <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between" data-aos="fade-up" data-aos-delay="200">
                 <div class="w-full md:w-5/12 md:text-right md:pr-12 mb-2 md:mb-0">
                     <h4 class="font-[Playfair_Display] text-2xl text-stone-800 italic">Upacara Adat</h4>
                     <p class="font-[Poppins] text-sm text-stone-400 tracking-wider">11.00 WIB</p>
                 </div>
                  <div class="absolute left-[-2rem] md:left-1/2 -translate-x-[5px] md:-translate-x-1/2 w-8 h-8 bg-white border border-[#D4888D] rounded-full z-10 flex items-center justify-center shadow-sm">
                    <div class="w-2 h-2 bg-[#D4888D] rounded-full"></div>
                  </div>
                 <div class="w-full md:w-5/12 md:pl-12">
                     <p class="text-sm text-stone-500 font-light leading-relaxed">Rangkaian upacara adat Sawer, Huap Lingkung, dan Pelepasan Merpati.</p>
                 </div>
             </div>
        </div>
    </div>
</section>

<!-- Maps Section with Iframe -->
<section class="py-24 bg-[#FDFBF7] relative">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');"></div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
         <h2 class="font-[Playfair_Display] text-3xl md:text-4xl text-stone-800 italic mb-10" data-aos="fade-down">Peta Lokasi</h2>
         
         <div class="max-w-5xl mx-auto relative group" data-aos="zoom-in">
             <!-- Decorative Border -->
             <div class="absolute -inset-4 border-2 border-[#D4888D]/20 rounded-[2.5rem] pointer-events-none"></div>
             <div class="absolute -inset-2 border border-[#D4888D]/10 rounded-[2.3rem] pointer-events-none"></div>
             
             <div class="h-96 md:h-[500px] bg-stone-200 rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white relative z-10">
                 <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28318687786!2d106.7441893325603!3d-6.22957121652758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Special%20Capital%20Region%20of%20Jakarta!5e0!3m2!1sen!2sid!4v1655095325852!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0; filter: grayscale(1) contrast(1.2) sepia(0.2);" allowfullscreen="" loading="lazy">
                </iframe>
             </div>
             
             <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 z-20">
                 <a href="https://goo.gl/maps/example" class="px-8 py-3 bg-[#D4888D] text-white rounded-full text-xs font-bold tracking-widest uppercase shadow-lg hover:bg-[#c07075] transition-colors flex items-center gap-2">
                     <span>Buka Peta</span>
                     <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                 </a>
             </div>
         </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-[#D4888D] text-xs font-bold tracking-[0.2em] uppercase block mb-2">Our Moments</span>
            <h2 class="font-[Playfair_Display] text-4xl text-stone-800 italic">Galeri Foto</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto auto-rows-[200px] md:auto-rows-[300px]">
            <!-- Large Item -->
            <div class="col-span-2 row-span-2 relative group rounded-[2rem] overflow-hidden cursor-pointer" data-aos="fade-up">
                 <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                 <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-8">
                     <p class="text-white font-[Playfair_Display] italic text-xl translate-y-4 group-hover:translate-y-0 transition duration-500">The Beginning</p>
                 </div>
            </div>
            
            <!-- Standard Items -->
            <div class="relative group rounded-[2rem] overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                 <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                 <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            </div>
            
            <div class="relative group rounded-[2rem] overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                 <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                 <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            </div>

            <!-- Tall Item -->
            <div class="row-span-2 relative group rounded-[2rem] overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                 <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                 <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            </div>

            <!-- Wide Item -->
             <div class="col-span-2 md:col-span-1 relative group rounded-[2rem] overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                 <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                 <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            </div>
        </div>
    </div>
</section>

<!-- RSVP & Gifts (Tabbed Layout Concept) -->
<section class="py-24 bg-[#FDFBF7]" id="rsvp">
    <div class="container mx-auto px-6 max-w-4xl">
         <div class="bg-white rounded-[3rem] shadow-xl overflow-hidden border border-stone-100" data-aos="fade-up">
             <div class="grid md:grid-cols-2">
                 <!-- Form Side -->
                 <div class="p-8 md:p-12">
                     <div class="mb-8">
                        <h2 class="font-[Playfair_Display] text-3xl text-stone-800 italic">Konfirmasi & Doa</h2>
                        <p class="text-sm text-stone-500 mt-2 font-light">Mohon isi form di bawah ini untuk konfirmasi kehadiran Anda.</p>
                     </div>

                     <form class="space-y-4">
                        <input type="text" placeholder="Nama Lengkap" class="w-full px-5 py-3 bg-[#F9F9F9] rounded-xl border border-stone-100 focus:border-[#D4888D] outline-none text-stone-700 placeholder:text-stone-400 transition-colors text-sm">
                        <input type="text" placeholder="No. WhatsApp" class="w-full px-5 py-3 bg-[#F9F9F9] rounded-xl border border-stone-100 focus:border-[#D4888D] outline-none text-stone-700 placeholder:text-stone-400 transition-colors text-sm">
                        <select class="w-full px-5 py-3 bg-[#F9F9F9] rounded-xl border border-stone-100 focus:border-[#D4888D] outline-none text-stone-600 text-sm">
                             <option value="" disabled selected>Konfirmasi Kehadiran</option>
                             <option>Hadir</option>
                             <option>Tidak Hadir</option>
                             <option>Mungkin Hadir</option>
                         </select>
                        <textarea placeholder="Tuliskan ucapan & doa..." class="w-full px-5 py-3 bg-[#F9F9F9] rounded-xl border border-stone-100 focus:border-[#D4888D] outline-none text-stone-700 placeholder:text-stone-400 h-28 text-sm resize-none"></textarea>
                        
                        <button type="button" class="w-full py-3.5 bg-stone-800 text-white rounded-xl font-medium tracking-widest uppercase text-xs hover:bg-[#D4888D] transition-all hover:shadow-lg">Kirim Konfirmasi</button>
                     </form>
                 </div>
                 
                 <!-- List Side (Max 3 Items) -->
                 <div class="bg-[#FAFAFA] p-8 md:p-12 border-t md:border-t-0 md:border-l border-stone-100">
                     <h3 class="font-[Playfair_Display] text-xl text-stone-800 italic mb-6">Ucapan & Doa Terbaru</h3>
                     
                     <div class="space-y-6">
                         <!-- Item 1 -->
                         <div class="pb-6 border-b border-stone-200 last:border-0 last:pb-0">
                             <div class="flex justify-between items-start mb-2">
                                 <span class="font-bold text-stone-700 text-sm">Rina & Dedi</span>
                                 <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full font-medium">Hadir</span>
                             </div>
                             <p class="text-xs text-stone-500 leading-relaxed italic">"Selamat menempuh hidup baru Juna & Furi! Semoga menjadi keluarga yang sakinah, mawaddah, warahmah."</p>
                             <p class="text-[10px] text-stone-400 mt-2">10 Menit yang lalu</p>
                         </div>
                         
                         <!-- Item 2 -->
                         <div class="pb-6 border-b border-stone-200 last:border-0 last:pb-0">
                             <div class="flex justify-between items-start mb-2">
                                 <span class="font-bold text-stone-700 text-sm">Keluarga Bpk. Santoso</span>
                                 <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full font-medium">Hadir</span>
                             </div>
                             <p class="text-xs text-stone-500 leading-relaxed italic">"Barakallahu lakuma. Bahagia selalu yaa!"</p>
                             <p class="text-[10px] text-stone-400 mt-2">25 Menit yang lalu</p>
                         </div>

                         <!-- Item 3 -->
                          <div class="pb-6 border-b border-stone-200 last:border-0 last:pb-0">
                             <div class="flex justify-between items-start mb-2">
                                 <span class="font-bold text-stone-700 text-sm">Andi Pratama</span>
                                 <span class="text-[10px] bg-yellow-100 text-yellow-600 px-2 py-0.5 rounded-full font-medium">Mungkin Hadir</span>
                             </div>
                             <p class="text-xs text-stone-500 leading-relaxed italic">"Happy Wedding bro Juna! Lancar sampai hari H."</p>
                             <p class="text-[10px] text-stone-400 mt-2">1 Jam yang lalu</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</section>

<!-- Gift Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-6 max-w-4xl text-center">
        <div class="mb-16" data-aos="fade-up">
             <span class="text-[#D4888D] text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase block mb-3">Wedding Gift</span>
             <h2 class="font-[Playfair_Display] text-3xl md:text-4xl text-stone-800 italic">Tanda Kasih</h2>
             <p class="text-stone-500 font-light mt-6 leading-relaxed max-w-lg mx-auto text-sm md:text-base">
                Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.
             </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="100">
             <!-- Bank Card 1: Rose Gold Theme -->
             <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_20px_50px_-12px_rgba(212,136,141,0.3)] group hover:-translate-y-2 transition-transform duration-500">
                 <div class="absolute inset-0 bg-gradient-to-br from-[#D4888D] via-[#E5A8AD] to-[#D4888D]"></div>
                 <!-- Holographic Effect overlay -->
                 <div class="absolute inset-0 bg-gradient-to-tr from-white/10 to-transparent opacity-50"></div>
                 
                 <div class="relative p-8 text-left h-full flex flex-col justify-between text-white aspect-[1.58/1]">
                     <div class="flex justify-between items-start">
                         <div>
                            <span class="font-[Playfair_Display] text-2xl md:text-3xl italic tracking-wide block">BCA</span>
                            <span class="text-[10px] uppercase tracking-wider opacity-80">Bank Central Asia</span>
                         </div>
                         <svg width="40" height="30" viewBox="0 0 40 30" fill="none" class="opacity-80"><rect x="0" y="0" width="40" height="30" rx="4" fill="white" fill-opacity="0.2"/><path d="M10 10H15M10 14H18M10 18H13" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
                     </div>
                     
                     <div>
                         <div class="flex items-end justify-between mb-2">
                             <span id="rek-bca" class="text-xl md:text-2xl font-[Poppins] font-medium tracking-widest drop-shadow-sm">123 456 7890</span>
                             <button onclick="copyToClipboard('1234567890')" class="text-[10px] bg-white/20 hover:bg-white/30 px-3 py-1 rounded-full backdrop-blur-sm transition-colors uppercase tracking-wider">
                                 Salin
                             </button>
                         </div>
                         <p class="text-xs font-light tracking-wide opacity-90 uppercase">a.n Rizky Ramadhan</p>
                     </div>
                 </div>
             </div>

             <!-- Bank Card 2: Soft Stone Theme -->
             <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] group hover:-translate-y-2 transition-transform duration-500 border border-stone-100">
                 <div class="absolute inset-0 bg-[#FAFAFA]"></div>
                 <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');"></div>
                 
                 <div class="relative p-8 text-left h-full flex flex-col justify-between text-stone-800 aspect-[1.58/1]">
                     <div class="flex justify-between items-start">
                         <div>
                            <span class="font-[Playfair_Display] text-2xl md:text-3xl italic tracking-wide block text-[#D4888D]">Mandiri</span>
                            <span class="text-[10px] uppercase tracking-wider opacity-60">Bank Mandiri</span>
                         </div>
                         <svg width="40" height="30" viewBox="0 0 40 30" fill="none" class="opacity-80"><rect x="0" y="0" width="40" height="30" rx="4" fill="#D4888D" fill-opacity="0.1"/><path d="M10 10H15M10 14H18M10 18H13" stroke="#D4888D" stroke-width="2" stroke-linecap="round"/></svg>
                     </div>
                     
                     <div>
                         <div class="flex items-end justify-between mb-2">
                             <span id="rek-mandiri" class="text-xl md:text-2xl font-[Poppins] font-medium tracking-widest text-stone-700">098 765 4321</span>
                             <button onclick="copyToClipboard('0987654321')" class="text-[10px] bg-[#D4888D]/10 hover:bg-[#D4888D]/20 text-[#D4888D] px-3 py-1 rounded-full transition-colors uppercase tracking-wider">
                                 Salin
                             </button>
                         </div>
                         <p class="text-xs font-light tracking-wide text-stone-500 uppercase">a.n Furi Intan Rahayu</p>
                     </div>
                 </div>
             </div>
        </div>
        
        <div class="mt-12 text-center">
            <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20sudah%20mengirimkan%20hadiah." target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-stone-100 text-xs uppercase tracking-widest text-stone-600 hover:bg-[#D4888D] hover:text-white transition-all">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                Konfirmasi Kirim Hadiah
            </a>
        </div>
    </div>
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Nomor rekening berhasil disalin!');
            }, function(err) {
                console.error('Gagal menyalin: ', err);
            });
        }
    </script>
</section>

<!-- Additional Info -->
<section class="py-20 bg-white border-t border-stone-100">
    <div class="container mx-auto px-6 text-center">
        <h3 class="font-[Playfair_Display] italic text-2xl text-stone-800 mb-10">Informasi Tambahan</h3>
        <div class="flex flex-wrap justify-center gap-10 md:gap-20">
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-[#FDFBF7] rounded-[1.5rem] flex items-center justify-center text-[#D4888D] mb-4 group-hover:bg-[#D4888D] group-hover:text-white transition-colors duration-500 shadow-sm">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-stone-500 font-bold group-hover:text-[#D4888D] transition-colors">Protokol Kesehatan</span>
                <p class="text-[10px] text-stone-400 mt-2 max-w-[150px]">Wajib menggunakan masker & menjaga jarak</p>
            </div>
             <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-[#FDFBF7] rounded-[1.5rem] flex items-center justify-center text-[#D4888D] mb-4 group-hover:bg-[#D4888D] group-hover:text-white transition-colors duration-500 shadow-sm">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.2 6H3.8c-1 0-1.8.8-1.8 1.8v8.6c0 1 .8 1.8 1.8 1.8h16.4c1 0 1.8-.8 1.8-1.8V7.8c0-1-.8-1.8-1.8-1.8zM7 9v6M17 9v6M12 9v6" /></svg>
                </div>
                <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-stone-500 font-bold group-hover:text-[#D4888D] transition-colors">Dresscode</span>
                <p class="text-[10px] text-stone-400 mt-2 max-w-[150px]">Formal / Batik / Kebaya (Earth Tone)</p>
            </div>
             <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-[#FDFBF7] rounded-[1.5rem] flex items-center justify-center text-[#D4888D] mb-4 group-hover:bg-[#D4888D] group-hover:text-white transition-colors duration-500 shadow-sm">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15h-2v-6h2zm0-8h-2V7h2z"></path></svg>
                </div>
                <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-stone-500 font-bold group-hover:text-[#D4888D] transition-colors">Mohon Maaf</span>
                <p class="text-[10px] text-stone-400 mt-2 max-w-[150px]">Tanpa mengurangi rasa hormat, acara ini tanpa prasmanan</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-16 bg-[#1A1A1A] text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.05]" style="background-image: url('https://www.transparenttextures.com/patterns/black-linen.png');"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <p class="font-[Playfair_Display] italic text-stone-500 text-lg mb-4">Terima Kasih</p>
        <h2 class="font-[Pinyon_Script] text-5xl md:text-7xl mb-8 text-white">Juna & Furi</h2>
        
        <div class="flex justify-center items-center gap-6 mb-10 opacity-50">
             <div class="w-12 h-px bg-white"></div>
             <span class="text-xs tracking-[0.3em] uppercase">26 . 12 . 2025</span>
             <div class="w-12 h-px bg-white"></div>
        </div>
        
        <p class="text-stone-600 text-[10px] uppercase tracking-widest font-light">Created with Love by Undangan Digital</p>
    </div>
</footer>
@endsection