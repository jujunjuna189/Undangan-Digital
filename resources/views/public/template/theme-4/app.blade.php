<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Undangan Pernikahan {{ $invitation->bride_name }} & {{ $invitation->groom_name }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Preload -->
    <link rel="preload" href="{{ asset('assets/audio/audio-4.mp3') }}" as="audio">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --navy: #001f3f;
            --gold: #d4af37;
            --gold-light: #f7e7ce;
            --dark-gold: #b8860b;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #001f3f;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #d4af37, #b8860b);
            border-radius: 10px;
        }

        /* Global Noise Texture */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.04;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            mix-blend-mode: overlay;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Philosopher", serif;
            background-color: var(--navy);
            color: var(--gold-light);
            overflow-x: hidden;
        }

        .navy-bg {
            background-color: var(--navy);
        }

        .gold-text {
            color: var(--gold);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        .glass-premium {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.7), rgba(15, 23, 42, 0.8));
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.7);
            position: relative;
        }

        .glass-premium::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.6' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            opacity: 0.05;
            mix-blend-mode: overlay;
            pointer-events: none;
            border-radius: inherit;
        }

        .text-gold {
            color: #D4AF37;
        }

        .animate-float {
            animation: floatAnim 6s ease-in-out infinite;
        }

        @keyframes floatAnim {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-pulse-light {
            animation: pulseLightAnim 3s ease-in-out infinite;
        }

        @keyframes pulseLightAnim {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        .separator-gold {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .text-shadow-gold {
            text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
        }

        .font-pinyon {
            font-family: "Philosopher", cursive;
        }

        .font-playfair {
            font-family: "Philosopher", serif;
        }

        .yt-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 9;
        }

        .yt-wrapper iframe {
        width: 100%;
        height: 100%;
        }

        .yt-overlay {
        position: absolute;
        inset: 0;
        }
    </style>
</head>

<body class="navy-bg antialiased">
    <audio id="bgMusic" loop preload="none">
        <source src="{{ asset('assets/audio/audio-4.mp3') }}" type="audio/mpeg">
    </audio>

    @yield('content')

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/script/app.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true,
            offset: 100
        });

        function openInvitation() {
            window.scrollTo(0, 0);
            const coverSection = document.getElementById('cover');
            const audio = document.getElementById('bgMusic');

            if (coverSection) {
                coverSection.style.opacity = '0';
                coverSection.style.pointerEvents = 'none';

                if (audio) {
                    audio.volume = 0.5;
                    audio.play().catch(err => console.log("Autoplay blocked by browser"));
                }

                setTimeout(() => {
                    coverSection.style.display = 'none';
                    document.getElementById('main-content').style.display = 'block';
                }, 500);
            }
        }

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

        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // Countdown configuration
        @if($invitation->wedding_date)
            const weddingDateString = "{{ $invitation->wedding_date->format('Y-m-d H:i:s') }}";
        @else
            const weddingDateString = "2026-12-30 00:00:00";
        @endif
        const weddingDate = new Date(weddingDateString).getTime();

        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            const daysElement = document.getElementById("days");
            const hoursElement = document.getElementById("hours");
            const minutesElement = document.getElementById("minutes");
            const secondsElement = document.getElementById("seconds");

            if (daysElement) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                daysElement.innerText = days.toString().padStart(2, '0');
                hoursElement.innerText = hours.toString().padStart(2, '0');
                minutesElement.innerText = minutes.toString().padStart(2, '0');
                secondsElement.innerText = seconds.toString().padStart(2, '0');

                if (distance < 0) {
                    clearInterval(countdownInterval);
                    daysElement.innerText = "00";
                    hoursElement.innerText = "00";
                    minutesElement.innerText = "00";
                    secondsElement.innerText = "00";
                }
            }
        }, 1000);

        function copyToClipboard(text) {
            if (navigator.clipboard) {
                // Clipboard API (Modern)
                navigator.clipboard.writeText(text).then(() => {
                    showToast('Nomor rekening berhasil disalin!');
                }).catch(err => {
                    fallbackCopyTextToClipboard(text);
                });
            } else {
                // Fallback for older browsers
                fallbackCopyTextToClipboard(text);
            }
        }

        function fallbackCopyTextToClipboard(text) {
            const textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.left = "-9999px";
            textArea.style.top = "0";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            try {
                const successful = document.execCommand('copy');
                if (successful) {
                    showToast('Nomor rekening berhasil disalin!');
                }
            } catch (err) {
                console.error('Copy failed', err);
            }
            document.body.removeChild(textArea);
        }

        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-10 left-1/2 transform -translate-x-1/2 glass-premium px-6 py-3 rounded-full text-gold font-semibold z-[200] animate-bounce';
            toast.style.boxShadow = '0 0 20px rgba(212, 175, 55, 0.3)';
            toast.innerText = message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.classList.remove('animate-bounce');
                toast.style.opacity = '0';
                toast.style.transition = 'opacity 0.5s ease-out';
                setTimeout(() => document.body.removeChild(toast), 500);
            }, 3000);
        }
    </script>
</body>

</html>