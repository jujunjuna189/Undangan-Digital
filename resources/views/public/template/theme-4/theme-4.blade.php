@extends('public.template.theme-4.app')

@section('content')

<!-- COVER SECTION - Tema 4: Navy & Gold with Elegant Opening -->
<section id="cover" class="fixed inset-0 z-[100] flex items-center justify-center navy-bg transition-opacity duration-1000">
    <!-- Background with Navy & Gold Gradient -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-[#001f3f] via-[#002966] to-[#000a1f]"></div>
        <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\"><defs><pattern id=\"p\" x=\"0\" y=\"0\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\"><path d=\"M50,10 Q75,40 50,70 Q25,40 50,10\" fill=\"none\" stroke=\"%23d4af37\" stroke-width=\"0.5\"/></pattern></defs><rect width=\"100%\" height=\"100%\" fill=\"%23001f3f\"/><rect width=\"100%\" height=\"100%\" fill=\"url(%23p)\"/></svg>')]"></div>
    </div>

    <!-- Ornamental Corners -->
    <div class="absolute top-8 left-8 w-16 h-16 border-l-2 border-t-2 border-[#d4af37] opacity-60"></div>
    <div class="absolute top-8 right-8 w-16 h-16 border-r-2 border-t-2 border-[#d4af37] opacity-60"></div>
    <div class="absolute bottom-8 left-8 w-16 h-16 border-l-2 border-b-2 border-[#d4af37] opacity-60"></div>
    <div class="absolute bottom-8 right-8 w-16 h-16 border-r-2 border-b-2 border-[#d4af37] opacity-60"></div>

    <!-- Music Control (Top Right) -->
    <div class="absolute top-8 right-20 z-50">
        <button class="w-10 h-10 rounded-full glass-effect flex items-center justify-center hover:border-[#d4af37] transition text-[#d4af37]" onclick="toggleMusic()">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9 18v-5h2v5H9m4-7v-5h2v5h-2m4-7v-5h2v5h-2"/></svg>
        </button>
    </div>

    <!-- Audio Element (Hidden) -->
    <audio id="bgMusic" loop>
        <source src="{{ asset('assets/audio/wedding-music.mp3') }}" type="audio/mpeg">
    </audio>

    <!-- Main Content -->
    <div class="relative z-10 text-center px-6 py-20">
        <!-- Title -->
        <div class="animate-float" data-aos="zoom-in" data-aos-duration="1500">
            <p class="text-[#d4af37] text-xs md:text-sm tracking-[0.5em] uppercase font-light mb-6">The Wedding of</p>
            
            <!-- Couple Names with Gold Styling -->
            <h1 class="font-serif text-5xl md:text-7xl mb-4 text-[#f7e7ce] italic leading-tight text-shadow-gold">
                Ilham <span class="text-[#d4af37] mx-2 text-4xl md:text-5xl">&</span> Muthia
            </h1>

            <!-- Date & Location -->
            <div class="flex justify-center items-center gap-4 mb-12 mt-8">
                <div class="h-px w-12 bg-[#d4af37]/50"></div>
                <p class="text-[#f7e7ce] text-xs md:text-sm tracking-[0.3em] uppercase font-light">26 Desember 2025 • Jakarta</p>
                <div class="h-px w-12 bg-[#d4af37]/50"></div>
            </div>
        </div>

        <!-- Couple Image with Gold Border (Circular) -->
        <div class="relative mb-12 inline-block" data-aos="fade-up" data-aos-delay="300">
            <div class="w-40 h-40 md:w-56 md:h-56 mx-auto relative">
                <div class="absolute inset-0 border-4 border-[#d4af37] rounded-full opacity-60"></div>
                <div class="absolute inset-2 rounded-full overflow-hidden border-2 border-[#d4af37]">
                    <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover">
                </div>
                <!-- Gold Accent Corners -->
                <div class="absolute -top-3 -left-3 w-8 h-8 border-l-2 border-t-2 border-[#d4af37]"></div>
                <div class="absolute -top-3 -right-3 w-8 h-8 border-r-2 border-t-2 border-[#d4af37]"></div>
                <div class="absolute -bottom-3 -left-3 w-8 h-8 border-l-2 border-b-2 border-[#d4af37]"></div>
                <div class="absolute -bottom-3 -right-3 w-8 h-8 border-r-2 border-b-2 border-[#d4af37]"></div>
            </div>
        </div>

        <!-- Invitation Prompt -->
        <div class="mt-12" data-aos="fade-up" data-aos-delay="600">
            <p class="text-[#f7e7ce] text-sm mb-6 tracking-[0.2em] uppercase">Kepada Yth. Tamu Undangan</p>
            <button onclick="openInvitation()" class="relative px-10 py-4 text-[#d4af37] border-2 border-[#d4af37] rounded-full text-sm tracking-[0.3em] uppercase font-semibold hover:bg-[#d4af37] hover:text-[#001f3f] transition-all duration-500 glass-effect">
                Buka Undangan
            </button>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-pulse-light">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                <path d="M12 5v14m0 0l-7-7m7 7l7-7"/>
            </svg>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<main id="main-content" class="hidden relative z-10 navy-bg">

    <!-- SECTION 1: HERO / OPENING (Tema-2 Style: Full-height Hero with Countdown) -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-stone-900">
        <!-- Immersive Background with Parallax Feel -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover object-center opacity-60 scale-105" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-[#001f3f] via-[#001f3f]/40 to-black/30"></div>
            <!-- Subtle Pattern Overlay -->
            <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\"><defs><pattern id=\"p\" x=\"0\" y=\"0\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\"><path d=\"M50,10 Q75,40 50,70 Q25,40 50,10\" fill=\"none\" stroke=\"%23d4af37\" stroke-width=\"0.5\"/></pattern></defs><rect width=\"100%\" height=\"100%\" fill=\"%23001f3f\"/><rect width=\"100%\" height=\"100%\" fill=\"url(%23p)\"/></svg>')] bg-repeat mix-blend-overlay"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 text-center px-4 w-full py-20" data-aos="zoom-in" data-aos-duration="1500">
            
            <!-- Top Ornament -->
            <div class="flex justify-center mb-6 opacity-80">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d4af37" stroke="none" />
                </svg>
            </div>

            <p class="text-xs md:text-base uppercase tracking-[0.4em] text-[#d4af37] font-bold mb-2 md:mb-4 drop-shadow-md">
                The Wedding Of
            </p>
            
            <h1 class="text-6xl md:text-8xl font-serif text-[#f7e7ce] mb-4 italic drop-shadow-lg leading-none">
                Ilham <span class="text-[#d4af37] mx-1 md:mx-2">&</span> Muthia
            </h1>
            
            <div class="flex justify-center items-center gap-4 mb-8 md:mb-12">
                <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
                <p class="text-[#f7e7ce] font-light tracking-[0.2em] text-[10px] md:text-sm uppercase">
                    26 Desember 2025 • Jakarta
                </p>
                <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
            </div>

            <!-- Elegant Countdown -->
            <div class="flex justify-center items-center gap-3 md:gap-12 text-center text-[#d4af37] mb-12" data-aos="fade-up" data-aos-delay="300">
                <div class="flex flex-col items-center">
                    <span id="days" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                    <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Hari</span>
                </div>
                <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
                <div class="flex flex-col items-center">
                    <span id="hours" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                    <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Jam</span>
                </div>
                <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
                <div class="flex flex-col items-center">
                    <span id="minutes" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                    <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Menit</span>
                </div>
                <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
                <div class="flex flex-col items-center">
                    <span id="seconds" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                    <span class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Detik</span>
                </div>
            </div>

            <!-- Additional Text -->
            <p class="text-[#f7e7ce] text-sm md:text-base tracking-[0.2em] uppercase font-light mb-8">
                Tambahan Kepada Tamu Undangan
            </p>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce opacity-60">
                <span class="text-[10px] text-[#f7e7ce] tracking-widest uppercase mb-2 block opacity-80">Scroll</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5" class="mx-auto">
                    <path d="M7 13L12 18L17 13M7 6L12 11L17 6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- SECTION 2: COVER / HERO EXTENDED (Tema-2) -->
    <section class="min-h-screen flex items-center justify-center py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="glass-effect rounded-2xl p-8 md:p-16">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Text Side -->
                    <div class="order-2 md:order-1" data-aos="fade-right">
                        <h1 class="font-serif text-5xl md:text-6xl text-[#d4af37] italic mb-6">Ilham & Muthia</h1>
                        <p class="text-[#f7e7ce] text-lg leading-relaxed mb-8 font-light">
                            Bersyukur atas segala nikmat yang telah diberikan, dengan hati yang tulus kami berbagi kebahagiaan dengan orang-orang terkasih.
                        </p>
                        <div class="flex justify-start items-center gap-4 mb-8">
                            <div class="h-px w-8 bg-[#d4af37]/50"></div>
                            <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase">26 Desember 2025</p>
                        </div>
                    </div>
                    
                    <!-- Image Side -->
                    <div class="order-1 md:order-2 relative" data-aos="fade-left">
                        <div class="relative aspect-[3/4] overflow-hidden rounded-2xl border-4 border-[#d4af37]">
                            <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: MUKODIMAH (Tema-2 + Quran Surat Ar-Rum 21) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-4xl" data-aos="zoom-in">
            <div class="glass-effect rounded-2xl p-8 md:p-16 text-center">
                <h2 class="text-2xl md:text-4xl text-[#d4af37] mb-8 tracking-[0.2em] uppercase">Mukodimah</h2>
                
                <!-- Arabic Verse -->
                <p class="text-[#d4af37] text-2xl md:text-3xl mb-6 font-serif leading-relaxed">وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا</p>
                
                <div class="separator-gold w-32 mx-auto my-6"></div>
                
                <!-- Translation -->
                <p class="text-[#f7e7ce] text-base md:text-lg leading-relaxed font-light italic mb-6">
                    "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untuk kamu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antara kamu rasa kasih dan sayang."
                </p>
                
                <p class="text-[#d4af37] text-sm tracking-[0.2em]">QS. Ar-Rum : 21</p>
            </div>
        </div>
    </section>

    <!-- SECTION 4: CALON SECTION (Tema-2 with Illustrator & Animation - Combined Photos) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Calon Pengantin</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Unified Card with Combined Photos -->
            <div class="glass-effect rounded-3xl p-8 md:p-16" data-aos="fade-up">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <p class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-6">Calon Pangantin</p>
                    <h1 class="text-5xl md:text-7xl font-serif text-[#f7e7ce] italic leading-tight">
                        Ilham <span class="text-[#d4af37] mx-3 text-4xl md:text-5xl">&</span> Muthia
                    </h1>
                </div>

                <div class="separator-gold w-32 mx-auto mb-12"></div>

                <!-- Combined Photos Section -->
                <div class="mb-12">
                    <div class="flex justify-center" data-aos="zoom-in">
                        <!-- Unified Couple Photo -->
                        <div class="relative group max-w-md w-full">
                            <div class="absolute -inset-1 border-2 border-[#d4af37] rounded-3xl translate-x-6 translate-y-6 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-500 opacity-60"></div>
                            <div class="relative overflow-hidden rounded-3xl aspect-[3/4] shadow-2xl">
                                <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 filter grayscale group-hover:grayscale-0">
                                <!-- Gold Accent Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-[#d4af37]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>
                            <!-- Combined Names Badge -->
                            <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-[#d4af37] text-[#001f3f] px-8 py-3 rounded-full font-serif italic text-lg shadow-lg whitespace-nowrap">
                                Ilham & Muthia
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Element -->
                    <div class="flex justify-center mt-16 mb-8">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" fill="#d4af37"/>
                        </svg>
                    </div>
                </div>

                <!-- Information Grid -->
                <div class="grid md:grid-cols-2 gap-8 mt-16">
                    <!-- Groom Info -->
                    <div class="text-center md:text-right border-r-0 md:border-r md:border-[#d4af37]/30 pr-0 md:pr-8" data-aos="fade-up">
                        <h3 class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-3">Calon Panganten Pameget</h3>
                        <p class="text-[#d4af37] text-lg mb-4">S.T.</p>
                        
                        <div class="space-y-3 mb-6">
                            <p class="text-[#f7e7ce] font-light text-sm">Putra tersayang dari :</p>
                            <p class="text-[#d4af37] font-serif text-lg leading-tight">Bapak & Ibu</p>
                        </div>
                        
                        <!-- Instagram Account -->
                        <div class="flex items-center justify-center md:justify-end gap-3 pt-4 border-t border-[#d4af37]/30">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                                <circle cx="17.5" cy="6.5" r=".5" fill="#d4af37"></circle>
                            </svg>
                            <a href="https://instagram.com/ilham_" target="_blank" class="text-[#d4af37] hover:text-[#f7e7ce] transition text-sm font-light">
                                @ilham_
                            </a>
                        </div>
                    </div>

                    <!-- Bride Info -->
                    <div class="text-center md:text-left border-l-0 md:border-l md:border-[#d4af37]/30 pl-0 md:pl-8" data-aos="fade-up">
                        <h3 class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-3">Calon Panganten Pamere</h3>
                        <p class="text-[#d4af37] text-lg mb-4">S.E.</p>
                        
                        <div class="space-y-3 mb-6">
                            <p class="text-[#f7e7ce] font-light text-sm">Putri tersayang dari :</p>
                            <p class="text-[#d4af37] font-serif text-lg leading-tight">Bapak & Ibu</p>
                        </div>
                        
                        <!-- Instagram Account -->
                        <div class="flex items-center justify-center md:justify-start gap-3 pt-4 border-t border-[#d4af37]/30">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                                <circle cx="17.5" cy="6.5" r=".5" fill="#d4af37"></circle>
                            </svg>
                            <a href="https://instagram.com/muthia_" target="_blank" class="text-[#d4af37] hover:text-[#f7e7ce] transition text-sm font-light">
                                @muthia_
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: LOVE STORY (Tema-2 & 3 Combined: Elegant + Modern) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Love Story</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="space-y-12">
                <!-- Event 1 -->
                <div class="glass-effect rounded-xl p-6 md:p-8" data-aos="fade-up">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-[#d4af37] rounded-full flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#001f3f"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg md:text-xl font-serif text-[#d4af37] italic mb-2">First Meeting</h3>
                            <p class="text-[#f7e7ce] font-light">Bertemu untuk pertama kalinya pada acara keluarga yang tak terlupakan, kesan pertama adalah awal dari segalanya.</p>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="glass-effect rounded-xl p-6 md:p-8" data-aos="fade-up">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-[#d4af37] rounded-full flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#001f3f"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg md:text-xl font-serif text-[#d4af37] italic mb-2">Falling in Love</h3>
                            <p class="text-[#f7e7ce] font-light">Seiring waktu, perasaan mendalam mulai berkembang dan cinta pun tumbuh di antara kami berdua.</p>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="glass-effect rounded-xl p-6 md:p-8" data-aos="fade-up">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-[#d4af37] rounded-full flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#001f3f"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-5.04-6.71l-2.75 3.54-2.16-2.66c-.22-.29-.57-.29-.79 0l-1.04 1.27c-.21.26-.17.68.09.9.26.21.67.17.88-.09l.45-.53.75.92-1.3 1.58c-.21.26-.17.68.09.9.26.21.67.17.88-.09l1.79-2.18 1.96 2.36c.12.15.31.23.5.23.21 0 .42-.11.54-.29l1.49-1.9c.21-.26.17-.68-.09-.9-.26-.21-.67-.17-.88.09l-.74.94z"/></svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg md:text-xl font-serif text-[#d4af37] italic mb-2">The Proposal</h3>
                            <p class="text-[#f7e7ce] font-light">Momen romantis saat dia melamar dengan tulus, dan aku menerima dengan sepenuh hati untuk selamanya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: ORANG TUAN / PARENTS (Tema-2 & 3: Grid 2 Atas 1 Bawah) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Orang Tua</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Grid Layout: 2 top, 1 bottom -->
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Groom's Parents -->
                <div class="glass-effect rounded-xl p-6 md:p-8 text-center" data-aos="fade-up">
                    <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase mb-4">Orang Tua Mempelai Pria</p>
                    <h3 class="text-2xl font-serif text-[#f7e7ce] italic mb-2">Bapak & Ibu</h3>
                    <p class="text-[#f7e7ce] text-sm font-light">Orang Tua Ilham</p>
                </div>

                <!-- Bride's Parents -->
                <div class="glass-effect rounded-xl p-6 md:p-8 text-center" data-aos="fade-up">
                    <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase mb-4">Orang Tua Mempelai Wanita</p>
                    <h3 class="text-2xl font-serif text-[#f7e7ce] italic mb-2">Bapak & Ibu</h3>
                    <p class="text-[#f7e7ce] text-sm font-light">Orang Tua Muthia</p>
                </div>
            </div>

            <!-- Siblings (Bottom Full Width) -->
            <div class="glass-effect rounded-xl p-6 md:p-8 text-center" data-aos="fade-up">
                <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase mb-4">Turut Mengundang</p>
                <p class="text-[#f7e7ce] font-light">Seluruh keluarga besar dari kedua belah pihak</p>
            </div>
        </div>
    </section>

    <!-- SECTION 7: ACARA (Tema-3: Modern) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Rangkaian Acara</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Events Timeline -->
            <div class="space-y-8">
                <!-- Event 1 -->
                <div class="glass-effect rounded-xl p-6 md:p-8 hover:border-[#d4af37] transition" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-serif text-[#d4af37] italic mb-2">Akad Nikah</h3>
                            <p class="text-[#f7e7ce] text-sm">Prosesi pernikahan secara agama</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-right">
                                <p class="text-[#d4af37] font-serif text-lg">09:00</p>
                                <p class="text-[#f7e7ce] text-xs">Pagi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="glass-effect rounded-xl p-6 md:p-8 hover:border-[#d4af37] transition" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-serif text-[#d4af37] italic mb-2">Resepsi</h3>
                            <p class="text-[#f7e7ce] text-sm">Makan bersama dan berkumpul dengan keluarga</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-right">
                                <p class="text-[#d4af37] font-serif text-lg">12:00</p>
                                <p class="text-[#f7e7ce] text-xs">Siang</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="glass-effect rounded-xl p-6 md:p-8 hover:border-[#d4af37] transition" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-serif text-[#d4af37] italic mb-2">Pesta Malam</h3>
                            <p class="text-[#f7e7ce] text-sm">Hiburan dan kebersamaan hingga malam hari</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-right">
                                <p class="text-[#d4af37] font-serif text-lg">17:00</p>
                                <p class="text-[#f7e7ce] text-xs">Sore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: GALLERY (Tema-3: Modern Grid) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Gallery</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-1.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-3.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-5.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden glass-effect group cursor-pointer hover:scale-105 transition" data-aos="fade-up">
                    <img src="{{ asset('assets/image/img-6.webp') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: VIDEO (Tema-3) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Our Moment</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <!-- Video Container -->
            <div class="glass-effect rounded-xl overflow-hidden aspect-video" data-aos="fade-up">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Wedding Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION 10: LOKASI (Tema-2) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Lokasi Acara</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <div class="glass-effect rounded-xl p-8 md:p-12" data-aos="fade-up">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Akad Nikah</h3>
                        <p class="text-[#f7e7ce] font-light mb-4">
                            Masjid Al-Ikhlas<br>
                            Jl. Gatot Subroto No. 123<br>
                            Jakarta Pusat, 12310
                        </p>
                        <a href="#" class="text-[#d4af37] text-sm hover:text-[#f7e7ce] transition">📍 Buka di Maps</a>
                    </div>
                    <div>
                        <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Resepsi</h3>
                        <p class="text-[#f7e7ce] font-light mb-4">
                            Hotel Mewah Jakarta<br>
                            Jl. Sudirman No. 456<br>
                            Jakarta Selatan, 12920
                        </p>
                        <a href="#" class="text-[#d4af37] text-sm hover:text-[#f7e7ce] transition">📍 Buka di Maps</a>
                    </div>
                </div>
                
                <!-- Map Embed -->
                <div class="mt-8 rounded-lg overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521671416506!2d106.7942154147585!3d-6.233156395493886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b5d%3A0x5371bf0fdad786a2!2sMonas%2C%20Jakarta%20Pusat!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="300" style="border:0; border-radius: 0.5rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: KONFIRMASI KEHADIRAN (Tema-2) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Konfirmasi Kehadiran</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <div class="glass-effect rounded-xl p-8 md:p-12" data-aos="fade-up">
                <form class="space-y-6">
                    <div>
                        <label class="block text-[#d4af37] text-sm mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition" placeholder="Masukkan nama Anda">
                    </div>
                    
                    <div>
                        <label class="block text-[#d4af37] text-sm mb-2">Email</label>
                        <input type="email" class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition" placeholder="Masukkan email Anda">
                    </div>
                    
                    <div>
                        <label class="block text-[#d4af37] text-sm mb-2">Kehadiran</label>
                        <select class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition">
                            <option value="" disabled selected class="bg-[#001f3f]">Pilih kehadiran</option>
                            <option value="hadir" class="bg-[#001f3f]">Saya Akan Hadir</option>
                            <option value="tidak" class="bg-[#001f3f]">Saya Tidak Bisa Hadir</option>
                            <option value="ragu" class="bg-[#001f3f]">Masih Ragu-ragu</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-[#d4af37] text-sm mb-2">Pesan & Doa</label>
                        <textarea class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition" placeholder="Kirim pesan & doa untuk kami" rows="4"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-[#d4af37] to-[#b8860b] text-[#001f3f] py-3 rounded-full font-semibold tracking-[0.2em] uppercase hover:shadow-lg transition-all duration-500 mt-8">
                        Kirim Konfirmasi
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION 12: KADO PERNIKAHAN (Tema-3) -->
    <section class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Hadiah Pernikahan</h2>
                <div class="flex justify-center mb-8">
                    <div class="separator-gold w-32"></div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bank Transfer -->
                <div class="glass-effect rounded-xl p-8 text-center" data-aos="fade-up">
                    <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Transfer Bank</h3>
                    <p class="text-[#f7e7ce] font-light mb-4">BCA - 123 456 7890</p>
                    <p class="text-[#f7e7ce] text-sm font-light">Atas Nama: Ilham</p>
                </div>

                <!-- GCash / E-Wallet -->
                <div class="glass-effect rounded-xl p-8 text-center" data-aos="fade-up">
                    <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Dana / OVO</h3>
                    <p class="text-[#f7e7ce] font-light mb-4">+62 8123 4567 890</p>
                    <p class="text-[#f7e7ce] text-sm font-light">Atas Nama: Ilham</p>
                </div>
            </div>

            <div class="mt-8 glass-effect rounded-xl p-8 text-center" data-aos="fade-up">
                <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Wishlist</h3>
                <p class="text-[#f7e7ce] font-light mb-6">Kunjungi wishlist kami di:</p>
                <a href="#" class="inline-block bg-gradient-to-r from-[#d4af37] to-[#b8860b] text-[#001f3f] px-8 py-3 rounded-full font-semibold text-sm tracking-[0.2em] uppercase hover:shadow-lg transition-all">
                    Lihat Wishlist
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 13: ADAB WALIMAH (Tema-2 Style: Icon Grid) -->
    <section class="py-24 px-6 relative bg-gradient-to-b from-[#001f3f] to-[#000a1f]">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Adab Walimah</h2>
                <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase">Etika & Sopan Santun dalam Acara</p>
            </div>

            <!-- Icon Grid (3 columns on desktop, 2 on mobile) -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
                <!-- Item 1 -->
                <div class="text-center space-y-4" data-aos="fade-up">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h10m-10 4h10M3 8c0-1.104.895-2 2-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Menghormati Waktu</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Hadir tepat waktu sesuai jadwal yang telah ditentukan</p>
                </div>

                <!-- Item 2 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Adab Makan & Minum</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Memperhatikan etika saat menikmati hidangan</p>
                </div>

                <!-- Item 3 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Berpakaian Sopan</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Menutup aurat sesuai ajaran Islam</p>
                </div>

                <!-- Item 4 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Tidak Berlebihan</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Menjaga kesederhanaan dalam segala hal</p>
                </div>

                <!-- Item 5 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Memohon Doa</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Memberikan doa terbaik untuk pengantin</p>
                </div>

                <!-- Item 6 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Tanpa Foto Tanpa Ijin</p>
                    <p class="text-xs text-[#d4af37] font-light hidden md:block">Hormati privasi dalam pengambilan foto</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 14: FOOTER (Tema-2) -->
    <footer class="py-16 px-6 relative">
        <div class="container mx-auto max-w-4xl text-center relative z-10" data-aos="fade-up">
            <div class="separator-gold w-32 mx-auto mb-8"></div>
            
            <p class="text-[#f7e7ce] font-light mb-6">
                Terima kasih atas kehadiran dan doa restu Bapak/Ibu untuk kebahagiaan kami.
            </p>
            
            <p class="text-[#d4af37] font-serif text-2xl italic mb-8">
                Ilham & Muthia
            </p>

            <div class="flex justify-center gap-6 mb-8">
                <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M23.953 4.57a10 10 0 002.856-3.51 10 10 0 01-2.956 1.745 4.993 4.993 0 00-8.604 4.585c-4.15-.05-7.9-2.175-10.403-5.174-.433.744-.679 1.61-.679 2.532 0 1.732.886 3.26 2.23 4.152a4.978 4.978 0 01-2.26-.616v.06c0 2.421 1.724 4.438 4.008 4.9a4.977 4.977 0 01-2.252.086c.634 1.953 2.483 3.375 4.666 3.415a10.005 10.005 0 01-6.175 2.13 10 10 0 015.89-1.725c7.068 0 10.928-5.86 10.928-10.93 0-.166-.003-.332-.01-.497a7.793 7.793 0 001.913-1.993z"/></svg>
                </a>
                <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="17.5" cy="6.5" r=".5" fill="currentColor"/></svg>
                </a>
            </div>

            <p class="text-[#f7e7ce]/60 text-xs">
                © 2025 Juna & Furi Wedding. Made with <span class="text-[#d4af37]">❤</span> by QUICT Digital Solutions
            </p>
        </div>
    </footer>

</main>

<!-- JavaScript untuk kontrol musik -->
<script>
    function toggleMusic() {
        const audio = document.getElementById('bgMusic');
        const btn = document.querySelector('button[onclick="toggleMusic()"]');
        if (audio.paused) {
            audio.play();
            btn.classList.add('animate-spin');
        } else {
            audio.pause();
            btn.classList.remove('animate-spin');
        }
    }

    // Auto-play musik saat halaman dibuka (jika diizinkan browser)
    window.addEventListener('load', () => {
        const audio = document.getElementById('bgMusic');
        audio.volume = 0.3; // Set volume ke 30%
        // Uncomment line di bawah untuk auto-play
        // audio.play().catch(e => console.log('Autoplay prevented:', e));
    });
</script>

@endsection
