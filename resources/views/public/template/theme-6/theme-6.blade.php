@extends('public.template.theme-6.app')

@section('content')

    <!-- COVER SECTION -->
    <section id="cover"
        class="fixed inset-0 z-[200] flex flex-col items-center justify-center bg-[#B6A68F] transition-opacity duration-1200 overflow-hidden">

        <!-- Full Screen Frame -->
        <div class="absolute inset-0 pointer-events-none z-10">
            <img src="{{ asset('assets/image/theme-6-frame.png') }}" class="w-full h-full object-cover md:object-fill"
                alt="">
        </div>

        <!-- Center Content Container -->
        <div class="relative z-20 flex flex-col items-center justify-center w-full max-w-4xl h-full pt-8 pb-16">

            <!-- Single Gunungan & Clouds Group -->
            <div class="relative w-full flex flex-col items-center mb-6 pointer-events-none h-40 md:h-64 justify-center">
                <!-- Clouds behind -->
                <div class="absolute inset-0 flex items-center justify-center gap-10 md:gap-20 opacity-30">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="w-24 md:w-48" alt="">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="w-24 md:w-48 transform -scale-x-100"
                        alt="">
                </div>

                <!-- Single Center Gunungan -->
                <div class="relative z-10">
                    <img src="{{ asset('assets/image/theme-6-wayang.png') }}" class="w-32 md:w-64 drop-shadow-xl" alt="">
                </div>
            </div>

            <!-- Text Content -->
            <div class="text-center px-4" data-aos="fade-up" data-aos-duration="1500">
                <p class="font-serif text-[#1e1e1e] text-[10px] md:text-sm tracking-wide mb-1">The Wedding Of</p>
                <h1 class="font-script text-2xl md:text-4xl text-[#1e1e1e] mb-2 drop-shadow-sm font-bold">
                    {{ $invitation->bride_name }} & </br>{{ $invitation->groom_name }}
                </h1>

                <div class="space-y-0.5 mb-4">
                    <p class="font-serif text-[#1e1e1e] text-[9px] md:text-xs">Kepada Yth:</p>
                    <p class="font-serif text-[#1e1e1e] text-sm md:text-lg font-bold italic">
                        {{ request('to', 'Tamu Undangan') }}</p>
                    <p class="font-serif text-[#1e1e1e] text-[9px] md:text-xs">Di Tempat</p>
                </div>

                <button onclick="openInvitation()"
                    class="bg-black text-white px-8 md:px-12 py-3 rounded-md text-base md:text-xl font-serif flex items-center justify-center gap-3 mx-auto hover:bg-zinc-900 transition-all shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Buka Undangan
                </button>
            </div>
        </div>

        <!-- Wayang Characters Layer -->
        <div class="absolute inset-x-0 bottom-0 pointer-events-none flex justify-between items-end px-0 md:px-10 z-20">
            <img src="{{ asset('assets/image/theme-6-wayang-left.png') }}"
                class="w-32 md:w-72 -ml-4 md:ml-0 drop-shadow-2xl translate-y-4" alt="">
            <img src="{{ asset('assets/image/theme-6-wayang-right.png') }}"
                class="w-32 md:w-72 -mr-4 md:mr-0 drop-shadow-2xl translate-y-4" alt="">
        </div>
    </section>

    <!-- FLOATING NAVIGATION BAR -->
    <nav id="bottom-nav"
        class="fixed bottom-6 left-1/2 -translate-x-1/2 z-[200] hidden bg-black/80 backdrop-blur-md border border-white/30 px-6 py-3 rounded-full flex items-center gap-6 shadow-2xl transition-all duration-500">
        <!-- Hero/Home -->
        <a href="#hero" class="nav-link text-white/60 hover:text-white transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
        </a>
        <!-- Mempelai/Heart -->
        <a href="#mempelai" class="nav-link text-white/60 hover:text-white transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                </path>
            </svg>
        </a>
        <!-- Acara/Calendar -->
        <a href="#acara" class="nav-link text-white/60 hover:text-white transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
        </a>
        <!-- Galeri/Image -->
        <a href="#galeri" class="nav-link text-white/60 hover:text-white transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                </path>
            </svg>
        </a>
        <!-- RSVP/Message -->
        <a href="#rsvp" class="nav-link text-white/60 hover:text-white transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                </path>
            </svg>
        </a>
    </nav>

    <!-- GLOBAL DECORATIONS (THEME 5 STYLE: DIRECT FIXED ELEMENTS) -->
    <!-- Full Screen Frame Image -->
    <img id="fixed-frame" src="{{ asset('assets/image/theme-6-frame.png') }}"
        class="fixed inset-0 w-full h-full object-fill opacity-90 pointer-events-none z-[150] hidden" alt="">

    <!-- Wayang Characters (Directly Fixed to Corners with slight negative offset to hide jitter) -->
    <img id="fixed-wayang-left" src="{{ asset('assets/image/theme-6-wayang-left.png') }}"
        class="fixed bottom-[-20px] left-[-20px] w-32 md:w-72 opacity-90 transform -rotate-12 pointer-events-none z-[160] hidden"
        alt="">
    <img id="fixed-wayang-right" src="{{ asset('assets/image/theme-6-wayang-right.png') }}"
        class="fixed bottom-[-20px] right-[-20px] w-32 md:w-72 opacity-90 transform rotate-12 pointer-events-none z-[160] hidden"
        alt="">

    <!-- MAIN CONTENT -->
    <main id="main-content" class="hidden relative z-20 bg-[#B6A68F] min-h-screen overflow-x-hidden">

        <!-- BACKGROUND STATIC GUNUNGAN (BEHIND CONTENT) -->
        <div
            class="fixed top-0 left-0 w-full h-full flex flex-col items-center justify-center opacity-10 pointer-events-none z-0">
            <img src="{{ asset('assets/image/theme-6-wayang.png') }}" class="w-64 md:w-[32rem]" alt="">
        </div>

        <!-- Music Control -->
        <button onclick="toggleMusic()"
            class="music-btn fixed top-6 right-6 z-[60] w-12 h-12 rounded-full glass-effect flex items-center justify-center text-[#3e2723] hover:text-[#c6a700] transition-all border border-[#c6a700] shadow-xl">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
            </svg>
        </button>

        <!-- CONTENT LAYER -->
        <div class="relative z-10">
            <!-- HERO SECTION -->
            <section id="hero"
                class="relative min-h-screen flex items-center justify-center overflow-hidden py-12 bg-transparent">
                <div class="container mx-auto px-4 text-center relative z-10">
                    <!-- Text Content Only -->
                    <div class="mb-6" data-aos="fade-up">
                        <p class="font-serif text-[#1e1e1e] text-sm md:text-base tracking-tight mb-1">The Wedding Of</p>
                        <h1 class="font-script text-4xl md:text-5xl text-[#1e1e1e] mb-3 drop-shadow-sm font-bold">
                            {{ $invitation->bride_name }} & {{ $invitation->groom_name }}
                        </h1>
                        <p class="font-serif text-[#1e1e1e] text-xs md:text-sm max-w-sm mx-auto leading-tight italic">
                            kami akan menikah, kami ingin anda menjadi bagian dari hari bahagia kami
                        </p>
                    </div>

                    <!-- COUNTDOWN -->
                    <div class="flex justify-center gap-2 md:gap-4 mb-10" data-aos="fade-up">
                        <div class="bg-black text-white w-12 md:w-14 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="days" class="text-base md:text-xl font-bold">0</span>
                            <span class="text-[7px] md:text-[8px] uppercase">Hari</span>
                        </div>
                        <div class="bg-black text-white w-12 md:w-14 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="hours" class="text-base md:text-xl font-bold">0</span>
                            <span class="text-[7px] md:text-[8px] uppercase">Jam</span>
                        </div>
                        <div class="bg-black text-white w-12 md:w-14 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="minutes" class="text-base md:text-xl font-bold">0</span>
                            <span class="text-[7px] md:text-[8px] uppercase">Menit</span>
                        </div>
                        <div class="bg-black text-white w-12 md:w-14 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="seconds" class="text-base md:text-xl font-bold">0</span>
                            <span class="text-[7px] md:text-[8px] uppercase">Detik</span>
                        </div>
                    </div>

                    @php
                        $dt = $invitation->wedding_date ? \Carbon\Carbon::parse($invitation->wedding_date) : \Carbon\Carbon::parse('2026-12-25');
                        $startDate = $dt->format('Ymd\THis');
                        $endDate = \Carbon\Carbon::parse($dt)->addHours(5)->format('Ymd\THis');
                        $calendarTitle = urlencode("The Wedding of " . ($invitation->bride_name ?? 'Mempelai') . " & " . ($invitation->groom_name ?? 'Mempelai'));
                        $calendarDetails = urlencode("Acara pernikahan bahagia " . ($invitation->bride_name ?? 'Mempelai') . " & " . ($invitation->groom_name ?? 'Mempelai'));
                        $calendarLocation = urlencode($invitation->akad_location ?? $invitation->akad_address ?? $invitation->location ?? 'Lokasi Acara');
                        $gcalUrl = "https://www.google.com/calendar/render?action=TEMPLATE&text={$calendarTitle}&dates={$startDate}/{$endDate}&details={$calendarDetails}&location={$calendarLocation}";
                    @endphp
                    <div class="flex flex-col items-center gap-6" data-aos="fade-up">
                        <button onclick="window.open('{{ $gcalUrl }}', '_blank')"
                            class="bg-black text-white px-8 md:px-12 py-3 rounded-md text-base md:text-lg font-serif italic flex items-center justify-center gap-3 mx-auto hover:bg-zinc-900 transition-all shadow-xl">
                            <svg class="w-5 h-5 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            Simpan Tanggal
                        </button>
                    </div>
                </div>
            </section>

            <!-- Cloud Decorations -->

            </section>



            <!-- MEMPELAI SECTION -->
            <section id="mempelai" class="py-12 px-4 relative bg-transparent">
                <div class="container mx-auto max-w-4xl relative z-10 text-center">

                    <div class="mb-12" data-aos="fade-up">
                        <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-relaxed max-w-md mx-auto">
                            Dengan memohon rahmat dan ridho Tuhan kita, <br>
                            Kami bermaksud menyelenggarakan pernikahan kami :
                        </p>
                    </div>

                    <!-- First Person -->
                    <div class="mb-8" data-aos="fade-up">
                        <h2 class="font-script text-2xl md:text-4xl text-[#1e1e1e] mb-1 font-bold">
                            {{ $invitation->groom_name }}</h2>
                        <div class="space-y-0.5">
                            <p class="font-serif text-[#1e1e1e] text-[9px] md:text-[10px] italic">Putra dari</p>
                            <p class="font-serif text-[#1e1e1e] text-[10px] md:text-sm font-bold italic">
                                {{ $invitation->groom_parents ?? 'Bapak ..... dan Ibu .....' }}</p>
                        </div>
                    </div>

                    <!-- Divider & -->
                    <div class="relative flex items-center justify-center gap-6 mb-8" data-aos="zoom-in">
                        <div class="h-px w-12 md:w-20 bg-black/40"></div>
                        <div class="relative">
                            <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                                class="absolute inset-0 w-16 md:w-24 -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 opacity-30 pointer-events-none"
                                alt="">
                            <span class="font-script text-xl md:text-3xl text-[#1e1e1e] relative z-10 font-bold">&</span>
                        </div>
                        <div class="h-px w-12 md:w-20 bg-black/40"></div>
                    </div>

                    <!-- Second Person -->
                    <div class="mb-10" data-aos="fade-up">
                        <h2 class="font-script text-2xl md:text-4xl text-[#1e1e1e] mb-1 font-bold">
                            {{ $invitation->bride_name }}</h2>
                        <div class="space-y-0.5">
                            <p class="font-serif text-[#1e1e1e] text-[9px] md:text-[10px] italic">Putri dari</p>
                            <p class="font-serif text-[#1e1e1e] text-[10px] md:text-sm font-bold italic">
                                {{ $invitation->bride_parents ?? 'Bapak ..... dan Ibu .....' }}</p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- QURANIC VERSE SECTION (Replaced Kisah) -->
            <section id="kisah" class="py-24 px-4 relative bg-transparent">
                <div class="container mx-auto max-w-4xl relative z-10 text-center" data-aos="fade-up">

                    <div class="relative inline-block mb-8">
                        <!-- Clouds around Title -->
                        <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                            class="absolute -left-16 top-0 w-24 opacity-30 pointer-events-none" alt="">
                        <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                            class="absolute -right-16 top-0 w-24 opacity-30 transform -scale-x-100 pointer-events-none"
                            alt="">

                        <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold tracking-tight">Q.S Al- Fatir :
                            ayat 11</h2>
                    </div>

                    <div class="relative">
                        <!-- Additional Clouds -->
                        <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                            class="absolute -left-10 bottom-0 w-28 opacity-20 pointer-events-none" alt="">

                        <p
                            class="font-serif text-[#1e1e1e] text-sm md:text-base italic leading-relaxed max-w-3xl mx-auto px-4">
                            "Dan Allah menciptakan kamu dari tanah kemudian dari air mani, kemudian Dia menjadikan kamu
                            berpasang-pasangan (laki-laki dan perempuan). Tidak ada seorang perempuan pun yang mengandung
                            dan melahirkan melainkan dengan sepengetahuan-Nya. Dan tidak dipanjangkan umur seseorang dan
                            tidak pula dikurangi umurnya, melainkan (sudah ditetapkan) dalam Kitab (Lauh Mahfuzh).
                            Sesungguhnya yang demikian itu mudah bagi Allah."
                        </p>
                    </div>

                </div>
            </section>

            <!-- ACARA SECTION -->
            <section id="acara" class="py-12 px-0 relative bg-transparent">
                <div class="container mx-auto max-w-[450px] relative z-10 text-center">

                    <div class="mb-8" data-aos="fade-up">
                        <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-relaxed max-w-sm mx-auto px-4">
                            Dengan segala kerendahan hati kami berharap kehadiran Bapak/Ibu/i dalam acara pernikahan anak
                            kami yang akan di selenggarakan pada :
                        </p>
                    </div>

                    <!-- Akad/Pernikahan Card -->
                    <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-3 md:p-6 mb-6 shadow-sm border border-black/5"
                        data-aos="fade-up">
                        <h2 class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold mb-6">Akad</h2>

                        <!-- Date Area -->
                        <div class="flex items-center justify-center gap-4 md:gap-8 mb-8 border-y border-black/10 py-6">
                            <div class="flex-1 text-right">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('l') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Hari</p>
                            </div>
                            <div class="h-16 w-px bg-black opacity-30"></div>
                            <div class="flex-[1.5] text-center">
                                <p class="font-script text-2xl md:text-4xl text-[#1e1e1e] font-bold leading-none mb-1">
                                    {{ $invitation->wedding_date->translatedFormat('d') }}</p>
                                <p class="font-serif text-[#1e1e1e] text-base md:text-lg font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('Y') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Tanggal</p>
                            </div>
                            <div class="h-16 w-px bg-black opacity-30"></div>
                            <div class="flex-1 text-left">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('F') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Bulan</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <p class="font-script text-xl md:text-2xl text-[#1e1e1e] font-bold italic">Pukul :
                                    {{ $invitation->akad_time ?? '08.00' }}</p>
                            </div>
                            <div class="space-y-0.5">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">Lokasi</p>
                                <p class="font-serif text-[#1e1e1e] text-xs md:text-sm">Bertempat Di,</p>
                                <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-tight">
                                    {{ $invitation->akad_location }} <br> {{ $invitation->akad_address }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Resepsi Card -->
                    <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-3 md:p-6 shadow-sm border border-black/5 relative overflow-hidden"
                        data-aos="fade-up">
                        <!-- Clouds decor in card -->
                        <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                            class="absolute right-0 top-1/2 -translate-y-1/2 w-20 md:w-28 opacity-20 transform translate-x-8 pointer-events-none"
                            alt="">

                        <h2 class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold mb-6">Resepsi</h2>

                        <!-- Date Area -->
                        <div class="flex items-center justify-center gap-4 md:gap-8 mb-8 border-y border-black/10 py-6">
                            <div class="flex-1 text-right">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('l') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Hari</p>
                            </div>
                            <div class="h-16 w-px bg-black opacity-30"></div>
                            <div class="flex-[1.5] text-center">
                                <p class="font-script text-2xl md:text-4xl text-[#1e1e1e] font-bold leading-none mb-1">
                                    {{ $invitation->wedding_date->translatedFormat('d') }}</p>
                                <p class="font-serif text-[#1e1e1e] text-base md:text-lg font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('Y') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Tanggal</p>
                            </div>
                            <div class="h-16 w-px bg-black opacity-30"></div>
                            <div class="flex-1 text-left">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">
                                    {{ $invitation->wedding_date->translatedFormat('F') }}</p>
                                <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Bulan</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <p class="font-script text-xl md:text-2xl text-[#1e1e1e] font-bold italic">Pukul :
                                    {{ $invitation->resepsi_time ?? '11.00' }}</p>
                            </div>
                            <div class="space-y-0.5">
                                <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">Lokasi</p>
                                <p class="font-serif text-[#1e1e1e] text-xs md:text-sm">Bertempat Di,</p>
                                <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-tight">
                                    {{ $invitation->resepsi_location }} <br> {{ $invitation->resepsi_address }}</p>
                            </div>
                        </div>
                        <!-- Maps Button -->
                        <div class="mt-8" data-aos="fade-up">
                            <button onclick="window.open('{{ $invitation->maps_url ?? '#' }}', '_blank')"
                                class="bg-black text-white px-8 py-3 rounded-md text-sm font-serif italic flex items-center justify-center gap-3 mx-auto hover:bg-zinc-900 transition-all shadow-xl">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Buka Google Maps
                            </button>
                        </div>
                    </div>
            </section>

            <!-- GALLERY SECTION -->
            <section id="galeri" class="py-12 px-4 relative bg-transparent overflow-hidden">
                <div class="container mx-auto max-w-5xl relative z-10 text-center">

                    <!-- Cloud Decor Left -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                        class="absolute -left-10 top-20 w-32 md:w-48 opacity-30 pointer-events-none" alt="">

                    <!-- Cloud Decor Right -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                        class="absolute -right-10 top-40 w-32 md:w-48 opacity-30 transform -scale-x-100 pointer-events-none"
                        alt="">

                    <div class="mb-10" data-aos="fade-up">
                        <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold tracking-tighter">Foto</h2>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4" data-aos="fade-up">
                        @forelse($invitation->galleries as $index => $photo)
                            @php
                                $isLarge = $index % 5 == 0;
                                $gridClasses = $isLarge ? 'col-span-2 row-span-2' : 'col-span-1 row-span-1';
                                $aspectRatio = $isLarge ? 'aspect-[4/3] md:aspect-[3/4]' : 'aspect-square';
                            @endphp
                            <div class="{{ $gridClasses }} group relative overflow-hidden bg-white shadow-lg">
                                <img src="{{ asset($photo->image_path) }}"
                                    class="w-full h-full object-cover transition-all duration-700 scale-110 group-hover:scale-100"
                                    alt="Gallery Image">
                            </div>
                        @empty
                            @for($i = 0; $i < 6; $i++)
                                <div
                                    class="{{ $i == 0 ? 'col-span-2 row-span-2' : 'col-span-1' }} bg-white overflow-hidden relative group">
                                    <img src="{{ asset('assets/image/theme-5-cover.png') }}"
                                        class="w-full h-full object-cover transition-all duration-700" alt="Placeholder">
                                </div>
                            @endfor
                        @endforelse
                    </div>

                </div>
            </section>

            <!-- HADIAH SECTION -->
            <section id="hadiah" class="py-24 px-4 relative bg-transparent text-center overflow-hidden">
                <div class="container mx-auto max-w-4xl relative z-10">
                    <!-- Cloud Decor -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                        class="absolute -left-10 top-0 w-24 opacity-30 pointer-events-none" alt="">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}"
                        class="absolute -right-10 top-0 w-24 opacity-30 transform -scale-x-100 pointer-events-none" alt="">

                    <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold mb-4 tracking-tighter"
                        data-aos="fade-up">Hadiah Pernikahan</h2>
                    <p class="font-serif text-[#1e1e1e] text-[10px] md:text-xs italic mb-10 px-4" data-aos="fade-up">Bagi
                        Bapak/Ibu yang ingin memberikan tanda kasih untuk kedua mempelai</p>

                    <div class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                        @if($invitation->bank_account)
                            <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-8 border border-black/5 shadow-sm"
                                data-aos="fade-up">
                                <h3 class="font-serif text-lg font-bold mb-4 uppercase tracking-widest text-[#1e1e1e]">
                                    {{ $invitation->bank_name ?? 'BANK' }}</h3>
                                <p class="text-2xl font-bold mb-2 text-[#1e1e1e]">{{ $invitation->bank_account }}</p>
                                <p class="text-xs font-serif italic mb-6 text-[#1e1e1e]/60">Atas Nama:
                                    {{ $invitation->bank_holder }}</p>
                                <button onclick="copyToClipboard('{{ $invitation->bank_account }}')"
                                    class="bg-black text-white px-6 py-2 rounded-full text-xs font-serif hover:bg-zinc-900 transition-all shadow-md">
                                    Salin Rekening
                                </button>
                            </div>
                        @endif

                        @if($invitation->bank_account_2)
                            <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-8 border border-black/5 shadow-sm"
                                data-aos="fade-up" data-aos-delay="200">
                                <h3 class="font-serif text-lg font-bold mb-4 uppercase tracking-widest text-[#1e1e1e]">
                                    {{ $invitation->bank_name_2 ?? 'BANK' }}</h3>
                                <p class="text-2xl font-bold mb-2 text-[#1e1e1e]">{{ $invitation->bank_account_2 }}</p>
                                <p class="text-xs font-serif italic mb-6 text-[#1e1e1e]/60">Atas Nama:
                                    {{ $invitation->bank_holder_2 }}</p>
                                <button onclick="copyToClipboard('{{ $invitation->bank_account_2 }}')"
                                    class="bg-black text-white px-6 py-2 rounded-full text-xs font-serif hover:bg-zinc-900 transition-all shadow-md">
                                    Salin Rekening
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <!-- ADAB WALIMAH SECTION -->
            <section id="adab" class="py-24 px-4 relative bg-transparent text-center overflow-hidden">
                <div class="container mx-auto max-w-5xl relative z-10">
                    <div class="mb-12" data-aos="fade-up">
                        <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold tracking-tighter">Adab Walimah
                        </h2>
                        <p class="font-serif text-[#1e1e1e] text-sm md:text-base italic mt-2 px-4 leading-relaxed">Etika
                            Dalam Menghadiri Acara Pernikahan</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-10">
                        <div class="space-y-3" data-aos="fade-up">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Sapa & Senyum</p>
                        </div>
                        <div class="space-y-3" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Mendo'akan</p>
                        </div>
                        <div class="space-y-3" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M2 12h20M4 12c0 4.418 3.582 8 8 8s8-3.582 8-8M8 4v4M12 4v4M16 4v4" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Adab Makan</p>
                        </div>
                        <div class="space-y-3" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Pakaian Rapi</p>
                        </div>
                        <div class="space-y-3" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Tidak Merokok</p>
                        </div>
                        <div class="space-y-3" data-aos="fade-up" data-aos-delay="500">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-black/5 flex items-center justify-center border border-black/10">
                                <svg class="w-8 h-8 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <circle cx="6" cy="8" r="3" stroke-width="1.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 19c0-2.21 1.343-4 3-4s3 1.79 3 4" />
                                    <circle cx="18" cy="8" r="3" stroke-width="1.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 19c0-2.21 1.343-4 3-4s3 1.79 3 4" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        stroke-dasharray="3 3" d="M12 4v16" />
                                </svg>
                            </div>
                            <p class="text-xs md:text-sm font-bold uppercase tracking-widest">Duduk Terpisah</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DAFTAR KEHADIRAN / RSVP SECTION -->
            <section id="rsvp" class="py-24 px-4 relative bg-transparent overflow-hidden">
                <div class="container mx-auto max-w-xl relative z-10 text-center">
                    <h2 class="font-serif text-[#1e1e1e] text-4xl md:text-6xl font-bold mb-10 tracking-tighter"
                        data-aos="fade-up">Daftar Kehadiran</h2>

                    <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-8 md:p-12 border border-black/5 shadow-sm"
                        data-aos="fade-up">
                        <form id="rsvpForm" action="{{ route('rsvp.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                            <input type="hidden" name="slug" value="{{ $invitation->slug }}">

                            <div class="text-left">
                                <label class="block text-xs font-serif italic text-black/60 mb-2 px-2">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ request('to') }}"
                                    class="w-full bg-[#B6A68F]/20 border-b border-black/20 text-[#1e1e1e] py-3 px-4 focus:outline-none focus:border-black transition placeholder-black/30 rounded-t-lg"
                                    placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="text-left">
                                <label class="block text-xs font-serif italic text-black/60 mb-2 px-2">Konfirmasi
                                    Kehadiran</label>
                                <select name="is_attending"
                                    class="w-full bg-[#B6A68F]/20 border-b border-black/20 text-[#1e1e1e] py-3 px-4 focus:outline-none focus:border-black transition appearance-none cursor-pointer rounded-t-lg"
                                    required>
                                    <option value="" disabled selected>Pilih Kehadiran</option>
                                    <option value="1">Hadir</option>
                                    <option value="0">Tidak Hadir</option>
                                </select>
                            </div>

                            <div class="text-left">
                                <label class="block text-xs font-serif italic text-black/60 mb-2 px-2">Pesan & Doa</label>
                                <textarea name="message"
                                    class="w-full bg-[#B6A68F]/20 border-b border-black/20 text-[#1e1e1e] py-3 px-4 focus:outline-none focus:border-black transition placeholder-black/30 rounded-t-lg"
                                    placeholder="Tuliskan pesan & doa Anda" rows="4"></textarea>
                            </div>

                            <button type="submit" id="submitBtn"
                                class="w-full bg-black text-white py-4 rounded-full text-base font-serif hover:bg-zinc-900 transition-all shadow-xl active:scale-95 group">
                                <span class="btn-text">Kirim Konfirmasi</span>
                            </button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- UCAPAN & DOA SECTION -->
            <section id="ucapan" class="pt-24 pb-40 px-4 relative bg-transparent overflow-hidden">
                <div class="container mx-auto max-w-2xl relative z-10 text-center">
                    <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold mb-12 tracking-tighter"
                        data-aos="fade-up">Ucapan & Doa</h2>

                    <div class="max-h-[600px] overflow-y-auto custom-scrollbar px-2">
                        <div id="rsvpList" class="space-y-6 pb-12">
                            @forelse($invitation->guests()->where('is_rsvp', true)->orderBy('updated_at', 'desc')->get() as $rsvp)
                                <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-6 text-left border border-black/5 relative overflow-hidden transition-all duration-500 hover:shadow-md"
                                    data-aos="fade-up">
                                    <div
                                        class="absolute left-0 top-0 h-full w-1.5 {{ $rsvp->is_attending ? 'bg-zinc-800' : 'bg-zinc-400' }}">
                                    </div>
                                    <div class="flex justify-between items-start mb-2 pl-4">
                                        <div>
                                            <h4 class="font-bold text-[#1e1e1e]">{{ $rsvp->name }}</h4>
                                            <p class="text-[10px] text-black/40 uppercase tracking-widest font-serif">
                                                {{ $rsvp->updated_at->diffForHumans() }}</p>
                                        </div>
                                        <span
                                            class="text-[9px] px-2 py-0.5 rounded-full uppercase tracking-widest font-bold border border-black/20 {{ $rsvp->is_attending ? 'bg-black text-white' : 'bg-transparent text-black/40' }}">
                                            {{ $rsvp->is_attending ? 'Hadir' : 'Absen' }}
                                        </span>
                                    </div>
                                    <p class="text-sm italic text-[#1e1e1e]/80 pl-4 font-serif leading-relaxed">
                                        "{{ $rsvp->message }}"</p>
                                </div>
                            @empty
                                <div class="py-12 bg-black/5 rounded-[2rem] border border-dashed border-black/20"
                                    data-aos="fade-up">
                                    <p class="text-black/40 italic">Belum ada ucapan.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>

            <script>
                document.getElementById('rsvpForm').addEventListener('submit', function (e) {
                    e.preventDefault();

                    const form = this;
                    const submitBtn = document.getElementById('submitBtn');
                    const btnText = submitBtn.querySelector('.btn-text');
                    const rsvpList = document.getElementById('rsvpList');

                    submitBtn.disabled = true;
                    btnText.innerText = 'Mengirim...';

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
                            if (typeof showToast === 'function') {
                                showToast(data.message);
                            } else {
                                alert(data.message);
                            }

                            if (data.status === 'success' && data.guest) {
                                form.reset();

                                const initial = data.guest.name.substring(0, 2).toUpperCase();
                                const isAttending = data.guest.is_attending;

                                const badgeLine = isAttending ? 'bg-zinc-800' : 'bg-zinc-400';
                                const badgeText = isAttending ? 'Hadir' : 'Absen';
                                const badgeClasses = isAttending ? 'bg-black text-white' : 'bg-transparent text-black/40';

                                let messageHtml = '';
                                if (data.guest.message) {
                                    messageHtml = `<p class="text-sm italic text-[#1e1e1e]/80 pl-4 font-serif leading-relaxed">"${data.guest.message}"</p>`;
                                }

                                const newItem = `
                                <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-6 text-left border border-black/5 relative overflow-hidden transition-all duration-500 hover:shadow-md fade-in">
                                    <div class="absolute left-0 top-0 h-full w-1.5 ${badgeLine}"></div>
                                    <div class="flex justify-between items-start mb-2 pl-4">
                                        <div>
                                            <h4 class="font-bold text-[#1e1e1e]">${data.guest.name}</h4>
                                            <p class="text-[10px] text-black/40 uppercase tracking-widest font-serif">BARU SAJA</p>
                                        </div>
                                        <span class="text-[9px] px-2 py-0.5 rounded-full uppercase tracking-widest font-bold border border-black/20 ${badgeClasses}">
                                            ${badgeText}
                                        </span>
                                    </div>
                                    ${messageHtml}
                                </div>
                            `;

                                if (rsvpList.innerText.includes('Belum ada ucapan.')) {
                                    rsvpList.innerHTML = '';
                                }

                                rsvpList.insertAdjacentHTML('afterbegin', newItem);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Terjadi kesalahan. Silakan coba lagi.');
                        })
                        .finally(() => {
                            submitBtn.disabled = false;
                            btnText.innerText = 'Kirim Konfirmasi';
                        });
                });
            </script>
    </main>

    </main>

@endsection