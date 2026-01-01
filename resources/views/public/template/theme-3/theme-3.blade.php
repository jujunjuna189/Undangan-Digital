@extends('public.template.theme-3.app')

@section('content')
<!-- Royal Marble Background -->
<div class="fixed inset-0 z-[-1] overflow-hidden bg-[#0a0e17]">
    <!-- Texture Overlay -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-[0.05]"></div>
    
    <!-- Deep Auroras -->
    <div class="absolute top-[-10%] right-[-10%] w-[80vw] h-[80vw] bg-gradient-to-br from-[#1E293B] via-[#0F172A] to-transparent rounded-full blur-[100px] opacity-60"></div>
    <div class="absolute bottom-[-10%] left-[-10%] w-[60vw] h-[60vw] bg-gradient-to-tr from-[#2C2105] to-transparent rounded-full blur-[100px] opacity-40"></div>
    
    <!-- Floating Gold Particles -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-[#D4AF37] rounded-full animate-[dust_15s_linear_infinite]"></div>
        <div class="absolute top-3/4 left-2/3 w-1.5 h-1.5 bg-[#BF953F] rounded-full animate-[dust_20s_linear_infinite_reverse]"></div>
        <div class="absolute bottom-1/3 right-1/4 w-1 h-1 bg-[#FCF6BA] rounded-full animate-[dust_12s_linear_infinite]"></div>
    </div>
</div>

<!-- Music Controller -->
<div class="fixed top-6 right-6 z-50">
    <button class="w-12 h-12 glass-button rounded-full flex items-center justify-center animate-[spin_12s_linear_infinite] border border-[#D4AF37]/30 hover:border-[#D4AF37]">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
    </button>
</div>

<!-- 1. Cover: The Royal Decree -->
<section id="cover" class="fixed inset-0 z-50 flex items-center justify-center bg-[#0a0e17] transition-all duration-1500 p-0 md:p-6">
    <div class="glass-premium w-full h-[100dvh] md:h-full md:rounded-[2rem] flex flex-col items-center justify-between p-8 md:p-16 relative overflow-hidden text-center shadow-[0_0_100px_rgba(0,0,0,0.8)]">
        
        <!-- Intricate Floral Corners (SVG) -->
        <div class="absolute top-0 left-0 w-32 h-32 md:w-48 md:h-48 pointer-events-none opacity-80 text-[#D4AF37]">
             <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full drop-shadow-lg"><path d="M0,0 v100 q0,40 40,40 h20 q-20,0 -20,-20 v-80 h80 q20,0 20,20 v-20 q0,-40 -40,-40 z" opacity="0.3"/><path d="M10,10 v60 q0,20 20,20 h60" fill="none" stroke="currentColor" stroke-width="1"/></svg>
        </div>
        <div class="absolute top-0 right-0 w-32 h-32 md:w-48 md:h-48 pointer-events-none opacity-80 text-[#D4AF37] rotate-90">
             <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full drop-shadow-lg"><path d="M0,0 v100 q0,40 40,40 h20 q-20,0 -20,-20 v-80 h80 q20,0 20,20 v-20 q0,-40 -40,-40 z" opacity="0.3"/><path d="M10,10 v60 q0,20 20,20 h60" fill="none" stroke="currentColor" stroke-width="1"/></svg>
        </div>
        <div class="absolute bottom-0 left-0 w-32 h-32 md:w-48 md:h-48 pointer-events-none opacity-80 text-[#D4AF37] -rotate-90">
             <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full drop-shadow-lg"><path d="M0,0 v100 q0,40 40,40 h20 q-20,0 -20,-20 v-80 h80 q20,0 20,20 v-20 q0,-40 -40,-40 z" opacity="0.3"/><path d="M10,10 v60 q0,20 20,20 h60" fill="none" stroke="currentColor" stroke-width="1"/></svg>
        </div>
        <div class="absolute bottom-0 right-0 w-32 h-32 md:w-48 md:h-48 pointer-events-none opacity-80 text-[#D4AF37] rotate-180">
             <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full drop-shadow-lg"><path d="M0,0 v100 q0,40 40,40 h20 q-20,0 -20,-20 v-80 h80 q20,0 20,20 v-20 q0,-40 -40,-40 z" opacity="0.3"/><path d="M10,10 v60 q0,20 20,20 h60" fill="none" stroke="currentColor" stroke-width="1"/></svg>
        </div>

        <!-- Content -->
        <div class="flex flex-col h-full justify-center items-center w-full z-10 space-y-8">
            <div class="space-y-2 animate-float">
                <span class="text-[#F7E7CE]/60 text-xs md:text-sm tracking-[0.5em] uppercase font-light">The Wedding Of</span>
            </div>

            <div class="relative py-8">
                <h1 class="font-pinyon text-7xl md:text-9xl text-gold drop-shadow-2xl relative z-20 leading-none">Juna & Furi</h1>
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[100px] bg-[#D4AF37] blur-[100px] opacity-20 z-10"></div>
            </div>

            <div class="space-y-6">
                
                <div class="glass-card  inline-block px-10 py-4 rounded-full border border-[#D4AF37]/30">
                    <p class="font-playfair italic text-[#F7E7CE] text-lg">Kepada Yth. Tamu Undangan</p>
                </div>
                
                <div class="pt-4">
                    <button onclick="openInvitation()" class="group relative px-10 py-4 bg-transparent overflow-hidden rounded-full glass-button">
                        <span class="relative z-10 font-bold tracking-[0.3em] uppercase text-xs">Buka Undangan</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main id="main-content" class="hidden relative z-10 max-w-[100vw] overflow-x-hidden">
    
    <!-- 2. Hero: The Magazine Cover -->
    <section class="min-h-screen relative flex items-center justify-center py-20 px-4">
        <div class="container mx-auto max-w-6xl relative">
            
            <!-- Huge Background Text -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full text-center pointer-events-none opacity-5 z-0">
                <span class="font-playfair text-[15vw] leading-none text-[#F7E7CE] block">ETERNAL</span>
            </div>

            <div class="glass-premium rounded-[2rem] md:rounded-[4rem] p-8 md:p-16 relative z-10 overflow-hidden" data-aos="fade-up" data-aos-duration="2000">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    
                    <!-- Text Side -->
                    <div class="w-full md:w-1/2 text-center md:text-left space-y-10">
                        <div class="flex items-center justify-center md:justify-start gap-4">
                            <div class="h-px w-12 bg-[#D4AF37]"></div>
                            <span class="text-[#D4AF37] text-xs tracking-[0.4em] uppercase">Simpan Tanggal</span>
                        </div>

                        <div class="space-y-2">
                            <p class="font-playfair text-[#F7E7CE] text-xl italic opacity-80">Kami mengundang Anda</p>
                            <h2 class="font-playfair text-6xl md:text-8xl text-gold leading-[0.9]">
                                Juna <br> 
                                <span class="font-pinyon text-5xl md:text-7xl text-[#F7E7CE]">&</span> <br>
                                Furi
                            </h2>
                        </div>

                        <div class="space-y-6 border-l border-[#D4AF37]/30 pl-6 md:ml-2">
                            <div class="text-[#F7E7CE]">
                                <p class="text-2xl font-playfair mb-1">Minggu</p>
                                <p class="tracking-[0.2em] text-sm uppercase opacity-70">26 Desember 2025</p>
                            </div>
                            
                            <!-- Boxed Countdown -->
                            <div class="flex gap-4">
                                <div class="text-center">
                                    <span class="font-playfair text-3xl text-gold">24</span>
                                    <span class="block text-[8px] uppercase tracking-widest text-[#F7E7CE]/50 mt-1">Hari</span>
                                </div>
                                <div class="mx-2 text-[#D4AF37]/30 text-2xl font-light">/</div>
                                <div class="text-center">
                                    <span class="font-playfair text-3xl text-gold">12</span>
                                    <span class="block text-[8px] uppercase tracking-widest text-[#F7E7CE]/50 mt-1">Jam</span>
                                </div>
                                <div class="mx-2 text-[#D4AF37]/30 text-2xl font-light">/</div>
                                <div class="text-center">
                                    <span class="font-playfair text-3xl text-gold">45</span>
                                    <span class="block text-[8px] uppercase tracking-widest text-[#F7E7CE]/50 mt-1">Menit</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Side (Arch) -->
                    <div class="w-full md:w-1/2 relative">
                        <div class="relative w-full aspect-[3/4] md:aspect-[4/5] rounded-t-[1000px] border border-[#D4AF37]/30 p-3">
                            <div class="w-full h-full rounded-t-[1000px] overflow-hidden grayscale hover:grayscale-0 transition-all duration-1000 relative">
                                <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0a0e17] via-transparent to-transparent opacity-80"></div>
                                
                                <div class="absolute bottom-8 left-0 width-full text-center px-6">
                                    <p class="font-pinyon text-2xl text-[#F7E7CE] drop-shadow-md">"Love is not finding someone to live with. It’s finding someone you can’t live without."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Salam: The Royal Letter -->
    <section class="py-24 px-4 relative">
        <!-- Floral Divider Top -->
        <div class="w-full flex justify-center mb-12 opacity-40 text-[#D4AF37]">
            <svg width="200" height="40" viewBox="0 0 200 40" fill="none" class="animate-pulse-gold">
                <path d="M100,20 C130,20 150,0 200,20 M100,20 C70,20 50,0 0,20" stroke="currentColor" stroke-width="1"/>
                <circle cx="100" cy="20" r="4" fill="currentColor"/>
            </svg>
        </div>

        <div class="container mx-auto max-w-4xl relative z-10" data-aos="fade-up">
            <div class="glass-premium rounded-[1rem] p-12 md:p-20 text-center relative border-y border-[#D4AF37]/50">
                <!-- Basmalah Placeholder (Image or Font) -->
                <p class="font-pinyon text-4xl md:text-5xl text-[#D4AF37] mb-8">Bismillahirrahmannirrahiim</p>
                
                <h3 class="font-playfair text-3xl text-[#F7E7CE] mb-6">Assalamu’alaikum Wr. Wb.</h3>
                <p class="text-[#F7E7CE]/80 font-light leading-loose text-lg italic max-w-2xl mx-auto">
                    "Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami."
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Couple: The Portraits -->
    <section class="py-24 px-4 overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <!-- Groom -->
                <div class="text-center relative group" data-aos="fade-right">
                    <div class="relative w-72 h-96 mx-auto mb-10">
                        <!-- Frame decorations -->
                        <div class="absolute inset-0 border border-[#D4AF37] rounded-full scale-[1.02] opacity-30 group-hover:scale-110 transition-transform duration-1000"></div>
                        <div class="absolute inset-0 border border-dashed border-[#F7E7CE] rounded-full scale-[1.1] opacity-20 animate-spin-slow"></div>
                        
                        <div class="w-full h-full rounded-full overflow-hidden border-4 border-[#1E293B] relative z-10 shadow-2xl">
                            <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="font-playfair text-4xl text-[#F7E7CE] mb-2">Junaedi Al-Fatih</h3>
                        <p class="font-pinyon text-2xl text-gold mb-4">The Groom</p>
                        <div class="w-12 h-px bg-[#D4AF37] mx-auto mb-4 opacity-50"></div>
                        <p class="text-[#F7E7CE]/60 text-xs tracking-widest uppercase">Putra dari Bpk. Ahmad & Ibu Siti</p>
                    </div>
                </div>

                <!-- Bride -->
                <div class="text-center relative group" data-aos="fade-left">
                     <div class="relative w-72 h-96 mx-auto mb-10">
                        <!-- Frame decorations -->
                        <div class="absolute inset-0 border border-[#D4AF37] rounded-full scale-[1.02] opacity-30 group-hover:scale-110 transition-transform duration-1000"></div>
                        <div class="absolute inset-0 border border-dashed border-[#F7E7CE] rounded-full scale-[1.1] opacity-20 animate-spin-slow"></div>
                        
                        <div class="w-full h-full rounded-full overflow-hidden border-4 border-[#1E293B] relative z-10 shadow-2xl">
                            <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="font-playfair text-4xl text-[#F7E7CE] mb-2">Furi Intan Rahayu</h3>
                        <p class="font-pinyon text-2xl text-gold mb-4">The Bride</p>
                       <div class="w-12 h-px bg-[#D4AF37] mx-auto mb-4 opacity-50"></div>
                        <p class="text-[#F7E7CE]/60 text-xs tracking-widest uppercase">Putri dari Bpk. Budi & Ibu Rina</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Story: The Golden Thread -->
    <section class="py-24 px-4 bg-gradient-to-b from-[#0a0e17] to-[#0F172A] relative overflow-hidden">
        <!-- Floating Dust -->
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-[0.05]"></div>
        
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="text-center mb-16">
                <span class="text-[#D4AF37] text-xs tracking-[0.4em] uppercase">Love Story</span>
                <h2 class="font-playfair text-5xl text-[#F7E7CE] mt-4 italic">Kisah Perjalanan</h2>
            </div>
            
            <div class="relative">
                <!-- The Thread Line -->
                <div class="absolute left-6 md:left-1/2 top-0 bottom-0 w-px border-l-2 border-dotted border-[#D4AF37]/30 md:-translate-x-1/2"></div>
                
                <div class="space-y-16">
                    <!-- Item 1 -->
                    <div class="relative pl-16 md:pl-0 md:flex md:justify-between items-center group w-full">
                        <div class="absolute left-[22px] md:left-1/2 md:-translate-x-1/2 w-3 h-3 bg-gold rounded-full border-4 border-[#0a0e17] z-20 shadow-[0_0_10px_#D4AF37]"></div>
                        
                        <div class="md:w-[45%] md:text-right md:pr-12">
                            <div class="glass-card p-6 md:border-none md:bg-transparent md:backdrop-blur-0">
                                <span class="text-gold font-bold text-lg mb-2 block">2020</span>
                                <h4 class="font-playfair text-xl text-[#F7E7CE] mb-2">Pertemuan Pertama</h4>
                                <p class="text-[#F7E7CE]/60 text-sm leading-relaxed">Tatapan pertama di perpustakaan kampus yang mengawali segalanya.</p>
                            </div>
                        </div>
                        <div class="hidden md:block md:w-[45%]"></div>
                    </div>

                    <!-- Item 2 -->
                    <div class="relative pl-16 md:pl-0 md:flex md:justify-between items-center group w-full">
                         <div class="absolute left-[22px] md:left-1/2 md:-translate-x-1/2 w-3 h-3 bg-gold rounded-full border-4 border-[#0a0e17] z-20 shadow-[0_0_10px_#D4AF37]"></div>
                        
                         <div class="hidden md:block md:w-[45%]"></div>
                        <div class="md:w-[45%] md:pl-12">
                            <div class="glass-card p-6 md:border-none md:bg-transparent md:backdrop-blur-0">
                                <span class="text-gold font-bold text-lg mb-2 block">2023</span>
                                <h4 class="font-playfair text-xl text-[#F7E7CE] mb-2">Lamaran</h4>
                                <p class="text-[#F7E7CE]/60 text-sm leading-relaxed">Sebuah janji suci diikat di hadapan keluarga tercinta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Events: Royal Invitation -->
    <section class="py-24 px-4 bg-[#0a0e17] relative">
         <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-[#D4AF37] rounded-full blur-[200px] opacity-10"></div>
        </div>

        <div class="container mx-auto max-w-5xl relative z-10">
             <div class="text-center mb-24" data-aos="fade-up">
                 <h2 class="font-playfair text-5xl md:text-6xl text-gold mb-6">Rangkaian Acara</h2>
                 <p class="text-[#F7E7CE]/50 tracking-widest uppercase text-xs">Kami menantikan kehadiran Anda</p>
             </div>
             
             <div class="grid md:grid-cols-2 gap-12">
                 <!-- Akad Card -->
                 <div class="glass-premium p-10 md:p-14 rounded-t-[50%] rounded-b-xl text-center group hover:-translate-y-2 transition-transform duration-700" data-aos="fade-up">
                     <div class="w-16 h-16 mx-auto mb-6 opacity-60 text-[#D4AF37]">
                          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                     </div>
                     <span class="text-gold font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Ceremony</span>
                     <h3 class="font-pinyon text-5xl text-[#F7E7CE] mb-8">Akad Nikah</h3>
                     
                     <div class="space-y-4 border-y border-[#D4AF37]/20 py-8 mb-8">
                         <div class="flex items-center justify-center gap-2">
                             <span class="text-[#D4AF37]">Minggu</span>
                             <span class="w-1 h-1 bg-white rounded-full"></span>
                             <span class="text-[#F7E7CE]">26 Desember 2025</span>
                         </div>
                         <p class="font-playfair text-2xl text-gold">08:00 - 10:00 WIB</p>
                     </div>
                     
                     <p class="text-[#F7E7CE] font-medium mb-1">Masjid Raya Istiqlal</p>
                     <p class="text-[#F7E7CE]/40 text-sm mb-8">Jl. Taman Wijaya Kusuma, Jakarta</p>
                     
                     <a href="https://maps.google.com" class="inline-flex glass-button px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest items-center gap-2">
                         <span>Maps</span>
                         <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                     </a>
                 </div>

                 <!-- Resepsi Card -->
                 <div class="glass-premium p-10 md:p-14 rounded-t-[50%] rounded-b-xl text-center group hover:-translate-y-2 transition-transform duration-700" data-aos="fade-up" data-aos-delay="200">
                     <div class="w-16 h-16 mx-auto mb-6 opacity-60 text-[#D4AF37]">
                          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 8 2 12c0 4 4.48 10 10 10s10-6 10-10-4.48-10-10-10zm2 13h-4v-2h4v2zm0-4h-4V7h4v4z"/></svg>
                     </div>
                     <span class="text-gold font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Celebration</span>
                     <h3 class="font-pinyon text-5xl text-[#F7E7CE] mb-8">Resepsi</h3>
                     
                     <div class="space-y-4 border-y border-[#D4AF37]/20 py-8 mb-8">
                         <div class="flex items-center justify-center gap-2">
                             <span class="text-[#D4AF37]">Minggu</span>
                             <span class="w-1 h-1 bg-white rounded-full"></span>
                             <span class="text-[#F7E7CE]">26 Desember 2025</span>
                         </div>
                         <p class="font-playfair text-2xl text-gold">11:00 - 13:00 WIB</p>
                     </div>
                     
                     <p class="text-[#F7E7CE] font-medium mb-1">Hotel Indonesia Kempinski</p>
                     <p class="text-[#F7E7CE]/40 text-sm mb-8">Menteng, Jakarta Pusat</p>
                     
                     <a href="https://maps.google.com" class="inline-flex glass-button px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest items-center gap-2">
                         <span>Maps</span>
                         <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                     </a>
                 </div>
             </div>
        </div>
    </section>
    
    <!-- 7. Gallery: Scattered Polaroids -->
    <section class="py-24 px-4 overflow-hidden">
        <div class="container mx-auto max-w-6xl text-center">
            <h2 class="font-playfair text-5xl text-[#F7E7CE] mb-16 italic">Galeri Foto</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-4">
                <div class="transform rotate-2 hover:rotate-0 transition-transform duration-500 hover:z-10 hover:scale-110">
                     <div class="p-2 bg-white rounded-sm shadow-xl pb-8">
                         <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full aspect-[3/4] object-cover grayscale hover:grayscale-0 transition-all">
                     </div>
                </div>
                <div class="transform -rotate-2 hover:rotate-0 transition-transform duration-500 hover:z-10 hover:scale-110 mt-8">
                     <div class="p-2 bg-white rounded-sm shadow-xl pb-8">
                         <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full aspect-[3/4] object-cover grayscale hover:grayscale-0 transition-all">
                     </div>
                </div>
                <div class="transform rotate-3 hover:rotate-0 transition-transform duration-500 hover:z-10 hover:scale-110">
                     <div class="p-2 bg-white rounded-sm shadow-xl pb-8">
                         <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full aspect-[3/4] object-cover grayscale hover:grayscale-0 transition-all">
                     </div>
                </div>
                <div class="transform -rotate-1 hover:rotate-0 transition-transform duration-500 hover:z-10 hover:scale-110 mt-8">
                     <div class="p-2 bg-white rounded-sm shadow-xl pb-8">
                         <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full aspect-[3/4] object-cover grayscale hover:grayscale-0 transition-all">
                     </div>
                </div>
            </div>
            
            <!-- Video -->
            <div class="mt-20 max-w-4xl mx-auto glass-premium p-4 md:p-8 rounded-[2rem]">
                <div class="relative w-full aspect-video rounded-xl overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <div class="w-20 h-20 rounded-full border border-white/50 bg-white/10 backdrop-blur-md flex items-center justify-center">
                            <div class="w-0 h-0 border-t-[10px] border-t-transparent border-l-[18px] border-l-white border-b-[10px] border-b-transparent ml-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. RSVP & Gift -->
    <section class="py-24 px-4 bg-gradient-to-t from-[#0a0a0a] to-[#0a0e17]">
        <div class="container mx-auto max-w-4xl">
            
            <div class="glass-premium rounded-[1rem] p-10 md:p-20 text-center relative overflow-hidden mb-24">
                <h2 class="font-playfair text-4xl text-gold mb-10 italic">Konfirmasi Kehadiran</h2>
                <form class="space-y-6 max-w-lg mx-auto relative z-10">
                    <input type="text" class="w-full px-0 py-4 bg-transparent border-b border-[#D4AF37]/30 text-center text-[#F7E7CE] placeholder-[#F7E7CE]/40 focus:border-[#D4AF37] transition-all outline-none" placeholder="Nama Lengkap">
                    
                    <div class="grid grid-cols-2 gap-8">
                        <input type="number" class="w-full px-0 py-4 bg-transparent border-b border-[#D4AF37]/30 text-center text-[#F7E7CE] placeholder-[#F7E7CE]/40 focus:border-[#D4AF37] transition-all outline-none" placeholder="Jumlah">
                         <select class="w-full px-0 py-4 bg-transparent border-b border-[#D4AF37]/30 text-center text-[#F7E7CE] outline-none">
                            <option class="bg-[#0F172A]">Hadir</option>
                            <option class="bg-[#0F172A]">Tidak Hadir</option>
                        </select>
                    </div>
                    
                    <button type="button" class="mt-8 w-full py-4 glass-button text-[#D4AF37] font-bold tracking-[0.3em] uppercase text-xs">
                        Kirim Konfirmasi
                    </button>
                </form>
            </div>
            
            <!-- Gifts -->
             <div class="text-center pb-20">
                 <h2 class="font-playfair text-3xl text-[#F7E7CE] italic mb-12">Kado Pernikahan</h2>
                 
                 <div class="flex flex-col md:flex-row justify-center gap-8">
                     <!-- Bank Card -->
                     <div class="glass-card w-full max-w-sm mx-auto p-10 rounded-2xl relative overflow-hidden text-left bg-gradient-to-br from-[#1E293B] to-[#0F172A] border border-[#D4AF37]/20 shadow-2xl">
                         <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4AF37]/10 rounded-full blur-3xl"></div>
                         <div class="flex justify-between items-center mb-8">
                             <span class="font-playfair text-2xl italic text-[#D4AF37]">BCA</span>
                             <svg width="40" height="25" viewBox="0 0 40 25" fill="none"><rect width="40" height="25" rx="4" fill="#D4AF37" fill-opacity="0.2"/></svg>
                         </div>
                         <p class="font-mono text-xl tracking-widest text-white drop-shadow-md mb-8">1234 5678 9000</p>
                         <div class="flex justify-between items-end">
                             <p class="text-xs text-[#F7E7CE]/50 uppercase tracking-widest">Rizky Ramadhan</p>
                             <button class="text-[10px] text-[#D4AF37] font-bold uppercase hover:text-white">Copy</button>
                         </div>
                     </div>
                 </div>
            </div>

            <!-- Footer -->
            <footer class="text-center pt-12 border-t border-[#D4AF37]/10">
                <h2 class="font-pinyon text-6xl md:text-8xl text-gold mb-6 opacity-80">Juna & Furi</h2>
                <p class="text-[#F7E7CE]/30 text-[10px] uppercase tracking-[0.5em]">Terima Kasih</p>
            </footer>
        </div>
    </section>
</main>

<script>
    function openInvitation() {
        const cover = document.getElementById('cover');
        const mainContent = document.getElementById('main-content');
        
        cover.style.transition = 'all 1.5s cubic-bezier(0.7,0,0.3,1)';
        cover.style.transform = 'translateY(-100%)';
        cover.style.opacity = '0';
        
        setTimeout(() => {
            cover.style.display = 'none';
            mainContent.classList.remove('hidden');
            AOS.refresh();
        }, 1000);
    }
    
    const style = document.createElement('style');
    style.innerHTML = `
        .animate-spin-slow { animation: spin 15s linear infinite; }
        @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    `;
    document.head.appendChild(style);
</script>
@endsection
