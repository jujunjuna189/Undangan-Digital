@extends('public.template.theme-4.app')

@section('content')

    <!-- COVER SECTION - Tema 4: Navy & Gold with Elegant Opening -->
    <section id="cover"
        class="fixed inset-0 z-[100] flex items-center justify-center navy-bg transition-opacity duration-1000">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/image/theme-4-cover.jpeg') }}"
                class="w-full h-full object-cover opacity-60 scale-105 object-[50%_20%]" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-[#001f3f] via-[#001f3f]/40 to-black/30"></div>
            <div class="absolute inset-0 opacity-10"
                style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22100%22 height=%22100%22><defs><pattern id=%22p%22 x=%220%22 y=%220%22 width=%22100%22 height=%22100%22 patternUnits=%22userSpaceOnUse%22><path d=%22M50,10 Q75,40 50,70 Q25,40 50,10%22 fill=%22none%22 stroke=%22%23b8860b%22 stroke-width=%220.5%22 /></pattern></defs><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23001f3f%22 /><rect width=%22100%25%22 height=%22100%25%22 fill=%22url(%23p)%22 /></svg>')">
            </div>
        </div>

        <!-- Ornamental Corners -->
        <div class="absolute top-8 left-8 w-16 h-16 border-l-2 border-t-2 border-[#d4af37] opacity-60"></div>
        <div class="absolute top-8 right-8 w-16 h-16 border-r-2 border-t-2 border-[#d4af37] opacity-60"></div>
        <div class="absolute bottom-8 left-8 w-16 h-16 border-l-2 border-b-2 border-[#d4af37] opacity-60"></div>
        <div class="absolute bottom-8 right-8 w-16 h-16 border-r-2 border-b-2 border-[#d4af37] opacity-60"></div>

        <!-- Music Control (Top Right) -->
        <div class="absolute top-8 right-20 z-50">
            <button
                class="w-10 h-10 rounded-full glass-effect flex items-center justify-center hover:border-[#d4af37] transition text-[#d4af37]"
                onclick="toggleMusic()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 18v-5h2v5H9m4-7v-5h2v5h-2m4-7v-5h2v5h-2" />
                </svg>
            </button>
        </div>

        <!-- Main Content -->
        <div class="relative z-50 text-center px-6 py-12 md:py-20 flex flex-col items-center justify-center min-h-full w-full">
            <div class="flex flex-col items-center space-y-6 md:space-y-12 max-w-lg">
                <!-- Title -->
                <div class="animate-float space-y-2 md:space-y-6">
                    <p class="text-[#d4af37] text-[10px] md:text-sm tracking-[0.5em] uppercase font-light">The Wedding of</p>

                    <!-- Couple Names with Gold Styling -->
                    <h1 class="font-serif text-4xl md:text-7xl text-[#f7e7ce] italic leading-tight text-shadow-gold">
                        {{ $invitation->groom_name ?? 'Mempelai Pria' }} <span
                            class="text-[#d4af37] mx-1 md:mx-2 text-2xl md:text-5xl">&</span>
                        {{ $invitation->bride_name ?? 'Mempelai Wanita' }}
                    </h1>

                    <!-- Date & Location -->
                    <div class="flex justify-center items-center gap-2 md:gap-4">
                        <div class="h-px w-8 md:w-12 bg-[#d4af37]/50"></div>
                        <p class="text-[#f7e7ce] text-[10px] md:text-sm tracking-[0.3em] uppercase font-light">
                            @if($invitation->wedding_date)
                                {{ $invitation->wedding_date->translatedFormat('d F Y') }}
                            @else
                                30 Desember 2026
                            @endif
                            • {{ $invitation->location ?? 'Kota Anda' }}
                        </p>
                        <div class="h-px w-8 md:w-12 bg-[#d4af37]/50"></div>
                    </div>
                </div>

                <!-- Couple Image with Gold Border (Circular) -->
                <div class="relative inline-block">
                    <div class="w-32 h-32 md:w-56 md:h-56 mx-auto relative">
                        <div class="absolute inset-0 border-4 border-[#d4af37] rounded-full opacity-80"></div>
                        <div class="absolute inset-2 rounded-full overflow-hidden border-2 border-[#d4af37]">
                            <img src="{{ asset('assets/image/theme-4-profile.jpeg') }}" class="w-full h-full object-cover">
                        </div>
                        <!-- Gold Accent Corners -->
                        <div class="absolute -top-2 -left-2 w-6 h-6 md:w-8 md:h-8 border-l-2 border-t-2 border-[#d4af37]"></div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 md:w-8 md:h-8 border-r-2 border-t-2 border-[#d4af37]"></div>
                        <div class="absolute -bottom-2 -left-2 w-6 h-6 md:w-8 md:h-8 border-l-2 border-b-2 border-[#d4af37]"></div>
                        <div class="absolute -bottom-2 -right-2 w-6 h-6 md:w-8 md:h-8 border-r-2 border-b-2 border-[#d4af37]"></div>
                    </div>
                </div>

                <!-- Invitation Prompt -->
                <div class="space-y-4 md:space-y-6">
                    <div>
                        <p class="text-[#f7e7ce] text-[10px] md:text-sm mb-1 tracking-[0.2em] uppercase">Kepada Yth.</p>
                        <p class="text-[#d4af37] text-lg md:text-2xl font-serif italic tracking-wide">{{ request('to', 'Tamu Undangan') }}</p>
                    </div>
                    
                    <p class="text-[#f7e7ce] text-[10px] md:text-sm tracking-[0.1em] opacity-80 max-w-xs mx-auto leading-relaxed">
                        “Khawatir dan gelisah soal pernikahan itu wajar. Tapi akan ada masanya kamu sampai di titik itu.”
                    </p>

                    <button onclick="openInvitation()"
                        class="relative px-8 py-3 md:px-10 md:py-4 text-[#d4af37] border-2 border-[#d4af37] rounded-full text-xs md:text-sm tracking-[0.2em] uppercase font-semibold hover:bg-[#d4af37] hover:text-[#001f3f] transition-all duration-500 glass-effect">
                        Buka Undangan
                    </button>
                </div>
            </div>
        </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-pulse-light">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                    <path d="M12 5v14m0 0l-7-7m7 7l7-7" />
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
                <img src="{{ asset('assets/image/theme-4-cover.jpeg') }}"
                    class="w-full h-full object-cover opacity-60 scale-105 object-[50%_20%]" alt="Background">
                <div class="absolute inset-0 bg-gradient-to-t from-[#001f3f] via-[#001f3f]/40 to-black/30"></div>
                <!-- Subtle Pattern Overlay -->
                <div class="absolute inset-0 opacity-10"
                    style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22100%22 height=%22100%22><defs><pattern id=%22p%22 x=%220%22 y=%220%22 width=%22100%22 height=%22100%22 patternUnits=%22userSpaceOnUse%22><path d=%22M50,10 Q75,40 50,70 Q25,40 50,10%22 fill=%22none%22 stroke=%22%23d4af37%22 stroke-width=%220.5%22 /></pattern></defs><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23001f3f%22 /><rect width=%22100%25%22 height=%22100%25%22 fill=%22url(%23p)%22 /></svg>')">
                </div>
            </div>

            <!-- Main Content -->
            <div class="relative z-10 text-center px-4 w-full py-20" data-aos="zoom-in" data-aos-duration="1500">

                <!-- Top Ornament -->
                <div class="flex justify-center mb-6 opacity-80">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                        <path
                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                            fill="#d4af37" stroke="none" />
                    </svg>
                </div>

                <p
                    class="text-xs md:text-base uppercase tracking-[0.4em] text-[#d4af37] font-bold mb-2 md:mb-4 drop-shadow-md">
                    The Wedding Of
                </p>

                <h1 class="text-4xl md:text-8xl font-serif text-[#f7e7ce] mb-4 italic drop-shadow-lg leading-tight">
                    {{ $invitation->groom_name ?? 'Pria' }} <span class="text-[#d4af37] mx-1 md:mx-2 text-3xl md:text-6xl">&</span>
                    {{ $invitation->bride_name ?? 'Wanita' }}
                </h1>

                <div class="flex justify-center items-center gap-4 mb-8 md:mb-12">
                    <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
                    <p class="text-[#f7e7ce] font-light tracking-[0.2em] text-[10px] md:text-sm uppercase">
                        @if($invitation->wedding_date)
                            {{ $invitation->wedding_date->translatedFormat('d F Y') }}
                        @else
                            30 Desember 2026
                        @endif
                        • {{ $invitation->location ?? 'Kota Anda' }}
                    </p>
                    <div class="h-px w-8 md:w-16 bg-[#d4af37]/60"></div>
                </div>

                <!-- Elegant Countdown -->
                <div class="flex justify-center items-center gap-3 md:gap-12 text-center text-[#d4af37] mb-12"
                    data-aos="fade-up" data-aos-delay="300">
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
                        <span
                            class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Menit</span>
                    </div>
                    <div class="text-xl md:text-2xl opacity-50 pb-3">:</div>
                    <div class="flex flex-col items-center">
                        <span id="seconds" class="text-3xl md:text-5xl font-serif leading-none">00</span>
                        <span
                            class="text-[8px] md:text-[10px] uppercase tracking-widest text-[#d4af37]/60 mt-1">Detik</span>
                    </div>
                </div>

                <!-- Additional Text -->
                <p class="text-[#f7e7ce] text-sm md:text-base tracking-[0.2em] uppercase font-light mb-8">
                    Tambahan Kepada Tamu Undangan
                </p>

                <!-- Scroll Indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce opacity-60">
                    <span class="text-[10px] text-[#f7e7ce] tracking-widest uppercase mb-2 block opacity-80">Scroll</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"
                        class="mx-auto">
                        <path d="M7 13L12 18L17 13M7 6L12 11L17 6" stroke-linecap="round" stroke-linejoin="round" />
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
                            <h1 class="font-serif text-3xl md:text-6xl text-[#d4af37] italic mb-6">
                                {{ $invitation->groom_name }} & {{ $invitation->bride_name }}</h1>
                            <p class="text-[#f7e7ce] text-lg leading-relaxed mb-8 font-light">
                                Bersyukur atas segala nikmat yang telah diberikan, dengan hati yang tulus kami berbagi
                                kebahagiaan dengan orang-orang terkasih.
                            </p>
                            <div class="flex justify-start items-center gap-4 mb-8">
                                <div class="h-px w-8 bg-[#d4af37]/50"></div>
                                <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase">
                                    {{ $invitation->wedding_date->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="order-1 md:order-2 relative" data-aos="fade-left">
                            <div class="relative aspect-[3/4] overflow-hidden rounded-2xl border-4 border-[#d4af37]">
                                <img src="{{ asset('assets/image/theme-4-cover.jpeg') }}"
                                    class="w-full h-full object-cover">
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
                    <p class="text-[#d4af37] text-2xl md:text-3xl mb-6 font-serif leading-relaxed">وَمِنْ آيَاتِهِ أَنْ
                        خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا</p>

                    <div class="separator-gold w-32 mx-auto my-6"></div>

                    <!-- Translation -->
                    <p class="text-[#f7e7ce] text-base md:text-lg leading-relaxed font-light italic mb-6">
                        "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untuk kamu isteri-isteri dari jenismu
                        sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antara kamu rasa
                        kasih dan sayang."
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
                        <p class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-6">Calon Pengantin</p>
                        <h1 class="text-3xl md:text-7xl font-serif text-[#f7e7ce] italic leading-tight">
                            {{ $invitation->groom_name ?? 'Mempelai Pria' }} <span
                                class="text-[#d4af37] mx-1 md:mx-3 text-2xl md:text-5xl">&</span>
                            {{ $invitation->bride_name ?? 'Mempelai Wanita' }}
                        </h1>
                    </div>

                    <div class="separator-gold w-32 mx-auto mb-12"></div>

                    <!-- Combined Photos Section -->
                    <div class="mb-12">
                        <div class="flex justify-center" data-aos="zoom-in">
                            <!-- Unified Couple Photo -->
                            <div class="relative group max-w-md w-full">
                                <div
                                    class="absolute -inset-1 border-2 border-[#d4af37] rounded-3xl translate-x-6 translate-y-6 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-500 opacity-60">
                                </div>
                                <div class="relative overflow-hidden rounded-3xl aspect-[3/4] shadow-2xl">
                                    <img src="{{ asset('assets/image/theme-4-cover.jpeg') }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <!-- Gold Accent Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#d4af37]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    </div>
                                </div>
                                <!-- Combined Names Badge -->
                                <div
                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-[#d4af37] text-[#001f3f] px-8 py-3 rounded-full font-serif italic text-lg shadow-lg whitespace-nowrap">
                                    {{ $invitation->groom_name ?? 'Prial' }} & {{ $invitation->bride_name ?? 'Wanita' }}
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Element -->
                        <div class="flex justify-center mt-16 mb-8">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                                    fill="#d4af37" />
                            </svg>
                        </div>
                    </div>

                    <!-- Information Grid -->
                    <div class="grid md:grid-cols-2 gap-8 mt-16">
                        <!-- Groom Info -->
                        <div class="text-center md:text-right border-r-0 md:border-r md:border-[#d4af37]/30 pr-0 md:pr-8"
                            data-aos="fade-up">
                            <h3 class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-3">Pengatin Perempuan
                            </h3>
                            <p class="text-[#d4af37] text-lg mb-4 font-serif">
                                {{ $invitation->groom_name ?? 'Nama Mempelai Pria' }}</p>

                            <div class="space-y-3 mb-6">
                                <p class="text-[#f7e7ce] font-light text-sm">Putra dari :</p>
                                <p class="text-[#d4af37] font-serif text-lg leading-tight">
                                    {{ $invitation->groom_parents ?? 'Bapak & Ibu' }}</p>
                            </div>

                            <!-- Instagram Account -->
                            <div
                                class="flex items-center justify-center md:justify-end gap-3 pt-4 border-t border-[#d4af37]/30">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d4af37"
                                    stroke-width="1.5">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                                    <circle cx="17.5" cy="6.5" r=".5" fill="#d4af37"></circle>
                                </svg>
                                <a href="https://instagram.com/{{ str_replace('@', '', $invitation->groom_ig ?? 'groom') }}"
                                    target="_blank"
                                    class="text-[#d4af37] hover:text-[#f7e7ce] transition text-sm font-light">
                                    {{ $invitation->groom_ig ?? '@instagram_groom' }}
                                </a>
                            </div>
                        </div>

                        <!-- Bride Info -->
                        <div class="text-center md:text-left border-l-0 md:border-l md:border-[#d4af37]/30 pl-0 md:pl-8"
                            data-aos="fade-up">
                            <h3 class="text-[#d4af37] text-sm tracking-[0.3em] uppercase font-light mb-3">Pengantin Pria
                            </h3>
                            <p class="text-[#d4af37] text-lg mb-4 font-serif">
                                {{ $invitation->bride_name ?? 'Nama Mempelai Wanita' }}</p>

                            <div class="space-y-3 mb-6">
                                <p class="text-[#f7e7ce] font-light text-sm">Putri dari :</p>
                                <p class="text-[#d4af37] font-serif text-lg leading-tight">
                                    {{ $invitation->bride_parents ?? 'Bapak & Ibu' }}</p>
                            </div>

                            <!-- Instagram Account -->
                            <div
                                class="flex items-center justify-center md:justify-start gap-3 pt-4 border-t border-[#d4af37]/30">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d4af37"
                                    stroke-width="1.5">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                                    <circle cx="17.5" cy="6.5" r=".5" fill="#d4af37"></circle>
                                </svg>
                                <a href="https://instagram.com/{{ str_replace('@', '', $invitation->bride_ig ?? 'bride') }}"
                                    target="_blank"
                                    class="text-[#d4af37] hover:text-[#f7e7ce] transition text-sm font-light">
                                    {{ $invitation->bride_ig ?? '@instagram_bride' }}
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

                <div class="relative max-w-5xl mx-auto">
                    <!-- Central Line -->
                    <div
                        class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-[#d4af37]/0 via-[#d4af37]/50 to-[#d4af37]/0 md:transform md:-translate-x-1/2">
                    </div>

                    <div class="space-y-12 md:space-y-0">
                        <!-- 01: September 2025 (Left) -->
                        <div class="relative flex flex-col md:flex-row items-center justify-between w-full group">
                            <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0"
                                data-aos="fade-right">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">September 2025
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        01
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Untuk pertama kalinya kedua pihak bertemu. Sebatas pertemuan sederhana nan biasa.
                                        Saat nota reimburse diserahkan, pihak laki-laki merasakan debar halus—seolah hatinya
                                        mulai diuji.
                                    </p>
                                </div>
                            </div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                        </div>

                        <!-- 02: Akhir Oktober 2025 (Right) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 pr-12 md:pr-12 hidden md:block"></div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500 bg-[#d4af37]">
                                <span class="w-2 h-2 rounded-full bg-white"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12" data-aos="fade-left">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tl-3xl rounded-br-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 -left-3 hidden md:block w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">Akhir Oktober 2025
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        02
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Pihak perempuan kembali hadir. Tanpa saling mengenal dan saling mengetahui. Keduanya
                                        bertemu dalam sesi foto tim akhwat finance, dengan pihak laki-laki di balik
                                        lensa—Hatinya berdebar dan mulai kembali diuji.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 03: 23 November 2025 (Left) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0"
                                data-aos="fade-right">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">23 November 2025
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        03
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Sebuah keberanian dilakukan. Hamdun melangkah dengan niat yakin, mengajukan ta'aruf
                                        kepada Muthia melalui salah satu Asatidz Cinta Quran Foundation.
                                    </p>
                                </div>
                            </div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                        </div>

                        <!-- 04: 1 Desember 2025 (Right) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 pr-12 md:pr-12 hidden md:block"></div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500 bg-[#d4af37]">
                                <span class="w-2 h-2 rounded-full bg-white"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12" data-aos="fade-left">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tl-3xl rounded-br-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 -left-3 hidden md:block w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">1 Desember 2025
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        04
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Di selasar Masjid Raya Al-Muttaqin, Kota Bogor, menjadi awal pertemuan kedua pihak
                                        dengan pendampingan dua perantara.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 05: 8 Desember 2025 (Left) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0"
                                data-aos="fade-right">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">8 Desember 2025
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        05
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Pukul 8 malam, sebuah pertemuan bersama orang tua Muthia. 2 jam penuh doa, diskusi
                                        dan pertanyaan. Menjadi langkah awal untuk saling meyakinkan niat.
                                    </p>
                                </div>
                            </div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                        </div>

                        <!-- 06: 9-26 Desember (Right) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 pr-12 md:pr-12 hidden md:block"></div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500 bg-[#d4af37]">
                                <span class="w-2 h-2 rounded-full bg-white"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12" data-aos="fade-left">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tl-3xl rounded-br-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 -left-3 hidden md:block w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">9-26 Desember</h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        06
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Hari demi hari penuh pertimbangan. 27 Desember, Hamdun kembali diundang untuk
                                        diperkenalkan kepada keluarga besar Muthia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 07: 18 Januari 2026 (Left) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0"
                                data-aos="fade-right">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">18 Januari 2026
                                    </h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        07
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Atas izin Allah, kedua orang tua kami dipertemukan. Sebuah khitbah menjadi pengikat
                                        niat, doa, dan masa depan kami.
                                    </p>
                                </div>
                            </div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                        </div>

                        <!-- 08: Februari-April 2026 (Right) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 pr-12 md:pr-12 hidden md:block"></div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500 bg-[#d4af37]">
                                <span class="w-2 h-2 rounded-full bg-white"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12" data-aos="fade-left">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tl-3xl rounded-br-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 -left-3 hidden md:block w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">Februari-April
                                        2026</h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        08
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Masa jeda yang kami isi dengan menata kembali diri, memperdalam kualitas ibadah.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 09: 3 Mei 2026 (Left) -->
                        <div
                            class="relative flex flex-col md:flex-row items-center justify-between w-full group md:mt-[-30px]">
                            <div class="w-full md:w-5/12 md:pr-12 pl-12 md:pl-0 md:text-right mb-6 md:mb-0"
                                data-aos="fade-right">
                                <div
                                    class="glass-effect p-6 md:p-8 rounded-tr-3xl rounded-bl-3xl border border-[#d4af37]/10 hover:border-[#d4af37]/30 transition-all duration-500 relative">
                                    <div
                                        class="absolute top-4 right-4 md:left-auto md:right-auto md:-right-3 w-6 h-6 bg-[#d4af37]/10 rotate-45 transform">
                                    </div>
                                    <h3 class="font-serif text-xl md:text-2xl text-[#d4af37] italic mb-2">3 Mei 2026</h3>
                                    <div
                                        class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-3 py-1 rounded-full mb-4">
                                        09
                                    </div>
                                    <p class="text-[#f7e7ce] font-light leading-relaxed text-sm">
                                        Salah satu hari dan momen terindah yang terjadi di hidup kami. Ya, hari akad itu
                                        dimulai. Insyaallah kami berdua akan melaksanakan "Mitsaqan Ghaliza" (Perjanjian
                                        Agung) yang akan mempersatukan tujuan mulia itu.
                                    </p>
                                </div>
                            </div>
                            <!-- Center Node -->
                            <div
                                class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full navy-bg border-2 border-[#d4af37] z-10 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                            </div>
                            <div class="w-full md:w-5/12 pl-12 md:pl-12"></div>
                        </div>
                    </div>

                    <!-- Bottom Ornament -->
                    <div class="flex justify-center mt-16 md:mt-24 opacity-60" data-aos="fade-up">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                </div>
        </section>

        <!-- SECTION 7: ACARA (Tema-3: Modern) -->
        <section class="py-24 px-6 relative">
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
                                <h3 class="text-xl font-serif text-[#d4af37] italic mb-2">Prosesi Akad Nikah</h3>
                                <p class="text-[#f7e7ce] text-sm">{{ $invitation->akad_location }}</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="text-right">
                                    <p class="text-[#d4af37] font-serif text-lg">{{ $invitation->akad_time }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="glass-effect rounded-xl p-6 md:p-8 hover:border-[#d4af37] transition" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-serif text-[#d4af37] italic mb-2">Resepsi</h3>
                                <p class="text-[#f7e7ce] text-sm">{{ $invitation->resepsi_location }}</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="text-right">
                                    <p class="text-[#d4af37] font-serif text-lg">{{ $invitation->resepsi_time }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 9: VIDEO (Tema-3) -->
        <!--<section class="py-24 px-6 relative">-->
        <!--    <div class="container mx-auto max-w-5xl relative z-10">-->
        <!--        <div class="text-center mb-16" data-aos="fade-up">-->
        <!--            <h2 class="text-3xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Trailer</h2>-->
        <!--            <div class="flex justify-center mb-8">-->
        <!--                <div class="separator-gold w-32"></div>-->
        <!--            </div>-->
        <!--        </div>-->

        <!-- Video Container -->
        <!--        <div class="glass-effect rounded-xl overflow-hidden aspect-video" data-aos="fade-up">-->
        <!--            <video-->
        <!--                src="{{ asset('assets/video/video-4.mp4') }}"-->
        <!--                class="w-full h-full object-cover"-->
        <!--                autoplay-->
        <!--                muted-->
        <!--                loop-->
        <!--                playsinline-->
        <!--                preload="metadata">-->
        <!--            </video>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

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
                            <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Prosesi Akad Nikah</h3>
                            <p class="text-[#f7e7ce] font-light mb-4">
                                {{ $invitation->akad_location }}<br>
                                {{ $invitation->akad_address }}
                            </p>
                            <a href="{{ $invitation->maps_url }}" target="_blank"
                                class="text-[#d4af37] text-sm hover:text-[#f7e7ce] transition">📍 Buka di Maps</a>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Resepsi</h3>
                            <p class="text-[#f7e7ce] font-light mb-4">
                                {{ $invitation->resepsi_location }}<br>
                                {{ $invitation->resepsi_address }}
                            </p>
                            <a href="{{ $invitation->maps_url }}" target="_blank"
                                class="text-[#d4af37] text-sm hover:text-[#f7e7ce] transition">📍 Buka di Maps</a>
                        </div>
                    </div>

                    <!-- Map Embed -->
                    <div class="mt-8 rounded-lg overflow-hidden">
                        <iframe src="{{ $invitation->maps_url }}" width="100%" height="300"
                            style="border:0; border-radius: 0.5rem;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <input type="text"
                                class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition"
                                placeholder="Masukkan nama Anda">
                        </div>

                        <div>
                            <label class="block text-[#d4af37] text-sm mb-2">Kehadiran</label>
                            <select
                                class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition">
                                <option value="" disabled selected class="bg-[#001f3f]">Pilih kehadiran</option>
                                <option value="hadir" class="bg-[#001f3f]">Akan Hadir</option>
                                <option value="tidak" class="bg-[#001f3f]">Belum Bisa Hadir</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-[#d4af37] text-sm mb-2">Pesan & Doa</label>
                            <textarea
                                class="w-full bg-transparent border-b border-[#d4af37]/30 text-[#f7e7ce] py-2 focus:outline-none focus:border-[#d4af37] transition"
                                placeholder="Kirim pesan & doa untuk kami" rows="4"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-[#d4af37] to-[#b8860b] text-[#001f3f] py-3 rounded-full font-semibold tracking-[0.2em] uppercase hover:shadow-lg transition-all duration-500 mt-8">
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
                    <!-- Account 2: Hamdun BSI -->
                    <div class="glass-effect rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Transfer Bank</h3>
                        <p class="text-[#f7e7ce] font-light mb-2 tracking-widest uppercase text-xs">BSI</p>
                        <p class="text-[#f7e7ce] font-semibold text-lg mb-4">7225044079</p>
                        <p class="text-[#f7e7ce] text-xs font-light">Atas Nama: ILHAM JAYA KUSUMAH</p>
                        <button onclick="copyToClipboard('7225044079')"
                            class="mt-4 text-[#d4af37] text-[10px] uppercase tracking-widest border border-[#d4af37]/30 px-4 py-1 rounded-full hover:bg-[#d4af37] hover:text-[#001f3f] transition-all">Salin
                            No. Rekening</button>
                    </div>

                    <!-- Account 4: Muthia BSI -->
                    <div class="glass-effect rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="text-xl font-serif text-[#d4af37] italic mb-4">Transfer Bank</h3>
                        <p class="text-[#f7e7ce] font-light mb-2 tracking-widest uppercase text-xs">BSI</p>
                        <p class="text-[#f7e7ce] font-semibold text-lg mb-4">1046170397</p>
                        <p class="text-[#f7e7ce] text-xs font-light">Atas Nama: MUTHIA DAMAYANTI</p>
                        <button onclick="copyToClipboard('1046170397')"
                            class="mt-4 text-[#d4af37] text-[10px] uppercase tracking-widest border border-[#d4af37]/30 px-4 py-1 rounded-full hover:bg-[#d4af37] hover:text-[#001f3f] transition-all">Salin
                            No. Rekening</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 13: ADAB WALIMAH (Tema-2 Style: Icon Grid) -->
        <section class="py-24 px-6 relative bg-gradient-to-b from-[#001f3f] to-[#000a1f]">
            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="text-4xl md:text-5xl font-serif text-[#f7e7ce] italic mb-4">Adab Walimah</h2>
                    <p class="text-[#d4af37] text-sm tracking-[0.2em] uppercase">Etika & Sopan Santun dalam Acara Kami</p>
                </div>

                <!-- Icon Grid (3 columns on desktop, 2 on mobile) -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
                    <!-- Item 1: Amalkan sapa & senyum -->
                    <div class="text-center space-y-4" data-aos="fade-up">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Amalkan sapa &
                            senyum</p>
                    </div>

                    <!-- Item 2: Mendo'akan Keberkahan -->
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0V12m-3 .5a3 3 0 006 0V6a1.5 1.5 0 10-3 0v12a3 3 0 11-6 0v-4m.5-3.5h0" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Mendo'akan
                            Keberkahan untuk Pengantin & Keluarga</p>
                    </div>

                    <!-- Item 3: Adab Makan & Minum -->
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Memperhatikan
                            Adab Makan dan Minum</p>
                    </div>

                    <!-- Item 4: Berpakaian Rapih -->
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 21.48V11.5" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Berpakaian
                            dengan Rapih dan Sopan</p>
                    </div>

                    <!-- Item 5: Tidak Merokok -->
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Tidak Merokok
                            di Lingkungan Acara</p>
                    </div>

                    <!-- Item 6: Infishal (Pemisahan) -->
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="w-20 h-20 mx-auto rounded-full bg-[#d4af37]/10 border-2 border-[#d4af37] flex items-center justify-center group hover:bg-[#d4af37]/20 transition">
                            <svg class="w-10 h-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-widest text-[#f7e7ce]">Kursi duduk
                            dipisah</p>
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
                    {{ $invitation->groom_name ?? 'Pria' }} & {{ $invitation->bride_name ?? 'Wanita' }}
                </p>

                <div class="flex justify-center gap-6 mb-8">
                    <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.953 4.57a10 10 0 002.856-3.51 10 10 0 01-2.956 1.745 4.993 4.993 0 00-8.604 4.585c-4.15-.05-7.9-2.175-10.403-5.174-.433.744-.679 1.61-.679 2.532 0 1.732.886 3.26 2.23 4.152a4.978 4.978 0 01-2.26-.616v.06c0 2.421 1.724 4.438 4.008 4.9a4.977 4.977 0 01-2.252.086c.634 1.953 2.483 3.375 4.666 3.415a10.005 10.005 0 01-6.175 2.13 10 10 0 015.89-1.725c7.068 0 10.928-5.86 10.928-10.93 0-.166-.003-.332-.01-.497a7.793 7.793 0 001.913-1.993z" />
                        </svg>
                    </a>
                    <a href="#" class="text-[#d4af37] hover:text-[#f7e7ce] transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" fill="none" stroke="currentColor"
                                stroke-width="1.5" />
                            <circle cx="17.5" cy="6.5" r=".5" fill="currentColor" />
                        </svg>
                    </a>
                </div>

                <p class="text-[#f7e7ce]/60 text-xs">
                    © 2026 {{ $invitation->groom_name ?? 'Pria' }} & {{ $invitation->bride_name ?? 'Wanita' }} Wedding.
                </p>
            </div>
        </footer>

    </main>

@endsection