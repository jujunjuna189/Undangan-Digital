@extends('public.template.theme-1.app', ['nav_bar' => false])

@section('content')
<div id="cover" class="fixed inset-0 z-[100] flex items-center justify-center bg-stone-900 transition-opacity duration-1000">

    <div id="bg-image" class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0 scale-110"
        style="background-image: url('<?= asset('assets/image/img-1.webp') ?>');">
    </div>

    <div class="absolute inset-0 bg-black/40"></div>

    <div id="cover-content" class="relative z-10 text-center text-white px-6 opacity-0 translate-y-4 transition-all duration-1000">
        <span class="text-rose-400 font-bold tracking-[0.4em] text-xs uppercase mb-4 block">The Wedding of</span>
        <h1 class="text-5xl md:text-7xl font-serif mb-8 italic">Juna & Furi</h1>
        <button onclick="openInvitation()" class="bg-rose-500 text-white px-10 py-4 rounded-full font-bold uppercase text-xs tracking-[0.2em] hover:bg-pink-600 transition-all shadow-2xl">
            Buka Undangan
        </button>
    </div>
</div>

<section id="hero" class="relative min-h-screen flex items-center justify-center bg-[#FAF9F6] overflow-hidden">
    <div class="absolute inset-0 opacity-5 pointer-events-none rotate-12" style="background-image: url('https://www.transparenttextures.com/patterns/batik-bg.png');"></div>
    <div class="text-center z-10 px-6" data-aos="zoom-in" data-aos-duration="2000">
        <span class="text-rose-500 font-bold tracking-[0.4em] text-xs uppercase mb-4 block underline underline-offset-8 decoration-rose-200">The Wedding Invitation</span>
        <h1 class="text-6xl md:text-8xl font-serif text-stone-800 mb-6 italic">Juna <span class="text-rose-500">&</span> Furi</h1>
        <p class="text-stone-500 tracking-[0.3em] text-sm uppercase">26 . 12 . 2025</p>
    </div>
</section>

<section class="py-24 bg-white text-center px-6 overflow-hidden">
    <div class="max-w-3xl mx-auto border-y border-rose-100 py-16 relative" data-aos="fade-up">
        <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-white px-4 text-rose-300">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2L2 22h20L12 2z" />
            </svg>
        </div>
        <p class="text-stone-600 italic leading-loose text-lg font-light">"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri..." (Ar-Rum: 21)</p>
    </div>
</section>

<section class="py-24 bg-[#FAF9F6] overflow-hidden">
    <div class="container mx-auto px-6 grid md:grid-cols-2 items-center gap-16">
        <div class="relative" data-aos="fade-right">
            <div class="absolute -inset-4 border border-rose-500/20 rounded-[3rem]"></div>
            <img src="{{ asset('assets/image/img-2.webp') }}" class="rounded-[2.5rem] w-full h-[500px] object-cover shadow-2xl relative z-10">
        </div>
        <div class="space-y-6" data-aos="fade-left">
            <h2 class="text-5xl font-serif text-stone-800 italic">Ujun Junaedi, S.Kom.</h2>
            <div class="h-1 w-20 bg-rose-500 rounded-full"></div>
            <p class="text-stone-500 leading-relaxed text-lg">
                Putra Ke 3 Dari <br>
                <span class="font-bold text-stone-800">Emuh & Neni Rohaeni</span>
            </p>
        </div>
    </div>
</section>

<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 grid md:grid-cols-2 items-center gap-16">
        <div class="order-2 md:order-1 space-y-6 text-right" data-aos="fade-right">
            <h2 class="text-5xl font-serif text-stone-800 italic">Furi Intan Rahayu, A.Md.</h2>
            <div class="h-1 w-20 bg-pink-500 rounded-full ml-auto"></div>
            <p class="text-stone-500 leading-relaxed text-lg">
                Putri Bungsu dari <br>
                <span class="font-bold text-stone-800">- & -</span>
            </p>
        </div>
        <div class="order-1 md:order-2 relative" data-aos="fade-left">
            <div class="absolute -inset-4 border border-pink-500/20 rounded-[3rem]"></div>
            <img src="{{ asset('assets/image/img-4.webp') }}" class="rounded-[2.5rem] w-full h-[500px] object-cover shadow-2xl relative z-10">
        </div>
    </div>
</section>

<section class="py-24 bg-[#FFF9F9] overflow-hidden text-center">
    <h3 class="text-4xl font-serif mb-20 text-stone-800" data-aos="fade-down">Cerita <span class="text-rose-500">Kita</span></h3>
    <div class="max-w-4xl mx-auto px-6 relative">
        <div class="absolute left-1/2 -translate-x-1/2 h-full w-px bg-rose-200"></div>
        <div class="relative flex justify-between items-center mb-12" data-aos="zoom-in">
            <div class="w-5/12 text-right pr-8">
                <h4 class="font-bold text-rose-500">2020</h4>
                <p class="text-stone-700 font-semibold">Pertama Bertemu</p>
                <p class="text-sm text-stone-500">Pertemuan tak sengaja di perpustakaan kampus.</p>
            </div>
            <div class="w-4 h-4 rounded-full bg-rose-500 relative z-10 border-4 border-white shadow-sm"></div>
            <div class="w-5/12"></div>
        </div>
    </div>
</section>

<section class="py-24 bg-stone-900 text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')]"></div>
    <h3 class="mb-12 text-rose-400 uppercase tracking-widest text-xs font-bold">Menuju Hari Bahagia</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto px-6">
        <div class="bg-white/5 backdrop-blur-md p-8 rounded-3xl border border-white/10" data-aos="flip-left">
            <p id="days" class="text-4xl font-bold text-rose-400">00</p>
            <p class="text-[10px] uppercase tracking-widest mt-2 opacity-60">Hari</p>
        </div>
        <div class="bg-white/5 backdrop-blur-md p-8 rounded-3xl border border-white/10" data-aos="flip-left" data-aos-delay="100">
            <p id="hours" class="text-4xl font-bold text-rose-400">00</p>
            <p class="text-[10px] uppercase tracking-widest mt-2 opacity-60">Jam</p>
        </div>
        <div class="bg-white/5 backdrop-blur-md p-8 rounded-3xl border border-white/10" data-aos="flip-left" data-aos-delay="200">
            <p id="minutes" class="text-4xl font-bold text-rose-400">00</p>
            <p class="text-[10px] uppercase tracking-widest mt-2 opacity-60">Menit</p>
        </div>
        <div class="bg-white/5 backdrop-blur-md p-8 rounded-3xl border border-white/10" data-aos="flip-left" data-aos-delay="300">
            <p id="seconds" class="text-4xl font-bold text-rose-400">00</p>
            <p class="text-[10px] uppercase tracking-widest mt-2 opacity-60">Detik</p>
        </div>
    </div>
</section>

<section class="py-24 bg-white px-6">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12">
        <div class="p-12 rounded-[4rem] border border-rose-100 bg-[#FFF5F5] transition-all hover:shadow-2xl" data-aos="fade-up">
            <h4 class="text-rose-500 font-bold tracking-widest text-xs mb-6 uppercase">Akad Nikah</h4>
            <div class="text-3xl font-serif text-stone-800 mb-4 italic">08:00 - 10:00</div>
            <p class="text-stone-600 font-medium">Masjid Raya Istiqlal</p>
            <p class="text-stone-400 text-sm mt-2">Jl. Taman Wijaya Kusuma, Jakarta Pusat</p>
        </div>
        <div class="p-12 rounded-[4rem] bg-gradient-to-br from-rose-500 to-pink-500 text-white shadow-xl shadow-rose-200" data-aos="fade-up" data-aos-delay="200">
            <h4 class="font-bold tracking-widest text-xs mb-6 uppercase opacity-80">Resepsi</h4>
            <div class="text-3xl font-serif mb-4 italic">11:00 - 13:00</div>
            <p class="font-medium">Hotel Indonesia Kempinski</p>
            <p class="opacity-70 text-sm mt-2">Menteng, Jakarta Pusat</p>
        </div>
    </div>
</section>

<section class="py-24 bg-[#FAF9F6]">
    <div class="container mx-auto px-6 text-center mb-12">
        <h3 class="text-4xl font-serif italic" data-aos="fade-down">Momen <span class="text-rose-500">Bahagia</span></h3>
    </div>
    <div class="container mx-auto px-6 columns-1 md:columns-3 gap-6 space-y-6">
        <img src="{{ asset('assets/image/img-3.webp') }}" class="rounded-[2.5rem] w-full border border-stone-200 shadow-lg transition-transform hover:scale-105 duration-500" data-aos="zoom-in">
        <img src="{{ asset('assets/image/img-2.webp') }}" class="rounded-[2.5rem] w-full border border-stone-200 shadow-lg transition-transform hover:scale-105 duration-500" data-aos="zoom-in" data-aos-delay="100">
        <img src="{{ asset('assets/image/img-4.webp') }}" class="rounded-[2.5rem] w-full border border-stone-200 shadow-lg transition-transform hover:scale-105 duration-500" data-aos="zoom-in" data-aos-delay="200">
    </div>
</section>

<section class="py-24 bg-white text-center">
    <div class="max-w-2xl mx-auto px-6" data-aos="fade-up">
        <h3 class="text-3xl font-serif mb-12 text-stone-800 italic">Wedding <span class="text-rose-500">Gift</span></h3>
        <div class="bg-rose-50 p-12 rounded-[3rem] border border-rose-100">
            <p class="text-stone-500 mb-8 italic">Tanpa mengurangi rasa hormat, bagi yang ingin memberikan kado digital dapat melalui:</p>
            <div class="space-y-4">
                <div class="p-6 bg-white rounded-3xl flex justify-between items-center shadow-sm">
                    <div class="text-left">
                        <p class="text-xs font-bold text-stone-400">BANK BCA</p>
                        <p class="font-bold text-stone-800">1234567890</p>
                        <p class="text-xs text-stone-500">a.n Rizky Ramadhan</p>
                    </div>
                    <button class="text-xs bg-rose-500 text-white px-4 py-2 rounded-full font-bold uppercase tracking-widest">Salin</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#FAF9F6] overflow-hidden">
    <div class="max-w-2xl mx-auto px-6" data-aos="zoom-in">
        <div class="bg-white p-12 rounded-[4rem] shadow-2xl shadow-stone-200 border border-stone-100">
            <h3 class="text-3xl font-serif text-center mb-8 italic text-stone-800">Buku Tamu</h3>
            <form class="space-y-6">
                <input type="text" placeholder="Nama Anda" class="w-full p-5 rounded-[1.5rem] bg-stone-50 border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-rose-400 outline-none transition-all">
                <textarea placeholder="Ucapan untuk mempelai..." class="w-full p-5 rounded-[1.5rem] bg-stone-50 border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-rose-400 outline-none h-40"></textarea>
                <button class="w-full py-5 bg-rose-500 text-white rounded-full font-bold shadow-xl shadow-rose-200 hover:bg-rose-600 transition-all uppercase tracking-widest text-xs">Kirim Ucapan</button>
            </form>
        </div>
    </div>
</section>

<footer class="py-20 bg-stone-900 text-white text-center">
    <div class="container mx-auto px-6" data-aos="fade-up">
        <h3 class="text-3xl font-serif italic mb-6">Sampai Jumpa</h3>
        <p class="text-stone-400 text-sm max-w-md mx-auto mb-16 leading-relaxed italic">Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara berkenan hadir untuk memberikan doa restu.</p>
        <div class="h-px w-20 bg-rose-500/50 mx-auto mb-8"></div>
        <p class="text-[10px] text-stone-600 uppercase tracking-[0.5em]">Undangan Digital by <span class="text-rose-400 font-bold">UndanganKita</span></p>
    </div>
</footer>
@endsection