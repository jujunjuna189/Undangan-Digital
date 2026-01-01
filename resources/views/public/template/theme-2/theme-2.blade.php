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

<section id="hero" class="relative h-screen flex items-center justify-center overflow-hidden bg-stone-900">
    <!-- Immersive Background with Parallax Feel -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover object-center opacity-60 scale-105" alt="Background">
        <div class="absolute inset-0 bg-gradient-to-t from-stone-900 via-stone-900/40 to-black/30"></div>
        <!-- Subtle Batik Overlay Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat mix-blend-overlay"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 text-center px-4 w-full" data-aos="zoom-in" data-aos-duration="1500">
        
        <!-- Top Ornament (Subtle) -->
        <div class="flex justify-center mb-6 opacity-80">
             <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d4af37" stroke="none" />
             </svg>
        </div>

        <p class="font-sunda text-xs md:text-base uppercase tracking-[0.4em] text-[#d4af37] font-bold mb-2 md:mb-4 drop-shadow-md">
            The Wedding Of
        </p>
        
        <h1 class="text-6xl md:text-9xl font-serif text-white mb-4 italic drop-shadow-lg font-script leading-none">
            Juna <span class="text-[#d4af37] mx-1 md:mx-2">&</span> Furi
        </h1>
        
        <div class="flex justify-center items-center gap-4 mb-8 md:mb-12">
            <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
            <p class="text-stone-300 font-light tracking-[0.2em] text-[10px] md:text-sm uppercase">
                26 Desember 2025 • Jakarta
            </p>
            <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
        </div>

        <!-- Elegant Countdown -->
        <!-- Mobile: Compact Grid or Flex with reduced gap -->
        <div class="flex justify-center items-center gap-3 md:gap-12 text-center text-[#d4af37]" data-aos="fade-up" data-aos-delay="300">
            <div class="flex flex-col items-center">
                <span id="days" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-stone-400 mt-1">Hari</span>
            </div>
            <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
            <div class="flex flex-col items-center">
                <span id="hours" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-stone-400 mt-1">Jam</span>
            </div>
             <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
            <div class="flex flex-col items-center">
                <span id="minutes" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-stone-400 mt-1">Menit</span>
            </div>
             <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
            <div class="flex flex-col items-center">
                <span id="seconds" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-stone-400 mt-1">Detik</span>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute -bottom-24 md:-bottom-20 left-1/2 transform -translate-x-1/2 animate-bounce opacity-60">
            <span class="text-[10px] text-white tracking-widest uppercase mb-2 block opacity-80">Scroll</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1" class="mx-auto">
                <path d="M7 13L12 18L17 13M7 6L12 11L17 6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</section>

<section class="py-24 bg-white text-center px-6 relative">
    <div class="max-w-4xl mx-auto" data-aos="zoom-in">
        <div class="mb-6 flex justify-center" data-aos="fade-down">
            <h2 class="text-3xl md:text-5xl text-[#d4af37] select-none" style="font-family: sans-serif;">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h2>
        </div>
        <p class="text-stone-600 italic leading-loose text-lg md:text-xl font-light mb-8" data-aos="fade-up" data-aos-delay="100">
            "Mugia ridho Allah SWT nyarengan lengkah simkuring sakulawargi, nalika ngahijikeun dua hate dina beungkeutan suci pernikahan."
        </p>
        <div class="h-px w-20 bg-[#d4af37] mx-auto"></div>
    </div>
</section>

<section class="py-24 md:py-32 bg-stone-50 overflow-hidden relative">
    <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Groom -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-10 md:gap-20 mb-24 md:mb-32">
            <div class="w-full md:w-5/12 max-w-sm" data-aos="fade-right">
                <div class="relative group">
                    <div class="absolute inset-0 border-2 border-[#d4af37] translate-x-3 translate-y-3 transition-transform duration-500 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                    <div class="relative overflow-hidden w-full aspect-[3/4]">
                        <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0">
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-6/12 text-center md:text-left space-y-4" data-aos="fade-left">
                <div class="inline-block border-b border-[#d4af37] pb-1 mb-2">
                    <h3 class="font-sunda text-sm md:text-base tracking-[0.3em] font-bold uppercase text-[#d4af37]">Calon Panganten Pameget</h3>
                </div>
                <h2 class="text-4xl md:text-6xl font-serif text-stone-800 italic leading-tight">Ujun Junaedi<span class="text-2xl md:text-3xl not-italic block md:inline font-sans font-light mt-1 md:mt-0 text-stone-400">, S.T.</span></h2>
                
                <p class="text-stone-600 font-light leading-relaxed pt-4">
                    Putra cikal ti pasangan anu dipihormat:<br>
                    <span class="text-stone-900 font-bold block mt-1 text-lg">Emuh</span>
                    <span class="text-xs text-[#d4af37] uppercase tracking-widest my-1 block">&</span>
                    <span class="text-stone-900 font-bold block text-lg">Neni Rohaeni</span>
                </p>
                
                <div class="pt-6">
                    <a href="#" class="inline-flex items-center gap-2 text-stone-500 hover:text-[#d4af37] transition-colors text-sm uppercase tracking-widest">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        @juna_
                    </a>
                </div>
            </div>
        </div>

        <!-- Bride -->
        <div class="flex flex-col md:flex-row-reverse items-center justify-center gap-10 md:gap-20">
             <div class="w-full md:w-5/12 max-w-sm" data-aos="fade-left">
                <div class="relative group">
                    <div class="absolute inset-0 border-2 border-[#d4af37] -translate-x-3 translate-y-3 transition-transform duration-500 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                     <div class="relative overflow-hidden w-full aspect-[3/4]">
                        <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0">
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-6/12 text-center md:text-right space-y-4" data-aos="fade-right">
                 <div class="inline-block border-b border-[#d4af37] pb-1 mb-2">
                    <h3 class="font-sunda text-sm md:text-base tracking-[0.3em] font-bold uppercase text-[#d4af37]">Calon Panganten Istri</h3>
                </div>
                <h2 class="text-4xl md:text-6xl font-serif text-stone-800 italic leading-tight">Furi Intan Rahayu<span class="text-2xl md:text-3xl not-italic block md:inline font-sans font-light mt-1 md:mt-0 text-stone-400">, S.E.</span></h2>
                
                 <p class="text-stone-600 font-light leading-relaxed pt-4">
                    Putri bungsu ti pasangan anu dipihormat:<br>
                    <span class="text-stone-900 font-bold block mt-1 text-lg">?</span>
                    <span class="text-xs text-[#d4af37] uppercase tracking-widest my-1 block">&</span>
                    <span class="text-stone-900 font-bold block text-lg">?</span>
                </p>

                <div class="pt-6">
                    <a href="#" class="inline-flex items-center gap-2 text-stone-500 hover:text-[#d4af37] transition-colors text-sm uppercase tracking-widest flex-row-reverse md:flex-row md:flex-row-reverse">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        @fintanrhy
                    </a>
                </div>
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
<section id="story" class="py-24 md:py-32 bg-stone-50 overflow-hidden relative">
    <div class="ornament-corner ornament-tl"></div>
    <div class="ornament-corner ornament-br"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 md:mb-24" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-serif italic text-stone-800 mb-4">Carita Cinta</h2>
             <div class="flex justify-center items-center gap-4 opacity-60 mb-4">
                <div class="h-px w-12 bg-[#d4af37]"></div>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#d4af37">
                   <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <div class="h-px w-12 bg-[#d4af37]"></div>
            </div>
            <p class="font-sunda text-xs md:text-sm text-[#d4af37] uppercase tracking-widest">Perjalanan Kasih</p>
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Central Line -->
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-[#d4af37]/0 via-[#d4af37]/50 to-[#d4af37]/0 md:transform md:-translate-x-1/2"></div>

            <div class="space-y-12 md:space-y-0">
                <!-- Item 1: Pertemuan -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full group">
                    <!-- Left (Content) -->
                    <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0" data-aos="fade-right">
                        <div class="bg-white p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl shadow-[0_5px_20px_rgba(0,0,0,0.03)] border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                             <div class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform"></div>
                            
                            <h3 class="font-serif text-xl md:text-2xl text-stone-800 italic mb-2">Pertemuan Pertama</h3>
                            <div class="inline-block bg-[rgba(212,175,55,0.1)] text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                Desember 2020
                            </div>
                            <p class="text-stone-600 font-light leading-relaxed text-sm">
                                "Di hiji acara réuni sakola, panon paamprok, hate ngageter. Awal mula carita urang duaan."
                            </p>
                        </div>
                    </div>
                    
                    <!-- Center Node -->
                    <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full bg-stone-50 border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="#d4af37">
                           <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </div>
                    
                    <!-- Right (Empty) -->
                    <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                </div>

                <!-- Item 2: Lamaran -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full group">
                    <!-- Left (Empty) -->
                    <div class="w-full md:w-5/12 pr-12 md:pr-12 hidden md:block"></div>
                    
                    <!-- Center Node -->
                    <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full bg-stone-50 border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500 bg-[#d4af37]">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                            <path d="M12,2a3,3,0,0,1,3,3v2.18A3,3,0,0,1,12,2Zm0,7a5,5,0,0,1,5-5V3a7,7,0,0,0-14,0V4a5,5,0,0,1,5,5Z" opacity="0.3"/>
                            <path d="M19,10H16.82a2.91,2.91,0,0,0-1.25-1.73l-1.3-3.1a1,1,0,0,0-1.84,0l-1.3,3.1A2.91,2.91,0,0,0,9.82,10H5a3,3,0,0,0-3,3v6a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A3,3,0,0,0,19,10ZM12,6.5l.63,1.5H11.37Zm-1,8a1,1,0,1,1,1,1A1,1,0,0,1,11,14.5Z"/>
                        </svg>
                    </div>
                    
                    <!-- Right (Content) -->
                     <div class="w-full md:w-5/12 pl-12 md:pl-12" data-aos="fade-left">
                         <div class="bg-white p-6 md:p-8 rounded-tl-3xl rounded-br-3xl shadow-[0_5px_20px_rgba(0,0,0,0.03)] border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                             <div class="absolute top-4 -left-3 hidden md:block w-6 h-6 bg-[#d4af37]/10 rotate-45 transform"></div>
                            
                            <h3 class="font-serif text-xl md:text-2xl text-stone-800 italic mb-2">Lamaran</h3>
                             <div class="inline-block bg-[rgba(212,175,55,0.1)] text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                Agustus 2024
                            </div>
                             <p class="text-stone-600 font-light leading-relaxed text-sm">
                                "Niat suci di baledog ku dua kulawarga, ngabeungkeut jangji pasini pikeun ngahiji dina ikatan suci."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- Bottom Ornament -->
            <div class="flex justify-center mt-16 md:mt-24 opacity-60" data-aos="fade-up">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="py-24 md:py-32 bg-[#fcfbf7] text-center relative overflow-hidden">
     <!-- Background Pattern -->
     <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat mix-blend-multiply"></div>
     
     <div class="container mx-auto px-6 relative z-10">
        <div class="mb-16 md:mb-20" data-aos="fade-down">
            <h2 class="text-4xl md:text-6xl font-serif italic text-stone-800 mb-4">Galeri Potret</h2>
            <div class="flex justify-center items-center gap-3 mb-4 opacity-70">
                 <div class="h-px w-8 bg-[#d4af37]"></div>
                 <div class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></div>
                 <div class="h-px w-8 bg-[#d4af37]"></div>
            </div>
            <p class="font-sunda text-xs md:text-sm text-[#d4af37] uppercase tracking-widest font-bold">Momen Kabagjaan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 md:auto-rows-[280px]">
            <!-- Main Portrait (Left) -->
             <div class="md:col-span-2 md:row-span-2 group relative" data-aos="fade-right">
                <div class="w-full h-full bg-white p-3 md:p-4 shadow-xl rounded-sm rotate-1 transition-all duration-500 group-hover:rotate-0 group-hover:scale-[1.02] group-hover:shadow-2xl">
                    <div class="relative w-full h-full overflow-hidden aspect-[4/5] md:aspect-auto">
                        <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover transform transition duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <svg class="text-white w-6 h-6 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Right 1 -->
             <div class="md:col-span-1 md:row-span-1 group relative" data-aos="fade-down" data-aos-delay="100">
                <div class="w-full h-full bg-white p-3 shadow-lg rounded-sm -rotate-2 transition-all duration-500 group-hover:rotate-0 group-hover:scale-[1.05] group-hover:shadow-xl">
                     <div class="relative w-full h-full overflow-hidden aspect-square md:aspect-auto">
                         <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover transform transition duration-1000 group-hover:scale-110">
                    </div>
                </div>
            </div>

            <!-- Top Right 2 -->
             <div class="md:col-span-1 md:row-span-1 group relative" data-aos="fade-down" data-aos-delay="200">
                 <div class="w-full h-full bg-white p-3 shadow-lg rounded-sm rotate-2 transition-all duration-500 group-hover:rotate-0 group-hover:scale-[1.05] group-hover:shadow-xl">
                    <div class="relative w-full h-full overflow-hidden aspect-square md:aspect-auto">
                         <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover transform transition duration-1000 group-hover:scale-110">
                    </div>
                 </div>
            </div>

            <!-- Bottom Wide -->
             <div class="md:col-span-2 md:row-span-1 group relative" data-aos="fade-up" data-aos-delay="300">
                 <div class="w-full h-full bg-white p-3 shadow-lg rounded-sm transition-all duration-500 group-hover:-translate-y-1 group-hover:shadow-xl">
                    <div class="relative w-full h-full overflow-hidden aspect-video md:aspect-auto">
                         <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full h-full object-cover transform transition duration-1000 group-hover:scale-110">
                    </div>
                 </div>
            </div>
        </div>
     </div>
</section>

<section id="maps" class="py-24 md:py-32 bg-stone-100 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-12 md:mb-20" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-serif italic text-stone-800 mb-4">Peta Lokasi</h2>
             <div class="flex justify-center items-center gap-3 mb-4 opacity-70">
                 <div class="h-px w-8 bg-[#d4af37]"></div>
                 <span class="text-[#d4af37] text-xl">❦</span>
                 <div class="h-px w-8 bg-[#d4af37]"></div>
            </div>
            <p class="text-stone-500 font-light tracking-widest uppercase text-xs md:text-sm">Mugia tiasa sumping dina waktosna</p>
        </div>
        
        <div class="bg-white shadow-2xl overflow-hidden max-w-5xl mx-auto border border-[#d4af37]/20 relative">
             <!-- Gold Accent Line -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#d4af37] via-[#f3e5ab] to-[#d4af37]"></div>

            <div class="flex flex-col md:flex-row h-full">
                <!-- Info Side -->
                <div class="w-full md:w-1/3 p-8 md:p-12 flex flex-col justify-center bg-stone-50/50" data-aos="fade-right">
                    <div class="space-y-8 text-center md:text-left">
                        <div>
                            <h3 class="font-sunda text-[#d4af37] text-lg font-bold mb-2">Resepsi & Akad</h3>
                            <h4 class="font-serif text-2xl md:text-3xl text-stone-800 italic mb-4">Hotel Indonesia Kempinski</h4>
                            <p class="text-stone-600 font-light text-sm leading-relaxed">
                                Jl. M.H. Thamrin No.1,<br>
                                Menteng, Jakarta Pusat,<br>
                                DKI Jakarta 10310
                            </p>
                        </div>
                        
                        <div class="h-px w-full bg-[#d4af37]/20"></div>

                        <a href="https://goo.gl/maps/example" target="_blank" class="group inline-flex items-center justify-center gap-3 bg-stone-800 text-white px-8 py-4 rounded-none uppercase tracking-widest text-xs font-bold hover:bg-[#d4af37] hover:text-white transition-all duration-300 shadow-lg w-full">
                            <span>Buka Google Maps</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Map Side -->
                <div class="w-full md:w-2/3 relative min-h-[400px]" data-aos="fade-left">
                    <div class="absolute inset-4 border border-[#d4af37]/30 pointer-events-none z-10"></div>
                     <!-- Placeholder Map -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28318687786!2d106.7441893325603!3d-6.22957121652758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Special%20Capital%20Region%20of%20Jakarta!5e0!3m2!1sen!2sid!4v1655095325852!5m2!1sen!2sid" 
                        width="100%" height="100%" style="border:0; filter: grayscale(20%) contrast(90%);" allowfullscreen="" loading="lazy" class="absolute inset-0 w-full h-full">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gifts" class="py-24 md:py-32 bg-stone-900 text-white relative overflow-hidden">
    <!-- Batik Pattern Overlay for Dark Background -->
    <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat mix-blend-overlay"></div>

    <div class="ornament-corner ornament-tl border-[#d4af37]/50"></div>
    <div class="ornament-corner ornament-tr border-[#d4af37]/50"></div>
    <div class="ornament-corner ornament-bl border-[#d4af37]/50"></div>
    <div class="ornament-corner ornament-br border-[#d4af37]/50"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="mb-16" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-serif italic text-[#d4af37] mb-6">Tanda Kanyaah</h2>
            <div class="flex justify-center items-center gap-3 mb-6 opacity-60">
                 <div class="h-px w-12 bg-[#d4af37]"></div>
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                    <path d="M20 12v10H4V12M22 7H2v5h20V7M12 22V7M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
                 </svg>
                 <div class="h-px w-12 bg-[#d4af37]"></div>
            </div>
            <p class="max-w-xl mx-auto text-stone-300 font-light leading-relaxed">
                Tanpa ngirangan rasa hormat, kanggo para wargi anu bade masihan tanda kanyaah ka calon panganten, tiasa dikirim ka:
            </p>
        </div>

        <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-12 max-w-4xl mx-auto">
            <!-- Bank 1: BCA -->
            <div class="w-full md:w-1/2 group perspective" data-aos="flip-left">
                <div class="relative w-full aspect-[1.586/1] bg-gradient-to-br from-[#1e1e1e] to-[#0a0a0a] rounded-xl border border-[#d4af37]/30 shadow-2xl p-6 md:p-8 flex flex-col justify-between overflow-hidden transition-transform duration-500 group-hover:scale-[1.02]">
                     <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat mix-blend-overlay"></div>
                     <!-- Shine Effect -->
                     <div class="absolute -inset-full top-0 block h-full w-1/2 -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-10 group-hover:animate-shine left-[-100%]"></div>
                     
                    <div class="flex justify-between items-start relative z-10">
                         <div class="w-12 h-8 bg-gradient-to-r from-yellow-200 to-yellow-500 rounded flex items-center justify-center shadow-inner">
                            <div class="w-8 h-px bg-black/20 mb-px"></div>
                            <div class="w-8 h-px bg-black/20 mt-px"></div>
                         </div>
                        <span class="text-xl md:text-2xl font-bold font-serif italic text-white tracking-widest">BCA</span>
                    </div>
                    
                    <div class="relative z-10 text-left">
                        <p class="text-[10px] text-[#d4af37] uppercase tracking-widest mb-1 opacity-70">Nomor Rekening</p>
                         <div class="flex items-center gap-3">
                            <p id="rek-bca" class="text-xl md:text-2xl font-mono tracking-widest text-white">123 456 7890</p>
                            <button onclick="copyToClipboard('1234567890')" class="text-[#d4af37] hover:text-white transition p-1" title="Salin">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                            </button>
                        </div>
                        <p class="text-xs md:text-sm text-stone-400 mt-2 uppercase tracking-wide">A.N. Ujun Junaedi</p>
                    </div>
                </div>
            </div>

             <!-- Bank 2: MANDIRI -->
             <div class="w-full md:w-1/2 group perspective" data-aos="flip-right" data-aos-delay="100">
                 <div class="relative w-full aspect-[1.586/1] bg-gradient-to-bl from-[#2c2c2c] to-[#1a1a1a] rounded-xl border border-[#d4af37]/30 shadow-2xl p-6 md:p-8 flex flex-col justify-between overflow-hidden transition-transform duration-500 group-hover:scale-[1.02]">
                     <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat mix-blend-overlay"></div>
                      <!-- Shine Effect -->
                     <div class="absolute -inset-full top-0 block h-full w-1/2 -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-10 group-hover:animate-shine left-[-100%]"></div>
                     
                    <div class="flex justify-between items-start relative z-10">
                        <div class="w-12 h-8 bg-gradient-to-r from-stone-300 to-stone-500 rounded flex items-center justify-center shadow-inner">
                             <div class="w-8 h-px bg-black/20 mb-px"></div>
                            <div class="w-8 h-px bg-black/20 mt-px"></div>
                        </div>
                        <span class="text-xl md:text-2xl font-bold font-serif italic text-white tracking-widest">MANDIRI</span>
                    </div>
                    
                    <div class="relative z-10 text-left">
                        <p class="text-[10px] text-[#d4af37] uppercase tracking-widest mb-1 opacity-70">Nomor Rekening</p>
                         <div class="flex items-center gap-3">
                            <p id="rek-mandiri" class="text-xl md:text-2xl font-mono tracking-widest text-white">098 765 4321</p>
                             <button onclick="copyToClipboard('0987654321')" class="text-[#d4af37] hover:text-white transition p-1" title="Salin">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                            </button>
                        </div>
                        <p class="text-xs md:text-sm text-stone-400 mt-2 uppercase tracking-wide">A.N. Furi Intan Rahayu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gift Confirmation -->
        <div class="mt-12" data-aos="fade-up">
             <a href="https://wa.me/6281234567890?text=Halo%20kak%2C%20saya%20sudah%20mengirim%20hadiah." target="_blank" class="inline-flex items-center gap-2 text-[#d4af37] border-b border-[#d4af37] pb-1 hover:text-white hover:border-white transition-all text-xs uppercase tracking-widest">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                Konfirmasi Kirim Hadiah
            </a>
        </div>
    </div>
    
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Nomor rekening berhasil disalin: ' + text);
            }, function(err) {
                console.error('Gagal menyalin: ', err);
            });
        }
    </script>
</section>

<!-- Turut Mengundang Section -->
<section id="inviting" class="py-24 md:py-32 bg-stone-50 text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="mb-16 md:mb-20" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-serif italic text-stone-800 mb-6">Turut Mengundang</h2>
            <div class="flex justify-center items-center gap-4 opacity-60 mb-6">
                <div class="h-px w-16 bg-[#d4af37]"></div>
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <div class="h-px w-16 bg-[#d4af37]"></div>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto relative p-8 md:p-12" data-aos="zoom-in">
            <!-- Ornamental Border -->
            <div class="absolute inset-0 border border-[#d4af37]/40 pointer-events-none"></div>
            <div class="absolute inset-2 border border-[#d4af37]/20 pointer-events-none"></div>
            
            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-stone-50 px-4">
                 <svg width="30" height="30" viewBox="0 0 24 24" fill="#d4af37" class="opacity-80">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
            </div>

            <div class="grid md:grid-cols-2 gap-12 md:gap-20 text-stone-600">
                <!-- Group 1 -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center">
                        <h3 class="font-sunda text-[#d4af37] text-sm font-bold uppercase tracking-widest mb-4">Mempelai Pria</h3>
                         <div class="space-y-3 font-light leading-relaxed">
                            <p class="border-b border-stone-200 pb-2">Kel. Besar Bagoes Soeharto (Alm)</p>
                            <p class="border-b border-stone-200 pb-2">Kel. Besar H. Moersidi (Alm)</p>
                            <p class="border-b border-stone-200 pb-2">Kel. Besar R. Soedarsono (Alm)</p>
                        </div>
                    </div>
                </div>

                <!-- Group 2 -->
                 <div class="space-y-6">
                     <div class="flex flex-col items-center">
                        <h3 class="font-sunda text-[#d4af37] text-sm font-bold uppercase tracking-widest mb-4">Mempelai Wanita</h3>
                        <div class="space-y-3 font-light leading-relaxed">
                            <p class="border-b border-stone-200 pb-2">Kel. Besar H. Mukidjo (Alm)</p>
                            <p class="border-b border-stone-200 pb-2">Kel. Besar R. Koeslan (Alm)</p>
                            <p class="border-b border-stone-200 pb-2">Kel. Besar Moch. Zaeni (Alm)</p>
                        </div>
                    </div>
                </div>
            </div>
             
             <!-- Bottom Decoration -->
             <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 bg-stone-50 px-6">
                 <div class="flex gap-2">
                     <div class="w-2 h-2 rounded-full bg-[#d4af37]/60"></div>
                     <div class="w-2 h-2 rounded-full bg-[#d4af37]/60"></div>
                     <div class="w-2 h-2 rounded-full bg-[#d4af37]/60"></div>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- Protokol Keamanan & Petunjuk Section -->
<section class="py-24 bg-stone-100 text-center relative overflow-hidden">
     <div class="absolute inset-0 opacity-5 bg-[url('{{ asset('assets/image/batik-pattern.jpg') }}')] bg-repeat"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="mb-16">
            <h2 class="text-4xl md:text-5xl font-serif italic text-stone-800 mb-6" data-aos="fade-down">Petunjuk & Keamanan</h2>
             <div class="divider-kujang mb-6">
                <!-- SVG Kujang Icon for thematic separator -->
                 <svg width="30" height="45" viewBox="0 0 100 150" fill="#d4af37" class="mx-auto opacity-80">
                   <path d="M30,10 C40,5 60,5 70,20 C80,40 60,60 50,80 C40,100 60,120 70,140 L30,140 C40,120 20,100 20,80 C20,50 20,20 30,10 Z" /> 
                </svg>
            </div>
            <p class="text-stone-500 max-w-2xl mx-auto font-light leading-relaxed">
                Untuk kenyamanan dan kelancaran acara, kami mohon kerjasama Bapak/Ibu/Saudara/i untuk memperhatikan beberapa hal berikut:
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <!-- Item 1: Datang Tepat Waktu -->
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-[#d4af37]/20 group hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center" data-aos="fade-up" data-aos-delay="0">
                 <div class="absolute top-0 right-0 w-12 h-12 bg-[#d4af37] flex items-center justify-center rounded-bl-xl text-white font-bold font-serif text-lg">01</div>
                <div class="w-16 h-16 md:w-20 md:h-20 bg-stone-50 rounded-full flex items-center justify-center mb-6 group-hover:bg-[#d4af37]/10 transition-colors border border-stone-100">
                     <svg class="w-8 h-8 md:w-10 md:h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-800 text-sm md:text-base uppercase tracking-wider mb-2">Datang Tepat Waktu</h4>
                <p class="text-xs text-stone-500 font-light hidden md:block">Dimohon hadir tepat waktu sesuai jadwal acara.</p>
            </div>

             <!-- Item 2: Berpakaian Sopan -->
             <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-[#d4af37]/20 group hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                 <div class="absolute top-0 right-0 w-12 h-12 bg-[#d4af37] flex items-center justify-center rounded-bl-xl text-white font-bold font-serif text-lg">02</div>
                <div class="w-16 h-16 md:w-20 md:h-20 bg-stone-50 rounded-full flex items-center justify-center mb-6 group-hover:bg-[#d4af37]/10 transition-colors border border-stone-100">
                     <svg class="w-8 h-8 md:w-10 md:h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-800 text-sm md:text-base uppercase tracking-wider mb-2">Berpakaian Sopan</h4>
                 <p class="text-xs text-stone-500 font-light hidden md:block">Mengenakan pakaian yang rapi, sopan dan tertutup.</p>
            </div>

             <!-- Item 3: Cleanliness -->
             <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-[#d4af37]/20 group hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                 <div class="absolute top-0 right-0 w-12 h-12 bg-[#d4af37] flex items-center justify-center rounded-bl-xl text-white font-bold font-serif text-lg">03</div>
                <div class="w-16 h-16 md:w-20 md:h-20 bg-stone-50 rounded-full flex items-center justify-center mb-6 group-hover:bg-[#d4af37]/10 transition-colors border border-stone-100">
                     <svg class="w-8 h-8 md:w-10 md:h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-800 text-sm md:text-base uppercase tracking-wider mb-2">Jaga Kebersihan</h4>
                 <p class="text-xs text-stone-500 font-light hidden md:block">Mohon membuang sampah pada tempat yang telah disediakan.</p>
            </div>

             <!-- Item 4: Supervision -->
             <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-[#d4af37]/20 group hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                 <div class="absolute top-0 right-0 w-12 h-12 bg-[#d4af37] flex items-center justify-center rounded-bl-xl text-white font-bold font-serif text-lg">04</div>
                <div class="w-16 h-16 md:w-20 md:h-20 bg-stone-50 rounded-full flex items-center justify-center mb-6 group-hover:bg-[#d4af37]/10 transition-colors border border-stone-100">
                     <svg class="w-8 h-8 md:w-10 md:h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-stone-800 text-sm md:text-base uppercase tracking-wider mb-2">Pengawasan Anak</h4>
                 <p class="text-xs text-stone-500 font-light hidden md:block">Bagi yang membawa anak kecil, mohon selalu dalam pengawasan.</p>
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
        <h2 class="text-3xl font-serif text-stone-800 italic mb-8">Juna & Furi</h2>
        
        <p class="text-xs text-stone-400 uppercase tracking-widest">Digital Invitation by Undangan Digital</p>
    </div>
</footer>

@endsection