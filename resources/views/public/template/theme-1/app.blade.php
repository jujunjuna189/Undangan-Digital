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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            background-color: #F2F4F7;
            font-size: 14px;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        /* Efek Zoom-in Perlahan (Ken Burns) */
        @keyframes kenburns {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.15);
            }
        }

        .animate-ken-burns {
            animation: kenburns 20s ease-out infinite alternate;
            /* Tambahkan fade in saat awal muncul */
            transition: opacity 2s ease-in-out;
        }

        /* Memastikan transisi saat cover dibuka tetap smooth */
        #cover.hide-cover {
            transform: translateY(-100%);
            opacity: 0;
            transition: transform 1.2s cubic-bezier(0.7, 0, 0.3, 1), opacity 1s;
        }
    </style>
</head>

<body style="scroll-behavior: smooth;">
    <audio id="bg-music" loop preload="none">
        <source src="{{ asset('assets/audio/audio-1.mp3') }}" type="audio/mpeg">
    </audio>
    <div class="app">
        <main>
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