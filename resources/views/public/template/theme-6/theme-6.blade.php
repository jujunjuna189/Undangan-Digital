@extends('public.template.theme-6.app')

@section('content')

    <!-- COVER SECTION -->
    <section id="cover" class="fixed inset-0 z-[200] flex items-center justify-center bg-java-espresso transition-opacity duration-1200 overflow-hidden">
        <!-- Royal Backlit Background -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/image/gunungan.jpg') }}" class="w-full h-full object-cover opacity-80 brightness-[0.3] contrast-150" alt="Background">
            <div class="absolute inset-0 bg-radial-gradient from-transparent to-java-dark opacity-90"></div>
            <div class="absolute inset-0 shadow-[inset_0_0_200px_rgba(0,0,0,1)]"></div>
        </div>

        <!-- Ornament Corners (Lux Gold) -->
        <div class="absolute top-0 left-0 w-48 h-48 md:w-80 md:h-80 opacity-40 pointer-events-none">
            <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="w-full h-full filter saturate-[2] brightness-[1.5] drop-shadow-[0_0_15px_rgba(191,149,63,0.5)]" alt="">
        </div>
        <div class="absolute bottom-0 right-0 w-48 h-48 md:w-80 md:h-80 opacity-40 pointer-events-none transform rotate-180">
            <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="w-full h-full filter saturate-[2] brightness-[1.5] drop-shadow-[0_0_15px_rgba(191,149,63,0.5)]" alt="">
        </div>

        <div class="container mx-auto px-6 text-center relative z-20" data-aos="zoom-out" data-aos-duration="2500">
            <div class="animate-float flex flex-col items-center space-y-12 max-w-4xl max-h-screen">
                
                <div class="space-y-4">
                   <div class="w-32 h-[2px] bg-java-gold-gradient mx-auto"></div>
                   <p class="font-decorative text-java-gold gold-glow text-lg md:text-xl tracking-[0.8em] uppercase">The Wedding of</p>
                   <div class="w-32 h-[2px] bg-java-gold-gradient mx-auto"></div>
                </div>

                <h1 class="font-script text-8xl md:text-[13rem] text-[#fffef0] gold-glow leading-[0.7] mb-8 font-bold drop-shadow-[0_20px_40px_rgba(0,0,0,1)]">
                    {{ $invitation->bride_name }} <span class="text-java-gold block md:inline md:mx-6 mt-8 md:mt-0 font-normal">&</span>
                    {{ $invitation->groom_name }}
                </h1>

                <div class="mt-16 space-y-10">
                    <div class="space-y-3">
                        <p class="text-xs uppercase tracking-[0.6em] text-white/50 font-bold">Yth. Bapak/Ibu/Saudara/i</p>
                        <p class="font-serif text-4xl md:text-6xl text-white italic font-bold tracking-tight drop-shadow-2xl">
                            {{ request('to', 'Tamu Undangan') }}
                        </p>
                    </div>

                    <button onclick="openInvitation()"
                        class="btn-premium px-20 py-6 rounded-full text-sm md:text-base tracking-[0.5em] uppercase font-bold pulse-gold border-2 border-[#bf953f]">
                        Buka Undangan
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING NAVIGATION BAR -->
    <nav id="bottom-nav" class="bottom-nav hidden">
         <a href="#hero" class="nav-link active">
             <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
         </a>
         <a href="#mempelai" class="nav-link">
             <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
         </a>
         <a href="#acara" class="nav-link">
             <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
         </a>
         <a href="#galeri" class="nav-link">
             <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
         </a>
         <a href="#rsvp" class="nav-link">
             <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
         </a>
    </nav>

    <!-- MAIN CONTENT -->
    <main id="main-content" class="hidden relative z-20 bg-batik min-h-screen">
        
        <!-- Music Control -->
        <button onclick="toggleMusic()"
            class="music-btn fixed top-6 right-6 z-[60] w-12 h-12 rounded-full glass-effect flex items-center justify-center text-[#3e2723] hover:text-[#c6a700] transition-all border border-[#c6a700] shadow-xl">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
            </svg>
        </button>

        <!-- HERO SECTION -->
        <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden py-32 bg-java-espresso">
            <!-- Grand Backstage Background -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/image/gunungan.jpg') }}" class="w-full h-full object-cover opacity-50 brightness-[0.2] contrast-150 rotate-3 scale-110" alt="Background">
                <div class="absolute inset-0 bg-gradient-to-b from-java-espresso via-transparent to-java-espresso opacity-100"></div>
            </div>
            
            <div class="container mx-auto px-6 text-center relative z-10" data-aos="zoom-in" data-aos-duration="2000">
                <div class="mb-16">
                    <div class="w-48 h-[2px] bg-java-gold-gradient mx-auto mb-6"></div>
                    <p class="font-decorative text-java-gold gold-glow text-xl tracking-[1.2em] mb-4">THE WEDDING OF</p>
                    <div class="w-48 h-[2px] bg-java-gold-gradient mx-auto"></div>
                </div>
                
                <h1 class="font-script text-8xl md:text-[11rem] text-white gold-glow mb-16 leading-tight drop-shadow-[0_15px_30px_rgba(0,0,0,0.8)] font-bold">
                    {{ $invitation->bride_name }} & {{ $invitation->groom_name }}
                </h1>

                <!-- ROYAL COUNTDOWN BOX -->
                <div class="grid grid-cols-4 gap-4 md:gap-8 max-w-4xl mx-auto mb-20" data-aos="fade-up">
                    <div class="glass-effect p-8 rounded-[2rem] border-t-8 border-java-gold shadow-[0_0_30px_rgba(191,149,63,0.3)]">
                        <span id="days" class="block text-5xl md:text-7xl font-serif text-java-gold gold-glow font-bold italic">00</span>
                        <span class="text-xs uppercase tracking-[0.3em] font-bold text-white/60">Hari</span>
                    </div>
                    <div class="glass-effect p-8 rounded-[2rem] border-t-8 border-java-gold shadow-[0_0_30px_rgba(191,149,63,0.3)]">
                        <span id="hours" class="block text-5xl md:text-7xl font-serif text-java-gold gold-glow font-bold italic">00</span>
                        <span class="text-xs uppercase tracking-[0.3em] font-bold text-white/60">Jam</span>
                    </div>
                    <div class="glass-effect p-8 rounded-[2rem] border-t-8 border-java-gold shadow-[0_0_30px_rgba(191,149,63,0.3)]">
                        <span id="minutes" class="block text-5xl md:text-7xl font-serif text-java-gold gold-glow font-bold italic">00</span>
                        <span class="text-xs uppercase tracking-[0.3em] font-bold text-white/60">Menit</span>
                    </div>
                    <div class="glass-effect p-8 rounded-[2rem] border-t-8 border-java-gold shadow-[0_0_30px_rgba(191,149,63,0.3)]">
                        <span id="seconds" class="block text-5xl md:text-7xl font-serif text-java-gold gold-glow font-bold italic">00</span>
                        <span class="text-xs uppercase tracking-[0.3em] font-bold text-white/60">Detik</span>
                    </div>
                </div>

                <div class="mt-12 flex flex-col items-center gap-6">
                     <p class="font-serif text-white text-3xl md:text-5xl tracking-[0.2em] italic font-bold gold-glow">
                         {{ $invitation->wedding_date ? $invitation->wedding_date->translatedFormat('d F Y') : '30 Desember 2026' }}
                     </p>
                     <div class="java-separator w-64 mx-auto"></div>
                     <button onclick="window.open('...', '_blank')"
                        class="btn-premium px-12 py-5 rounded-full text-sm uppercase tracking-[0.5em] font-bold mt-8 flex items-center gap-3 shadow-[0_10px_30px_rgba(191,149,63,0.4)]">
                          SAVE THE DATE
                     </button>
                </div>
            </div>

            <!-- Cloud Decorations -->
            <div class="absolute top-20 left-10 wayang-cloud w-32 h-16 opacity-30 animate-float"></div>
            <div class="absolute top-40 right-10 wayang-cloud w-40 h-20 opacity-20 animate-float-reverse"></div>
            <div class="absolute bottom-40 left-20 wayang-cloud w-36 h-18 opacity-20 animate-float"></div>
        </section>

        <!-- QURANIC VERSE SECTION -->
        <section class="py-24 px-6 relative bg-java-brown text-[#fff0d1] overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-batik mix-blend-overlay"></div>
            
            <div class="container mx-auto max-w-4xl relative z-10 text-center" data-aos="fade-up">
                <div class="mb-12">
                     <div class="java-separator w-48 mx-auto mb-12 opacity-40"></div>
                </div>
                
                <h2 class="font-decorative text-java-gold text-2xl md:text-3xl mb-12 tracking-widest">Q.S Al-Fatir : ayat 11</h2>
                
                <p class="text-3xl md:text-5xl font-serif italic mb-12 leading-relaxed text-white drop-shadow-md">
                    "Dan Allah menciptakan kamu dari tanah kemudian dari air mani, kemudian Dia menjadikan kamu berpasang-pasangan (laki-laki dan perempuan). Tidak ada seorang perempuan pun yang mengandung dan melahirkan melainkan dengan sepengetahuan-Nya. Dan tidak dipanjangkan umur seseorang dan tidak pula dikurangi umurnya, melainkan (sudah ditetapkan) dalam Kitab (Lauh Mahfuzh). Sesungguhnya yang demikian itu mudah bagi Allah."
                </p>
                
                <div class="java-separator w-48 mx-auto opacity-40"></div>
            </div>
            
            <!-- Corner Ornaments -->
            <div class="absolute top-0 right-0 w-32 h-32 opacity-10 pointer-events-none">
                 <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="rotate-90 brightness-0" alt="">
            </div>
            <div class="absolute bottom-0 left-0 w-32 h-32 opacity-10 pointer-events-none">
                 <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="-rotate-90 brightness-0" alt="">
            </div>
        </section>

        <!-- MEMPELAI SECTION -->
        <section id="mempelai" class="py-32 px-6 relative overflow-hidden">
            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-24" data-aos="fade-down">
                    <div class="java-separator w-48 mx-auto"></div>
                    <h2 class="font-script text-7xl md:text-8xl text-java-brown drop-shadow-sm">Mempelai</h2>
                    <div class="java-separator w-48 mx-auto"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-24 md:gap-16 items-center">
                    
                    <!-- Groom -->
                    <div class="flex flex-col items-center md:items-end text-center md:text-right" data-aos="fade-right">
                        <div class="relative mb-12">
                            <!-- Java Frame -->
                            <div class="absolute -inset-4 border-2 border-java-gold/30 rounded-3xl z-0 transform -rotate-3"></div>
                            <div class="absolute -inset-4 border-2 border-java-brown/20 rounded-3xl z-0 transform rotate-2"></div>
                            
                            <div class="w-64 h-80 md:w-80 md:h-[450px] rounded-2xl overflow-hidden shadow-2xl relative z-10 border-8 border-[#fffefc]">
                                <img src="{{ $invitation->groom_photo ? asset($invitation->groom_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover grayscale-[20%] sepia-[10%] hover:scale-110 transition-transform duration-1000"
                                    alt="Groom">
                            </div>
                            
                            <!-- Wayang Overlay Decor -->
                            <div class="absolute -bottom-10 -left-10 w-32 h-32 opacity-40 z-20 animate-float">
                                <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="rotate-[-20deg] brightness-0" alt="">
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-script text-6xl md:text-7xl text-java-brown font-bold">{{ $invitation->groom_name }}</h3>
                            <div class="space-y-1">
                                <p class="text-xs text-java-gold uppercase tracking-[0.2em] font-bold">Putra Dari :</p>
                                <p class="font-serif text-2xl md:text-3xl text-java-brown italic font-bold">
                                    {{ $invitation->groom_parents ?? 'Bapak & Ibu' }}</p>
                            </div>
                            <div class="pt-4">
                                <a href="https://instagram.com/{{ $invitation->groom_ig ?? 'mempelaipria' }}" target="_blank"
                                    class="inline-flex items-center gap-2 text-java-brown hover:text-java-gold transition-colors border-b border-java-gold/50 pb-1">
                                    <span class="text-xs font-bold tracking-widest italic">@<span></span>{{ ltrim($invitation->groom_ig ?? 'mempelaipria', '@') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bride -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left" data-aos="fade-left">
                        <div class="relative mb-12">
                             <!-- Java Frame -->
                            <div class="absolute -inset-4 border-2 border-java-gold/30 rounded-3xl z-0 transform rotate-3"></div>
                            <div class="absolute -inset-4 border-2 border-java-brown/20 rounded-3xl z-0 transform -rotate-2"></div>

                            <div class="w-64 h-80 md:w-80 md:h-[450px] rounded-2xl overflow-hidden shadow-2xl relative z-10 border-8 border-[#fffefc]">
                                <img src="{{ $invitation->bride_photo ? asset($invitation->bride_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover grayscale-[20%] sepia-[10%] hover:scale-110 transition-transform duration-1000"
                                    alt="Bride">
                            </div>

                             <!-- Wayang Overlay Decor -->
                             <div class="absolute -bottom-10 -right-10 w-32 h-32 opacity-40 z-20 animate-float-reverse">
                                <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="rotate-[20deg] brightness-0" alt="">
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-script text-6xl md:text-7xl text-java-brown font-bold">{{ $invitation->bride_name }}</h3>
                            <div class="space-y-1">
                                <p class="text-xs text-java-gold uppercase tracking-[0.2em] font-bold">Putri Dari :</p>
                                <p class="font-serif text-2xl md:text-3xl text-java-brown italic font-bold">
                                    {{ $invitation->bride_parents ?? 'Bapak & Ibu' }}</p>
                            </div>
                            <div class="pt-4">
                                <a href="https://instagram.com/{{ $invitation->bride_ig ?? 'mempelaiwanita' }}" target="_blank"
                                    class="inline-flex items-center gap-2 text-java-brown hover:text-java-gold transition-colors border-b border-java-gold/50 pb-1">
                                    <span class="text-xs font-bold tracking-widest italic">@<span></span>{{ ltrim($invitation->bride_ig ?? 'mempelaiwanita', '@') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Global Decorations -->
            <div class="wayang-corner-tl opacity-20 -z-10 bg-fixed"></div>
            <div class="wayang-corner-tr opacity-20 -z-10 bg-fixed"></div>
        </section>

        <!-- STORY SECTION -->
        <section id="kisah" class="py-24 px-6 relative bg-java-espresso text-white overflow-hidden">
             <div class="absolute inset-0 opacity-20 overflow-hidden">
                 <img src="{{ asset('assets/image/theme-6-bg.png') }}" class="w-full h-full object-cover" alt="">
             </div>
             
             <div class="container mx-auto max-w-5xl relative z-10 text-center">
                 <h2 class="font-script text-6xl md:text-7xl mb-6">Kisah Cinta</h2>
                 <div class="java-separator w-32 mx-auto mb-16 opacity-40"></div>
                 
                 <div class="space-y-12">
                     @forelse ($invitation->stories as $story)
                        <div class="glass-effect p-8 md:p-12 rounded-[2rem] border-java-gold/30" data-aos="fade-up">
                            <h3 class="font-decorative text-2xl mb-4 text-java-gold uppercase tracking-widest">{{ $story->title }}</h3>
                            <p class="font-serif italic text-lg leading-relaxed text-[#fffef0]">"{{ $story->content }}"</p>
                            <div class="mt-6 text-xs tracking-widest font-bold uppercase text-java-gold/60">
                                {{ $story->year ?? (isset($story->date) ? \Carbon\Carbon::parse($story->date)->format('Y') : '2024') }}
                            </div>
                        </div>
                     @empty
                        <p class="italic text-java-gold/60">Perjalanan cinta yang tertulis indah dalam takdir...</p>
                     @endforelse
                 </div>
             </div>
        </section>

        <!-- ACARA SECTION -->
        <section id="acara" class="py-32 px-6 relative">
            <div class="container mx-auto max-w-5xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="font-decorative text-java-brown text-3xl md:text-4xl tracking-widest uppercase">Akad & Resepsi</h2>
                    <div class="java-separator w-48 mx-auto mt-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                    
                    <!-- Akad Card -->
                    <div class="glass-effect rounded-[3rem] p-10 md:p-12 border-b-8 border-java-gold text-center relative overflow-hidden" data-aos="fade-right">
                        <div class="absolute top-0 right-0 w-32 h-32 opacity-10 rotate-45 translate-x-12 -translate-y-12">
                             <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" alt="">
                        </div>
                        
                        <h3 class="font-script text-5xl text-java-gold mb-8">Akad Nikah</h3>
                        
                        <div class="space-y-6">
                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Hari & Tanggal</p>
                                <p class="font-serif text-2xl text-[#fffef0]">
                                    {{ $invitation->wedding_date->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                            
                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Waktu</p>
                                <p class="font-serif text-2xl text-[#fffef0]">{{ $invitation->akad_time ?? '08:00 - 10:00' }} WIB</p>
                            </div>
                            
                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Lokasi</p>
                                <p class="font-serif text-lg text-java-gold font-bold">{{ $invitation->akad_location }}</p>
                                <p class="text-sm text-[#fffef0]/80 leading-relaxed italic">{{ $invitation->akad_address }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Resepsi Card -->
                    <div class="glass-effect rounded-[3rem] p-10 md:p-12 border-b-8 border-java-brown text-center relative overflow-hidden" data-aos="fade-left">
                        <div class="absolute top-0 left-0 w-32 h-32 opacity-10 -rotate-45 -translate-x-12 -translate-y-12">
                             <img src="{{ asset('assets/image/theme-6-floral-corner.png') }}" class="scale-x-[-1]" alt="">
                        </div>
                        
                        <h3 class="font-script text-5xl text-java-gold mb-8">Resepsi</h3>
                        
                        <div class="space-y-6">
                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Hari & Tanggal</p>
                                <p class="font-serif text-2xl text-[#fffef0]">
                                    {{ $invitation->wedding_date->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                            
                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Waktu</p>
                                <p class="font-serif text-2xl text-[#fffef0]">{{ $invitation->resepsi_time ?? '11:00 - selesai' }} WIB</p>
                            </div>

                            <div class="space-y-1">
                                <p class="text-xs uppercase tracking-[0.3em] font-bold text-java-gold/60">Lokasi</p>
                                <p class="font-serif text-lg text-java-gold font-bold">{{ $invitation->resepsi_location }}</p>
                                <p class="text-sm text-[#fffef0]/80 leading-relaxed italic">{{ $invitation->resepsi_address }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="mt-20 glass-effect rounded-[3rem] overflow-hidden h-[400px] border-4 border-java-gold shadow-2xl" data-aos="zoom-in">
                    <iframe width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135000001!3d-6.194723500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421d1aa5941%3A0x2bd0321f68ca1d56!2sGrand%20Indonesia!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section id="galeri" class="py-32 px-6 relative bg-java-brown overflow-hidden">
             <div class="absolute inset-0 opacity-10 bg-batik mix-blend-overlay"></div>
             
             <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-20" data-aos="fade-down">
                    <h2 class="font-script text-7xl text-java-gold">Galeri Momen</h2>
                    <div class="java-separator w-48 mx-auto mt-4 opacity-40"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @forelse($invitation->galleries as $index => $photo)
                        <div class="rounded-2xl overflow-hidden border-2 border-java-gold/30 shadow-xl" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                             <img src="{{ asset($photo->image_path) }}" class="w-full h-64 md:h-80 object-cover hover:scale-110 transition duration-700">
                        </div>
                    @empty
                        @for($i = 1; $i <= 6; $i++)
                        <div class="rounded-2xl overflow-hidden border-2 border-java-gold/30 shadow-xl" data-aos="zoom-in">
                             <img src="{{ asset('assets/image/theme-5-cover.png') }}" class="w-full h-64 md:h-80 object-cover">
                        </div>
                        @endfor
                    @endforelse
                </div>
             </div>
        </section>

        <!-- PEMESANAN / CONTACT SECTION (Based on Screen 7) -->
        <section id="kontak" class="py-24 px-6 relative bg-java-brown/60 overflow-hidden text-center">
            <div class="container mx-auto max-w-lg relative z-10">
                <h2 class="font-script text-6xl text-java-gold mb-12">Pemesanan</h2>
                
                <div class="flex flex-col gap-4">
                    <a href="https://wa.me/{{ $invitation->phone ?? '628123456789' }}?text=Halo%20{{ urlencode($invitation->bride_name) }}%20dan%20{{ urlencode($invitation->groom_name) }},%20saya%20ingin%20mengonfirmasi%20undangan..." 
                        target="_blank"
                        class="btn-premium py-4 rounded-full flex items-center justify-center gap-3 text-sm tracking-widest font-bold grayscale hover:grayscale-0 transition-all">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-2.296 0-4.159 1.864-4.159 4.159 0 .828.24 1.599.654 2.247l-.689 2.525 2.589-.679c.508.272 1.087.428 1.704.428 2.296 0 4.159-1.864 4.159-4.159 0-2.295-1.863-4.159-4.159-4.159zm2.463 6.011c-.114.288-.654.524-.914.524-.26 0-.583-.024-.914-.158-1.571-.629-2.582-2.203-2.658-2.311-.077-.107-.618-.822-.618-1.57 0-.749.394-1.116.533-1.264.139-.148.304-.185.405-.185.101 0 .203.001.291.001.077 0 .185-.029.288.225.101.254.348.847.378.914.03.067.051.144.004.238-.046.094-.07.153-.139.231-.069.079-.148.176-.213.237-.074.069-.151.144-.065.293.086.148.384.633.824 1.026.566.505 1.042.663 1.189.736.148.074.233.061.32-.04.086-.101.378-.435.479-.582.101-.148.203-.121.341-.07.139.051.874.412 1.026.488.151.077.253.114.291.176.037.062.037.358-.077.646z"/></svg>
                        WHATS APP
                    </a>
                    
                    <a href="mailto:{{ $invitation->email ?? 'undangan@example.com' }}" 
                        class="btn-premium py-4 rounded-full flex items-center justify-center gap-3 text-sm tracking-widest font-bold grayscale hover:grayscale-0 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        EMAIL
                    </a>
                    
                    <a href="#acara" 
                        class="btn-premium py-4 rounded-full flex items-center justify-center gap-3 text-sm tracking-widest font-bold grayscale hover:grayscale-0 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        LOKASI
                    </a>
                </div>
            </div>
            
            <!-- Gunungan Decor -->
            <div class="absolute inset-0 opacity-10 pointer-events-none bg-batik"></div>
        </section>

        <!-- KONFIRMASI / RSVP -->
        <section id="rsvp" class="py-32 px-6 relative">
            <div class="container mx-auto max-w-4xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="font-decorative text-3xl text-java-brown tracking-widest uppercase">Konfirmasi Kehadiran</h2>
                    <div class="java-separator w-32 mx-auto mt-4"></div>
                </div>

                <div class="glass-effect rounded-[3rem] p-8 md:p-16 shadow-2xl border-java-gold/40" data-aos="fade-up">
                    <form id="rsvpForm" action="{{ route('rsvp.store') }}" method="POST" class="space-y-8">
                        @csrf
                        <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                        
                        <div class="space-y-2">
                            <label class="font-serif italic text-[#fff0d1] font-bold text-lg">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ request('to') }}"
                                class="w-full bg-white/10 border-b-2 border-java-gold p-4 text-white placeholder-white/40 focus:outline-none focus:bg-white/20 transition rounded-t-lg"
                                placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="space-y-2">
                            <label class="font-serif italic text-[#fff0d1] font-bold text-lg">Kehadiran</label>
                            <select name="is_attending"
                                class="w-full bg-white/10 border-b-2 border-java-gold p-4 text-white focus:outline-none focus:bg-white/20 transition rounded-t-lg"
                                required>
                                <option value="" disabled selected class="text-java-brown">Pilih Kehadiran</option>
                                <option value="1" class="text-java-brown">Akan Hadir</option>
                                <option value="0" class="text-java-brown">Tidak Dapat Hadir</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="font-serif italic text-[#fff0d1] font-bold text-lg">Pesan & Doa</label>
                            <textarea name="message"
                                class="w-full bg-white/10 border-b-2 border-java-gold p-4 text-white placeholder-white/40 focus:outline-none focus:bg-white/20 transition rounded-t-lg"
                                placeholder="Tulis ucapan selamat & doa" rows="4"></textarea>
                        </div>

                        <button type="submit"
                            class="btn-premium w-full py-5 rounded-full text-sm uppercase tracking-[0.3em] font-bold shadow-xl hover:shadow-java-gold/50 transition-all">
                            Kirim Konfirmasi
                        </button>
                    </form>
                </div>
                
                <!-- RSVP LIST -->
                <div class="mt-32 space-y-8" data-aos="fade-up">
                    <h3 class="font-script text-6xl text-java-gold text-center">Ucapan Selamat</h3>
                    <div class="max-h-[500px] overflow-y-auto px-4 custom-scrollbar space-y-6">
                        @php
                            $rsvps = $invitation->guests()->where('is_rsvp', true)->orderBy('updated_at', 'desc')->get();
                        @endphp
                        @forelse($rsvps as $rsvp)
                            <div class="glass-effect p-8 rounded-[2rem] border-java-gold/20 shadow-lg relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-2 {{ $rsvp->is_attending ? 'bg-java-gold' : 'bg-java-brown' }}"></div>
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full bg-java-gold text-java-brown flex items-center justify-center font-bold">
                                            {{ strtoupper(substr($rsvp->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-java-gold">{{ $rsvp->name }}</p>
                                            <p class="text-[10px] text-[#fffef0]/60 tracking-widest">{{ $rsvp->updated_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <span class="text-[9px] px-3 py-1 rounded-full uppercase tracking-widest font-bold {{ $rsvp->is_attending ? 'bg-java-gold/10 text-java-gold border border-java-gold/30' : 'bg-white/10 text-white border border-white/30' }}">
                                        {{ $rsvp->is_attending ? 'Hadir' : 'Absen' }}
                                    </span>
                                </div>
                                <p class="font-serif italic text-[#fffef0] mt-4 leading-relaxed">"{{ $rsvp->message }}"</p>
                            </div>
                        @empty
                            <div class="text-center py-20 glass-effect rounded-[2rem] border-2 border-dashed border-java-gold/20">
                                <p class="text-java-gold/50 italic font-serif">Belum ada ucapan...</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER / CLOSING -->
        <footer class="py-32 px-6 bg-java-espresso text-white text-center relative overflow-hidden border-t-8 border-java-gold">
             <div class="absolute inset-0 opacity-10 bg-batik mix-blend-overlay"></div>
             
             <div class="container mx-auto max-w-4xl relative z-10" data-aos="zoom-in">
                 <div class="java-separator w-48 mx-auto mb-12"></div>
                 
                 <p class="font-serif italic text-xl md:text-2xl mb-12 leading-relaxed">
                     "Merupakan suatu kehormatan dan kebahagiaan bagi kami sekeluarga, apabila Bapak/Ibu/Saudara/i dapat hadir dan memberikan doa restu kepada kedua mempelai."
                 </p>
                 
                 <div class="java-separator w-48 mx-auto mb-12 opacity-40"></div>
                 
                 <h2 class="font-serif text-lg tracking-[0.5em] uppercase mb-12">Terima Kasih</h2>
                 
                 <h1 class="font-script text-7xl md:text-8xl text-java-gold mb-16">
                     {{ $invitation->bride_name }} & {{ $invitation->groom_name }}
                 </h1>
             </div>
        </footer>

    </main>

@endsection
