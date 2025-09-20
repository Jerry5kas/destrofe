<!DOCTYPE html>
<html lang="en" x-data="{ navOpen: false, scrolled: false }"
      x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
      class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DestroSolutions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Optimized Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Futuristic gradient text */
        .gradient-text {
            background: linear-gradient(to right, #3b82f6, #06b6d4, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Typing animation */
        .typing::after {
            content: "|";
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 50% {
                opacity: 1;
            }
            51%, 100% {
                opacity: 0;
            }
        }

        /* Scroll animation */
        .animate-show {
            opacity: 1 !important;
            transform: translateY(0) !important;
            transition: all 0.9s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced hover effects */
        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.5);
            transition: box-shadow 0.3s ease;
        }

        /* Floating animation */
        .float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Pulse glow effect */
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite alternate;
        }

        @keyframes pulseGlow {
            from {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
            }
            to {
                box-shadow: 0 0 40px rgba(59, 130, 246, 0.8);
            }
        }

        /* Gradient text animation */
        .gradient-text-animated {
            background: linear-gradient(-45deg, #3b82f6, #06b6d4, #8b5cf6, #ec4899);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Matrix-style background animation */
        .matrix-bg {
            position: relative;
            overflow: hidden;
        }

        .matrix-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent 0%, rgba(59, 130, 246, 0.1) 50%, transparent 100%);
            animation: matrixScan 3s linear infinite;
            pointer-events: none;
        }

        @keyframes matrixScan {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Neon border animation */
        .neon-border {
            position: relative;
            border: 2px solid transparent;
            background: linear-gradient(45deg, #1e293b, #334155) padding-box,
                        linear-gradient(45deg, #3b82f6, #06b6d4, #8b5cf6, #ec4899) border-box;
            background-size: 400% 400%;
            animation: neonPulse 4s ease infinite;
        }

        @keyframes neonPulse {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        /* Glitch effect */
        .glitch {
            position: relative;
            animation: glitch 2s infinite;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            animation: glitch-1 0.5s infinite;
            color: #ff0000;
            z-index: -1;
        }

        .glitch::after {
            animation: glitch-2 0.5s infinite;
            color: #00ff00;
            z-index: -2;
        }

        @keyframes glitch {
            0%, 100% {
                transform: translate(0);
            }
            20% {
                transform: translate(-2px, 2px);
            }
            40% {
                transform: translate(-2px, -2px);
            }
            60% {
                transform: translate(2px, 2px);
            }
            80% {
                transform: translate(2px, -2px);
            }
        }

        @keyframes glitch-1 {
            0%, 100% {
                transform: translate(0);
            }
            20% {
                transform: translate(2px, -2px);
            }
            40% {
                transform: translate(-2px, 2px);
            }
            60% {
                transform: translate(-2px, -2px);
            }
            80% {
                transform: translate(2px, 2px);
            }
        }

        @keyframes glitch-2 {
            0%, 100% {
                transform: translate(0);
            }
            20% {
                transform: translate(-2px, 2px);
            }
            40% {
                transform: translate(2px, -2px);
            }
            60% {
                transform: translate(2px, 2px);
            }
            80% {
                transform: translate(-2px, -2px);
            }
        }

        /* Holographic effect */
        .holographic {
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff, #06ffa5);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: holographicShift 3s ease infinite;
            filter: drop-shadow(0 0 10px rgba(255, 0, 110, 0.5));
        }

        @keyframes holographicShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            25% {
                background-position: 100% 50%;
            }
            50% {
                background-position: 100% 100%;
            }
            75% {
                background-position: 0% 100%;
            }
        }

        /* Particle trail effect */
        .particle-trail {
            position: relative;
            overflow: hidden;
        }

        .particle-trail::after {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            width: 4px;
            height: 4px;
            background: #3b82f6;
            border-radius: 50%;
            box-shadow: 0 0 10px #3b82f6;
            animation: particleMove 2s linear infinite;
        }

        @keyframes particleMove {
            0% {
                left: -10px;
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                left: 100%;
                opacity: 0;
            }
        }

        /* Data Flow Dots */
        .dot-cyan, .dot-indigo {
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.9;
            box-shadow: 0 0 6px currentColor;
        }

        /* Car → Cloud (cyan) */
        .dot-cyan {
            background-color: #22d3ee; /* cyan-400 */
            color: #22d3ee;
            animation: move-right 2s linear infinite;
        }

        /* Cloud → Car (indigo) */
        .dot-indigo {
            background-color: #6366f1; /* indigo-500 */
            color: #6366f1;
            animation: move-left 2s linear infinite;
        }

        /* Keyframes */
        @keyframes move-right {
            0% {
                left: 0%;
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                left: 100%;
                opacity: 0;
            }
        }

        @keyframes move-left {
            0% {
                left: 100%;
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                left: 0%;
                opacity: 0;
            }
        }

        /* Delay helpers */
        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-600 {
            animation-delay: 0.6s;
        }

        /* Responsive enhancements */
        @media (max-width: 768px) {
            .gradient-text-animated {
                font-size: 2.5rem;
            }

            .float {
                animation-duration: 4s;
            }

            .pulse-glow {
                animation-duration: 1.5s;
            }

            .neon-border {
                border-width: 1px;
            }
        }

        /* Performance optimizations */
        .will-change-transform {
            will-change: transform;
        }

        .will-change-opacity {
            will-change: opacity;
        }

        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            .float,
            .pulse-glow,
            .gradient-text-animated,
            .holographic,
            .neon-border {
                animation: none;
            }

            .animate-show {
                transition: opacity 0.3s ease;
            }
        }

        /* Font Classes */
        .font-logo {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            letter-spacing: 0.02em;
        }

        .font-hero {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        .font-title {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        .font-content {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            line-height: 1.6;
        }

        .font-button {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }

        /* Clean Animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-in-up.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .stagger-1 { transition-delay: 0.1s; }
        .stagger-2 { transition-delay: 0.2s; }
        .stagger-3 { transition-delay: 0.3s; }
        .stagger-4 { transition-delay: 0.4s; }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Go to Top Button */
        .go-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
        }

        .go-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .go-to-top:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(59, 130, 246, 0.4);
        }

        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: rgba(59, 130, 246, 0.1);
            border: 2px solid rgba(59, 130, 246, 0.3);
            border-radius: 50%;
            color: #3b82f6;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .theme-toggle:hover {
            background: rgba(59, 130, 246, 0.2);
            border-color: rgba(59, 130, 246, 0.5);
            transform: scale(1.05);
        }

        /* Dark Theme Variables (Default) */
        :root {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-tertiary: #334155;
            --bg-quaternary: #475569;
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0;
            --text-tertiary: #94a3b8;
            --text-quaternary: #64748b;
            --accent-primary: #3b82f6;
            --accent-secondary: #06b6d4;
            --accent-tertiary: #8b5cf6;
            --border-primary: #374151;
            --border-secondary: #4b5563;
            --border-tertiary: #6b7280;
            --shadow-primary: rgba(0, 0, 0, 0.3);
            --shadow-secondary: rgba(0, 0, 0, 0.1);
            --overlay-primary: rgba(0, 0, 0, 0.7);
            --overlay-secondary: rgba(0, 0, 0, 0.5);
        }

        /* Light Theme */
        [data-theme="light"] {
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            --bg-quaternary: #e2e8f0;
            --text-primary: #0f172a;
            --text-secondary: #1e293b;
            --text-tertiary: #475569;
            --text-quaternary: #64748b;
            --accent-primary: #2563eb;
            --accent-secondary: #0891b2;
            --accent-tertiary: #7c3aed;
            --border-primary: #e2e8f0;
            --border-secondary: #cbd5e1;
            --border-tertiary: #94a3b8;
            --shadow-primary: rgba(0, 0, 0, 0.1);
            --shadow-secondary: rgba(0, 0, 0, 0.05);
            --overlay-primary: rgba(255, 255, 255, 0.8);
            --overlay-secondary: rgba(255, 255, 255, 0.6);
        }

        /* Apply theme variables */
        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Theme Utility Classes */
        .theme-bg-primary { background-color: var(--bg-primary); }
        .theme-bg-secondary { background-color: var(--bg-secondary); }
        .theme-bg-tertiary { background-color: var(--bg-tertiary); }
        .theme-bg-quaternary { background-color: var(--bg-quaternary); }
        .theme-text-primary { color: var(--text-primary); }
        .theme-text-secondary { color: var(--text-secondary); }
        .theme-text-tertiary { color: var(--text-tertiary); }
        .theme-text-quaternary { color: var(--text-quaternary); }
        .theme-border-primary { border-color: var(--border-primary); }
        .theme-border-secondary { border-color: var(--border-secondary); }
        .theme-border-tertiary { border-color: var(--border-tertiary); }
        .theme-shadow-primary { box-shadow: 0 4px 6px -1px var(--shadow-primary); }
        .theme-shadow-secondary { box-shadow: 0 1px 3px 0 var(--shadow-secondary); }
        .theme-overlay-primary { background: var(--overlay-primary); }
        .theme-overlay-secondary { background: var(--overlay-secondary); }

        /* Theme-aware gradient backgrounds */
        .theme-gradient-primary {
            background: linear-gradient(135deg, var(--bg-secondary), var(--bg-tertiary));
        }

        .theme-gradient-secondary {
            background: linear-gradient(135deg, var(--bg-tertiary), var(--bg-quaternary));
        }

        /* Theme-aware card styles */
        .theme-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-primary);
            color: var(--text-primary);
            transition: all 0.3s ease;
        }

        .theme-card:hover {
            background: var(--bg-tertiary);
            border-color: var(--accent-primary);
            box-shadow: 0 8px 25px var(--shadow-primary);
        }

        /* Hero Background with GIF */
        .hero-bg {
            position: relative;
            overflow: hidden;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,
                rgba(59, 130, 246, 0.1) 0%,
                rgba(6, 182, 212, 0.1) 50%,
                rgba(139, 92, 246, 0.1) 100%);
            animation: gradientShift 8s ease infinite;
            z-index: -1;
        }

        .hero-gif {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.3;
            z-index: -2;
        }
    </style>
</head>
<body class="font-sans antialiased">
<!-- 🔹 Futuristic Particle Background -->
<svg class="fixed inset-0 w-full h-full -z-10 opacity-20 pointer-events-none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
    <defs>
        <radialGradient id="glow" cx="50%" cy="50%" r="50%">
            <stop offset="0%" stop-color="#3b82f6" stop-opacity="1"/>
            <stop offset="100%" stop-color="#06b6d4" stop-opacity="0"/>
        </radialGradient>
    </defs>

    <!-- Node 1 -->
    <circle cx="10%" cy="20%" r="6" fill="url(#glow)">
        <animate attributeName="r" values="4;6;4" dur="6s" repeatCount="indefinite"/>
        <animateTransform attributeName="transform" type="translate" values="0,0; 20,10; 0,0" dur="12s" repeatCount="indefinite"/>
    </circle>

    <!-- Node 2 -->
    <circle cx="80%" cy="30%" r="5" fill="url(#glow)">
        <animate attributeName="r" values="3;5;3" dur="5s" repeatCount="indefinite"/>
        <animateTransform attributeName="transform" type="translate" values="0,0; -15,10; 0,0" dur="14s" repeatCount="indefinite"/>
    </circle>

    <!-- Node 3 -->
    <circle cx="40%" cy="70%" r="7" fill="url(#glow)">
        <animate attributeName="r" values="5;7;5" dur="7s" repeatCount="indefinite"/>
        <animateTransform attributeName="transform" type="translate" values="0,0; 10,-15; 0,0" dur="16s" repeatCount="indefinite"/>
    </circle>

    <!-- Node 4 -->
    <circle cx="65%" cy="85%" r="4" fill="url(#glow)">
        <animate attributeName="r" values="3;4;3" dur="4s" repeatCount="indefinite"/>
        <animateTransform attributeName="transform" type="translate" values="0,0; -10,-20; 0,0" dur="18s" repeatCount="indefinite"/>
    </circle>

    <!-- Connecting Lines -->
    <line x1="10%" y1="20%" x2="80%" y2="30%" stroke="#06b6d4" stroke-width="1" stroke-opacity="0.3">
        <animate attributeName="stroke-opacity" values="0.2;0.6;0.2" dur="8s" repeatCount="indefinite"/>
    </line>
    <line x1="40%" y1="70%" x2="65%" y2="85%" stroke="#3b82f6" stroke-width="1" stroke-opacity="0.3">
        <animate attributeName="stroke-opacity" values="0.2;0.7;0.2" dur="6s" repeatCount="indefinite"/>
    </line>
    <line x1="80%" y1="30%" x2="40%" y2="70%" stroke="#8b5cf6" stroke-width="1" stroke-opacity="0.3">
        <animate attributeName="stroke-opacity" values="0.2;0.8;0.2" dur="10s" repeatCount="indefinite"/>
    </line>
</svg>

<!-- 🔹 Navbar -->
<header
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500"
    :class="scrolled ? 'theme-bg-secondary backdrop-blur-md theme-shadow-primary' : 'bg-transparent'">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
        <!-- Logo -->
        <a href="#home" class="text-2xl font-logo theme-text-primary hover:text-blue-400 transition-colors duration-300">DestroSolutions</a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="#home" class="theme-text-secondary hover:text-blue-400 transition">Home</a>
            <a href="#about" class="theme-text-secondary hover:text-blue-400 transition">About</a>
            <a href="#products" class="theme-text-secondary hover:text-blue-400 transition">Products</a>
            <a href="#services" class="theme-text-secondary hover:text-blue-400 transition">Services</a>
            <a href="#contact" class="theme-text-secondary hover:text-blue-400 transition">Contact</a>
        </nav>

        <!-- CTA -->
        <a href="#contact"
           class="hidden md:inline-block px-5 py-2 bg-gradient-to-r from-blue-500 to-indigo-600
                hover:from-indigo-600 hover:to-blue-500 rounded-xl shadow-lg transition-transform transform hover:scale-105">
            Contact Us
        </a>

        <!-- Mobile Menu Button -->
        <button @click="navOpen = !navOpen" class="md:hidden focus:outline-none relative z-50">
            <!-- Hamburger -->
            <svg x-show="!navOpen" x-cloak xmlns="http://www.w3.org/2000/svg"
                 class="h-7 w-7 theme-text-primary transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <!-- Close -->
            <svg x-show="navOpen" x-cloak xmlns="http://www.w3.org/2000/svg"
                 class="h-7 w-7 theme-text-primary transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="navOpen" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         class="md:hidden theme-bg-secondary backdrop-blur-lg theme-shadow-primary">
        <nav class="flex flex-col px-6 py-6 space-y-4 text-lg">
            <a href="#home" class="theme-text-secondary hover:text-blue-400 transition">Home</a>
            <a href="#about" class="theme-text-secondary hover:text-blue-400 transition">About</a>
            <a href="#products" class="theme-text-secondary hover:text-blue-400 transition">Products</a>
            <a href="#services" class="theme-text-secondary hover:text-blue-400 transition">Services</a>
            <a href="#contact" class="theme-text-secondary hover:text-blue-400 transition">Contact</a>
        </nav>
    </div>
</header>

<!-- Theme Toggle Button -->
<button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
    <svg id="sun-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
    </svg>
    <svg id="moon-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
    </svg>
</button>


<!-- 🔹 Hero -->
<section id="home" class="relative h-screen flex items-center justify-center overflow-hidden hero-bg">
    <div class="absolute inset-0">
        <!-- Automobile GIF Background -->
        <img src="https://media.giphy.com/media/3o7TKSjRrfIPjeiVyU/giphy.gif" alt="Automotive Technology" class="hero-gif">
        <!-- Fallback static image -->
        <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?auto=format&fit=crop&w=1920&q=80" alt="Futuristic City" class="w-full h-full object-cover" style="display: none;">
        <div class="absolute inset-0 theme-overlay-primary"></div>
    </div>
    <!-- Car ↔ Cloud Data Flow -->
    <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex items-center space-x-12 opacity-95">
        <div class="w-16 h-16 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 32" class="w-14 h-14 text-blue-500 fill-current"><path d="M4 20c0-4 2-8 6-10l8-6h20l8 6c4 2 6 6 6 10v6h-4a4 4 0 11-8 0H16a4 4 0 11-8 0H4v-6z"/></svg>
        </div>
        <div class="relative w-40 h-6 overflow-hidden">
            <div class="absolute top-1/2 left-0 w-full h-[2px] -translate-y-1/2 bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 blur-sm opacity-70 animate-pulse"></div>
            <div class="absolute inset-0 flex items-center">
                <span class="dot-cyan"></span>
                <span class="dot-cyan delay-200"></span>
                <span class="dot-cyan delay-400"></span>
            </div>
            <div class="absolute inset-0 flex items-center">
                <span class="dot-indigo"></span>
                <span class="dot-indigo delay-300"></span>
                <span class="dot-indigo delay-600"></span>
            </div>
        </div>
        <div class="w-16 h-16 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 40" class="w-14 h-14 text-indigo-400 fill-current"><path d="M48 24a8 8 0 00-7.75-8A12 12 0 0028 8a11.96 11.96 0 00-10.39 6.1A8 8 0 0012 32h36a8 8 0 000-16z"/></svg>
        </div>
    </div>
    <div class="relative z-10 text-center max-w-5xl px-4">
        <div class="fade-in-up stagger-1">
            <h1 class="text-5xl md:text-8xl font-hero leading-tight theme-text-primary mb-8">
                Bringing SDV to Life
            </h1>
        </div>

        <div class="fade-in-up stagger-2">
            <p class="text-xl md:text-2xl font-content theme-text-secondary leading-relaxed max-w-4xl mx-auto mb-6">
                Innovative products, services and training for the Software-Defined Vehicle Era.
            </p>
        </div>

        <div class="fade-in-up stagger-3">
            <p class="text-lg font-content theme-text-tertiary max-w-3xl mx-auto mb-12">
                Driving the future of mobility with secure, compliant, and intelligent automotive solutions
            </p>
        </div>

        <!-- Enhanced CTA Buttons -->
        <div class="fade-in-up stagger-4 flex flex-col sm:flex-row justify-center gap-6">
            <a href="#contact"
               class="px-8 py-4 bg-blue-600 hover:bg-blue-700 theme-text-primary font-button font-semibold
                  rounded-xl shadow-lg transition-all duration-300 hover:shadow-xl">
                Get In Touch
            </a>
            <a href="#about"
               class="px-8 py-4 border-2 border-gray-400 hover:border-blue-400 hover:bg-blue-400/10
                  theme-text-secondary hover:theme-text-primary rounded-xl shadow-lg transition-all duration-300 font-button">
                Explore Solutions
            </a>
        </div>
    </div>
</section>

<!-- 🔹 About Us -->
<section id="about" class="relative py-24 theme-bg-primary matrix-bg">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="fade-in-up stagger-1">
                <h2 class="text-4xl md:text-6xl font-title theme-text-primary mb-8">
                    About DestroSolutions
                </h2>
            </div>
            <div class="fade-in-up stagger-2">
                <p class="text-xl font-content theme-text-secondary leading-relaxed max-w-5xl mx-auto">
                    At DestroSolutions, we enable the future of mobility by driving the transition
                    to <span class="text-blue-400 font-semibold">Software-Defined Vehicles (SDVs)</span>.
                    Our expertise spans end-to-end automotive cybersecurity, software update management,
                    functional safety, and E/E architecture transformation. Our commitment to Safety &
                    security standards and expert training positions us as a trusted partner in delivering
                    tomorrow's mobility—today.
                </p>
            </div>
        </div>

        <!-- Four Key Pillars -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="fade-in-up stagger-1 p-8 rounded-2xl theme-card backdrop-blur-lg hover:border-blue-500/50 transition-all duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-blue-600 flex items-center justify-center">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-title theme-text-primary mb-4">End To End Security</h3>
                    <p class="theme-text-tertiary text-sm leading-relaxed font-content">
                        Secure-by-design solutions across the full vehicle lifecycle—from development to decommissioning.
                    </p>
                </div>
            </div>

            <div class="fade-in-up stagger-2 p-8 rounded-2xl theme-card backdrop-blur-lg hover:border-indigo-500/50 transition-all duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-indigo-600 flex items-center justify-center">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-title theme-text-primary mb-4">Standards-Aligned Engineering</h3>
                    <p class="theme-text-tertiary text-sm leading-relaxed font-content">
                        Built to meet ASPICE, AUTOSAR, CSMS, SUMS, FuSa & SOTIF standards.
                    </p>
                </div>
            </div>

            <div class="fade-in-up stagger-3 p-8 rounded-2xl theme-card backdrop-blur-lg hover:border-cyan-500/50 transition-all duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-cyan-600 flex items-center justify-center">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-title theme-text-primary mb-4">Expert Training & Consulting</h3>
                    <p class="theme-text-tertiary text-sm leading-relaxed font-content">
                        Upskill your team skills and expertise to drive innovation in the SDV ERA.
                    </p>
                </div>
            </div>

            <div class="fade-in-up stagger-4 p-8 rounded-2xl theme-card backdrop-blur-lg hover:border-purple-500/50 transition-all duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-purple-600 flex items-center justify-center">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-title theme-text-primary mb-4">Accelerating the SDV Shift</h3>
                    <p class="theme-text-tertiary text-sm leading-relaxed font-content">
                        Pioneering Software-Defined Vehicle (SDV) transformations with E/E Systems, OTA.
                    </p>
                </div>
            </div>
        </div>

        <!-- Enhanced Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6" x-data>
            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-6 rounded-xl theme-card
                     backdrop-blur-lg border border-blue-500/30 text-center hover:border-blue-400/60
                     transition-all duration-500 hover:scale-105">
                <h3 class="text-4xl font-bold text-blue-400 mb-2 group-hover:scale-110 transition-transform">50+</h3>
                <p class="theme-text-quaternary font-medium">Successful Deployments</p>
            </div>
            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-6 rounded-xl theme-card
                    backdrop-blur-lg border border-indigo-500/30 text-center hover:border-indigo-400/60
                    transition-all duration-500 hover:scale-105">
                <h3 class="text-4xl font-bold text-indigo-400 mb-2 group-hover:scale-110 transition-transform">100%</h3>
                <p class="theme-text-quaternary font-medium">Security Compliance</p>
            </div>
            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-6 rounded-xl theme-card
                    backdrop-blur-lg border border-cyan-500/30 text-center hover:border-cyan-400/60
                    transition-all duration-500 hover:scale-105">
                <h3 class="text-4xl font-bold text-cyan-400 mb-2 group-hover:scale-110 transition-transform">100+</h3>
                <p class="theme-text-quaternary font-medium">Expert Man Years</p>
            </div>
            <div x-scroll data-delay="600"
                 class="group opacity-0 translate-y-10 p-6 rounded-xl theme-card
                    backdrop-blur-lg border border-purple-500/30 text-center hover:border-purple-400/60
                    transition-all duration-500 hover:scale-105">
                <h3 class="text-4xl font-bold text-purple-400 mb-2 group-hover:scale-110 transition-transform">∞</h3>
                <p class="theme-text-quaternary font-medium">Future-Ready Innovation</p>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Products -->
<section id="products" class="relative py-24 theme-gradient-primary">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16" x-data x-scroll>
{{--        <div class="text-center mb-16">--}}
            <h2 class="text-4xl md:text-5xl font-extrabold gradient-text mb-6 translate-y-10">
                Our Products
            </h2>
            <p class="text-xl theme-text-secondary leading-relaxed max-w-4xl mx-auto translate-y-10">
                DestroSolutions delivers a robust portfolio of products engineered for the Software-Defined Vehicle era.
                Designed for security, compliance, and performance, our solutions seamlessly integrate into modern E/E
                architectures while aligning with global automotive standards.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" x-data>
            <!-- Automator AI -->
            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                     backdrop-blur-lg rounded-2xl border border-blue-500/30 hover:border-blue-400/60
                     transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 neon-border">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-400 mb-4">Automator AI</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Automator lets OEMs use automation policies to instantly create new vehicle functions
                    </p>
                </div>
            </div>

            <!-- IDPS -->
            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-red-500/30 hover:border-red-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-red-400 mb-4">IDPS</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Intrusion Detection and Prevention System continuously monitors in-vehicle networks
                        and prevent Cyber attacks today and Quantum Era
                    </p>
                </div>
            </div>

            <!-- AI Data Collector -->
            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-green-500/30 hover:border-green-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-green-500 to-emerald-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-400 mb-4">AI Data Collector</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Data acquisition and analytics tool that Collects & Process data for Vehicle
                        Performance with integrated FIR
                    </p>
                </div>
            </div>

            <!-- SBOM -->
            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-yellow-500/30 hover:border-yellow-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-yellow-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-yellow-500 to-orange-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">SBOM</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Software Bill of Materials ensures Visibility, Security, Compliance across your Supply chain
                    </p>
                </div>
            </div>

            <!-- vSOC -->
            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-purple-500/30 hover:border-purple-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-400 mb-4">vSOC</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Vehicle Security Operation Center is a centralized hub for monitoring, detecting,
                        and responding to cyber threats across Fleet
                    </p>
                </div>
            </div>

            <!-- OTA Updater -->
            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-cyan-500/30 hover:border-cyan-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-cyan-500 to-blue-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-cyan-400 mb-4">OTA Updater</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        OTA Updater enables secure over-the-air software updates, with end-to-end Traceability
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Services -->
<section id="services" class="relative py-24 theme-gradient-secondary">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16" x-data x-scroll>
            <h2 class="text-4xl md:text-5xl font-extrabold gradient-text mb-6 translate-y-10">
                Our Services
            </h2>
            <p class="text-xl theme-text-tertiary leading-relaxed max-w-4xl mx-auto translate-y-10">
                At DestroSolutions, we provide expert consulting and engineering services to support OEMs and
                Tier-1 suppliers in delivering secure, compliant, and future-ready vehicle platforms.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" x-data>
            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-blue-500/30 hover:border-blue-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-400 mb-4">Cybersecurity Management Systems</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Comprehensive security frameworks and management systems for automotive cybersecurity compliance.
                    </p>
                </div>
            </div>

            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-red-500/30 hover:border-red-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-red-400 mb-4">Functional Safety</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Expert guidance in functional safety standards and implementation for automotive systems.
                    </p>
                </div>
            </div>

            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-green-500/30 hover:border-green-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-green-500 to-emerald-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-400 mb-4">Software Update Management Systems</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Secure and reliable OTA update management systems for vehicle software lifecycle.
                    </p>
                </div>
            </div>

            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-purple-500/30 hover:border-purple-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-400 mb-4">ASPICE</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Automotive SPICE process improvement and assessment services for development excellence.
                    </p>
                </div>
            </div>

            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-cyan-500/30 hover:border-cyan-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-cyan-500 to-blue-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-cyan-400 mb-4">AUTOSAR</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        AUTOSAR architecture implementation and migration services for automotive software standardization.
                    </p>
                </div>
            </div>

            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-8 theme-card
                    backdrop-blur-lg rounded-2xl border border-yellow-500/30 hover:border-yellow-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-yellow-500/20">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-br from-yellow-500 to-orange-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">Expert Training & Consulting</h3>
                    <p class="theme-text-tertiary leading-relaxed">
                        Comprehensive training programs and expert consulting for automotive software development teams.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 SDV Solutions -->
<section id="sdv-solutions" class="relative py-24 theme-gradient-primary">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16" x-data x-scroll>
            <h2 class="text-4xl md:text-5xl font-extrabold gradient-text mb-6 translate-y-10">
                Our Software-defined Vehicle (SDV) solutions
            </h2>
            <p class="text-xl theme-text-tertiary leading-relaxed max-w-5xl mx-auto translate-y-10">
                Driving the shift towards Software-Defined Vehicles (SDVs). DestroSolutions offers a comprehensive suite of
                SDV-focused solutions—spanning cloud, edge, in-vehicle systems, and the complete DevSecOps lifecycle—to enable
                next-generation mobility. We support OEMs and Tier-1s in building modular, scalable, and secure SDV platforms.
            </p>
        </div>

        <!-- SDV Solutions Grid -->
        <div class="grid lg:grid-cols-2 gap-12" x-data>
            <!-- SDV Cloud -->
            <div x-scroll data-delay="0"
                 class="group opacity-0 translate-y-10 p-10 theme-card
                    backdrop-blur-lg rounded-3xl border border-blue-500/30 hover:border-blue-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 particle-trail">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-blue-400 mb-6">SDV Cloud</h3>
                    <div class="space-y-4 text-left">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-400 mt-2 flex-shrink-0"></div>
                            <p class="theme-text-tertiary">SDV Orchestrator Platform</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-400 mt-2 flex-shrink-0"></div>
                            <p class="theme-text-tertiary">Vehicle Software Update Platform & Digital Vehicle Twin</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-400 mt-2 flex-shrink-0"></div>
                            <p class="theme-text-tertiary">Subscription Management Platform</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-400 mt-2 flex-shrink-0"></div>
                            <p class="theme-text-tertiary">Virtual Workbenches for Simulations and DevOps</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Over-the-Air (OTA) -->
            <div x-scroll data-delay="200"
                 class="group opacity-0 translate-y-10 p-10 theme-card
                    backdrop-blur-lg rounded-3xl border border-green-500/30 hover:border-green-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-green-500 to-emerald-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-green-400 mb-6">Over-the-Air (OTA)</h3>
                    <p class="theme-text-tertiary leading-relaxed text-lg">
                        Over-the-Air updates are essential for modern automotive software. We provide secure and efficient
                        OTA strategies that reduce recall costs and keep vehicles at peak performance.
                    </p>
                </div>
            </div>

            <!-- Apps and Services Engineering -->
            <div x-scroll data-delay="400"
                 class="group opacity-0 translate-y-10 p-10 theme-card
                    backdrop-blur-lg rounded-3xl border border-purple-500/30 hover:border-purple-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-purple-500 to-pink-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-purple-400 mb-6">Apps and Services Engineering</h3>
                    <p class="theme-text-tertiary leading-relaxed text-lg">
                        Create infotainment apps, driver-assist tools, and cloud-based services that enrich the driving experience.
                        We cover development from embedded systems to backend services.
                    </p>
                </div>
            </div>

            <!-- SDV OPS -->
            <div x-scroll data-delay="600"
                 class="group opacity-0 translate-y-10 p-10 theme-card
                    backdrop-blur-lg rounded-3xl border border-cyan-500/30 hover:border-cyan-400/60
                    transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-cyan-500 to-blue-400
                               flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-cyan-400 mb-6">SDV OPS</h3>
                    <p class="theme-text-tertiary leading-relaxed text-lg">
                        Optimize operations for Software-Defined Vehicles with automated pipelines, continuous monitoring,
                        and quick incident response.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Contact -->
<section id="contact" class="relative py-24 theme-gradient-secondary">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16" x-data x-scroll>
            <h2 class="text-4xl md:text-5xl font-extrabold gradient-text mb-6 translate-y-10">
                Contact Us
            </h2>
            <p class="text-xl theme-text-tertiary leading-relaxed max-w-4xl mx-auto translate-y-10">
                Ready to redefine your automotive and cybersecurity journey? We're here to help. Reach out to us for
                consultations, product inquiries, or partnership opportunities.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start" x-data>
            <!-- Contact Information -->
            <div x-scroll data-delay="0" class="opacity-0 translate-y-10">
                <div class="space-y-8">
                    <div class="p-6 theme-card backdrop-blur-lg rounded-2xl border border-blue-500/30">
                        <h3 class="text-2xl font-bold text-blue-400 mb-4">Get In Touch</h3>
                        <p class="theme-text-tertiary leading-relaxed mb-6">
                            Our expert team is ready to help you navigate the Software-Defined Vehicle landscape.
                            Whether you need consulting, training, or product implementation, we're here to support your success.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center">
                                    <svg class="w-6 h-6 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="theme-text-primary font-semibold">Email Us</p>
                                    <p class="theme-text-quaternary">info@destrosolutions.com</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500 to-emerald-400 flex items-center justify-center">
                                    <svg class="w-6 h-6 theme-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="theme-text-primary font-semibold">Call Us</p>
                                    <p class="theme-text-quaternary">+49 (0) 123 456 789</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 theme-card backdrop-blur-lg rounded-2xl border border-purple-500/30">
                        <h3 class="text-2xl font-bold text-purple-400 mb-4">Why Choose DestroSolutions?</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <div class="w-2 h-2 rounded-full bg-purple-400 mt-2 flex-shrink-0"></div>
                                <p class="theme-text-tertiary">Expert automotive cybersecurity knowledge</p>
                            </li>
                            <li class="flex items-start space-x-3">
                                <div class="w-2 h-2 rounded-full bg-purple-400 mt-2 flex-shrink-0"></div>
                                <p class="theme-text-tertiary">Standards-compliant solutions (ASPICE, AUTOSAR, ISO 21434)</p>
                            </li>
                            <li class="flex items-start space-x-3">
                                <div class="w-2 h-2 rounded-full bg-purple-400 mt-2 flex-shrink-0"></div>
                                <p class="theme-text-tertiary">Proven track record in SDV transformation</p>
                            </li>
                            <li class="flex items-start space-x-3">
                                <div class="w-2 h-2 rounded-full bg-purple-400 mt-2 flex-shrink-0"></div>
                                <p class="theme-text-tertiary">Comprehensive training and support programs</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div x-scroll data-delay="200" class="opacity-0 translate-y-10">
                <div class="p-8 theme-card backdrop-blur-lg rounded-2xl border border-cyan-500/30">
                    <h3 class="text-2xl font-bold text-cyan-400 mb-6">Send us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Your Name" required
                                   class="p-4 rounded-xl theme-bg-tertiary border theme-border-primary focus:border-cyan-500
                                          outline-none transition-colors duration-300 theme-text-primary placeholder-gray-400">
                            <input type="email" placeholder="Your Email" required
                                   class="p-4 rounded-xl theme-bg-tertiary border theme-border-primary focus:border-cyan-500
                                          outline-none transition-colors duration-300 theme-text-primary placeholder-gray-400">
                        </div>
                        <input type="text" placeholder="Company/Organization"
                               class="w-full p-4 rounded-xl theme-bg-tertiary border theme-border-primary focus:border-cyan-500
                                      outline-none transition-colors duration-300 theme-text-primary placeholder-gray-400">
                        <select class="w-full p-4 rounded-xl theme-bg-tertiary border theme-border-primary focus:border-cyan-500
                                     outline-none transition-colors duration-300 theme-text-primary">
                            <option value="" class="bg-gray-900">Select Service Interest</option>
                            <option value="cybersecurity" class="bg-gray-900">Cybersecurity Management</option>
                            <option value="functional-safety" class="bg-gray-900">Functional Safety</option>
                            <option value="ota-updates" class="bg-gray-900">OTA Updates</option>
                            <option value="aspice" class="bg-gray-900">ASPICE</option>
                            <option value="autosar" class="bg-gray-900">AUTOSAR</option>
                            <option value="training" class="bg-gray-900">Training & Consulting</option>
                            <option value="sdv-solutions" class="bg-gray-900">SDV Solutions</option>
                            <option value="other" class="bg-gray-900">Other</option>
                        </select>
                        <textarea placeholder="Your Message" rows="5" required
                                  class="w-full p-4 rounded-xl theme-bg-tertiary border theme-border-primary focus:border-cyan-500
                                         outline-none transition-colors duration-300 theme-text-primary placeholder-gray-400 resize-none"></textarea>
            <button type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600
                                       hover:from-blue-600 hover:to-cyan-500 rounded-xl shadow-lg
                                       transition-all duration-300 transform hover:scale-105 hover:shadow-2xl
                                       hover:shadow-cyan-500/25 theme-text-primary font-semibold text-lg">
                Send Message
            </button>
        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Footer -->
<footer class="theme-gradient-secondary py-12 border-t theme-border-primary">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- Company Info -->
            <div class="md:col-span-2">
                <h3 class="text-2xl font-extrabold gradient-text mb-4">DestroSolutions</h3>
                <p class="theme-text-quaternary leading-relaxed mb-6">
                    Pioneering the future of mobility with Software-Defined Vehicle solutions.
                    We enable secure, compliant, and intelligent automotive platforms for tomorrow's connected world.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 theme-text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-600 to-indigo-500 flex items-center justify-center hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 theme-text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gradient-to-br from-gray-600 to-gray-700 flex items-center justify-center hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 theme-text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold theme-text-primary mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#about" class="theme-text-quaternary hover:text-blue-400 transition">About Us</a></li>
                    <li><a href="#products" class="theme-text-quaternary hover:text-blue-400 transition">Products</a></li>
                    <li><a href="#services" class="theme-text-quaternary hover:text-blue-400 transition">Services</a></li>
                    <li><a href="#sdv-solutions" class="theme-text-quaternary hover:text-blue-400 transition">SDV Solutions</a></li>
                    <li><a href="#contact" class="theme-text-quaternary hover:text-blue-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold theme-text-primary mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><span class="theme-text-quaternary">Cybersecurity Management</span></li>
                    <li><span class="theme-text-quaternary">Functional Safety</span></li>
                    <li><span class="theme-text-quaternary">OTA Updates</span></li>
                    <li><span class="theme-text-quaternary">ASPICE & AUTOSAR</span></li>
                    <li><span class="theme-text-quaternary">Expert Training</span></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 text-center">
            <p class="theme-text-quaternary">
                &copy; 2025 DestroSolutions. All Rights Reserved. |
                <a href="#" class="hover:text-blue-400 transition">Privacy Policy</a> |
                <a href="#" class="hover:text-blue-400 transition">Terms of Service</a>
            </p>
        </div>
    </div>
</footer>

<!-- Go to Top Button -->
<button class="go-to-top" onclick="scrollToTop()" aria-label="Go to top">
    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<!-- Clean Animation Script -->
<script>
    // Clean fade-in-up animations with lazy loading
    function initAnimations() {
        const elements = document.querySelectorAll('.fade-in-up');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    }

    // Go to top functionality
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Show/hide go to top button
    function toggleGoToTopButton() {
        const button = document.querySelector('.go-to-top');
        if (window.scrollY > 300) {
            button.classList.add('visible');
        } else {
            button.classList.remove('visible');
        }
    }

    // Theme toggle functionality
    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        if (currentTheme === 'light') {
            html.setAttribute('data-theme', 'dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
            localStorage.setItem('theme', 'dark');
        } else {
            html.setAttribute('data-theme', 'light');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
            localStorage.setItem('theme', 'light');
        }
    }

    // Initialize theme from localStorage
    function initTheme() {
        const savedTheme = localStorage.getItem('theme') || 'dark';
        const html = document.documentElement;
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        html.setAttribute('data-theme', savedTheme);

        if (savedTheme === 'light') {
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        } else {
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }
    }

    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initTheme();
        initAnimations();
        window.addEventListener('scroll', toggleGoToTopButton);
    });
</script>

<!-- Alpine Scroll Animation Directive -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.directive('scroll', (el) => {
            el.style.opacity = 0;
            el.style.transform = "translateY(20px)";
            let delay = el.dataset.delay ? parseInt(el.dataset.delay) : 0;
            let scrolledOnce = false;
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && scrolledOnce) {
                        setTimeout(() => {
                            el.classList.add('animate-show');
                        }, delay);
                        observer.unobserve(el);
                    }
                });
            }, {threshold: 0.2, rootMargin: "-120px 0px -20px 0px"});
            observer.observe(el);
            window.addEventListener("scroll", () => {
                scrolledOnce = true;
            }, {once: true});
        });
    });
</script>

</body>
</html>
