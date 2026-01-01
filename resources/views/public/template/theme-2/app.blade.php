<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="preload" as="image" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Undangan Digital - Undangan Pernikahan Modern</title>
    <!-- Preload -->
    <link rel="preload" as="image" href="{{ asset('assets/image/img-1.webp') }}">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Great+Vibes&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #d4af37;
            --stone: #1c1917;
            --cream: #fcfbf7;
            --batik-overlay: rgba(255, 255, 255, 0.9);
        }

        .font-sunda {
            font-family: 'Cinzel', serif;
            letter-spacing: 3px;
            color: var(--gold);
        }

        .font-script {
            font-family: 'Great Vibes', cursive;
        }

        /* Batik Mega Mendung Pattern */
        .bg-batik {
            position: relative;
            background-color: var(--cream);
            background-image: url("{{ asset('assets/image/mega-mendung.jpg') }}");
            background-repeat: repeat;
            background-size: 500px;
            z-index: 1; /* Establish stacking context */
        }
        
        /* Overlay to soften the heavy batik image */
        .bg-batik::before {
             content: "";
             position: absolute;
             inset: 0;
             background: rgba(252, 251, 247, 0.92); /* Strong Cream overlay */
             z-index: -1;
        }

        .glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        }

        .sunda-border {
            border: double 4px var(--gold);
            position: relative;
            padding: 24px;
            margin: 10px;
        }

        .sunda-border::before, .sunda-border::after {
            content: '⬥';
            color: var(--gold);
            position: absolute;
            font-size: 24px;
            background: var(--cream);
            padding: 0 10px;
        }

        .sunda-border::before { top: -18px; left: 50%; transform: translateX(-50%); }
        .sunda-border::after { bottom: -18px; left: 50%; transform: translateX(-50%); }

        .divider-kujang {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .divider-kujang::before, .divider-kujang::after {
            content: '';
            height: 1px;
            width: 80px;
            background: var(--gold);
        }

        .ornament-corner {
            position: absolute;
            width: 100px;
            height: 100px;
            border: 2px solid var(--gold);
            opacity: 0.6;
            pointer-events: none;
        }
        .ornament-tl { top: 20px; left: 20px; border-right: none; border-bottom: none; }
        .ornament-tr { top: 20px; right: 20px; border-left: none; border-bottom: none; }
        .ornament-bl { bottom: 20px; left: 20px; border-right: none; border-top: none; }
        .ornament-br { bottom: 20px; right: 20px; border-left: none; border-top: none; }

        /* Fixed Side Ornaments (Wayang/Gunungan Silhouette) */
        .side-ornament {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            width: 60px; /* Adjust based on image ratio */
            height: 80vh;
            background-repeat: repeat-y;
            background-size: contain;
            opacity: 0.4;
            z-index: 50;
            pointer-events: none;
        }
        .side-left {
            left: 10px;
            background-image: url("{{ asset('assets/image/gunungan.jpg') }}"); 
        }
        .side-right {
            right: 10px;
            background-image: url("{{ asset('assets/image/gunungan.jpg') }}");
            transform: translateY(-50%) scaleX(-1); /* Mirror for right side */
        }
        
        /* Ensure content doesn't hit the sides heavily */
        main {
            padding-left: 0;
            padding-right: 0;
        }
        @media (min-width: 768px) {
            .side-ornament {
                width: 100px;
            }
        }

        /* Hero Gapura (Gate) Effect */
        .gapura-container {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 5;
            display: flex;
            justify-content: space-between;
            align-items: flex-end; /* Align to bottom for Gunungan entering from sides */
            overflow: hidden;
        }

        .gapura-side {
            width: 120px;
            height: 100%; /* Full height to frame */
            background-image: url("{{ asset('assets/image/gunungan.jpg') }}");
            background-size: cover;
            background-position: center;
            opacity: 0.8;
            filter: sepia(100%) hue-rotate(5deg) saturate(150%); /* Gold/Brown tint */
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 60%, rgba(0,0,0,0)); /* Fade out at bottom */
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 60%, rgba(0,0,0,0));
        }

        .gapura-left {
            transform: scaleX(1); 
            /* Clip path to shape it like a silhouette if image is square */
            clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); 
        }

        .gapura-right {
             transform: scaleX(-1);
             clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%);
        }

        .batik-border-y {
            height: 20px;
            width: 100%;
            background-image: url("{{ asset('assets/image/batik-pattern.jpg') }}");
            background-repeat: repeat-x;
            background-size: auto 100%;
            opacity: 0.7;
            border-top: 1px solid var(--gold);
            border-bottom: 1px solid var(--gold);
        }
    </style>
</head>

<body style="scroll-behavior: smooth;">
    <audio id="bg-music" loop preload="none">
        <source src="{{ asset('assets/audio/audio-1.mp3') }}" type="audio/mpeg">
    </audio>
    <div class="app">
        <main class="relative">
            @yield('content')
        </main>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inisialisasi Animasi
    AOS.init({
        duration: 1200,
        once: true,
    });

    document.addEventListener("DOMContentLoaded", function() {
        const bgImg = new Image();
        bgImg.src = "{{ asset('assets/image/img-1.webp') }}";

        bgImg.onload = function() {
            // 1. Munculkan background dengan smooth
            const bgDiv = document.getElementById('bg-image');
            bgDiv.classList.remove('opacity-0');
            bgDiv.classList.add('opacity-40'); // Sesuaikan opacity akhir
            bgDiv.classList.remove('scale-110');
            bgDiv.style.transition = "opacity 2s ease, transform 3s ease-out";
            bgDiv.classList.add('scale-100');

            // 2. Munculkan teks setelah background sedikit terlihat
            setTimeout(() => {
                const content = document.getElementById('cover-content');
                content.classList.remove('opacity-0', 'translate-y-4');
                content.classList.add('opacity-100', 'translate-y-0');
            }, 500);
        };
    });

    // Countdown Logic
    const weddingDate = new Date("Dec 26, 2025 08:00:00").getTime(); // Sesuaikan tahunnya

    const countdownTask = setInterval(function() {
        const now = new Date().getTime();
        const distance = weddingDate - now;

        // Perhitungan waktu
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Render ke HTML
        document.getElementById("days").innerHTML = days < 10 ? "0" + days : days;
        document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
        document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
        document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;

        // Jika waktu habis
        if (distance < 0) {
            clearInterval(countdownTask);
            document.getElementById("days").innerHTML = "00";
            document.getElementById("hours").innerHTML = "00";
            document.getElementById("minutes").innerHTML = "00";
            document.getElementById("seconds").innerHTML = "00";
        }
    }, 1000);

    function openInvitation() {
        window.scrollTo(0, 0);
        const cover = document.getElementById('cover');
        const audio = document.getElementById('bg-music');

        // Tambahkan class untuk animasi menutup yang smooth
        cover.classList.add('hide-cover');

        // Play Musik
        if (audio) {
            audio.volume = 0.5;
            audio.play().catch(err => console.log("Autoplay blocked by browser"));
        }

        // Hapus element setelah animasi selesai agar tidak membebani RAM
        cover.style.opacity = '0';
        setTimeout(() => {
            cover.style.display = 'none';
            // Mulai Auto Scroll setelah undangan dibuka
            startAutoScroll();
        }, 900);
    }

    let autoScrollInterval;
    let idleTimer;
    let isAutoScrolling = false;
    let currentSectionIndex = 0;
    let scrollAnimationId = null;

    function smoothScrollTo(targetY, duration = 2800) {
        if (!isAutoScrolling) return;

        const startY = window.scrollY;
        const distance = targetY - startY;
        let startTime = null;

        function easeInOut(t) {
            return t < 0.5 ?
                2 * t * t :
                1 - Math.pow(-2 * t + 2, 2) / 2;
        }

        function animation(currentTime) {
            if (!isAutoScrolling) {
                cancelAnimationFrame(scrollAnimationId);
                return;
            }

            if (!startTime) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            const eased = easeInOut(progress);

            window.scrollTo(0, startY + distance * eased);

            if (timeElapsed < duration) {
                scrollAnimationId = requestAnimationFrame(animation);
            }
        }

        scrollAnimationId = requestAnimationFrame(animation);
    }


    function startAutoScroll() {
        if (isAutoScrolling) return;
        isAutoScrolling = true;

        const sections = document.querySelectorAll('section, footer');

        // Cari index section terdekat dari posisi scroll saat ini agar tidak melompat balik
        currentSectionIndex = findCurrentSectionIndex(sections);

        autoScrollInterval = setInterval(() => {
            currentSectionIndex++;

            if (currentSectionIndex < sections.length) {
                const targetY = sections[currentSectionIndex].offsetTop;
                smoothScrollTo(targetY, 3000);
            } else {
                stopAutoScroll();
            }
        }, 8500); // Durasi per section
    }

    function stopAutoScroll() {
        isAutoScrolling = false;
        clearInterval(autoScrollInterval);

        if (scrollAnimationId) {
            cancelAnimationFrame(scrollAnimationId);
            scrollAnimationId = null;
        }
    }

    // Fungsi untuk mendeteksi user sedang melihat section mana sekarang
    function findCurrentSectionIndex(sections) {
        let index = 0;
        let minDistance = Math.abs(window.scrollY - sections[0].offsetTop);

        sections.forEach((section, i) => {
            let distance = Math.abs(window.scrollY - section.offsetTop);
            if (distance < minDistance) {
                minDistance = distance;
                index = i;
            }
        });
        return index;
    }

    // Logika Reset saat User melakukan Interaksi
    function handleUserInteraction() {
        // 1. Berhentikan auto scroll yang sedang berjalan
        stopAutoScroll();

        // 2. Hapus timer idle sebelumnya
        clearTimeout(idleTimer);

        // 3. Set timer baru: Jika diam selama 5 detik, aktifkan kembali auto scroll
        idleTimer = setTimeout(() => {
            startAutoScroll();
        }, 5000); // Diam 5 detik baru jalan lagi
    }

    // Listener untuk mendeteksi interaksi manual
    window.addEventListener('wheel', handleUserInteraction);
    window.addEventListener('touchstart', handleUserInteraction);
    window.addEventListener('scroll', () => {
        // Jika user scroll manual tanpa wheel (misal drag scrollbar)
        if (!isAutoScrolling) {
            clearTimeout(idleTimer);
            idleTimer = setTimeout(startAutoScroll, 5000);
        }
    });
</script>

</html>