<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden bg-[#fff7ed]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Undangan Pernikahan {{ $invitation->bride_name }} & {{ $invitation->groom_name }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Preload -->
    @if($invitation->audio_url)
        <link rel="preload" href="{{ asset($invitation->audio_url) }}" as="audio">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Great+Vibes&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --sunda-emerald: #065f46;
            --sunda-brown: #78350f;
            --betawi-orange: #f97316;
            --betawi-yellow: #fbbf24;
            --cream: #fff7ed;
            --gold: #d4af37;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: var(--cream);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--sunda-emerald), var(--betawi-orange));
            border-radius: 10px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff7ed;
            color: #1a1a1a;
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }

        .font-serif {
            font-family: 'Cinzel', serif;
        }

        .font-script {
            font-family: 'Great Vibes', cursive;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        .bg-megamendung {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath d='M10 50 Q 25 30 40 50 Q 55 70 70 50 Q 85 30 100 50' fill='none' stroke='%23065f46' stroke-width='0.5' opacity='0.2'/%3E%3Cpath d='M-10 70 Q 5 50 20 70 Q 35 90 50 70 Q 65 50 80 70 Q 95 90 110 70' fill='none' stroke='%23065f46' stroke-width='0.5' opacity='0.2'/%3E%3C/svg%3E");
        }


        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-reverse {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(20px);
            }
        }

        .animate-float-reverse {
            animation: float-reverse 6s ease-in-out infinite;
        }

        @keyframes falling {
            0% {
                transform: translate(0, -10px) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.8;
            }

            90% {
                opacity: 0.8;
            }

            100% {
                transform: translate(100px, 100vh) rotate(360deg);
                opacity: 0;
            }
        }

        .sunda-petal {
            position: absolute;
            background-color: #fbbf24;
            /* Warm gold */
            border-radius: 50%;
            /* Perfect circles again */
            opacity: 0.4;
            /* Lebih terlihat untuk efek hujan */
            box-shadow: 0 0 15px rgba(251, 191, 36, 0.6);
            /* Glow effect lebih kuat */
            filter: blur(1px);
            /* Soft focus effect */
            animation: falling linear infinite;
            z-index: 10;
        }

        .separator-ornament {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .separator-ornament::before,
        .separator-ornament::after {
            content: '';
            height: 1px;
            flex-grow: 1;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .btn-premium {
            background: linear-gradient(135deg, var(--sunda-emerald), var(--sunda-brown));
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--betawi-orange), var(--betawi-yellow));
        }

        .sunda-flower-accent {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 100 100'%3E%3Cpath d='M50 20 Q 60 0 70 20 Q 90 30 70 40 Q 60 60 50 40 Q 30 30 50 20' fill='%23fff7ed' stroke='%23d4af37' stroke-width='1.5'/%3E%3Ccircle cx='50' cy='30' r='3' fill='%23fbbf24'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-leaf-accent {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 100 100'%3E%3Cpath d='M50 80 Q 20 60 30 30 Q 50 0 70 30 Q 80 60 50 80' fill='%23065f46' opacity='0.15'/%3E%3Cpath d='M50 80 L 50 10' stroke='%23065f46' stroke-width='0.5' opacity='0.2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-leaf-alt {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 100 100'%3E%3Cpath d='M20 50 Q 50 10 80 50 Q 50 90 20 50' fill='%23166534' opacity='0.1'/%3E%3Cpath d='M20 50 L 80 50' stroke='%23166534' stroke-width='0.5' opacity='0.2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-jasmine-hanging {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='200' viewBox='0 0 40 200'%3E%3Ccircle cx='20' cy='20' r='5' fill='white' stroke='%23d4af37' stroke-width='0.5'/%3E%3Ccircle cx='20' cy='50' r='5' fill='white' stroke='%23d4af37' stroke-width='0.5'/%3E%3Ccircle cx='20' cy='80' r='5' fill='white' stroke='%23d4af37' stroke-width='0.5'/%3E%3Ccircle cx='20' cy='110' r='5' fill='white' stroke='%23d4af37' stroke-width='0.5'/%3E%3Ccircle cx='20' cy='140' r='5' fill='white' stroke='%23d4af37' stroke-width='0.5'/%3E%3Cline x1='20' y1='0' x2='20' y2='200' stroke='%23d4af37' stroke-width='0.5' stroke-dasharray='2,2'/%3E%3C/svg%3E");
            background-repeat: repeat-y;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-siger-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 60'%3E%3Cpath d='M10 50 Q 50 10 90 50 L 80 50 Q 50 20 20 50 Z' fill='%23d4af37' opacity='0.2'/%3E%3Ccircle cx='50' cy='25' r='3' fill='%23d4af37' opacity='0.3'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-kujang-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='100' viewBox='0 0 40 100'%3E%3Cpath d='M10 90 C 10 90 30 70 30 40 C 30 10 10 10 10 10 L 15 30 L 10 40 L 15 60 Z' fill='%2378350f' opacity='0.15'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .betawi-ondel-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='40' r='20' fill='%23f97316' opacity='0.2'/%3E%3Cpath d='M30 40 L 40 10 L 50 40 L 60 10 L 70 40' fill='none' stroke='%23fbbf24' stroke-width='2' opacity='0.3'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-vase-flower {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='150' height='200' viewBox='0 0 100 150'%3E%3Cpath d='M30 140 L 70 140 L 80 100 Q 50 80 20 100 Z' fill='%2378350f' opacity='0.2'/%3E%3Cpath d='M50 100 L 20 60 Q 50 30 80 60 Z' fill='%23166534' opacity='0.15'/%3E%3Ccircle cx='40' cy='50' r='8' fill='white' opacity='0.3'/%3E%3Ccircle cx='60' cy='40' r='10' fill='white' opacity='0.3'/%3E%3Ccircle cx='30' cy='30' r='6' fill='white' opacity='0.2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-ornament-large {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='150' viewBox='0 0 200 150'%3E%3Cpath d='M10 110 Q 100 0 190 110 L 170 110 Q 100 20 30 110 Z' fill='%23d4af37' opacity='0.2'/%3E%3Cpath d='M50 80 Q 100 30 150 80' fill='none' stroke='%23d4af37' stroke-width='2' opacity='0.3'/%3E%3Ccircle cx='100' cy='50' r='5' fill='%23d4af37' opacity='0.3'/%3E%3Ccircle cx='70' cy='70' r='4' fill='%23d4af37' opacity='0.3'/%3E%3Ccircle cx='130' cy='70' r='4' fill='%23d4af37' opacity='0.3'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-branch-left {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'%3E%3Cpath d='M0 0 Q 50 20 100 80 Q 150 140 180 180' fill='none' stroke='%2378350f' stroke-width='2' opacity='0.4'/%3E%3Cellipse cx='60' cy='30' rx='10' ry='5' fill='%23166534' transform='rotate(-20 60 30)' opacity='0.6'/%3E%3Cellipse cx='90' cy='60' rx='10' ry='5' fill='%23166534' transform='rotate(10 90 60)' opacity='0.6'/%3E%3Cellipse cx='130' cy='110' rx='12' ry='6' fill='%23166534' transform='rotate(30 130 110)' opacity='0.6'/%3E%3Ccircle cx='75' cy='45' r='4' fill='white' stroke='%23fbbf24' stroke-width='0.5'/%3E%3Ccircle cx='110' cy='90' r='5' fill='white' stroke='%23fbbf24' stroke-width='0.5'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .sunda-branch-right {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'%3E%3Cpath d='M200 0 Q 150 20 100 80 Q 50 140 20 180' fill='none' stroke='%2378350f' stroke-width='2' opacity='0.4'/%3E%3Cellipse cx='140' cy='30' rx='10' ry='5' fill='%23166534' transform='rotate(20 140 30)' opacity='0.6'/%3E%3Cellipse cx='110' cy='60' rx='10' ry='5' fill='%23166534' transform='rotate(-10 110 60)' opacity='0.6'/%3E%3Cellipse cx='70' cy='110' rx='12' ry='6' fill='%23166534' transform='rotate(-30 70 110)' opacity='0.6'/%3E%3Ccircle cx='125' cy='45' r='4' fill='white' stroke='%23fbbf24' stroke-width='0.5'/%3E%3Ccircle cx='90' cy='90' r='5' fill='white' stroke='%23fbbf24' stroke-width='0.5'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .floating-decoration {
            position: absolute;
            z-index: 1;
            opacity: 0.6;
        }



        /* Top Left Sunda-Betawi Floral Bouquet */
        .frame-corner-tl {
            position: fixed;
            top: -10px;
            left: -10px;
            width: 220px;
            height: 220px;
            background-image: url("{{ asset('assets/image/theme-5-floral 1.png') }}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            animation: float 6s ease-in-out infinite;
            z-index: 40;
            pointer-events: none;
        }

        @media (min-width: 768px) {
            .frame-corner-tl {
                width: 350px;
                height: 350px;
                top: -50px;
                left: -50px;
            }
        }

        .frame-corner-br {
            position: fixed;
            bottom: -10px;
            right: -10px;
            width: 220px;
            height: 220px;
            background-image: url("{{ asset('assets/image/theme-5-floral 2.png') }}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: rotate(180deg);
            /* Rotate to fit the bottom corner */
            animation: float-reverse 7s ease-in-out infinite;
            z-index: 40;
            pointer-events: none;
        }

        @media (min-width: 768px) {
            .frame-corner-br {
                width: 350px;
                height: 350px;
                bottom: -50px;
                right: -50px;
            }
        }

        .bokeh-circles {
            position: fixed;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .bokeh-circle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 191, 36, 0.4) 0%, transparent 70%);
            filter: blur(20px);
            animation: float-reverse 15s infinite alternate ease-in-out;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .font-script {
                font-size: 2.5rem;
            }

            .section-padding {
                padding: 4rem 1.5rem;
            }
        }
    </style>
</head>

<body class="antialiased">
    <audio id="bgMusic" loop preload="none">
        <source src="{{ asset($invitation->audio_url ?? 'assets/audio/audio-5.mp3') }}" type="audio/mpeg">
    </audio>

    @yield('content')

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            mirror: false,
            offset: 50,
            easing: 'ease-out-quad',
        });

        function openInvitation() {
            window.scrollTo(0, 0);
            const coverSection = document.getElementById('cover');
            const audio = document.getElementById('bgMusic');

            if (coverSection) {
                coverSection.style.opacity = '0';
                coverSection.style.transition = 'opacity 1s ease-out';
                coverSection.style.pointerEvents = 'none';

                if (audio) {
                    audio.volume = 0.5;
                    audio.play().catch(err => console.log("Autoplay blocked by browser"));
                }

                setTimeout(() => {
                    coverSection.style.display = 'none';
                    document.getElementById('main-content').classList.remove('hidden');
                    const culturalFrame = document.getElementById('cultural-frame');
                    const globalDecor = document.getElementById('global-decor');
                    if (culturalFrame) culturalFrame.classList.remove('hidden');
                    if (globalDecor) globalDecor.classList.remove('hidden');

                    document.body.style.overflowY = 'auto';
                    document.body.style.overflowX = 'hidden';
                    AOS.refresh();
                }, 1000);
            }
        }

        function toggleMusic() {
            const audio = document.getElementById('bgMusic');
            const btn = document.querySelector('.music-btn');
            if (audio.paused) {
                audio.play();
                btn.classList.add('animate-spin');
            } else {
                audio.pause();
                btn.classList.remove('animate-spin');
            }
        }

        function copyToClipboard(text) {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showToast('Berhasil disalin ke papan klip!');
                }).catch(err => {
                    fallbackCopyTextToClipboard(text);
                });
            } else {
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
                    showToast('Berhasil disalin ke papan klip!');
                }
            } catch (err) {
                console.error('Copy failed', err);
            }
            document.body.removeChild(textArea);
        }

        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-10 left-1/2 transform -translate-x-1/2 glass-effect px-6 py-3 rounded-full text-[#78350f] font-bold z-[200] animate-bounce';
            toast.innerText = message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.classList.remove('animate-bounce');
                toast.style.opacity = '0';
                toast.style.transition = 'opacity 0.5s ease-out';
                setTimeout(() => document.body.removeChild(toast), 500);
            }, 3000);
        }

        // Countdown logic
        @if($invitation->wedding_date)
            const weddingDate = new Date("{{ $invitation->wedding_date->format('Y-m-d H:i:s') }}").getTime();
        @else
            const weddingDate = new Date("2026-12-30 00:00:00").getTime();
        @endif

        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (document.getElementById("days")) {
                document.getElementById("days").innerText = days.toString().padStart(2, '0');
                document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
                document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
                document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
            }

            if (distance < 0) {
                clearInterval(countdownInterval);
            }
        }, 1000);
    </script>
</body>

</html>