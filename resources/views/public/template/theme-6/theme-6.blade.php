@extends('public.template.theme-6.app')

@section('content')

    <!-- COVER SECTION -->
    <section id="cover" class="fixed inset-0 z-[200] flex flex-col items-center justify-center bg-[#B6A68F] transition-opacity duration-1200 overflow-hidden">
        
        <!-- Full Screen Frame -->
        <div class="absolute inset-0 pointer-events-none z-10">
            <img src="{{ asset('assets/image/theme-6-frame.png') }}" class="w-full h-full object-cover md:object-fill" alt="">
        </div>

        <!-- Center Content Container -->
        <div class="relative z-20 flex flex-col items-center justify-center w-full max-w-4xl h-full pt-8 pb-16">
            
            <!-- Single Gunungan & Clouds Group -->
            <div class="relative w-full flex flex-col items-center mb-6 pointer-events-none h-40 md:h-64 justify-center">
                <!-- Clouds behind -->
                <div class="absolute inset-0 flex items-center justify-center gap-10 md:gap-20 opacity-30">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="w-24 md:w-48" alt="">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="w-24 md:w-48 transform -scale-x-100" alt="">
                </div>
                
                <!-- Single Center Gunungan -->
                <div class="relative z-10">
                    <img src="{{ asset('assets/image/theme-6-wayang.png') }}" class="w-32 md:w-64 drop-shadow-xl" alt="">
                </div>
            </div>

            <!-- Text Content -->
            <div class="text-center px-4" data-aos="fade-up" data-aos-duration="1500">
                <p class="font-serif text-[#1e1e1e] text-sm md:text-lg tracking-wide mb-1">The Wedding Of</p>
                <h1 class="font-script text-4xl md:text-6xl text-[#1e1e1e] mb-2 drop-shadow-sm font-bold">
                    {{ $invitation->bride_name }} & {{ $invitation->groom_name }}
                </h1>
                
                <div class="space-y-0.5 mb-4">
                    <p class="font-serif text-[#1e1e1e] text-xs md:text-base">Kepada Yth:</p>
                    <p class="font-serif text-[#1e1e1e] text-lg md:text-2xl font-bold italic">{{ request('to', 'Nama Penerima') }}</p>
                    <p class="font-serif text-[#1e1e1e] text-xs md:text-base">Di Tempat</p>
                </div>

                <button onclick="openInvitation()"
                    class="bg-black text-white px-8 md:px-12 py-3 rounded-md text-base md:text-xl font-serif flex items-center justify-center gap-3 mx-auto hover:bg-zinc-900 transition-all shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Buka Undangan
                </button>
            </div>
        </div>

        <!-- Wayang Characters Layer -->
        <div class="absolute inset-x-0 bottom-0 pointer-events-none flex justify-between items-end px-0 md:px-10 z-20">
            <img src="{{ asset('assets/image/theme-6-wayang-left.png') }}" class="w-32 md:w-72 -ml-4 md:ml-0 drop-shadow-2xl translate-y-4" alt="">
            <img src="{{ asset('assets/image/theme-6-wayang-right.png') }}" class="w-32 md:w-72 -mr-4 md:mr-0 drop-shadow-2xl translate-y-4" alt="">
        </div>
    </section>

    <!-- FLOATING NAVIGATION BAR -->
    <nav id="bottom-nav" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-[200] hidden bg-black/80 backdrop-blur-md border border-white/30 px-6 py-3 rounded-full flex items-center gap-6 shadow-2xl transition-all duration-500">
         <!-- Hero/Home -->
         <a href="#hero" class="nav-link text-white/60 hover:text-white transition-all">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
         </a>
         <!-- Mempelai/Heart -->
         <a href="#mempelai" class="nav-link text-white/60 hover:text-white transition-all">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
         </a>
         <!-- Acara/Calendar -->
         <a href="#acara" class="nav-link text-white/60 hover:text-white transition-all">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
         </a>
         <!-- Galeri/Image -->
         <a href="#galeri" class="nav-link text-white/60 hover:text-white transition-all">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
         </a>
         <!-- Kontak/Message -->
         <a href="#kontak" class="nav-link text-white/60 hover:text-white transition-all">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
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
        <div class="fixed top-0 left-0 w-full h-full flex flex-col items-center justify-center opacity-10 pointer-events-none z-0">
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
            <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden py-12 bg-transparent">
                <div class="container mx-auto px-4 text-center relative z-10">
                    <!-- Text Content Only -->
                    <div class="mb-6" data-aos="fade-up">
                        <p class="font-serif text-[#1e1e1e] text-base md:text-lg tracking-tight mb-1">The Wedding Of</p>
                        <h1 class="font-script text-5xl md:text-6xl text-[#1e1e1e] mb-3 drop-shadow-sm font-bold">
                            {{ $invitation->bride_name }} & {{ $invitation->groom_name }}
                        </h1>
                        <p class="font-serif text-[#1e1e1e] text-sm md:text-base max-w-sm mx-auto leading-tight italic">
                            kami akan menikah, kami ingin anda menjadi bagian dari hari bahagia kami
                        </p>
                    </div>

                    <!-- COUNTDOWN -->
                    <div class="flex justify-center gap-2 md:gap-4 mb-10" data-aos="fade-up">
                        <div class="bg-black text-white w-16 md:w-20 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="days" class="text-xl md:text-3xl font-bold">0</span>
                            <span class="text-[10px] md:text-xs uppercase">Hari</span>
                        </div>
                        <div class="bg-black text-white w-16 md:w-20 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="hours" class="text-xl md:text-3xl font-bold">0</span>
                            <span class="text-[10px] md:text-xs uppercase">Jam</span>
                        </div>
                        <div class="bg-black text-white w-16 md:w-20 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="minutes" class="text-xl md:text-3xl font-bold">0</span>
                            <span class="text-[10px] md:text-xs uppercase">Menit</span>
                        </div>
                        <div class="bg-black text-white w-16 md:w-20 py-2 rounded-lg flex flex-col items-center shadow-lg">
                            <span id="seconds" class="text-xl md:text-3xl font-bold">0</span>
                            <span class="text-[10px] md:text-xs uppercase">Detik</span>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-6" data-aos="fade-up">
                        <button onclick="window.open('...', '_blank')"
                            class="bg-black text-white px-8 md:px-12 py-3 rounded-md text-base md:text-lg font-serif italic flex items-center justify-center gap-3 mx-auto hover:bg-zinc-900 transition-all shadow-xl">
                            <svg class="w-5 h-5 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
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
                    <h2 class="font-script text-4xl md:text-6xl text-[#1e1e1e] mb-1 font-bold">{{ $invitation->groom_name }}</h2>
                    <div class="space-y-0.5">
                        <p class="font-serif text-[#1e1e1e] text-xs md:text-sm italic">Putra dari</p>
                        <p class="font-serif text-[#1e1e1e] text-sm md:text-lg font-bold italic">{{ $invitation->groom_parents ?? 'Bapak ..... dan Ibu .....' }}</p>
                    </div>
                </div>

                <!-- Divider & -->
                <div class="relative flex items-center justify-center gap-6 mb-8" data-aos="zoom-in">
                    <div class="h-0.5 w-12 md:w-20 bg-black/40"></div>
                    <div class="relative">
                        <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute inset-0 w-16 md:w-24 -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 opacity-30 pointer-events-none" alt="">
                        <span class="font-script text-3xl md:text-5xl text-[#1e1e1e] relative z-10 font-bold">&</span>
                    </div>
                    <div class="h-0.5 w-12 md:w-20 bg-black/40"></div>
                </div>

                <!-- Second Person -->
                <div class="mb-10" data-aos="fade-up">
                    <h2 class="font-script text-4xl md:text-6xl text-[#1e1e1e] mb-1 font-bold">{{ $invitation->bride_name }}</h2>
                    <div class="space-y-0.5">
                        <p class="font-serif text-[#1e1e1e] text-xs md:text-sm italic">Putri dari</p>
                        <p class="font-serif text-[#1e1e1e] text-sm md:text-lg font-bold italic">{{ $invitation->bride_parents ?? 'Bapak ..... dan Ibu .....' }}</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- QURANIC VERSE SECTION (Replaced Kisah) -->
        <section id="kisah" class="py-24 px-4 relative bg-transparent">
            <div class="container mx-auto max-w-4xl relative z-10 text-center" data-aos="fade-up">
                
                <div class="relative inline-block mb-8">
                    <!-- Clouds around Title -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -left-16 top-0 w-24 opacity-30 pointer-events-none" alt="">
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -right-16 top-0 w-24 opacity-30 transform -scale-x-100 pointer-events-none" alt="">
                    
                    <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-4xl font-bold tracking-tight">Q.S Al- Fatir : ayat 11</h2>
                </div>

                <div class="relative">
                    <!-- Additional Clouds -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -left-10 bottom-0 w-28 opacity-20 pointer-events-none" alt="">
                    
                    <p class="font-serif text-[#1e1e1e] text-sm md:text-base italic leading-relaxed max-w-3xl mx-auto px-4">
                        "Dan Allah menciptakan kamu dari tanah kemudian dari air mani, kemudian Dia menjadikan kamu berpasang-pasangan (laki-laki dan perempuan). Tidak ada seorang perempuan pun yang mengandung dan melahirkan melainkan dengan sepengetahuan-Nya. Dan tidak dipanjangkan umur seseorang dan tidak pula dikurangi umurnya, melainkan (sudah ditetapkan) dalam Kitab (Lauh Mahfuzh). Sesungguhnya yang demikian itu mudah bagi Allah."
                    </p>
                </div>

            </div>
        </section>

        <!-- ACARA SECTION -->
        <section id="acara" class="py-12 px-0 relative bg-transparent">
            <div class="container mx-auto max-w-[450px] relative z-10 text-center">
                
                <div class="mb-8" data-aos="fade-up">
                    <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-relaxed max-w-sm mx-auto px-4">
                        Dengan segala kerendahan hati kami berharap kehadiran Bapak/Ibu/i dalam acara pernikahan anak kami yang akan di selenggarakan pada :
                    </p>
                </div>

                <!-- Akad/Pernikahan Card -->
                <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-3 md:p-6 mb-6 shadow-sm border border-black/5" data-aos="fade-up">
                    <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-3xl font-bold mb-6">Pernikahan</h2>

                    <!-- Date Area -->
                    <div class="flex items-center justify-center gap-4 md:gap-8 mb-8 border-y border-black/10 py-6">
                        <div class="flex-1 text-right">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">{{ $invitation->wedding_date->translatedFormat('l') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Hari</p>
                        </div>
                        <div class="h-16 w-px bg-black opacity-30"></div>
                        <div class="flex-[1.5] text-center">
                            <p class="font-script text-2xl md:text-4xl text-[#1e1e1e] font-bold leading-none mb-1">{{ $invitation->wedding_date->translatedFormat('d') }}</p>
                            <p class="font-serif text-[#1e1e1e] text-base md:text-lg font-bold">{{ $invitation->wedding_date->translatedFormat('Y') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Tanggal</p>
                        </div>
                        <div class="h-16 w-px bg-black opacity-30"></div>
                        <div class="flex-1 text-left">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">{{ $invitation->wedding_date->translatedFormat('F') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Bulan</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <p class="font-script text-xl md:text-2xl text-[#1e1e1e] font-bold italic">Pukul : {{ $invitation->akad_time ?? '08.00' }} WIB - Selesai</p>
                        </div>
                        <div class="space-y-0.5">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">Lokasi</p>
                            <p class="font-serif text-[#1e1e1e] text-xs md:text-sm">Bertempat Di,</p>
                            <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-tight">{{ $invitation->akad_location }} <br> {{ $invitation->akad_address }}</p>
                        </div>
                    </div>
                </div>

                <!-- Resepsi Card -->
                <div class="bg-black/5 backdrop-blur-sm rounded-[2rem] p-3 md:p-6 shadow-sm border border-black/5 relative overflow-hidden" data-aos="fade-up">
                    <!-- Clouds decor in card -->
                    <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute right-0 top-1/2 -translate-y-1/2 w-20 md:w-28 opacity-20 transform translate-x-8 pointer-events-none" alt="">
                    
                    <h2 class="font-serif text-[#1e1e1e] text-2xl md:text-3xl font-bold mb-6">Resepsi</h2>

                    <!-- Date Area -->
                    <div class="flex items-center justify-center gap-4 md:gap-8 mb-8 border-y border-black/10 py-6">
                        <div class="flex-1 text-right">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">{{ $invitation->wedding_date->translatedFormat('l') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Hari</p>
                        </div>
                        <div class="h-16 w-px bg-black opacity-30"></div>
                        <div class="flex-[1.5] text-center">
                            <p class="font-script text-2xl md:text-4xl text-[#1e1e1e] font-bold leading-none mb-1">{{ $invitation->wedding_date->translatedFormat('d') }}</p>
                            <p class="font-serif text-[#1e1e1e] text-base md:text-lg font-bold">{{ $invitation->wedding_date->translatedFormat('Y') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Tanggal</p>
                        </div>
                        <div class="h-16 w-px bg-black opacity-30"></div>
                        <div class="flex-1 text-left">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">{{ $invitation->wedding_date->translatedFormat('F') }}</p>
                            <p class="text-[10px] md:text-xs uppercase tracking-widest opacity-60">Bulan</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <p class="font-script text-xl md:text-2xl text-[#1e1e1e] font-bold italic">Pukul : {{ $invitation->resepsi_time ?? '11.00' }} WIB - Selesai</p>
                        </div>
                        <div class="space-y-0.5">
                            <p class="font-serif text-[#1e1e1e] text-lg md:text-xl font-bold">Lokasi</p>
                            <p class="font-serif text-[#1e1e1e] text-xs md:text-sm">Bertempat Di,</p>
                            <p class="font-serif text-[#1e1e1e] text-xs md:text-sm leading-tight">{{ $invitation->resepsi_location }} <br> {{ $invitation->resepsi_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section id="galeri" class="py-12 px-4 relative bg-transparent overflow-hidden">
            <div class="container mx-auto max-w-5xl relative z-10 text-center">
                
                <!-- Cloud Decor Left -->
                <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -left-10 top-20 w-32 md:w-48 opacity-30 pointer-events-none" alt="">
                
                <!-- Cloud Decor Right -->
                <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -right-10 top-40 w-32 md:w-48 opacity-30 transform -scale-x-100 pointer-events-none" alt="">

                <div class="mb-10" data-aos="fade-up">
                    <h2 class="font-serif text-[#1e1e1e] text-4xl md:text-6xl font-bold tracking-tighter">Foto</h2>
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
                        <div class="{{ $i == 0 ? 'col-span-2 row-span-2' : 'col-span-1' }} bg-white overflow-hidden relative group">
                             <img src="{{ asset('assets/image/theme-5-cover.png') }}" class="w-full h-full object-cover transition-all duration-700" alt="Placeholder">
                        </div>
                        @endfor
                    @endforelse
                </div>

            </div>
        </section>

        <!-- CONTACT / PEMESANAN SECTION -->
        <section id="kontak" class="py-24 px-4 relative bg-transparent text-center overflow-hidden">
            <div class="container mx-auto max-w-lg relative z-10">
                
                <!-- Cloud Decor Left -->
                <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -left-20 top-1/2 -translate-y-1/2 w-40 opacity-30 pointer-events-none" alt="">
                
                <!-- Cloud Decor Right -->
                <img src="{{ asset('assets/image/theme-6-awan.png') }}" class="absolute -right-20 top-1/2 -translate-y-1/2 w-40 opacity-30 transform -scale-x-100 pointer-events-none" alt="">

                <h2 class="font-serif text-[#1e1e1e] text-4xl md:text-6xl font-bold mb-10 tracking-tight">Pemesanan</h2>

                <div class="flex flex-col gap-3 max-w-sm mx-auto">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/{{ $invitation->phone ?? '628123456789' }}" 
                        target="_blank"
                        class="bg-[#4a4a50] text-[#fffef0] py-3.5 px-6 rounded-md flex items-center justify-center gap-3 hover:bg-zinc-800 transition-all shadow-lg active:scale-95 group">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-2.296 0-4.159 1.864-4.159 4.159 0 .828.24 1.599.654 2.247l-.689 2.525 2.589-.679c.508.272 1.087.428 1.704.428 2.296 0 4.159-1.864 4.159-4.159 0-2.295-1.863-4.159-4.159-4.159zm2.463 6.011c-.114.288-.654.524-.914.524-.26 0-.583-.024-.914-.158-1.571-.629-2.582-2.203-2.658-2.311-.077-.107-.618-.822-.618-1.57 0-.749.394-1.116.533-1.264.139-.148.304-.185.405-.185.101 0 .203.001.291.001.077 0 .185-.029.288.225.101.254.348.847.378.914.03.067.051.144.004.238-.046.094-.07.153-.139.231-.069.079-.148.176-.213.237-.074.069-.151.144-.065.293.086.148.384.633.824 1.026.566.505 1.042.663 1.189.736.148.074.233.061.32-.04.086-.101.378-.435.479-.582.101-.148.203-.121.341-.07.139.051.874.412 1.026.488.151.077.253.114.291.176.037.062.037.358-.077.646z"/></svg>
                        <span class="font-serif text-lg">Whats App</span>
                    </a>

                    <!-- Email -->
                    <a href="mailto:{{ $invitation->email ?? 'undangan@example.com' }}" 
                        class="bg-[#4a4a50] text-[#fffef0] py-3.5 px-6 rounded-md flex items-center justify-center gap-3 hover:bg-zinc-800 transition-all shadow-lg active:scale-95 group">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <span class="font-serif text-lg">Email</span>
                    </a>

                    <!-- Lokasi -->
                    <a href="#acara" 
                        class="bg-[#4a4a50] text-[#fffef0] py-3.5 px-6 rounded-md flex items-center justify-center gap-3 hover:bg-zinc-800 transition-all shadow-lg active:scale-95 group">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span class="font-serif text-lg tracking-[0.15em]">LOKASI</span>
                    </a>
                </div>
            </div>
        </section>

        
    </main>

    </main>

@endsection
