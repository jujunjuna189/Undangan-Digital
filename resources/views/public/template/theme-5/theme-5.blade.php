@extends('public.template.theme-5.app')

@section('content')

    <!-- COVER SECTION - Theme 5: Sunda x Betawi -->
    <section id="cover"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-[#fff7ed] transition-opacity duration-1000 overflow-hidden">
        <div class="absolute inset-0 z-0 bg-megamendung opacity-20"></div>
        <div class="absolute inset-0 z-0">
            <img src="{{ $invitation->cover_photo ? asset($invitation->cover_photo) : asset('assets/image/theme-5-cover.png') }}"
                class="w-full h-full object-cover opacity-60" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-[#78350f]/60 via-transparent to-transparent"></div>
        </div>

        <!-- Ornament Corners (Gigi Balang style) -->
        <div class="absolute top-0 left-0 w-full h-[15px] gigibalang-border"></div>
        <div class="absolute bottom-0 left-0 w-full h-[15px] gigibalang-border-top rotate-180"></div>

        <!-- Cover Decorative Elements -->
        <div
            class="sunda-jasmine-hanging w-4 md:w-6 h-32 sm:h-40 md:h-48 absolute top-0 left-3 md:left-10 opacity-40 animate-float translate-y-[-20px]">
        </div>
        <div
            class="sunda-jasmine-hanging w-4 md:w-6 h-40 sm:h-48 md:h-64 absolute top-0 right-3 md:right-10 opacity-30 animate-float-reverse translate-y-[-10px]">
        </div>
        <div class="sunda-leaf-accent w-16 h-16 md:w-32 md:h-32 absolute top-16 right-[10%] opacity-20 -rotate-12"></div>
        <div class="sunda-leaf-alt w-20 h-20 md:w-40 md:h-40 absolute bottom-8 left-[8%] opacity-20 rotate-45"></div>

        <!-- Branch Decorations -->
        <div
            class="sunda-branch-left w-24 h-24 sm:w-32 sm:h-32 md:w-64 md:h-64 absolute top-0 left-0 opacity-40 animate-float">
        </div>
        <div
            class="sunda-branch-right w-24 h-24 sm:w-32 sm:h-32 md:w-64 md:h-64 absolute top-0 right-0 opacity-40 animate-float-reverse">
        </div>

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

    <!-- GLOBAL DECORATIONS (Floating background elements) -->
    <div id="cultural-frame" class="cultural-frame-container hidden">
        <!-- Floating corner bouquets -->
        <div class="frame-corner-tl z-40"></div>
        <div class="frame-corner-br z-40"></div>
        <!-- Traditional icons floating slightly further in -->
        <div class="frame-siger-left w-32 h-32 absolute top-32 left-5 opacity-80 animate-float"></div>
        <div class="frame-ondel-right w-24 h-24 absolute bottom-32 right-5 opacity-80 animate-float-reverse"></div>
    </div>

    <div id="global-decor" class="fixed inset-0 pointer-events-none z-10 overflow-hidden w-full h-full hidden">
        <!-- Left Jasmine Chain -->
        <div class="sunda-jasmine-hanging w-8 h-screen absolute left-4 top-0 opacity-30 animate-float"></div>
        <!-- Right Jasmine Chain -->
        <div class="sunda-jasmine-hanging w-8 h-screen absolute right-4 top-0 opacity-30 animate-float-reverse"></div>

        <!-- Scattered Leaves -->
        <div class="sunda-leaf-accent w-32 h-32 absolute top-20 left-[10%] opacity-10 rotate-45 animate-pulse"></div>
        <div class="sunda-leaf-alt w-40 h-40 absolute top-[40%] right-[5%] opacity-10 -rotate-12 animate-float"></div>
        <div class="sunda-leaf-accent w-24 h-24 absolute bottom-[20%] left-[5%] opacity-10 rotate-90 animate-float-reverse">
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
        @for($i = 0; $i < 80; $i++)
            <div class="sunda-petal w-{{ rand(2, 6) }} h-{{ rand(2, 6) }} left-[{{ rand(0, 100) }}%]"
                style="animation-duration: {{ rand(15, 35) }}s; animation-delay: {{ rand(0, 15) }}s; top: -10px;"></div>
        @endfor
    </div>

    <!-- MAIN CONTENT -->
    <main id="main-content" class="hidden relative z-20 bg-transparent">
        <!-- BOKEH BACKGROUND -->
        <div class="bokeh-circles">
            <div class="bokeh-circle w-64 h-64 top-[-10%] left-[-10%]" style="animation-delay: 0s;"></div>
            <div class="bokeh-circle w-48 h-48 top-[30%] right-[10%]" style="animation-delay: 2s;"></div>
            <div class="bokeh-circle w-80 h-80 bottom-[-20%] left-[20%]" style="animation-delay: 5s;"></div>
            <div class="bokeh-circle w-56 h-56 bottom-[10%] right-[-10%]" style="animation-delay: 3s;"></div>
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

        <!-- PHOTO SEPARATOR - MAJESTIC CINEMATIC -->
        <section class="relative h-[400px] md:h-[600px] lg:h-[850px] overflow-hidden -mt-10">
            <!-- Precise Seamless Blend (Matched to previous bg) -->
            <div class="absolute top-0 left-0 w-full h-10 md:h-16 bg-gradient-to-b from-[#fffcf8] to-transparent z-10">
            </div>

            <div class="w-full h-full relative" data-aos="zoom-out" data-aos-duration="1500">
                <img src="{{ $invitation->cover_photo ? asset($invitation->cover_photo) : asset('assets/image/theme-5-cover.png') }}"
                    class="w-full h-full object-cover object-[center_15%] md:object-center" alt="Separator">
                <!-- Soft Artistic Overlays -->
                <div class="absolute inset-0 bg-[#064e3b]/5"></div>
                <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#fffcf8] to-transparent z-10"></div>
            </div>
        </section>

        <!-- MUKODIMAH TEXT - OPEN LUXURY LAYOUT -->
        <section class="py-24 px-4 md:px-6 relative overflow-hidden bg-[#fffcf8]/60">
            <!-- Watercolor Background Splash -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150%] h-[150%] bg-megamendung opacity-[0.03] pointer-events-none">
            </div>

            <div class="container mx-auto max-w-4xl relative z-10" data-aos="fade-up">
                <div class="text-center space-y-16">
                    <!-- Grand Title (No Card) -->
                    <div class="space-y-4">
                        <div class="h-px w-24 bg-gradient-to-r from-transparent via-[#d4af37] to-transparent mx-auto"></div>
                        <h2
                            class="font-serif text-[#064e3b] text-4xl md:text-6xl tracking-[0.3em] uppercase drop-shadow-sm">
                            Mukodimah</h2>
                        <div class="h-px w-24 bg-gradient-to-r from-transparent via-[#d4af37] to-transparent mx-auto"></div>
                    </div>

                    <!-- Sacred Script With Artistic Quotes -->
                    <div class="relative py-12 px-8">
                        <!-- Decorative Quotes -->
                        <div class="absolute top-0 left-0 font-serif text-9xl text-[#d4af37]/10 select-none">“</div>
                        <div class="absolute bottom-0 right-0 font-serif text-9xl text-[#d4af37]/10 select-none">”</div>

                        <p
                            class="text-[#78350f] text-3xl md:text-5xl font-serif leading-relaxed italic drop-shadow-sm relative z-10">
                            وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا
                            وَجَعَلَ
                            بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةًۗ
                        </p>
                    </div>

                    <!-- Translation & Citation -->
                    <div class="max-w-3xl mx-auto space-y-8">
                        <p class="text-[#78350f]/70 text-lg md:text-2xl leading-relaxed italic font-serif">
                            "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                            jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
                            antaramu
                            rasa kasih dan sayang..."
                        </p>

                        <div class="flex items-center justify-center gap-6">
                            <div class="h-[2px] w-8 bg-[#d4af37]/30"></div>
                            <span class="text-[10px] font-bold text-[#064e3b] uppercase tracking-[0.6em]">QS. Ar-Rum:
                                21</span>
                            <div class="h-[2px] w-8 bg-[#d4af37]/30"></div>
                        </div>
                    </div>

                    <!-- Bottom Divider -->
                    <div class="flex justify-center items-center gap-3 pt-12">
                        <div class="w-2 h-2 rounded-full bg-[#d4af37]"></div>
                        <div class="w-12 h-px bg-[#d4af37]/40"></div>
                        <div class="w-2 h-2 rounded-full bg-[#d4af37]"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COUPLE PROFILE - ELEGANT OFFSET FRAMES -->
        <section class="py-24 px-6 relative overflow-hidden bg-[#fffcf8]/60">
            <!-- Background Cultural Accent -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-[#064e3b]/5 -skew-x-12 transform origin-top-right"></div>

            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-24" data-aos="fade-up">
                    <span class="text-[#064e3b] text-xs uppercase tracking-[0.6em] font-bold mb-4 block">Meet the
                        Couple</span>
                    <h2 class="font-script text-6xl md:text-8xl text-[#78350f]">Mempelai</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-20 md:gap-12">
                    <!-- Bride -->
                    <div class="flex flex-col items-center md:items-end text-center md:text-right" data-aos="fade-right">
                        <div class="relative mb-12">
                            <!-- Offset Border Decor -->
                            <div
                                class="absolute -top-6 -left-6 w-full h-full border-2 border-[#064e3b]/20 rounded-[3rem] z-0">
                            </div>
                            <!-- Main Photo -->
                            <div
                                class="w-64 h-80 md:w-80 md:h-[450px] rounded-[3rem] overflow-hidden shadow-2xl relative z-10 border-4 border-white bg-white p-2">
                                <img src="{{ $invitation->bride_photo ? asset($invitation->bride_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover rounded-[2.5rem] transform hover:scale-110 transition-transform duration-1000"
                                    alt="Bride">
                            </div>
                            <!-- Branch Accent Overlap -->
                            <div class="absolute -bottom-8 -left-8 w-32 h-32 sunda-branch-left opacity-60 z-20"></div>
                        </div>

                        <div class="space-y-4">
                            <span
                                class="inline-block px-4 py-1 rounded-full bg-[#064e3b]/10 text-[#064e3b] text-[10px] uppercase tracking-widest font-bold">Mempelai
                                Wanita</span>
                            <h3 class="font-script text-5xl md:text-7xl text-[#78350f]">{{ $invitation->bride_name }}</h3>
                            <div class="space-y-2">
                                <p class="text-[10px] text-[#064e3b] uppercase tracking-[0.3em] font-bold opacity-60">Putri
                                    Tercinta Dari :</p>
                                <p class="font-serif text-xl md:text-3xl text-[#78350f] italic">
                                    {{ $invitation->bride_parents ?? 'Bapak & Ibu' }}</p>
                            </div>
                            <!-- Instagram -->
                            <div class="pt-4">
                                <a href="https://instagram.com/{{ $invitation->bride_ig ?? 'bride' }}" target="_blank"
                                    class="inline-flex items-center gap-2 text-[#064e3b] hover:text-[#f97316] transition-colors border-b border-[#064e3b]/20 pb-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    <span
                                        class="text-xs font-bold tracking-widest">@<span></span>{{ ltrim($invitation->bride_ig ?? 'mempelaiwanita', '@') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Groom -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left" data-aos="fade-left">
                        <div class="relative mb-12">
                            <!-- Offset Border Decor -->
                            <div
                                class="absolute -top-6 -right-6 w-full h-full border-2 border-[#f97316]/20 rounded-[3rem] z-0">
                            </div>
                            <!-- Main Photo -->
                            <div
                                class="w-64 h-80 md:w-80 md:h-[450px] rounded-[3rem] overflow-hidden shadow-2xl relative z-10 border-4 border-white bg-white p-2">
                                <img src="{{ $invitation->groom_photo ? asset($invitation->groom_photo) : asset('assets/image/theme-5-profile.png') }}"
                                    class="w-full h-full object-cover scale-x-[-1] rounded-[2.5rem] transform hover:scale-110 transition-transform duration-1000"
                                    alt="Groom">
                            </div>
                            <!-- Branch Accent Overlap -->
                            <div class="absolute -bottom-8 -right-8 w-32 h-32 sunda-branch-right opacity-60 z-20"></div>
                        </div>

                        <div class="space-y-4">
                            <span
                                class="inline-block px-4 py-1 rounded-full bg-[#f97316]/10 text-[#f97316] text-[10px] uppercase tracking-widest font-bold">Mempelai
                                Pria</span>
                            <h3 class="font-script text-5xl md:text-7xl text-[#78350f]">{{ $invitation->groom_name }}</h3>
                            <div class="space-y-2">
                                <p class="text-[10px] text-[#f97316] uppercase tracking-[0.3em] font-bold opacity-60">Putra
                                    Tercinta Dari :</p>
                                <p class="font-serif text-xl md:text-3xl text-[#78350f] italic">
                                    {{ $invitation->groom_parents ?? 'Bapak & Ibu' }}</p>
                            </div>
                            <!-- Instagram -->
                            <div class="pt-4">
                                <a href="https://instagram.com/{{ $invitation->groom_ig ?? 'groom' }}" target="_blank"
                                    class="inline-flex items-center gap-2 text-[#f97316] hover:text-[#064e3b] transition-colors border-b border-[#f97316]/20 pb-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    <span
                                        class="text-xs font-bold tracking-widest">@<span></span>{{ ltrim($invitation->groom_ig ?? 'mempelaipria', '@') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KISAH KASIH - THEME 2 STYLE REFINED -->
        <section id="kisah" class="py-24 px-6 relative overflow-hidden bg-[#fffcf8]/60">
            <div class="container mx-auto max-w-5xl">
                <div class="text-center mb-24" data-aos="fade-down">
                    <h2 class="font-script text-6xl md:text-8xl text-[#78350f]">Kisah Kasih</h2>
                    <div class="flex justify-center items-center gap-4 opacity-60 mt-4">
                        <div class="h-px w-24 bg-[#d4af37]"></div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#d4af37">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        <div class="h-px w-24 bg-[#d4af37]"></div>
                    </div>
                </div>

                <div class="relative max-w-5xl mx-auto">
                    <!-- Central Line -->
                    <div
                        class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-[#d4af37]/0 via-[#d4af37]/40 to-[#d4af37]/0 md:transform md:-translate-x-1/2 hidden md:block">
                    </div>

                    <div class="space-y-16 md:space-y-32">
                        @forelse ($invitation->stories as $index => $story)
                            <div
                                class="relative flex flex-col md:flex-row items-center justify-between w-full group {{ $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}">
                                @php $isEven = $index % 2 == 0; @endphp

                                <!-- Content Side -->
                                <div class="w-full md:w-[45%] {{ $isEven ? 'md:pr-16 pl-12 md:pl-0 md:text-right' : 'md:pl-16 pl-12' }} mb-6 md:mb-0"
                                    data-aos="{{ $isEven ? 'fade-right' : 'fade-left' }}">
                                    <div
                                        class="bg-white p-6 md:p-10 rounded-[2.5rem] shadow-xl border border-[#d4af37]/10 group-hover:border-[#d4af37]/40 transition-all duration-700 relative">
                                        <!-- Decorative Arrow pointer -->
                                        <div
                                            class="absolute top-10 {{ $isEven ? '-right-3' : '-left-3' }} hidden md:block w-6 h-6 bg-white border-{{ $isEven ? 'r' : 'l' }} border-t border-[#d4af37]/20 rotate-45 transform">
                                        </div>

                                        <h3
                                            class="font-serif text-2xl md:text-3xl text-[#064e3b] mb-3 uppercase tracking-wider">
                                            {{ $story->title }}</h3>
                                        <div
                                            class="inline-block bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold px-5 py-1 rounded-full mb-6">
                                            {{ $story->year ?? (isset($story->date) ? \Carbon\Carbon::parse($story->date)->format('Y') : ($story->date_info ?? '2024')) }}
                                        </div>
                                        <p class="text-[#78350f]/80 font-serif leading-[1.8] text-base md:text-lg italic">
                                            "{{ $story->content }}"
                                        </p>
                                    </div>
                                </div>

                                <!-- Center Node -->
                                <div
                                    class="absolute left-2 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-10 h-10 md:w-14 md:h-14 rounded-full bg-white border-2 border-[#d4af37] z-20 shadow-lg group-hover:scale-125 transition-transform duration-700">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#d4af37">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                </div>

                                <!-- Empty Side -->
                                <div class="hidden md:block md:w-[45%]"></div>
                            </div>
                        @empty
                            <div class="text-center py-12" data-aos="fade-up">
                                <p class="text-[#78350f]/40 italic">Ketulusan cinta kami mengalir dalam setiap langkah
                                    perjalanan...</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <!-- ACARA SECTION -->
        <section id="acara" class="py-24 px-4 md:px-6 relative bg-megamendung/5">
            <div class="container mx-auto max-w-5xl">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-serif text-[#065f46] text-3xl md:text-5xl tracking-[0.2em] uppercase">Waktu & Tempat
                    </h2>
                    <div class="separator-ornament mt-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                        <!-- Akad Nikah - Sunda Style -->
                        <div class="glass-effect rounded-3xl p-6 md:p-8 mb-6 border-t-8 border-[#065f46]" data-aos="fade-up">
                            <div class="text-center mb-0">
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
                        </div>

                        <!-- Resepsi - Betawi Style -->
                        <div class="glass-effect rounded-3xl p-6 md:p-8 mb-6 border-t-8 border-[#f97316]" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="text-center mb-0">
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


            <!-- GALLERY -->
            <section class="py-24 px-4 md:px-6 relative overflow-hidden">
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
                                                <img src="{{ asset('assets/image/' . $img) }}" class="w-full h-80 object-cover group-hover:scale-105 transition duration-700">
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
            <section class="py-24 px-4 md:px-6 relative">
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
                            <div class="glass-effect rounded-3xl p-6 md:p-8 text-center" data-aos="fade-up">
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
                            <div class="glass-effect rounded-3xl p-6 md:p-8 text-center" data-aos="fade-up" data-aos-delay="200">
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
            <section class="py-24 px-4 md:px-6 bg-megamendung/5">
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
            <section class="py-24 px-2 md:px-6 relative">
                <div class="container mx-auto max-w-4xl relative z-10 px-0 md:px-6">
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

                    <!-- DAFTAR KEHADIRAN (Wishes List - Cardless Container) -->
                    <div class="mt-20" data-aos="fade-up">
                        <h3 class="text-5xl font-script text-[#78350f] mb-12 text-center drop-shadow-sm">Ucapan & Doa</h3>
                        
                        <div class="max-h-[600px] overflow-y-auto px-2 md:px-6 custom-scrollbar">
                            <div id="rsvpList" class="space-y-6">
                                @php
                                    $rsvps = $invitation->guests()->where('is_rsvp', true)->orderBy('updated_at', 'desc')->get();
                                @endphp

                                @forelse($rsvps as $rsvp)
                                    <div
                                        class="bg-white p-6 rounded-[2rem] shadow-[0_10px_25px_rgba(0,0,0,0.05)] border border-[#d4af37]/10 relative overflow-hidden transition-all duration-500 mb-6 group hover:shadow-lg">
                                        <div
                                            class="absolute left-0 top-0 h-full w-2 {{ $rsvp->is_attending ? 'bg-[#065f46]' : 'bg-[#f97316]' }}">
                                        </div>
                                        <div class="flex justify-between items-start mb-4 pl-4">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-xs text-white {{ $rsvp->is_attending ? 'bg-[#065f46]' : 'bg-[#f97316]' }} shadow-inner">
                                                    {{ strtoupper(substr($rsvp->name, 0, 2)) }}
                                                </div>
                                                <div>
                                                    <p
                                                        class="font-bold text-base {{ $rsvp->is_attending ? 'text-[#065f46]' : 'text-[#f97316]' }}">
                                                        {{ $rsvp->name }}</p>
                                                    <p class="text-[10px] text-[#78350f]/60 uppercase tracking-[0.2em] font-bold">
                                                        {{ $rsvp->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <span
                                                class="text-[9px] px-3 py-1 rounded-full uppercase tracking-widest font-bold {{ $rsvp->is_attending ? 'bg-[#065f46]/10 text-[#065f46] border border-[#065f46]/30' : 'bg-[#f97316]/10 text-[#f97316] border border-[#f97316]/30' }}">
                                                {{ $rsvp->is_attending ? 'Hadir' : 'Absen' }}
                                            </span>
                                        </div>
                                        @if($rsvp->message)
                                            <p class="text-base italic text-[#78350f]/80 px-4 leading-relaxed font-serif">
                                                "{{ $rsvp->message }}"</p>
                                        @endif
                                    </div>
                                @empty
                                    <div class="text-center py-20 bg-white/30 rounded-[2rem] border-2 border-dashed border-[#78350f]/10">
                                        <p class="text-[#78350f]/50 italic text-lg">Belum ada konfirmasi kehadiran.</p>
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
            <footer class="pt-20 pb-24 bg-[#78350f] text-center relative overflow-hidden">
                <!-- Ensure background fills deep into bottom if overscrolling -->
                <div class="absolute inset-0 bg-[#78350f] -z-10"></div>
                <!-- Large bleed below -->
                <div class="absolute top-0 left-0 w-full h-[2000px] bg-[#78350f] -z-20"></div>

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