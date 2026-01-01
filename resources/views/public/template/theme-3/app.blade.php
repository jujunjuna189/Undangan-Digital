<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Wedding of Juna & Furi</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Scripts (Tailwind CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

<style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-track {
            background: #0F172A;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #BF953F, #AA771C);
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

        /* Royal Gold Typography */
        .text-gold {
            background: linear-gradient(to right, #BF953F 0%, #FCF6BA 25%, #B38728 50%, #FBF5B7 75%, #AA771C 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 200% auto;
            animation: shine 5s linear infinite;
            text-shadow: 0 0 30px rgba(252, 246, 186, 0.2);
        }
        
        .text-gold-simple {
            color: #D4AF37;
        }
        
        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        /* Marble Glass Premium */
        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.15);
        }
        
        .glass-premium {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.7), rgba(15, 23, 42, 0.8));
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-top: 1px solid rgba(212, 175, 55, 0.5);
            box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.7);
            position: relative;
        }
        /* Marble Texture Overlay */
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

        /* Elegant Button */
        .glass-button {
            background: linear-gradient(45deg, rgba(212, 175, 55, 0.1), rgba(0,0,0,0));
            backdrop-filter: blur(8px);
            border: 1px solid rgba(212, 175, 55, 0.4);
            color: #F7E7CE;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .glass-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(252, 246, 186, 0.4), transparent);
            transition: 0.7s;
        }
        .glass-button:hover::after {
            left: 100%;
        }
        .glass-button:hover {
            background: rgba(212, 175, 55, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(212, 175, 55, 0.3);
            border-color: rgba(212, 175, 55, 0.8);
            color: #fff;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        @keyframes pulse-gold {
            0%, 100% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.2); }
            70% { box-shadow: 0 0 0 15px rgba(212, 175, 55, 0); }
        }
        .animate-pulse-gold {
            animation: pulse-gold 4s infinite;
        }
        
        @keyframes dust {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            50% { opacity: 0.5; }
            100% { transform: translateY(-120px) rotate(180deg); opacity: 0; }
        }
        
        .font-pinyon { font-family: 'Pinyon Script', cursive; }
        .font-playfair { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="antialiased font-[Plus_Jakarta_Sans] text-slate-800">
    
    @yield('content')

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true,
            offset: 100
        });
    </script>
</body>
</html>
