@extends('public.template.theme-5.app')

@section('content')

    <!-- COVER SECTION - Theme 5: Sunda x Betawi -->
    <section id="cover"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-[#fff7ed] transition-opacity duration-1000">
        <div class="absolute inset-0 z-0 bg-megamendung opacity-20"></div>
        <div class="absolute inset-0 z-0">
            <img src="{{ $invitation->cover_photo ? asset($invitation->cover_photo) : asset('assets/image/theme-5-cover.png') }}" class="w-full h-full object-cover opacity-60"
                alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-[#78350f]/60 via-transparent to-transparent"></div>
        </div>

        <!-- Ornament Corners (Gigi Balang style) -->
        <div class="absolute top-0 left-0 w-full h-[15px] gigibalang-border"></div>
        <div class="absolute bottom-0 left-0 w-full h-[15px] gigibalang-border-top rotate-180"></div>

        <!-- Cover Decorative Elements -->
        <div class="sunda-jasmine-hanging w-6 h-48 absolute top-0 left-10 opacity-40 animate-float translate-y-[-20px]">
        </div>
        <div
            class="sunda-jasmine-hanging w-6 h-64 absolute top-0 right-10 opacity-30 animate-float-reverse translate-y-[-10px]">
        </div>
        <div class="sunda-leaf-accent w-32 h-32 absolute top-20 right-[15%] opacity-20 -rotate-12"></div>
        <div class="sunda-leaf-alt w-40 h-40 absolute bottom-10 left-[10%] opacity-20 rotate-45"></div>

        <!-- Branch Decorations -->
        <div class="sunda-branch-left w-64 h-64 absolute top-0 left-0 opacity-40 animate-float"></div>
        <div class="sunda-branch-right w-64 h-64 absolute top-0 right-0 opacity-40 animate-float-reverse"></div>

        <!-- Main Content -->
        <div class="relative z-50 text-center px-6 py-12 flex flex-col items-center justify-center min-h-full w-full">
            <div class="animate-float flex flex-col items-center space-y-6 max-w-lg">
                <p class="font-serif text-[#065f46] text-sm tracking-[0.5em] uppercase">The Wedding of</p>

                <h1 class="font-script text-6xl md:text-8xl text-[#78350f] leading-tight">
                    {{ $invitation->bride_name ?? 'Mempelai Wanita' }} <span class="text-[#f97316] text-4xl">&</span>
                    {{ $invitation->groom_name ?? 'Mempelai Pria' }}
                </h1>

                <div class="flex justify-center items-center gap-4 text-[#065f46]">
                    <div class="h-px w-8 bg-[#065f46]/50"></div>
                    <p class="font-serif text-xs md:text-sm tracking-[0.3em] uppercase">
                        @if($invitation->wedding_date)
                            {{ $invitation->wedding_date->translatedFormat('d F Y') }}
                        @else
                            30 Desember 2026
                        @endif
                    </p>
                    <div class="h-px w-8 bg-[#065f46]/50"></div>
                </div>

                <div class="mt-8 space-y-4">
                    <p class="text-xs uppercase tracking-widest text-[#78350f]/80">Kepada Yth.</p>
                    <p class="font-serif text-xl md:text-2xl text-[#065f46] italic">
                        {{ request('to', 'Tamu Undangan') }}
                    </p>
                    <button onclick="openInvitation()"
                        class="btn-premium px-10 py-4 rounded-full text-xs md:text-sm tracking-[0.2em] uppercase font-semibold">
                        Buka Undangan
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main id="main-content" class="hidden relative z-10 bg-[#fff7ed]">

        <!-- BOKEH BACKGROUND -->
        <div class="bokeh-circles">
            <div class="bokeh-circle w-64 h-64 top-[-10%] left-[-10%]" style="animation-delay: 0s;"></div>
            <div class="bokeh-circle w-48 h-48 top-[30%] right-[10%]" style="animation-delay: 2s;"></div>
            <div class="bokeh-circle w-80 h-80 bottom-[-20%] left-[20%]" style="animation-delay: 5s;"></div>
            <div class="bokeh-circle w-56 h-56 bottom-[10%] right-[-10%]" style="animation-delay: 3s;"></div>
        </div>

        <!-- CULTURAL FRAME (Interior Only) - Transparent floating florals -->
        <div class="cultural-frame-container">
            <!-- Floating corner bouquets -->
            <div class="frame-corner-tl z-10"></div>
            <div class="frame-corner-br z-10"></div>
            <!-- Traditional icons floating slightly further in -->
            <div class="frame-siger-left w-32 h-32 absolute top-32 left-5 opacity-80 animate-float"></div>
            <div class="frame-ondel-right w-24 h-24 absolute bottom-32 right-5 opacity-80 animate-float-reverse"></div>
        </div>

        <!-- SCROLL FADING VIGNETTE (Atas & Bawah) -->
        <div
            class="fixed top-0 left-0 w-full h-64 bg-gradient-to-b from-[#fff7ed] via-[#fff7ed]/80 to-transparent z-20 pointer-events-none">
        </div>
        <div
            class="fixed bottom-0 left-0 w-full h-64 bg-gradient-to-t from-[#fff7ed] via-[#fff7ed]/80 to-transparent z-20 pointer-events-none">
        </div>


        <!-- GLOBAL DECORATIONS (Floating background elements) -->
        <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
            <!-- Left Jasmine Chain -->
            <div class="sunda-jasmine-hanging w-8 h-screen absolute left-4 top-0 opacity-30 animate-float"></div>
            <!-- Right Jasmine Chain -->
            <div class="sunda-jasmine-hanging w-8 h-screen absolute right-4 top-0 opacity-30 animate-float-reverse"></div>

            <!-- Scattered Leaves -->
            <div class="sunda-leaf-accent w-32 h-32 absolute top-20 left-[10%] opacity-10 rotate-45 animate-pulse"></div>
            <div class="sunda-leaf-alt w-40 h-40 absolute top-[40%] right-[5%] opacity-10 -rotate-12 animate-float"></div>
            <div
                class="sunda-leaf-accent w-24 h-24 absolute bottom-[20%] left-[5%] opacity-10 rotate-90 animate-float-reverse">
            </div>

            <!-- More Scattered Flowers -->
            <div class="sunda-flower-accent w-16 h-16 absolute top-[15%] right-[20%] opacity-20 animate-float"></div>
            <div class="sunda-flower-accent w-20 h-20 absolute bottom-[10%] right-[30%] opacity-20 animate-pulse"></div>
            <div class="sunda-leaf-alt w-32 h-32 absolute top-[60%] left-[15%] opacity-10 rotate-45"></div>

            <!-- ROMANCE PETALS (Falling) -->
            <div class="sunda-petal w-4 h-4 left-[10%]" style="animation-duration: 8s; animation-delay: 0s;"></div>
            <div class="sunda-petal w-3 h-3 left-[30%]" style="animation-duration: 12s; animation-delay: 2s;"></div>
            <div class="sunda-petal w-5 h-5 left-[50%]" style="animation-duration: 10s; animation-delay: 4s;"></div>
            <div class="sunda-petal w-4 h-4 left-[70%]" style="animation-duration: 15s; animation-delay: 1s;"></div>
            <div class="sunda-petal w-3 h-3 left-[90%]" style="animation-duration: 9s; animation-delay: 5s;"></div>

            <!-- MORE ROMANCE PETALS -->
            <div class="sunda-petal w-4 h-4 left-[15%]" style="animation-duration: 11s; animation-delay: 0.5s;"></div>
            <div class="sunda-petal w-2 h-2 left-[25%]" style="animation-duration: 13s; animation-delay: 1.5s;"></div>
            <div class="sunda-petal w-5 h-5 left-[35%]" style="animation-duration: 9s; animation-delay: 3.5s;"></div>
            <div class="sunda-petal w-3 h-3 left-[45%]" style="animation-duration: 14s; animation-delay: 2.5s;"></div>
            <div class="sunda-petal w-6 h-6 left-[55%]" style="animation-duration: 10s; animation-delay: 1.0s;"></div>
            <div class="sunda-petal w-4 h-4 left-[65%]" style="animation-duration: 12s; animation-delay: 4.5s;"></div>
            <div class="sunda-petal w-2 h-2 left-[75%]" style="animation-duration: 16s; animation-delay: 0.2s;"></div>
            <div class="sunda-petal w-5 h-5 left-[85%]" style="animation-duration: 8s; animation-delay: 3.0s;"></div>
            <div class="sunda-petal w-3 h-3 left-[95%]" style="animation-duration: 11s; animation-delay: 2.2s;"></div>

            <!-- More Floating Branches & Leaves -->
            <div class="sunda-branch-left w-32 h-32 absolute top-[20%] left-[-20px] opacity-10 animate-float"></div>
            <div class="sunda-branch-right w-40 h-40 absolute top-[50%] right-[-30px] opacity-10 animate-float-reverse">
            </div>
            <div class="sunda-leaf-accent w-20 h-20 absolute top-[10%] left-[40%] opacity-10 animate-pulse"></div>
            <div class="sunda-flower-accent w-12 h-12 absolute top-[30%] left-[80%] opacity-20 animate-float"></div>

            <!-- LARGE DECORATIONS (Pot & Headpiece) -->
            <div class="sunda-vase-flower w-40 h-64 absolute top-[25%] left-[5%] opacity-20 animate-float"></div>
            <div class="sunda-ornament-large w-64 h-48 absolute top-[60%] right-[10%] opacity-15 animate-float-reverse">
            </div>
            <div class="sunda-vase-flower w-32 h-48 absolute bottom-[10%] right-[5%] opacity-15 rotate-12 animate-pulse">
            </div>

            <!-- CULTURAL SYMBOLS (Floating) -->
            <div class="sunda-siger-icon w-20 h-12 absolute top-[15%] left-[15%] animate-float"></div>
            <div class="sunda-kujang-icon w-12 h-24 absolute top-[45%] left-[5%] animate-float-reverse opacity-20"></div>
            <div class="betawi-ondel-icon w-16 h-16 absolute top-[25%] right-[10%] animate-float opacity-20"></div>
            <div class="sunda-siger-icon w-16 h-10 absolute bottom-[15%] right-[15%] animate-float-reverse"></div>
            <div class="betawi-ondel-icon w-12 h-12 absolute bottom-[35%] left-[12%] animate-float opacity-15"></div>

            <!-- EXTREME PETAL DENSITY (Hujan Salju/Bunga) -->
            @for($i = 0; $i < 50; $i++)
                <div class="sunda-petal w-{{ rand(2, 6) }} h-{{ rand(2, 6) }} left-[{{ rand(0, 100) }}%]"
                    style="animation-duration: {{ rand(8, 20) }}s; animation-delay: {{ rand(0, 10) }}s; top: -10px;"></div>
            @endfor
        </div>

        <!-- HERO SECTION -->
        <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden py-24">
            <div class="absolute inset-0 bg-megamendung opacity-10"></div>
            <div class="container mx-auto px-6 text-center" data-aos="zoom-in">
                <div class="mb-12">
                    <!-- Music Control -->
                    <button onclick="toggleMusic()"
                        class="music-btn fixed top-6 right-6 z-[60] w-12 h-12 rounded-full glass-effect flex items-center justify-center text-[#78350f] hover:text-[#f97316] transition-all">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
                        </svg>
                    </button>
                </div>
                <div class="relative z-10">
                    <h2 class="font-serif text-[#065f46] text-lg md:text-xl mb-4 tracking-[0.5em] uppercase"
                        data-aos="fade-up">The Wedding Of</h2>
                    <h4 class="font-script text-4xl md:text-6xl text-[#78350f] mb-8" data-aos="fade-up"
                        data-aos-delay="200">
                        {{ $invitation->bride_name ?? 'Mempelai Wanita' }} &
                        {{ $invitation->groom_name ?? 'Mempelai Pria' }}
                    </h4>

                    <!-- Decorative Flower Top Right -->
                    <div class="sunda-flower-accent w-32 h-32 absolute -top-10 -right-10 opacity-60 animate-float"></div>
                    <!-- Decorative Leaf Bottom Left -->
                    <div class="sunda-leaf-accent w-48 h-48 absolute -bottom-20 -left-20 opacity-40 animate-pulse"></div>

                    <!-- Removed redundant Buka Undangan button -->
                </div>

                <div class="separator-ornament mb-12">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#78350f" stroke-width="1.5">
                        <path d="M12 4L4 12L12 20L20 12L12 4Z" />
                    </svg>
                </div>

                <!-- NEW: COUNTDOWN BOX -->
                <div class="grid grid-cols-4 gap-4 max-w-md mx-auto mb-12" data-aos="fade-up">
                    <div class="glass-effect p-4 rounded-xl">
                        <span id="days" class="block text-3xl font-serif text-[#78350f]">00</span>
                        <span class="text-[10px] uppercase tracking-widest">Hari</span>
                    </div>
                    <div class="glass-effect p-4 rounded-xl">
                        <span id="hours" class="block text-3xl font-serif text-[#78350f]">00</span>
                        <span class="text-[10px] uppercase tracking-widest">Jam</span>
                    </div>
                    <div class="glass-effect p-4 rounded-xl">
                        <span id="minutes" class="block text-3xl font-serif text-[#78350f]">00</span>
                        <span class="text-[10px] uppercase tracking-widest">Menit</span>
                    </div>
                    <div class="glass-effect p-4 rounded-xl">
                        <span id="seconds" class="block text-3xl font-serif text-[#78350f]">00</span>
                        <span class="text-[10px] uppercase tracking-widest">Detik</span>
                    </div>
                </div>

                <p class="max-w-2xl mx-auto text-[#78350f] font-light leading-relaxed italic">
                    "Mahabbah (cinta) adalah ruh alam semesta. Kami mengundang Bapak/Ibu/Saudara/i untuk hadir dalam momen
                    penyatuan dua keluarga, Sunda dan Betawi."
                </p>
            </div>
        </section>

        <!-- MUKODIMAH -->
        <section class="py-24 px-6 relative overflow-hidden">
            <div class="container mx-auto max-w-4xl" data-aos="fade-up">
                <div class="glass-effect rounded-3xl p-8 md:p-16 text-center relative overflow-hidden">
                    <!-- Gigi Balang Pattern Accent -->
                    <div class="absolute top-0 left-0 w-full h-[10px] gigibalang-border"></div>

                    <h2 class="font-serif text-[#065f46] text-2xl md:text-3xl mb-8 tracking-[0.2em] uppercase">Akad &
                        Walimah</h2>

                    <div class="mb-8 overflow-hidden rounded-2xl border-4 border-[#065f46]/20 relative group">
                        <!-- Decorative Leaf Top Right -->
                        <div class="sunda-leaf-accent w-24 h-24 absolute -top-4 -right-4 z-20 animate-float opacity-40">
                        </div>
                        <!-- Decorative Flower Bottom Left -->
                        <div
                            class="sunda-flower-accent w-16 h-16 absolute -bottom-4 -left-4 z-20 animate-float-reverse opacity-60">
                        </div>

                        <!-- Branch Accents -->
                        <div class="sunda-branch-left w-48 h-48 absolute -top-10 -left-10 z-10 opacity-40"></div>
                        <div class="sunda-branch-right w-48 h-48 absolute -top-10 -right-10 z-10 opacity-40"></div>

                        <img src="{{ $invitation->cover_photo ? asset($invitation->cover_photo) : asset('assets/image/theme-5-profile.png') }}" class="w-full h-auto object-cover"
                            alt="Couple">
                        <!-- Dynamic Text Overlay -->
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <p class="font- script text-3xl text-white drop-shadow-lg">Wedding Invitation</p>
                            <p class="font-serif text-white text-lg tracking-[0.2em] mt-2 italic drop-shadow-md">
                                {{ $invitation->bride_name }} & {{ $invitation->groom_name }}</p>
                        </div>
                    </div>

                    <p class="text-[#78350f] text-2xl mb-8 font-serif leading-relaxed italic">
                        وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ
                        بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةًۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
                    </p>
                    <p class="text-[#065f46] text-sm leading-relaxed mb-6 italic">
                        "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                        jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                        rasa kasih dan sayang..." (QS. Ar-Rum: 21)
                    </p>
                    <div class="h-px w-24 bg-[#78350f] mx-auto"></div>
                </div>
            </div>
        </section>

        <!-- COUPLE PROFILE -->
        <section class="py-24 px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-script text-5xl text-[#78350f]">Calon Mempelai</h2>
                    <p class="font-serif text-sm tracking-widest text-[#065f46] mt-2">Dua Budaya Satu Cinta</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Bride -->
                    <div class="text-center md:text-right" data-aos="fade-right">
                        <div class="relative inline-block mb-6">
                            <div
                                class="w-48 h-48 md:w-64 md:h-64 rounded-full border-8 border-white shadow-xl overflow-hidden mb-6 mx-auto">
                                <img src="{{ $invitation->bride_photo ? asset($invitation->bride_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover" alt="Bride">
                            </div>
                            <!-- Sunda Ornament -->
                            <div class="absolute -top-4 -right-4 w-12 h-12 text-[#065f46] opacity-50">
                                <svg viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M50 0 L100 50 L50 100 L0 50 Z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-script text-4xl text-[#78350f] mb-2">{{ $invitation->bride_name }}</h3>
                        <p class="text-sm font-semibold text-[#065f46] mb-4">Pengantin Wanita</p>
                        <p class="text-sm text-[#78350f]/80 leading-relaxed italic">
                            Putri dari :<br>
                            <span
                                class="font-serif text-[#78350f] text-lg">{{ $invitation->bride_parents ?? 'Bapak & Ibu' }}</span>
                        </p>
                        <a href="https://instagram.com/{{ $invitation->bride_ig ?? 'bride' }}" target="_blank"
                            class="inline-flex items-center gap-2 mt-4 text-[#f97316] hover:underline">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" />
                            </svg>
                            <span>@ {{ ltrim($invitation->bride_ig ?? 'mempelaiwanita', '@') }}</span>
                        </a>
                    </div>

                    <!-- Groom -->
                    <div class="text-center md:text-left" data-aos="fade-left">
                        <div class="relative inline-block mb-6">
                            <div
                                class="w-48 h-48 md:w-64 md:h-64 rounded-full border-8 border-white shadow-xl overflow-hidden mb-6 mx-auto">
                                <img src="{{ $invitation->groom_photo ? asset($invitation->groom_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover scale-x-[-1]" alt="Groom">
                            </div>
                            <!-- Betawi Ornament -->
                            <div class="absolute -top-4 -left-4 w-12 h-12 text-[#f97316] opacity-50">
                                <svg viewBox="0 0 100 100" fill="currentColor">
                                    <circle cx="50" cy="50" r="40" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-script text-4xl text-[#78350f] mb-2">{{ $invitation->groom_name }}</h3>
                        <p class="text-sm font-semibold text-[#065f46] mb-4">Pengantin Pria</p>
                        <p class="text-sm text-[#78350f]/80 leading-relaxed italic">
                            Putra dari :<br>
                            <span
                                class="font-serif text-[#78350f] text-lg">{{ $invitation->groom_parents ?? 'Bapak & Ibu' }}</span>
                        </p>
                        <a href="https://instagram.com/{{ $invitation->groom_ig ?? 'groom' }}" target="_blank"
                            class="inline-flex items-center gap-2 mt-4 text-[#f97316] hover:underline">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" />
                            </svg>
                            <span>@ {{ ltrim($invitation->groom_ig ?? 'mempelaipria', '@') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ACARA SECTION -->
        <section class="py-24 px-6 relative bg-megamendung/5">
            <div class="container mx-auto max-w-5xl">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-serif text-[#065f46] text-3xl md:text-5xl tracking-[0.2em] uppercase">Waktu & Tempat
                    </h2>
                    <div class="separator-ornament mt-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Akad Nikah - Sunda Style -->
                    <div class="glass-effect rounded-3xl p-8 mb-6 border-t-8 border-[#065f46]" data-aos="fade-up">
                        <div class="text-center mb-8">
                            <h3 class="font-script text-4xl text-[#78350f] mb-4">Akad Nikah</h3>
                            <div class="flex justify-center items-center gap-4 text-[#065f46] mb-6">
                                <div class="text-center">
                                    <p class="text-sm font-bold uppercase tracking-widest">
                                        {{ $invitation->wedding_date->translatedFormat('l') }}</p>
                                    <p class="text-3xl font-serif">{{ $invitation->wedding_date->translatedFormat('d') }}
                                    </p>
                                    <p class="text-sm font-bold uppercase tracking-widest">
                                        {{ $invitation->wedding_date->translatedFormat('F Y') }}</p>
                                </div>
                            </div>
                            <div class="h-px w-full bg-gradient-to-r from-transparent via-[#065f46]/30 to-transparent mb-6">
                            </div>
                            <p class="text-[#78350f] font-serif text-lg mb-2">Pukul
                                {{ $invitation->akad_time ?? '08:00 - 10:00' }} WIB</p>
                            <p class="text-sm text-[#065f46] italic">{{ $invitation->akad_location }}</p>
                            <p class="text-xs text-[#78350f]/70 mt-2">{{ $invitation->akad_address }}</p>
                        </div>
                        <a href="{{ $invitation->maps_url }}" target="_blank"
                            class="btn-premium block text-center py-3 rounded-full text-xs uppercase tracking-widest font-bold">
                            Buka di Google Maps
                        </a>
                    </div>

                    <!-- Resepsi - Betawi Style -->
                    <div class="glass-effect rounded-3xl p-8 mb-6 border-t-8 border-[#f97316]" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="text-center mb-8">
                            <h3 class="font-script text-4xl text-[#78350f] mb-4">Resepsi</h3>
                            <div class="flex justify-center items-center gap-4 text-[#f97316] mb-6">
                                <div class="text-center">
                                    <p class="text-sm font-bold uppercase tracking-widest">
                                        {{ $invitation->wedding_date->translatedFormat('l') }}</p>
                                    <p class="text-3xl font-serif">{{ $invitation->wedding_date->translatedFormat('d') }}
                                    </p>
                                    <p class="text-sm font-bold uppercase tracking-widest">
                                        {{ $invitation->wedding_date->translatedFormat('F Y') }}</p>
                                </div>
                            </div>
                            <div class="h-px w-full bg-gradient-to-r from-transparent via-[#f97316]/30 to-transparent mb-6">
                            </div>
                            <p class="text-[#78350f] font-serif text-lg mb-2">Pukul
                                {{ $invitation->resepsi_time ?? '11:00 - 13:00' }} WIB</p>
                            <p class="text-sm text-[#065f46] italic">{{ $invitation->resepsi_location }}</p>
                            <p class="text-xs text-[#78350f]/70 mt-2">{{ $invitation->resepsi_address }}</p>
                        </div>
                        <a href="{{ $invitation->maps_url }}" target="_blank"
                            class="btn-premium block text-center py-3 rounded-full text-xs uppercase tracking-widest font-bold">
                            Buka di Google Maps
                        </a>
                    </div>
                </div>

                <!-- Google Maps Embed -->
                <div class="mt-16 glass-effect rounded-3xl overflow-hidden h-[400px]" data-aos="zoom-in">
                    <iframe width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135000001!3d-6.194723500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421d1aa5941%3A0x2bd0321f68ca1d56!2sGrand%20Indonesia!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid">
                    </iframe>
                </div>
            </div>

            <!-- Background Floating Leaves -->
            <div class="sunda-leaf-accent w-24 h-24 absolute top-1/4 -left-12 opacity-10 rotate-12 animate-float"></div>
            <div
                class="sunda-leaf-accent w-32 h-32 absolute bottom-1/4 -right-16 opacity-10 -rotate-45 animate-float-reverse">
            </div>
        </section>

        <!-- LOVE STORY -->
        <section class="py-24 px-6">
            <div class="container mx-auto max-w-4xl">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-script text-5xl text-[#78350f]">Kisah Kasih</h2>
                    <p class="font-serif text-sm tracking-widest text-[#065f46] mt-2">Sebuah Perjalanan Pertemuan</p>
                </div>

                <div class="relative space-y-12">
                    <!-- Timeline Line -->
                    <div
                        class="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-[#78350f]/30 to-transparent hidden md:block">
                    </div>
                    <!-- Dynamic Stories -->
                    @forelse($invitation->stories as $index => $story)
                    @php
                        $isEven = $index % 2 == 0;
                        $fadeDir = $isEven ? 'fade-right' : 'fade-left';
                        $flexDir = $isEven ? 'md:flex-row' : 'md:flex-row-reverse';
                        $textAlign = $isEven ? 'md:text-right' : 'md:text-left';
                        $borderColor = $isEven ? 'border-r-4 border-[#065f46]' : 'border-l-4 border-[#f97316]';
                        $dotColor = $isEven ? 'bg-[#065f46]' : 'bg-[#f97316]';
                    @endphp
                    <div class="relative flex flex-col {{ $flexDir }} items-center gap-8 md:gap-0" data-aos="{{ $fadeDir }}">
                        <div class="w-full md:w-1/2 {{ $textAlign }}">
                            <div class="glass-effect p-6 rounded-3xl {{ $borderColor }} mx-4 md:mx-10 whitespace-normal">
                                @if($story->date_info)
                                <span class="text-[10px] font-bold uppercase tracking-widest text-[#78350f]/40 mb-1 block">{{ $story->date_info }}</span>
                                @endif
                                <h3 class="font-serif text-[#78350f] text-xl mb-2">{{ $story->title }}</h3>
                                <p class="text-sm text-[#78350f]/80 leading-relaxed">
                                    {{ $story->content }}
                                </p>
                            </div>
                        </div>
                        <!-- Centered Dot -->
                        <div class="absolute left-1/2 -translate-x-1/2 w-8 h-8 rounded-full {{ $dotColor }} border-4 border-white shadow-lg z-10 hidden md:block"></div>
                        <div class="md:w-1/2"></div>
                    </div>
                    @empty
                    <!-- Fallback if no stories -->
                    <div class="text-center py-12" data-aos="fade-up">
                        <p class="text-[#78350f]/40 italic">Ketulusan cinta kami mengalir dalam setiap langkah perjalanan...</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section class="py-24 px-6 relative overflow-hidden">
            <div class="absolute inset-0 bg-megamendung opacity-[0.03]"></div>
            
            <div class="container mx-auto max-w-5xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-up">
                    <div class="sunda-flower-accent w-16 h-16 mx-auto mb-4 opacity-40"></div>
                    <h2 class="font-script text-6xl text-[#78350f]">Galeri Momen</h2>
                    <p class="font-serif text-sm tracking-[0.3em] text-[#065f46] mt-4 uppercase">Capture the Love</p>
                    <div class="w-24 h-1 bg-[#f97316]/30 mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="flex justify-center">
                    <div class="w-full">
                        @if($invitation->galleries->count() > 0)
                            <div class="flex flex-wrap justify-center gap-6">
                                @foreach($invitation->galleries as $photo)
                                <div class="w-full sm:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] max-w-[400px]" data-aos="fade-up">
                                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.12)] transition-all duration-700">
                                        <img src="{{ asset($photo->image_path) }}" 
                                            class="w-full h-80 object-cover transform scale-100 group-hover:scale-110 transition duration-1000">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#78350f]/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="flex flex-wrap justify-center gap-6">
                                @foreach(['theme-5-cover.png', 'theme-5-profile.png', 'theme-5-cover.png', 'theme-5-profile.png'] as $img)
                                <div class="w-full sm:w-[calc(50%-1.5rem)] lg:w-[calc(33.333%-1.5rem)] max-w-[400px]" data-aos="fade-up">
                                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-xl transition-all duration-700">
                                        <img src="{{ asset('assets/image/'.$img) }}" class="w-full h-80 object-cover group-hover:scale-105 transition duration-700">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Floating Decorative Pieces -->
            <div class="sunda-leaf-accent w-40 h-40 absolute -bottom-10 -left-10 opacity-10 rotate-45 pointer-events-none"></div>
            <div class="betawi-ondel-icon w-32 h-32 absolute -top-10 -right-10 opacity-10 pointer-events-none"></div>
        </section>

        <!-- HADIAH PERNIKAHAN -->
        <section class="py-24 px-6 relative">
            <div class="container mx-auto max-w-5xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-script text-5xl text-[#78350f]">Hadiah Pernikahan</h2>
                    <p class="font-serif text-sm tracking-widest text-[#065f46] mt-2">Bagi Bapak/Ibu yang ingin memberikan
                        kado</p>
                    <div class="separator-ornament mt-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Account 1 -->
                    @if($invitation->bank_account)
                    <div class="glass-effect rounded-3xl p-8 text-center" data-aos="fade-up">
                        <h3 class="text-xl font-serif text-[#78350f] mb-4 uppercase">{{ $invitation->bank_name ?? 'BANK' }}</h3>
                        <p class="text-[#065f46] font-bold text-lg mb-2">{{ $invitation->bank_account }}</p>
                        <p class="text-xs text-[#78350f]/70 mb-6 uppercase tracking-widest">Atas Nama: {{ $invitation->bank_holder }}
                        </p>
                        <button onclick="copyToClipboard('{{ $invitation->bank_account }}')"
                            class="btn-premium px-6 py-2 rounded-full text-[10px] uppercase tracking-widest font-bold">Salin
                            No. Rekening</button>
                    </div>
                    @endif

                    <!-- Account 2 -->
                    @if($invitation->bank_account_2)
                    <div class="glass-effect rounded-3xl p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-xl font-serif text-[#78350f] mb-4 uppercase">{{ $invitation->bank_name_2 ?? 'BANK' }}</h3>
                        <p class="text-[#065f46] font-bold text-lg mb-2">{{ $invitation->bank_account_2 }}</p>
                        <p class="text-xs text-[#78350f]/70 mb-6 uppercase tracking-widest">Atas Nama: {{ $invitation->bank_holder_2 }}</p>
                        <button onclick="copyToClipboard('{{ $invitation->bank_account_2 }}')"
                            class="btn-premium px-6 py-2 rounded-full text-[10px] uppercase tracking-widest font-bold">Salin
                            No. Rekening</button>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- ADAB WALIMAH -->
        <section class="py-24 px-6 bg-megamendung/5">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="font-script text-5xl text-[#78350f]">Adab Walimah</h2>
                    <p class="font-serif text-sm tracking-widest text-[#065f46] mt-2">Etika Dalam Menghadiri Acara</p>
                    <div class="separator-ornament mt-4"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
                    <div class="text-center space-y-4" data-aos="fade-up">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#065f46]/10 border-2 border-[#065f46] flex items-center justify-center group hover:bg-[#065f46]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#065f46] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Sapa & Senyum</p>
                    </div>
                    
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#065f46]/10 border-2 border-[#065f46] flex items-center justify-center group hover:bg-[#065f46]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#065f46] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Mendo'akan</p>
                    </div>
                    
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#065f46]/10 border-2 border-[#065f46] flex items-center justify-center group hover:bg-[#065f46]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#065f46] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M2 12h20M4 12c0 4.418 3.582 8 8 8s8-3.582 8-8M8 4v4M12 4v4M16 4v4" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Adab Makan</p>
                    </div>
                    
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#f97316]/10 border-2 border-[#f97316] flex items-center justify-center group hover:bg-[#f97316]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#f97316] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Pakaian Rapi</p>
                    </div>
                    
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#f97316]/10 border-2 border-[#f97316] flex items-center justify-center group hover:bg-[#f97316]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#f97316] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Tidak Merokok</p>
                    </div>
                    
                    <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="w-20 h-20 mx-auto rounded-full bg-[#f97316]/10 border-2 border-[#f97316] flex items-center justify-center group hover:bg-[#f97316]/20 transition-all duration-300">
                            <svg class="w-10 h-10 text-[#f97316] group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <circle cx="6" cy="8" r="3" stroke-width="1.5" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 19c0-2.21 1.343-4 3-4s3 1.79 3 4" />
                                <circle cx="18" cy="8" r="3" stroke-width="1.5" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19c0-2.21 1.343-4 3-4s3 1.79 3 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" stroke-dasharray="3 3" d="M12 4v16" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest text-[#78350f]">Duduk Terpisah</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- RSVP & DAFTAR KEHADIRAN (Theme-4 Style) -->
        <section class="py-24 px-6 relative">
            <div class="container mx-auto max-w-4xl relative z-10">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-script text-5xl text-[#78350f]">Konfirmasi Kehadiran</h2>
                    <p class="font-serif text-sm tracking-widest text-[#065f46] mt-2">Bantu meriahkan momen bahagia kami</p>
                    <div class="separator-ornament mt-4"></div>
                </div>

                <!-- Form Section -->
                <div class="glass-effect rounded-3xl p-8 md:p-12 mb-12 border border-[#d4af37]/30 shadow-lg"
                    data-aos="fade-up">
                    <form id="rsvpForm" action="{{ route('rsvp.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="slug" value="{{ $invitation->slug ?? 'preview' }}">
                        <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                        <div>
                            <label class="block text-xs font-serif italic text-[#78350f]/70 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ request('to') }}"
                                class="w-full bg-transparent border-b-2 border-[#065f46]/30 text-[#065f46] py-2 focus:outline-none focus:border-[#d4af37] transition placeholder-[#065f46]/30"
                                placeholder="Masukkan nama Anda" required>
                        </div>

                        <div>
                            <label class="block text-xs font-serif italic text-[#78350f]/70 mb-2">Kehadiran</label>
                            <select name="is_attending"
                                class="w-full bg-transparent border-b-2 border-[#065f46]/30 text-[#065f46] py-2 focus:outline-none focus:border-[#d4af37] transition appearance-none cursor-pointer"
                                required>
                                <option value="" disabled selected class="bg-[#fff7ed] text-[#065f46]">Pilih kehadiran
                                </option>
                                <option value="1" class="bg-[#fff7ed] text-[#065f46]">Akan Hadir</option>
                                <option value="0" class="bg-[#fff7ed] text-[#065f46]">Belum Bisa Hadir</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-serif italic text-[#78350f]/70 mb-2">Pesan & Doa</label>
                            <textarea name="message"
                                class="w-full bg-transparent border-b-2 border-[#065f46]/30 text-[#065f46] py-2 focus:outline-none focus:border-[#d4af37] transition placeholder-[#065f46]/30"
                                placeholder="Kirim pesan & doa untuk kedua mempelai" rows="4"></textarea>
                        </div>

                        <button type="submit" id="submitBtn"
                            class="w-full py-4 rounded-full bg-gradient-to-r from-[#d4af37] to-[#fbbf24] text-[#78350f] text-xs uppercase tracking-[0.2em] font-bold shadow-lg mt-8 hover:shadow-[0_0_20px_rgba(212,175,55,0.5)] transition-all duration-300">
                            <span class="btn-text">Kirim Konfirmasi</span>
                            <span class="loading-spinner hidden">Mengirim...</span>
                        </button>
                    </form>
                </div>

                <!-- DAFTAR KEHADIRAN (Scrollable List) -->
                <div class="glass-effect rounded-3xl p-8 md:p-12 border border-[#d4af37]/30 shadow-lg" data-aos="fade-up">
                    <h3 class="text-3xl font-script text-[#78350f] mb-8 text-center">Ucapan & Doa</h3>
                    <div class="max-h-[400px] overflow-y-auto pr-4 custom-scrollbar">
                        <div id="rsvpList" class="space-y-4">
                            @php
                                $rsvps = $invitation->guests()->where('is_rsvp', true)->orderBy('updated_at', 'desc')->get();
                            @endphp

                            @forelse($rsvps as $rsvp)
                                <div
                                    class="bg-white/40 p-5 rounded-2xl border border-white/50 shadow-sm relative overflow-hidden transition-all duration-500 mb-4 fade-in">
                                    <div
                                        class="absolute left-0 top-0 h-full w-1 {{ $rsvp->is_attending ? 'bg-[#065f46]' : 'bg-[#f97316]' }}">
                                    </div>
                                    <div class="flex justify-between items-start mb-2 pl-2">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs text-white {{ $rsvp->is_attending ? 'bg-gradient-to-br from-[#065f46] to-[#15803d]' : 'bg-gradient-to-br from-[#f97316] to-[#ea580c]' }}">
                                                {{ strtoupper(substr($rsvp->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <p
                                                    class="font-bold text-sm {{ $rsvp->is_attending ? 'text-[#065f46]' : 'text-[#f97316]' }}">
                                                    {{ $rsvp->name }}</p>
                                                <p class="text-[10px] text-[#78350f]/60 uppercase tracking-widest">
                                                    {{ $rsvp->updated_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] px-3 py-1 rounded-full uppercase tracking-widest font-bold {{ $rsvp->is_attending ? 'bg-[#065f46]/10 text-[#065f46] border border-[#065f46]/30' : 'bg-[#f97316]/10 text-[#f97316] border border-[#f97316]/30' }}">
                                            {{ $rsvp->is_attending ? 'Hadir' : 'Absen' }}
                                        </span>
                                    </div>
                                    @if($rsvp->message)
                                        <p class="text-sm italic text-[#78350f] px-2 border-l-2 border-[#d4af37]/50 ml-12">
                                            "{{ $rsvp->message }}"</p>
                                    @endif
                                </div>
                            @empty
                                <div class="text-center py-8">
                                    <p class="text-[#78350f]/50 italic text-sm">Belum ada konfirmasi kehadiran.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script AJAX Theme-4 dipindah ke theme-5 -->
        <script>
            document.getElementById('rsvpForm').addEventListener('submit', function (e) {
                e.preventDefault();

                const form = this;
                const submitBtn = document.getElementById('submitBtn');
                const btnText = submitBtn.querySelector('.btn-text');
                const spinner = submitBtn.querySelector('.loading-spinner');
                const rsvpList = document.getElementById('rsvpList');

                submitBtn.disabled = true;
                btnText.classList.add('hidden');
                spinner.classList.remove('hidden');

                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        showToast(data.message);

                        if (data.status === 'success' && data.guest) {
                            form.reset();

                            // Buat elemen baru dengan tema cream & gold (Sunda/Betawi)
                            const initial = data.guest.name.substring(0, 2).toUpperCase();
                            const isAttending = data.guest.is_attending;
                            const bgColor = isAttending ? 'bg-gradient-to-br from-[#065f46] to-[#15803d]' : 'bg-gradient-to-br from-[#f97316] to-[#ea580c]';
                            const badgeColor = isAttending ? 'bg-[#065f46]/10 text-[#065f46] border border-[#065f46]/30' : 'bg-[#f97316]/10 text-[#f97316] border border-[#f97316]/30';
                            const badgeLine = isAttending ? 'bg-[#065f46]' : 'bg-[#f97316]';
                            const nameColor = isAttending ? 'text-[#065f46]' : 'text-[#f97316]';
                            const badgeText = isAttending ? 'Hadir' : 'Absen';

                            let messageHtml = '';
                            if (data.guest.message) {
                                messageHtml = `<p class="text-sm italic text-[#78350f] px-2 border-l-2 border-[#d4af37]/50 ml-12">"${data.guest.message}"</p>`;
                            }

                            const newItem = `
                                    <div class="bg-white/40 p-5 rounded-2xl border border-white/50 shadow-sm relative overflow-hidden transition-all duration-500 mb-4 fade-in" style="opacity: 0; transform: translateY(-10px);">
                                        <div class="absolute left-0 top-0 h-full w-1 ${badgeLine}"></div>
                                        <div class="flex justify-between items-start mb-2 pl-2">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs text-white ${bgColor}">
                                                    ${initial}
                                                </div>
                                                <div>
                                                    <p class="font-bold text-sm ${nameColor}">${data.guest.name}</p>
                                                    <p class="text-[10px] text-[#78350f]/60 uppercase tracking-widest">BARU SAJA</p>
                                                </div>
                                            </div>
                                            <span class="text-[9px] px-3 py-1 rounded-full uppercase tracking-widest font-bold ${badgeColor}">
                                                ${badgeText}
                                            </span>
                                        </div>
                                        ${messageHtml}
                                    </div>
                                `;

                            // Hapus pesan "Belum ada konfirmasi..." jika ada
                            if (rsvpList.innerText.includes('Belum ada konfirmasi kehadiran.')) {
                                rsvpList.innerHTML = '';
                            }

                            rsvpList.insertAdjacentHTML('afterbegin', newItem);

                            // Animate new item
                            setTimeout(() => {
                                const addedItem = rsvpList.firstElementChild;
                                addedItem.style.opacity = '1';
                                addedItem.style.transform = 'translateY(0)';
                            }, 50);
                        }
                    })
                    .catch(error => {
                        showToast('Terjadi kesalahan. Silakan coba lagi.');
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        btnText.classList.remove('hidden');
                        spinner.classList.add('hidden');
                    });
            });
        </script>

        <!-- FOOTER -->
        <footer class="pt-20 pb-64 bg-gradient-to-b from-transparent to-[#78350f] text-center relative overflow-hidden">
            <div class="absolute bottom-0 left-0 w-full h-[500px] bg-[#78350f] -z-10"></div>
            <!-- Footer Ornament -->
            <div class="w-full flex justify-center mb-10 opacity-30">
                <svg width="200" height="50" viewBox="0 0 200 50">
                    <path d="M0,25 Q50,0 100,25 T200,25" fill="none" stroke="#d4af37" stroke-width="2" />
                    <circle cx="100" cy="25" r="5" fill="#d4af37" />
                </svg>
            </div>

            <div class="container mx-auto px-6 relative z-10 text-white">
                <p class="font-serif text-lg mb-2 italic tracking-wider text-[#d4af37]">"Merajut Kasih dalam Ikatan Suci"
                </p>
                <h3 class="font-script text-5xl md:text-7xl mb-8 tracking-wide drop-shadow-md">{{ $invitation->bride_name }}
                    <span class="text-[#d4af37]">&</span> {{ $invitation->groom_name }}</h3>

                <div class="flex justify-center items-center gap-4 mb-10">
                    <div class="h-px w-16 bg-[#d4af37]/50"></div>
                    <p class="text-xs uppercase tracking-[0.3em] text-[#d4af37]">Terima Kasih</p>
                    <div class="h-px w-16 bg-[#d4af37]/50"></div>
                </div>

                <p class="text-[9px] uppercase tracking-[0.4em] opacity-60 text-white font-bold mb-1">Created Elegantly With
                </p>
                <p class="text-[11px] uppercase tracking-widest opacity-80 text-white font-serif">Kudangan Digital Planner
                </p>
            </div>
        </footer>

    </main>

@endsection