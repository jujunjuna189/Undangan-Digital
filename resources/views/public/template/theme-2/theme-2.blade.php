@extends('public.template.theme-2.app', ['nav_bar' => false])

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

<section id="hero" class="relative min-h-screen flex items-center justify-center bg-batik overflow-hidden">
    <div class="absolute top-0 left-0 w-48 md:w-80 opacity-20 rotate-180">
        <img src="https://i.pinimg.com/originals/a0/7b/72/a07b723e7e805561a7a012a64016b801.png" alt="mega-mendung">
    </div>

    <div class="text-center z-10 px-6" data-aos="fade-up" data-aos-duration="2000">
        <p class="font-sunda text-xs uppercase mb-6">Panguleum Nikah</p>
        <h1 class="text-7xl md:text-9xl font-serif text-stone-800 mb-4 italic">
            Juna <span class="text-[#d4af37]">&</span> Furi
        </h1>
        <div class="divider-kujang">
            <span class="text-stone-400 text-[10px] tracking-[0.5em] uppercase">26 Desember 2025</span>
        </div>
        <p class="mt-8 text-stone-500 italic font-light">"Kanyaah nu moal luntur ku waktu, kacinta nu moal laas ku mangsa."</p>
    </div>
</section>

<section class="py-24 bg-white text-center px-6 relative">
    <div class="max-w-4xl mx-auto" data-aos="zoom-in">
        <div class="mb-8 opacity-40 flex justify-center">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="#d4af37">
                <path d="M12 2l2.4 7.2h7.6l-6.2 4.5 2.4 7.3-6.2-4.5-6.2 4.5 2.4-7.3-6.2-4.5h7.6z" />
            </svg>
        </div>
        <p class="text-stone-600 italic leading-loose text-xl font-light mb-8">
            "Mugia ridho Allah SWT nyarengan lengkah simkuring sakulawargi, nalika ngahijikeun dua hate dina beungkeutan suci pernikahan."
        </p>
        <div class="h-px w-20 bg-[#d4af37] mx-auto"></div>
    </div>
</section>

<section class="py-32 bg-[#fcfbf7] overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-16 mb-40">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="sunda-frame">
                    <img src="{{ asset('assets/image/img-2.webp') }}" class="w-full h-[650px] object-cover filter grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-6" data-aos="fade-left">
                <h3 class="font-sunda text-sm">Calon Panganten Pameget</h3>
                <h2 class="text-6xl font-serif text-stone-800 italic">Rizky Ramadhan, S.T.</h2>
                <p class="text-stone-500 text-lg leading-relaxed">
                    Putra cikal ti pasangan anu dipihormat:<br>
                    <span class="text-stone-800 font-bold text-2xl mt-2 block">Bapa Ahmad Subagja</span>
                    <span class="text-stone-800 font-bold text-2xl block">& Ibu Siti Aminah</span>
                </p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row-reverse items-center gap-16">
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <div class="sunda-frame !box-shadow-[-20px_20px_0px_-5px_#d4af37]">
                    <img src="{{ asset('assets/image/img-4.webp') }}" class="w-full h-[650px] object-cover filter grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-6 text-right" data-aos="fade-right">
                <h3 class="font-sunda text-sm">Calon Panganten Istri</h3>
                <h2 class="text-6xl font-serif text-stone-800 italic">Aulia Putri, S.E.</h2>
                <p class="text-stone-500 text-lg leading-relaxed">
                    Putri bungsu ti pasangan anu dipihormat:<br>
                    <span class="text-stone-800 font-bold text-2xl mt-2 block">Bapa Bambang Wijaya</span>
                    <span class="text-stone-800 font-bold text-2xl block">& Ibu Larasati</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-stone-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://i.pinimg.com/originals/a0/7b/72/a07b723e7e805561a7a012a64016b801.png')] bg-repeat shadow-inner"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-down">
            <h2 class="text-5xl font-serif italic text-[#d4af37]">Acara Syukuran</h2>
            <p class="tracking-[0.5em] text-[10px] mt-4 opacity-60 uppercase">Matak Atoh Upami Kasumpingan</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div class="p-12 border border-[#d4af37]/30 bg-white/5 backdrop-blur-lg rounded-none relative" data-aos="flip-up">
                <div class="absolute top-0 left-0 w-8 h-8 border-t border-l border-[#d4af37]"></div>
                <h4 class="font-sunda text-xs mb-6">Akad Nikah</h4>
                <p class="text-4xl font-serif mb-4">08.00 - 10.00</p>
                <p class="text-[#d4af37] font-bold mb-4">Masjid Raya Istiqlal</p>
                <p class="text-sm opacity-70 leading-relaxed">Jl. Taman Wijaya Kusuma, Jakarta Pusat</p>
            </div>

            <div class="p-12 border border-[#d4af37]/30 bg-white/5 backdrop-blur-lg rounded-none relative" data-aos="flip-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 w-8 h-8 border-t border-r border-[#d4af37]"></div>
                <h4 class="font-sunda text-xs mb-6">Resepsi</h4>
                <p class="text-4xl font-serif mb-4">11.00 - 13.00</p>
                <p class="text-[#d4af37] font-bold mb-4">Hotel Indonesia Kempinski</p>
                <p class="text-sm opacity-70 leading-relaxed">Grand Ballroom, Menteng, Jakarta Pusat</p>
            </div>
        </div>
    </div>
</section>
@endsection