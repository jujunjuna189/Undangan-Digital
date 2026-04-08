<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden bg-[#f5efe6]">

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
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Great+Vibes&family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            /* Royal Javanese Palette */
            --java-espresso: #21130d;
            --java-gold-gradient: linear-gradient(135deg, #bf953f 0%, #fcf6ba 45%, #b38728 70%, #fbf5b7 100%);
            --java-gold: #c5a059;
            --java-cream: #faf9f6;
            --java-accent: #ffd700;
            --java-dark: #0a0503;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: var(--java-cream);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--java-brown), var(--java-gold));
            border-radius: 10px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5efe6;
            color: #1a1a1a;
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }

        /* Grain Noise Overlay */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            opacity: 0.02;
            pointer-events: none;
            z-index: 9999;
        }

        .font-decorative {
            font-family: 'Cinzel Decorative', cursive;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .font-script {
            font-family: 'Great Vibes', cursive;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
        }

        .premium-border {
            border: 2px solid;
            border-image: var(--java-gold-gradient) 1;
        }

        .gold-glow {
            text-shadow: 0 0 10px rgba(191, 149, 63, 0.6);
        }

        .bg-batik {
            background-image: url("{{ asset('assets/image/theme-6-bg.png') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        @keyframes float-reverse {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(15px); }
        }

        .animate-float-reverse {
            animation: float-reverse 6s ease-in-out infinite;
        }

        @keyframes pulse-gold {
            0% { box-shadow: 0 0 0 0 rgba(198, 167, 0, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(198, 167, 0, 0); }
            100% { box-shadow: 0 0 0 0 rgba(198, 167, 0, 0); }
        }

        .pulse-gold {
            animation: pulse-gold 2s infinite;
        }

        .btn-premium {
            background: linear-gradient(135deg, var(--java-brown), var(--java-dark));
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid var(--java-gold);
        }

        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(198, 167, 0, 0.3);
            background: linear-gradient(135deg, var(--java-gold), var(--java-brown));
        }

        .wayang-corner-tl {
            position: absolute;
            top: 0;
            left: 0;
            width: 150px;
            height: 150px;
            background-image: url("{{ asset('assets/image/theme-6-floral-corner.png') }}");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.3;
            z-index: 10;
        }

        .wayang-corner-tr {
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background-image: url("{{ asset('assets/image/theme-6-floral-corner.png') }}");
            background-size: contain;
            background-repeat: no-repeat;
            transform: scaleX(-1);
            opacity: 0.3;
            z-index: 10;
        }

        .wayang-cloud {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='40' viewBox='0 0 80 40'%3E%3Cpath d='M10 20 Q 20 10 30 20 Q 40 30 50 20 Q 60 10 70 20' fill='none' stroke='%233e2723' stroke-width='1.5' opacity='0.1'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            pointer-events: none;
        }

        .java-separator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .java-separator::before,
        .java-separator::after {
            content: '';
            height: 1px;
            flex-grow: 1;
            background: linear-gradient(90deg, transparent, var(--java-gold), transparent);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(197, 160, 89, 0.5);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(197, 160, 89, 0.8);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        /* Floating Nav Bar */
        .bottom-nav {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            background: rgba(62, 39, 35, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 10px 25px;
            display: flex;
            gap: 20px;
            border: 1px solid var(--java-gold);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .nav-link.active, .nav-link:hover {
            color: var(--java-gold);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .section-padding { padding: 4rem 1.5rem; }
            .java-separator { gap: 0.75rem; }
        }

        /* Java Vignette Effect */
        .java-vignette {
            position: relative;
        }
        .java-vignette::after {
            content: "";
            position: absolute;
            inset: 0;
            box-shadow: inset 0 0 150px rgba(27, 0, 0, 0.4);
            pointer-events: none;
            z-index: 1;
        }

        /* Re-style btn-premium for luxury look */
        .btn-premium {
            background: linear-gradient(145deg, var(--java-brown) 0%, #1b0000 100%);
            color: #fff0d1;
            border: 1px solid var(--java-gold);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 700;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn-premium:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(154, 123, 0, 0.3);
            filter: brightness(1.2);
            border-color: #fff0d1;
        }
    </style>
</head>

<body class="antialiased">
    <audio id="bgMusic" loop preload="none">
        <source src="{{ asset($invitation->audio_url ?? 'assets/audio/audio-6.mp3') }}" type="audio/mpeg">
    </audio>

    @yield('content')

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true,
            mirror: false,
            offset: 50,
            easing: 'ease-out-quint',
        });

        function openInvitation() {
            window.scrollTo(0, 0);
            const coverSection = document.getElementById('cover');
            const audio = document.getElementById('bgMusic');
            const mainContent = document.getElementById('main-content');
            const bottomNav = document.getElementById('bottom-nav');
            const fixedFrame = document.getElementById('fixed-frame');
            const wLeft = document.getElementById('fixed-wayang-left');
            const wRight = document.getElementById('fixed-wayang-right');

            if (coverSection) {
                coverSection.style.opacity = '0';
                coverSection.style.transition = 'opacity 1.2s ease-in-out';
                coverSection.style.pointerEvents = 'none';

                if (audio) {
                    audio.volume = 0.6;
                    audio.play().catch(err => console.log("Autoplay blocked by browser"));
                }

                setTimeout(() => {
                    coverSection.style.display = 'none';
                    mainContent.classList.remove('hidden');
                    if(bottomNav) bottomNav.classList.remove('hidden');
                    if(fixedFrame) fixedFrame.classList.remove('hidden');
                    if(wLeft) wLeft.classList.remove('hidden');
                    if(wRight) wRight.classList.remove('hidden');
                    document.body.style.overflowY = 'auto';
                    document.body.style.overflowX = 'hidden';
                    AOS.refresh();
                }, 1200);
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
            navigator.clipboard.writeText(text).then(() => {
                showToast('Berhasil disalin ke papan klip!');
            }).catch(() => {
                const textArea = document.createElement("textarea");
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                showToast('Berhasil disalin ke papan klip!');
            });
        }

        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-24 left-1/2 transform -translate-x-1/2 glass-effect px-8 py-3 rounded-full text-java-brown font-bold z-[200] border border-java-gold shadow-lg transition-all duration-500';
            toast.innerText = message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translate(-50%, 20px)';
                setTimeout(() => document.body.removeChild(toast), 500);
            }, 3000);
        }

        // Countdown
        @if($invitation->wedding_date)
            const weddingDate = new Date("{{ $invitation->wedding_date->format('Y-m-d H:i:s') }}").getTime();
        @else
            const weddingDate = new Date("2026-12-25 00:00:00").getTime();
        @endif

        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            if (distance < 0) {
                clearInterval(countdownInterval);
                return;
            }

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
        }, 1000);
    </script>
</body>

</html>
