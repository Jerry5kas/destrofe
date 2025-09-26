<!DOCTYPE html>
<html lang="en" x-data="{ navOpen: false, scrolled: false }"
      x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 80 })"
      class="scroll-smooth">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DestroSolutions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Professional Typography System -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* ===== PROFESSIONAL TYPOGRAPHY SYSTEM ===== */
        :root {
            /* Font Families */
            --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-heading: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-display: 'Space Grotesk', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', 'Fira Code', 'Monaco', 'Cascadia Code', monospace;

            /* Font Weights */
            --font-light: 300;
            --font-normal: 400;
            --font-medium: 500;
            --font-semibold: 600;
            --font-bold: 700;
            --font-extrabold: 800;
            --font-black: 900;

            /* Typography Scale */
            --text-xs: 0.75rem;      /* 12px */
            --text-sm: 0.875rem;     /* 14px */
            --text-base: 1rem;       /* 16px */
            --text-lg: 1.125rem;     /* 18px */
            --text-xl: 1.25rem;      /* 20px */
            --text-2xl: 1.5rem;      /* 24px */
            --text-3xl: 1.875rem;    /* 30px */
            --text-4xl: 2.25rem;     /* 36px */
            --text-5xl: 3rem;        /* 48px */
            --text-6xl: 3.75rem;     /* 60px */
            --text-7xl: 4.5rem;      /* 72px */

            /* Line Heights */
            --leading-tight: 1.25;
            --leading-snug: 1.375;
            --leading-normal: 1.5;
            --leading-relaxed: 1.625;
            --leading-loose: 2;

            /* Letter Spacing */
            --tracking-tight: -0.025em;
            --tracking-normal: 0em;
            --tracking-wide: 0.025em;
            --tracking-wider: 0.05em;
            --tracking-widest: 0.1em;
        }

        /* ===== TYPOGRAPHY UTILITY CLASSES ===== */

        /* Logo & Brand Typography */
        .font-logo {
            font-family: var(--font-display);
            font-weight: var(--font-black);
            letter-spacing: var(--tracking-tight);
            line-height: var(--leading-tight);
        }

        .font-brand {
            font-family: var(--font-heading);
            font-weight: var(--font-extrabold);
            letter-spacing: var(--tracking-tight);
            line-height: var(--leading-tight);
        }

        .font-brand-subtitle {
            font-family: var(--font-primary);
            font-weight: var(--font-medium);
            letter-spacing: var(--tracking-wide);
            line-height: var(--leading-normal);
        }

        /* Heading Typography */
        .font-heading-1 {
            font-family: var(--font-heading);
            font-weight: var(--font-extrabold);
            font-size: var(--text-6xl);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-tight);
        }

        .font-heading-2 {
            font-family: var(--font-heading);
            font-weight: var(--font-bold);
            font-size: var(--text-5xl);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-tight);
        }

        .font-heading-3 {
            font-family: var(--font-heading);
            font-weight: var(--font-semibold);
            font-size: var(--text-4xl);
            line-height: var(--leading-snug);
            letter-spacing: var(--tracking-normal);
        }

        .font-heading-4 {
            font-family: var(--font-heading);
            font-weight: var(--font-semibold);
            font-size: var(--text-3xl);
            line-height: var(--leading-snug);
            letter-spacing: var(--tracking-normal);
        }

        .font-heading-5 {
            font-family: var(--font-heading);
            font-weight: var(--font-medium);
            font-size: var(--text-2xl);
            line-height: var(--leading-snug);
            letter-spacing: var(--tracking-normal);
        }

        .font-heading-6 {
            font-family: var(--font-primary);
            font-weight: var(--font-semibold);
            font-size: var(--text-xl);
            line-height: var(--leading-snug);
            letter-spacing: var(--tracking-normal);
        }

        /* Body Text Typography */
        .font-body-large {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            font-size: var(--text-lg);
            line-height: var(--leading-relaxed);
            letter-spacing: var(--tracking-normal);
        }

        .font-body {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            font-size: var(--text-base);
            line-height: var(--leading-relaxed);
            letter-spacing: var(--tracking-normal);
        }

        .font-body-small {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            font-size: var(--text-sm);
            line-height: var(--leading-normal);
            letter-spacing: var(--tracking-normal);
        }

        /* Button Typography */
        .font-button-large {
            font-family: var(--font-heading);
            font-weight: var(--font-semibold);
            font-size: var(--text-lg);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-wide);
        }

        .font-button {
            font-family: var(--font-heading);
            font-weight: var(--font-medium);
            font-size: var(--text-base);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-wide);
        }

        .font-button-small {
            font-family: var(--font-primary);
            font-weight: var(--font-medium);
            font-size: var(--text-sm);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-wide);
        }

        /* Label & Caption Typography */
        .font-label {
            font-family: var(--font-primary);
            font-weight: var(--font-medium);
            font-size: var(--text-sm);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-wide);
        }

        .font-caption {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            font-size: var(--text-xs);
            line-height: var(--leading-normal);
            letter-spacing: var(--tracking-wide);
        }

        /* Navigation Typography */
        .font-nav {
            font-family: var(--font-primary);
            font-weight: var(--font-medium);
            font-size: var(--text-base);
            line-height: var(--leading-tight);
            letter-spacing: var(--tracking-normal);
        }

        /* Card & Component Typography */
        .font-card-title {
            font-family: var(--font-heading);
            font-weight: var(--font-semibold);
            font-size: var(--text-xl);
            line-height: var(--leading-snug);
            letter-spacing: var(--tracking-normal);
        }

        .font-card-description {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            font-size: var(--text-sm);
            line-height: var(--leading-relaxed);
            letter-spacing: var(--tracking-normal);
        }

        /* Code & Technical Typography */
        .font-code {
            font-family: var(--font-mono);
            font-weight: var(--font-normal);
            font-size: var(--text-sm);
            line-height: var(--leading-normal);
            letter-spacing: var(--tracking-normal);
        }

        /* ===== RESPONSIVE TYPOGRAPHY ===== */
        @media (max-width: 768px) {
            .font-heading-1 { font-size: var(--text-4xl); }
            .font-heading-2 { font-size: var(--text-3xl); }
            .font-heading-3 { font-size: var(--text-2xl); }
            .font-heading-4 { font-size: var(--text-xl); }
        }

        /* ===== ANIMATION KEYFRAMES ===== */
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
            opacity: 0;
        }

        /* ===== GLOBAL TYPOGRAPHY RESET ===== */
        body {
            font-family: var(--font-primary);
            font-weight: var(--font-normal);
            line-height: var(--leading-relaxed);
            letter-spacing: var(--tracking-normal);
        }

        /* ===== LAZY LOADING & CONTENT ANIMATIONS ===== */

        /* Lazy Loading Base Styles */
        .lazy-load {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .lazy-load.loaded {
            opacity: 1;
            transform: translateY(0);
        }

        /* Image Lazy Loading */
        .lazy-image {
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 1s cubic-bezier(0.4, 0, 0.2, 1), transform 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .lazy-image.loaded {
            opacity: 1;
            transform: scale(1);
        }

        /* Staggered Animation Classes */
        .stagger-animation {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stagger-animation.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Staggered Delays */
        .stagger-delay-1 { transition-delay: 0.1s; }
        .stagger-delay-2 { transition-delay: 0.2s; }
        .stagger-delay-3 { transition-delay: 0.3s; }
        .stagger-delay-4 { transition-delay: 0.4s; }
        .stagger-delay-5 { transition-delay: 0.5s; }
        .stagger-delay-6 { transition-delay: 0.6s; }

        /* Content Loading Animations */
        .content-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .content-fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Slide In Animations */
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide-in-left.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide-in-right.animate {
            opacity: 1;
            transform: translateX(0);
        }

        /* Scale Animation */
        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scale-in.animate {
            opacity: 1;
            transform: scale(1);
        }

        /* Loading Skeleton */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Skeleton Placeholders */
        .skeleton-text {
            height: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 4px;
        }

        .skeleton-title {
            height: 2rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            width: 70%;
        }

        .skeleton-image {
            height: 200px;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        /* Contact Image Specific Skeleton */
        .contact-image-skeleton {
            background: linear-gradient(90deg, #e2e8f0 25%, #cbd5e1 50%, #e2e8f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 8px;
        }

        /* Progressive Loading */
        .progressive-load {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .progressive-load.loaded {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card Hover Enhancements */
        .enhanced-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .enhanced-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Text Reveal Animation */
        .text-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .text-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* Button Loading State */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid #ffffff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Scroll Progress Indicator */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            z-index: 9999;
            transition: width 0.3s ease-out;
        }

        /* Intersection Observer Trigger */
        .intersection-trigger {
            opacity: 0;
            transition: opacity 0.6s ease-out;
        }

        .intersection-trigger.visible {
            opacity: 1;
        }
    </style>
</head>

<body class="">
<!-- Scroll Progress Indicator -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- Lazy Loading & Animation System -->
<script>
    // Enhanced Lazy Loading and Animation System
    class LazyLoadingSystem {
        constructor() {
            this.init();
        }

        init() {
            // Wait for DOM to be fully ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => this.initializeSystem());
            } else {
                this.initializeSystem();
            }
        }

        initializeSystem() {
            console.log('Initializing Lazy Loading System...');

            // Setup intersection observer first
            this.setupIntersectionObserver();

            // Setup scroll progress
            this.setupScrollProgress();

            // Initialize content animations
            this.initContentAnimations();

            // Setup image lazy loading
            this.setupImageLazyLoading();

            // Setup staggered animations
            this.setupStaggeredAnimations();

            // Add performance optimizations
            this.optimizePerformance();

            console.log('Lazy Loading System initialized successfully');
        }

        setupIntersectionObserver() {
            const observerOptions = {
                root: null,
                rootMargin: '100px',
                threshold: 0.1
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;

                        // Add animation classes based on element type
                        if (element.classList.contains('content-fade-in')) {
                            element.classList.add('visible');
                        }
                        if (element.classList.contains('slide-in-left')) {
                            element.classList.add('animate');
                        }
                        if (element.classList.contains('slide-in-right')) {
                            element.classList.add('animate');
                        }
                        if (element.classList.contains('scale-in')) {
                            element.classList.add('animate');
                        }
                        if (element.classList.contains('stagger-animation')) {
                            element.classList.add('animate');
                        }
                        if (element.classList.contains('text-reveal')) {
                            element.classList.add('revealed');
                        }
                        if (element.classList.contains('lazy-image')) {
                            element.classList.add('loaded');

                            // Load image if it has data-src
                            if (element.dataset.src) {
                                element.src = element.dataset.src;
                                element.removeAttribute('data-src');
                            }
                        }

                        // Trigger staggered animations for children
                        const children = element.querySelectorAll('.stagger-animation');
                        children.forEach((child, index) => {
                            setTimeout(() => {
                                child.classList.add('animate');
                            }, index * 150);
                        });

                        // Stop observing this element
                        this.observer.unobserve(element);
                    }
                });
            }, observerOptions);

            this.intersectionObserver = this.observer;
        }

        setupImageLazyLoading() {
            // Handle all images with lazy-image class
            const images = document.querySelectorAll('img.lazy-image');
            images.forEach((img, index) => {
                // Handle data-src lazy loading
                if (img.dataset.src) {
                    img.src = ''; // Clear src initially

                    // Add skeleton placeholder if not already present
                    if (!img.parentNode.querySelector('.skeleton')) {
                        const skeleton = document.createElement('div');
                        skeleton.className = 'skeleton skeleton-image';
                        skeleton.style.position = 'absolute';
                        skeleton.style.top = '0';
                        skeleton.style.left = '0';
                        skeleton.style.width = '100%';
                        skeleton.style.height = '100%';
                        skeleton.style.zIndex = '10';

                        img.parentNode.style.position = 'relative';
                        img.parentNode.insertBefore(skeleton, img);

                        // Load image when it comes into view
                        img.addEventListener('load', () => {
                            img.classList.add('loaded');
                            img.style.opacity = '1';
                            skeleton.style.opacity = '0';
                            setTimeout(() => skeleton.remove(), 500);
                        });

                        // Handle image load errors
                        img.addEventListener('error', () => {
                            skeleton.style.opacity = '0';
                            setTimeout(() => skeleton.remove(), 300);
                            console.warn('Image failed to load:', img.dataset.src);
                        });
                    }
                } else {
                    // Handle regular lazy loading for images without data-src
                    if (!img.parentNode.querySelector('.skeleton')) {
                        const skeleton = document.createElement('div');
                        skeleton.className = 'skeleton skeleton-image';
                        skeleton.style.position = 'absolute';
                        skeleton.style.top = '0';
                        skeleton.style.left = '0';
                        skeleton.style.width = '100%';
                        skeleton.style.height = '100%';
                        skeleton.style.zIndex = '1';

                        img.parentNode.style.position = 'relative';
                        img.parentNode.appendChild(skeleton);

                        // Hide skeleton when image loads
                        img.addEventListener('load', () => {
                            setTimeout(() => {
                                skeleton.style.opacity = '0';
                                setTimeout(() => skeleton.remove(), 300);
                            }, 500);
                        });

                        // Handle image load errors
                        img.addEventListener('error', () => {
                            skeleton.style.opacity = '0';
                            setTimeout(() => skeleton.remove(), 300);
                            console.warn('Image failed to load:', img.src);
                        });
                    }
                }

                // Observe the image for intersection
                this.intersectionObserver.observe(img);
            });
        }

        setupScrollProgress() {
            const scrollProgress = document.getElementById('scrollProgress');
            if (!scrollProgress) return;

            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = Math.min((scrollTop / docHeight) * 100, 100);

                scrollProgress.style.width = scrollPercent + '%';
            });
        }

        setupStaggeredAnimations() {
            // Setup staggered animations for cards
            const cardContainers = document.querySelectorAll('.grid');
            cardContainers.forEach(container => {
                const cards = container.querySelectorAll('.group, .enhanced-card, [x-data] .group');
                cards.forEach((card, index) => {
                    if (!card.classList.contains('stagger-animation')) {
                        card.classList.add('stagger-animation');
                        if (index < 6) {
                            card.classList.add(`stagger-delay-${(index % 6) + 1}`);
                        }
                    }
                });
            });

            // Observe all elements that need animation
            this.observeElements();
        }

        observeElements() {
            const selectors = [
                '.content-fade-in',
                '.slide-in-left',
                '.slide-in-right',
                '.scale-in',
                '.stagger-animation',
                '.text-reveal',
                '.lazy-image'
            ];

            selectors.forEach(selector => {
                document.querySelectorAll(selector).forEach(element => {
                    this.intersectionObserver.observe(element);
                });
            });
        }

        initContentAnimations() {
            // Add animation classes to sections that don't have them
            const sections = document.querySelectorAll('section');
            sections.forEach((section, index) => {
                if (!section.classList.contains('content-fade-in')) {
                    section.classList.add('content-fade-in');
                }
            });

            // Add slide animations to alternating content
            const alternatingSections = document.querySelectorAll('.grid.grid-cols-1.lg\\:grid-cols-2');
            alternatingSections.forEach(section => {
                const leftContent = section.querySelector('div:first-child');
                const rightContent = section.querySelector('div:last-child');

                if (leftContent && !leftContent.classList.contains('slide-in-left')) {
                    leftContent.classList.add('slide-in-left');
                }
                if (rightContent && !rightContent.classList.contains('slide-in-right')) {
                    rightContent.classList.add('slide-in-right');
                }
            });
        }

        optimizePerformance() {
            // Preload critical images
            this.preloadCriticalImages();

            // Add smooth scrolling
            this.addSmoothScrolling();

            // Optimize animations for reduced motion
            this.respectUserPreferences();
        }

        preloadCriticalImages() {
            const criticalImages = [
                '{{asset("images/dark4.jpg")}}',
                '{{asset("images/light3.jpg")}}',
                '{{asset("images/dark2.jpg")}}'
            ];

            criticalImages.forEach(src => {
                const link = document.createElement('link');
                link.rel = 'preload';
                link.as = 'image';
                link.href = src;
                document.head.appendChild(link);
            });
        }

        addSmoothScrolling() {
            document.documentElement.style.scrollBehavior = 'smooth';
        }

        respectUserPreferences() {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                // Disable animations for users who prefer reduced motion
                document.documentElement.style.setProperty('--animation-duration', '0.01s');
                document.documentElement.style.setProperty('--transition-duration', '0.01s');
            }
        }

        // Method to manually trigger animations
        triggerAnimation(element) {
            if (element) {
                element.classList.add('loaded', 'animate', 'visible', 'revealed');
            }
        }

        // Method to add loading state to buttons
        addButtonLoading(button) {
            button.classList.add('btn-loading');
            button.disabled = true;

            // Simulate loading (replace with actual async operation)
            setTimeout(() => {
                button.classList.remove('btn-loading');
                button.disabled = false;
            }, 2000);
        }
    }

    // Initialize the system
    window.lazyLoadingSystem = new LazyLoadingSystem();

    // Additional utility functions
    function loadImageWithFallback(img, fallbackSrc) {
        img.addEventListener('error', () => {
            if (img.src !== fallbackSrc) {
                img.src = fallbackSrc;
            } else {
                img.style.display = 'none';
                console.warn('Image failed to load:', img.src);
            }
        });
    }

    // Debug function to manually trigger animations
    function debugTriggerAnimations() {
        document.querySelectorAll('.content-fade-in, .slide-in-left, .slide-in-right, .scale-in, .stagger-animation').forEach(el => {
            el.classList.add('loaded', 'animate', 'visible', 'revealed');
        });
    }

    // Debug function to test contact image loading
    function testContactImage() {
        const contactImg = document.querySelector('img[data-src*="photo-1588702547919"]');
        if (contactImg) {
            console.log('Testing contact image loading...');
            contactImg.src = contactImg.dataset.src;
            contactImg.removeAttribute('data-src');
        } else {
            console.log('Contact image not found or already loaded');
        }
    }

    // Make debug functions available globally
    window.debugTriggerAnimations = debugTriggerAnimations;
    window.testContactImage = testContactImage;
</script>

<!-- resources/views/components/navbar.blade.php -->

<!-- resources/views/components/navbar.blade.php -->
@php
    $menuItems = [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Quantum', 'url' => '/destro'],
        [
            'label' => 'Services', 
            'url' => '/destro',
            'hasSubmenu' => true,
            'submenu' => [
                [
                    'title' => 'Cybersecurity Management',
                    'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'Functional Safety',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'Software Updates',
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'ASPICE Compliance',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ]
            ]
        ],
        [
            'label' => 'Products', 
            'url' => '/destro',
            'hasSubmenu' => true,
            'submenu' => [
                [
                    'title' => 'Automator AI',
                    'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'IDPS System',
                    'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'AI Data Collector',
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'SBOM Manager',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'vSOC Platform',
                    'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'OTA Updater',
                    'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ]
            ]
        ],
        [
            'label' => 'Training', 
            'url' => '/destro',
            'hasSubmenu' => true,
            'submenu' => [
                [
                    'title' => 'Cybersecurity Training',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'Functional Safety',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'ASPICE Training',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ],
                [
                    'title' => 'AUTOSAR Training',
                    'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
                    'url' => '/destro'
                ]
            ]
        ],
        ['label' => 'Blog', 'url' => '/destro'],
    ];
@endphp

<div
    x-data="{ open:false, scrolled:false, headerHeight: 0 }"
    x-init="() => {
        const setHeight = () => { headerHeight = $refs.headerBlock ? $refs.headerBlock.offsetHeight : 0 };
        setHeight();
        window.addEventListener('load', setHeight);
        window.addEventListener('resize', setHeight);

        // Optimized scroll detection with throttling for smoother performance
        let ticking = false;
        const handleScroll = () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    scrolled = window.scrollY > Math.max(60, headerHeight - 16);
                    ticking = false;
                });
                ticking = true;
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
    }"
    class="w-full">

    <!-- ---------- Top Main Logo (slides up when scrolled) ---------- -->
    <div
        x-ref="headerBlock"
        :class="scrolled ? 'transform -translate-y-full opacity-0' : 'transform translate-y-0 opacity-100'"
        class="bg-white w-full px-0 sm:px-9 transition-all duration-500 ease-in-out relative z-40"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex items-center justify-between">
                <!-- Left: Logo and Brand -->
                <div class="flex items-center space-x-4">
                    <!-- Professional Logo with Typography -->
                    <div class="relative group">
                        <!-- Logo Container -->
                        <div
                            class="flex items-center justify-center w-9 h-9 bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-500 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <!-- Main Logo Letter -->
                            <div class="z-10 text-white font-logo text-lg">
                                D
                            </div>

                            <!-- Subtle accent dot -->
                            <!-- <div class="absolute -top-1 -right-1 w-3 h-3 bg-gradient-to-r from-cyan-300 to-blue-300 rounded-full opacity-80"></div> -->

                            <!-- Inner glow effect -->
                            <div class="absolute inset-1 bg-white/10 rounded-xl backdrop-blur-sm"></div>
                        </div>

                        <!-- Hover glow effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                    </div>

                    <div>
                        <div class="font-brand text-lg text-gray-900">Destro Solution</div>
                        <div class="font-brand-subtitle text-xs text-gray-500">Bringing SDV to Life</div>
                    </div>
                </div>

                <!-- Right: Mobile Hamburger (only visible on mobile) -->
                <div class="md:hidden">
                    <button @click="open = !open"
                            class="p-2 text-gray-700 focus:outline-none transition-all duration-300 hover:bg-gray-100 rounded-lg">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 transition-all duration-300" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 transition-all duration-300"
                             fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile dropdown (moved here from desktop navbar) -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-250"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden bg-white border-t border-gray-100 shadow-lg relative z-50"
        >
            <div class="px-6 py-4 space-y-1">
                @foreach ($menuItems as $item)
                    @if(isset($item['hasSubmenu']) && $item['hasSubmenu'])
                        <!-- Mobile Submenu Item -->
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open" 
                                    class="group relative w-full text-left text-xs text-gray-800 font-nav py-3 px-4 rounded-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                <span class="relative z-10">{{ $item['label'] }}</span>
                                <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <!-- Submenu Items -->
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform scale-95"
                                 x-transition:enter-end="opacity-100 transform scale-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 transform scale-100"
                                 x-transition:leave-end="opacity-0 transform scale-95"
                                 class="ml-4 space-y-1"
                                 style="display: none;">
                                @foreach($item['submenu'] as $subItem)
                                    <a href="{{ $subItem['url'] }}"
                                       class="group relative text-xs block text-gray-600 font-nav py-2 px-4 rounded-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 flex items-center">
                                        <img src="{{ $subItem['image'] }}" alt="{{ $subItem['title'] }}" class="w-8 h-8 rounded-lg mr-3 object-cover">
                                        <span class="relative z-10">{{ $subItem['title'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <!-- Regular Mobile Menu Item -->
                        <a href="{{ $item['url'] }}"
                           class="group relative text-xs block text-gray-800 font-nav py-3 px-4 rounded-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600 bg-blue-50' : '' }}">
                            <span class="relative z-10">{{ $item['label'] }}</span>
                            <!-- Animated underline -->
                            <span class="absolute left-4 bottom-2 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}" style="width: calc(100% - 2rem);"></span>
                        </a>
                    @endif
                @endforeach

                <!-- Enhanced Action Buttons -->
                <div class="flex items-center justify-center space-x-6 pt-6 border-t border-gray-100">
                    <!-- Search Button -->
                    <button
                        class="group relative flex items-center justify-center w-12 h-12 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <!-- Subtle glow effect -->
                        <div
                            class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                    </button>

                    <!-- Language Button -->
                    <button
                        class="group relative flex items-center justify-center w-12 h-12 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                        </svg>
                        <!-- Subtle glow effect -->
                        <div
                            class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------- Desktop Navbar (hidden on mobile) ---------- -->
    <nav
        :class="scrolled ? 'fixed top-0 left-0 w-full z-50 bg-white shadow-sm' : 'relative bg-white z-40'"
        class="hidden md:block transition-all duration-500 ease-in-out"
        aria-label="Primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-12 flex items-center justify-between">
                <!-- Left: small logo + menu -->
                <div class="flex items-center space-x-6">
                    <!-- small logo icon (hidden initially, shows when scrolled) -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 -43.92 122.88 122.88"
                         :class="scrolled ? 'h-12 w-12 text-cyan-900 transition-colors duration-300 hover:text-cyan-500' : 'h-0 w-0 opacity-0'"
                         class="transition-all duration-500 ease-in-out"
                         fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M99.42,13.57c5.93,0,10.73,4.8,10.73,10.73c0,5.93-4.8,10.73-10.73,10.73
             s-10.73-4.8-10.73-10.73C88.69,18.37,93.49,13.57,99.42,13.57L99.42,13.57z M79.05,5
             c-0.59,1.27-1.06,2.69-1.42,4.23c-0.82,2.57,0.39,3.11,3.19,2.06c2.06-1.23,4.12-2.47,6.18-3.7
             c1.05-0.74,1.55-1.47,1.38-2.19c-0.34-1.42-3.08-2.16-5.33-2.6C80.19,2.23,80.39,2.11,79.05,5
             L79.05,5z M23.86,19.31c2.75,0,4.99,2.23,4.99,4.99c0,2.75-2.23,4.99-4.99,4.99c-2.75,0-4.99-2.23-4.99-4.99
             C18.87,21.54,21.1,19.31,23.86,19.31L23.86,19.31z M99.42,19.31c2.75,0,4.99,2.23,4.99,4.99
             c0,2.75-2.23,4.99-4.99,4.99c-2.75,0-4.99-2.23-4.99-4.99C94.43,21.54,96.66,19.31,99.42,19.31
             L99.42,19.31z M46.14,12.5c2.77-2.97,5.97-4.9,9.67-6.76c8.1-4.08,13.06-3.58,21.66-3.58l-2.89,7.5
             c-1.21,1.6-2.58,2.73-4.66,2.84H46.14L46.14,12.5z M23.86,13.57c5.93,0,10.73,4.8,10.73,10.73
             c0,5.93-4.8,10.73-10.73,10.73s-10.73-4.8-10.73-10.73C13.13,18.37,17.93,13.57,23.86,13.57
             L23.86,13.57z M40.82,10.3c3.52-2.19,7.35-4.15,11.59-5.82c12.91-5.09,22.78-6,36.32-1.9
             c4.08,1.55,8.16,3.1,12.24,4.06c4.03,0.96,21.48,1.88,21.91,4.81l-4.31,5.15c1.57,1.36,2.85,3.03,3.32,5.64
             c-0.13,1.61-0.57,2.96-1.33,4.04c-1.29,1.85-5.07,3.76-7.11,2.67c-0.65-0.35-1.02-1.05-1.01-2.24
             c0.06-23.9-28.79-21.18-26.62,2.82H35.48C44.8,5.49,5.04,5.4,12.1,28.7C9.62,31.38,3.77,27.34,0,18.75
             c1.03-1.02,2.16-1.99,3.42-2.89c-0.06-0.05,0.06,0.19-0.15-0.17c-0.21-0.36,0.51-1.87,1.99-2.74
             C13.02,8.4,31.73,8.52,40.82,10.3L40.82,10.3z"/>
                    </svg>

                    <!-- Desktop menu (left) -->
                    <div class="flex items-center space-x-8">
                        @foreach ($menuItems as $item)
                            @if(isset($item['hasSubmenu']) && $item['hasSubmenu'])
                                <!-- Mega Menu Item -->
                                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <a href="{{ $item['url'] }}"
                                       class="group relative text-gray-800 font-nav px-3 py-2 transition-all duration-300 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600' : '' }}">
                                        <span class="relative z-10 text-sm">
                                            {{ $item['label'] }}
                                        </span>
                                        <!-- Arrow down icon -->
                                        <svg class="inline-block ml-1 w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                        <!-- Gradient blue underline -->
                                        <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}"></span>
                                    </a>

                                    <!-- Mega Menu Dropdown -->
                                    <div x-show="open" 
                                         x-transition:enter="transition ease-out duration-200"
                                         x-transition:enter-start="opacity-0 transform scale-95"
                                         x-transition:enter-end="opacity-100 transform scale-100"
                                         x-transition:leave="transition ease-in duration-150"
                                         x-transition:leave-start="opacity-100 transform scale-100"
                                         x-transition:leave-end="opacity-0 transform scale-95"
                                         class="absolute top-full left-0 mt-2 w-80 bg-white rounded-xl shadow-2xl border border-gray-100 z-50 overflow-hidden"
                                         style="display: none;">
                                        
                                        <!-- Menu Items - Single Column Landscape Layout -->
                                        <div class="p-4">
                                            <div class="space-y-2">
                                                @foreach($item['submenu'] as $subItem)
                                                    <a href="{{ $subItem['url'] }}" 
                                                       class="group/item flex items-center p-3 rounded-lg hover:bg-blue-50 transition-all duration-300 hover:scale-[1.02]">
                                                        <!-- Image - Left Side -->
                                                        <div class="relative w-12 h-12 mr-3 overflow-hidden rounded-lg shadow-sm group-hover/item:shadow-md transition-shadow duration-300">
                                                            <img src="{{ $subItem['image'] }}" 
                                                                 alt="{{ $subItem['title'] }}" 
                                                                 class="w-full h-full object-cover transition-transform duration-300 group-hover/item:scale-110">
                                                            <!-- Overlay -->
                                                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300"></div>
                                                        </div>
                                                        
                                                        <!-- Title - Right Side -->
                                                        <h4 class="text-xs font-medium text-gray-900 group-hover/item:text-blue-600 transition-colors duration-300">
                                                            {{ $subItem['title'] }}
                                                        </h4>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Regular Menu Item -->
                                <a href="{{ $item['url'] }}"
                                   class="group relative text-gray-800 font-nav px-3 py-2 transition-all duration-300 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600' : '' }}">
                                    <span class="relative z-10 text-sm">
                                        {{ $item['label'] }}
                                    </span>
                                    <!-- Gradient blue underline -->
                                    <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}"></span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Right: search + language -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <button
                        class="group relative text-gray-600 hover:text-blue-600 p-3 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:shadow-md hover:scale-105">
                        <svg class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <!-- Subtle glow effect -->
                        <div
                            class="absolute inset-0 rounded-lg bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                    </button>

                    <!-- Language -->
                    <button
                        class="group relative text-gray-600 hover:text-blue-600 p-3 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:shadow-md hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                        </svg>

                        <!-- Subtle glow effect -->
                        <div
                            class="absolute inset-0 rounded-lg bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Banner / Hero Section with Navigation -->
    <div x-data="slider()" x-init="start()" class="w-full">
        <!-- Banner -->
        <div class="relative w-full overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700">
            <!-- Slides -->
            <div class="relative h-[300px] sm:h-[450px] lg:h-[500px]">
                <template x-for="(slide, index) in slides" :key="index">
                    <div
                        x-show="activeIndex === index"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform scale-105"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="absolute inset-0 w-full h-full flex flex-col lg:flex-row group">
                        <!-- Mobile layout: Clean structure - Image first, then content -->
                        <div class="lg:hidden w-full h-auto bg-white">
                            <!-- Mobile Image Section - Clean, full-width image -->
                            <a :href="slide.link">
                                <div class="w-full h-48 bg-gray-50 flex items-center justify-center">
                                    <img :src="slide.image" alt="" class="w-full h-full object-cover lazy-image">
                                </div>
                            </a>
                            <!-- Mobile Content Section - Clean white card -->
                            <div class="bg-blue-600 px-6 py-8">
                                <h2 class="font-heading-3 text-gray-100 mb-4" x-text="slide.title"></h2>
                                <p class="font-body-large text-gray-100 mb-6"
                                   x-text="slide.text"></p>
                                <!-- <a :href="slide.link"
                                   class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-all duration-300">
                                    <span x-text="slide.button"></span>
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a> -->
                            </div>
                        </div>

                        <!-- Desktop Background Image -->
                        <div
                            class="hidden lg:block absolute inset-0 bg-contain sm:bg-cover bg-center bg-no-repeat "
                            :style="`background-image: url(${slide.image})`">
                        </div>
                        <div
                            class="hidden lg:block absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/60 to-transparent"></div>

                        <!-- Content Wrapper -->
                        <div
                            class="relative flex-1 flex items-center justify-center lg:justify-start px-6 sm:px-12 lg:px-20 z-10"
                            :class="{
                                      'lg:justify-start text-left': slide.position === 'left',
                                      'lg:justify-center text-center': slide.position === 'center',
                                      'lg:justify-end text-right': slide.position === 'right'
                                    }"
                                    >
                            <!-- Text Card with Glass Morphism -->
                            <div class="relative max-w-sm group">
                                <!-- Glass morphism background -->
                                <div
                                    class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-3xl shadow-2xl"></div>

                                <!-- Gradient overlay for depth -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-white/20 via-white/10 to-transparent rounded-3xl"></div>

                                <!-- Content -->
                                <div class="relative p-6 lg:p-8">
                                    <!-- Title with animation -->
                                    <h5 class="font-heading-5 text-white mb-4 transform transition-all duration-700 group-hover:scale-105"
                                        x-text="slide.title"
                                        x-transition:enter="transition ease-out duration-700"
                                        x-transition:enter-start="opacity-0 translate-y-8"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                    </h5>

                                    <!-- Description with animation -->
                                    <p class="font-body-small text-white/90 mb-6 line-clamp-2 transform transition-all duration-700 delay-100 group-hover:translate-x-2"
                                       x-text="slide.text"
                                       x-transition:enter="transition ease-out duration-700 delay-200"
                                       x-transition:enter-start="opacity-0 translate-y-8"
                                       x-transition:enter-end="opacity-100 translate-y-0">
                                    </p>

                                    <!-- CTA Button with enhanced animation -->
                                    <a :href="slide.link"
                                       class="inline-flex items-center px-4 py-2 bg-blue-700 backdrop-blur-sm hover:bg-gradient hover:from-blue-600 hover:to-blue-700 text-cyan-50 rounded-sm font-button-small shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 hover:-translate-y-1 border border-white/20"
                                       x-transition:enter="transition ease-out duration-700 delay-300"
                                       x-transition:enter-start="opacity-0 translate-y-8"
                                       x-transition:enter-end="opacity-100 translate-y-0">
                                        <span x-text="slide.button"></span>
                                        <svg
                                            class="ml-2 w-3 h-3 transition-transform duration-300 group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>

                                <!-- Subtle glow effect -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-purple-400/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl"></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>


        <!-- Navigation Controls (Below Banner) -->
        <div class="bg-white py-3 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Left Arrow -->
                    <button @click="prev()"
                            class="group flex items-center justify-center w-9 h-9 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:-translate-x-0.5" fill="none"
                             stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <!-- Indicators -->
                    <div class="flex items-center space-x-4">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div class="relative cursor-pointer" @click="goToSlide(index)">
                                <!-- Inactive dot -->
                                <div
                                    class="w-2 h-2 rounded-full bg-blue-200 transition-all duration-300 hover:bg-blue-400"
                                    x-show="activeIndex !== index"></div>
                                <!-- Active progress bar -->
                                <div x-show="activeIndex === index"
                                     class="h-2 rounded-full bg-blue-200 overflow-hidden w-12 transition-all duration-200 ease-in-out">
                                    <div
                                        class="h-full bg-gradient-to-r from-blue-500 to-blue-600 transition-all duration-50 ease-linear"
                                        :style="{ width: progress + '%' }"></div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Right Arrow -->
                    <button @click="next()"
                            class="group flex items-center justify-center w-9 h-9 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5" fill="none"
                             stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container Closing -->
</div>


<!-- Our Drive Section -->
<section class="bg-gray-50 py-16 lg:py-24 content-fade-in">
    <div class="max-w-7xl md:w-[90%] xl:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-6 slide-in-left">
                <h2 class="font-heading-2 text-gray-900 text-reveal">
                    Our drive, our purpose
                    <br>
                    <span class="text-blue-600">Enabling You To Shape A Better</span>
                    <br>
                    Tomorrow
                </h2>
            </div>

            <!-- Right Content -->
            <div class="space-y-8 slide-in-right">
                <p class="font-body-large text-gray-700 leading-wider">
                    At DestroSolutions, we enable the future of mobility by driving the transition to Software-Defined
                    Vehicles (SDVs). Our expertise spans end-to-end automotive cybersecurity, software update
                    management, functional safety, and E/E architecture transformation. Our commitment to Safety &
                    security standards, expert training positions us as a trusted partner in delivering tomorrow's
                    mobility—today.
                </p>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="/destro"
                       class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg font-button transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        Who we are
                        <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section x-data="{ cards: [
    {
      title: 'End To End Security',
      text: 'Secure-by-design solutions across the full vehicle lifecycle—from development to decommissioning.',
      image: 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'Cybersecurity'
    },
    {
      title: 'Standards-Aligned Engineering',
      text: 'Built to meet ASPICE, AUTOSAR, CSMS, SUMS, FuSa & SOTIF Automotive-Grade Reliability',
      image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
{{--      image: 'https://images.unsplash.com/photo-1537041373298-55dbb337e651?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',--}}
{{--      image: 'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',--}}
      link: '#',
      category: 'Standards Compliance'
    },
    {
      title: 'Expert Training & Consulting',
      text: 'Upskill your team skills and expertise to drive innovation in the SDV ERA',
      image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'Training & Consulting'
    },
    {
      title: 'Accelerating the SDV Shift',
      text: 'Pioneering Software-Defined Vehicle (SDV) transformations with E/E Systems, OTA.',
      image: 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'SDV Transformation'
    }
] }" class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24 content-fade-in">
    <div class="max-w-7xl md:w-[90%] xl:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scale-in">
            <h2 class="font-heading-2 text-gray-900 mb-6 text-reveal">
                The Future Begins
            </h2>
            <p class="font-body-large text-gray-600 max-w-3xl mx-auto text-reveal">
            Innovative products, services and training
            </p>
        </div>

        <!-- Enhanced Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <template x-for="(card, index) in cards" :key="index">
                <div
                    class="group bg-white rounded-md shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden enhanced-card stagger-animation"
                    :class="`stagger-delay-${(index % 6) + 1}`">

                    <!-- Image Container with Overlay -->
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img :src="card.image" alt=""
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 lazy-image">
                        <!-- Gradient Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-700/75 text-white text-xs font-semibold rounded-full"
                                  x-text="card.category"></span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="font-card-title text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300"
                                x-text="card.title"></h3>
                            <p class="font-card-description text-gray-600" x-text="card.text"></p>
                        </div>

                        <!-- Enhanced Arrow Button -->
                        <div class="mt-6 flex justify-start items-center gap-2">
                            <a :href="card.link"
                               class="text-blue-600 hover:text-blue-800 font-button-small transition-colors duration-300">
                                Learn more
                            </a>
                            <a :href="card.link"
                               class="group/btn inline-flex items-center justify-center w-5 h-5 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                <svg class="w-3 h-3 transition-transform duration-300 group-hover/btn:translate-x-0.5"
                                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <!-- Learn More Link -->

                        </div>
                    </div>

                    <!-- Hover Glow Effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-200/10 to-purple-200/10 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            </template>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="/destro"
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-button-large shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                View All Solutions
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>


<!-- Products Section -->
<section x-data="{
    products: [
        {
            title: 'Automator AI',
            description: 'Automator lets OEMs use automation policies to instantly create new vehicle functions',
            image: 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
            position: 'left',
            product: 'AI',
        },
        {
            title: 'IDPS',
            subtitle: 'Intrusion Detection and Prevention System',
            description: 'Our IDPS continuously monitors in-vehicle networks and prevent Cyber attacks today and Quantum Era',
            image: 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
            position: 'right'
        },
        {
            title: 'AI Data Collector',
            description: 'Collector is a data acquisition and analytics tool that Collects & Process data for Vehicle Performance with integrated FIR',
            image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
            position: 'left'
        },
        {
            title: 'SBOM',
            subtitle: 'Software Bill of Materials',
            description: 'SBOM ensure Visibility, Security, Compliance across your Supply chain',
            image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
            position: 'right'
        },
        {
            title: 'vSOC',
            subtitle: 'Vehicle Security Operations Center',
            description: 'vSOC is a centralized hub for monitoring, detecting, and responding to cyber threats across Fleet',
            image: 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
            position: 'left'
        },
        {
            title: 'OTA Updater',
            description: 'OTA Updater enables secure over-the-air software updates, with end-to-end Traceability',
            image: 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            icon: 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12',
            position: 'right'
        },
         {
            title: 'vSOC',
            subtitle: 'Vehicle Security Operations Center',
            description: 'vSOC is a centralized hub for monitoring, detecting, and responding to cyber threats across Fleet',
            image: 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
            position: 'left'
        },
    ]
}" class="bg-white py-16 content-fade-in">
    <div class="max-w-7xl md:w-[90%] xl:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <div class="scale-in">
            <h2 class="font-heading-3 text-gray-900 mb-3 text-reveal">
            Our Products
        </h2>
            <p class="font-body-small text-gray-600 line-clamp-3 mb-9 text-reveal">
        DestroSolutions delivers a robust portfolio of products engineered for the Software-Defined Vehicle era. Designed for security, compliance, and performance, our solutions seamlessly integrate into modern E/E architectures while aligning with global automotive standards.
        </p>
        </div>

        <!-- Featured Product (First Row) -->
        <div class="mb-5">
            <template x-for="(product, index) in products.slice(0, 1)" :key="index">
                <!-- Featured Product Card -->
                <div class="overflow-hidden flex flex-col shadow rounded-sm lg:flex-row items-center justify-center lg:items-stretch group enhanced-card stagger-animation"
                     :class="[product.position === 'right' ? 'lg:flex-row-reverse slide-in-right' : 'lg:flex-row slide-in-left', `stagger-delay-${(index % 6) + 1}`]">

                    <!-- Content Section -->
                    <div class="w-full lg:w-1/3 h-auto flex flex-col justify-center rounded-l-lg pl-8">
                        <h3 class="font-heading-4 text-gray-900 mb-4" x-text="product.title"></h3>
                        <!-- <p x-show="product.subtitle" class="font-label text-gray-500 uppercase mb-2" x-text="product.subtitle"></p> -->
                        <p class="font-body-large text-gray-600 line-clamp-3 mb-6" x-text="product.description"></p>
                        <a href="/destro" class="max-w-max inline-flex items-center px-6 py-3 mb-6 border-2 border-blue-600 text-blue-600 font-button rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-105">
                            <span>Read more</span>
{{--                            <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="product.icon"></path>--}}
{{--                            </svg>--}}
                        </a>
                    </div>

                    <!-- Image Section -->
                    <div class="w-full lg:w-2/3 overflow-hidden">
                        <img :src="product.image" :alt="product.title"
                             class="w-full shadow-lg h-72 sm:h-72 lg:h-72 object-cover rounded-sm transition-transform duration-600 group-hover:scale-100 group-hover:ease-in-out lazy-image"
                             :class="product.position === 'right' ? 'lg:rounded-l-sm lg:rounded-r-none' : 'lg:rounded-l-none lg:rounded-r-sm'">
                    </div>
                </div>
            </template>
        </div>

        <!-- Second Row - 2 Products -->
        <div class="mb-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <template x-for="(product, index) in products.slice(1, 3)" :key="index">
                    <div class="group bg-white rounded-sm shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden enhanced-card stagger-animation"
                         :class="`stagger-delay-${(index % 6) + 1}`">

                        <!-- Image Container with Overlay -->
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img :src="product.image" :alt="product.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-100 lazy-image">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <!-- Category Badge -->
{{--                            <div class="absolute top-4 left-4">--}}
{{--                                <span class="px-3 py-1 bg-blue-700/75 text-white text-xs font-semibold rounded-full">Product</span>--}}
{{--                            </div>--}}
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col justify-between flex-1 p-6">
                            <div>
                                <h3 class="font-card-title text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300" x-text="product.title"></h3>
                                <p class="font-card-description text-gray-600 line-clamp-3" x-text="product.description"></p>
                            </div>

                            <!-- Enhanced Arrow Button -->
                            <div class="mt-2 flex justify-between items-center">
                                <!-- Learn More Link -->
                                <a href="/destro" class="text-blue-600 hover:text-blue-800 font-button-small transition-colors duration-300">
                                    Learn more →
                                </a>
                            </div>
                        </div>

                        <!-- Hover Glow Effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-200/10 to-purple-200/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Third Row - Static Grid (No Sliding) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="(product, index) in products.slice(3)" :key="index">
                <div class="group bg-white rounded-sm shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden enhanced-card stagger-animation"
                     :class="`stagger-delay-${(index % 6) + 1}`">

                    <!-- Image Container with Overlay -->
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img :src="product.image" :alt="product.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-100 lazy-image">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Category Badge -->
{{--                        <div class="absolute top-4 left-4">--}}
{{--                            <span class="px-3 py-1 bg-blue-700/75 text-white text-xs font-semibold rounded-full">Product</span>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="font-card-title text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300" x-text="product.title"></h3>
                            <p class="font-card-description text-gray-600 line-clamp-3" x-text="product.description"></p>
                        </div>

                        <!-- Enhanced Arrow Button -->
                        <div class="mt-2 flex justify-between items-center">
                            <!-- Learn More Link -->
                            <a href="/destro" class="text-blue-600 hover:text-blue-800 font-button-small transition-colors duration-300">
                                Learn more →
                            </a>
                        </div>
                    </div>

                    <!-- Hover Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-200/10 to-purple-200/10 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            </template>
        </div>
    </div>
</section>

<!-- Services Section -->
<section x-data="{
    services: [
        {
            title: 'Cybersecurity Management Systems',
            description: 'Comprehensive security frameworks and management systems to protect vehicle networks and data from cyber threats.',
            icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
        },
        {
            title: 'Functional Safety',
            description: 'Expert guidance on ISO 26262 compliance and functional safety engineering for automotive systems.',
            icon: 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.268 15.5c-.77.833.192 2.5 1.732 2.5z'
        },
        {
            title: 'Software Update Management Systems',
            description: 'End-to-end OTA update solutions ensuring secure and reliable software deployment across vehicle fleets.',
            icon: 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'
        },
        {
            title: 'ASPICE (Automotive SPICE)',
            description: 'Process improvement and assessment services to achieve ASPICE compliance and automotive software excellence.',
            icon: 'M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
        },
        {
            title: 'AUTOSAR',
            description: 'AUTOSAR architecture implementation and migration services for standardized automotive software development.',
            icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
        }
    ],
    currentIndex: 0,
    autoSlide: true,
    slideInterval: null,
    init() {
        if (this.autoSlide) {
            this.startAutoSlide();
        }
        // Pause on hover
        this.$el.addEventListener('mouseenter', () => this.pauseAutoSlide());
        this.$el.addEventListener('mouseleave', () => this.startAutoSlide());
    },
    startAutoSlide() {
        this.slideInterval = setInterval(() => {
            this.nextSlide();
        }, 4000); // 4 seconds per slide
    },
    pauseAutoSlide() {
        clearInterval(this.slideInterval);
    },
    nextSlide() {
        this.currentIndex = (this.currentIndex + 1) % this.services.length;
    },
    prevSlide() {
        this.currentIndex = (this.currentIndex - 1 + this.services.length) % this.services.length;
    },
    goToSlide(index) {
        this.currentIndex = index;
    }
}" class="py-20 content-fade-in" style="background: linear-gradient(135deg, #0907C3 0%, #1411F5 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scale-in">
            <h2 class="font-heading-1 text-white mb-6 text-reveal">
                Our Services
            </h2>
            <p class="font-body-large text-blue-100 max-w-4xl mx-auto text-reveal">
                At DestroSolutions, we provide expert consulting and engineering services to support OEMs and Tier-1 suppliers in delivering secure, compliant, and future-ready vehicle platforms.
            </p>
        </div>

        <!-- Services Slider -->
        <div class="relative">
            <!-- Service Cards Container -->
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out"
                     :style="`transform: translateX(-${currentIndex * 100}%)`">
                    <template x-for="(service, index) in services" :key="index">
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 lg:p-12 text-center group hover:bg-white/20 transition-all duration-300">
                                <!-- Service Icon -->
                                <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" :d="service.icon"></path>
                                    </svg>
                                </div>

                                <!-- Service Title -->
                                <h3 class="font-heading-4 text-white mb-4" x-text="service.title"></h3>

                                <!-- Service Description -->
                                <p class="font-body-large text-blue-100 mb-8 max-w-2xl mx-auto" x-text="service.description"></p>

                                <!-- Learn More Button -->
                                <a href="/destro" class="inline-flex items-center px-8 py-4 bg-white/20 hover:bg-white/30 text-white rounded-xl font-button-large transition-all duration-300 hover:scale-105 backdrop-blur-sm">
                                    <span>Learn More</span>
                                    <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Navigation Controls -->
            <div class="flex items-center justify-center mt-12 space-x-4">
                <!-- Previous Button -->
                <button @click="prevSlide()"
                        class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white transition-all duration-300 hover:scale-110 backdrop-blur-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Dots Indicator -->
                <div class="flex items-center space-x-2">
                    <template x-for="(service, index) in services" :key="index">
                        <button @click="goToSlide(index)"
                                class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="currentIndex === index ? 'bg-white' : 'bg-white/40 hover:bg-white/60'">
                        </button>
                    </template>
                </div>

                <!-- Next Button -->
                <button @click="nextSlide()"
                        class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white transition-all duration-300 hover:scale-110 backdrop-blur-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

{{--        <!-- Bottom CTA -->--}}
{{--        <div class="mt-16 text-center">--}}
{{--            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 max-w-2xl mx-auto">--}}
{{--                <h3 class="text-2xl font-bold text-white mb-4">--}}
{{--                    Ready to Transform Your Automotive Solutions?--}}
{{--                </h3>--}}
{{--                <p class="text-blue-100 mb-6">--}}
{{--                    Let our experts help you navigate the complexities of automotive software development and compliance.--}}
{{--                </p>--}}
{{--                <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-blue-900 rounded-xl font-semibold hover:bg-blue-50 transition-all duration-300 hover:scale-105">--}}
{{--                    Get Started Today--}}
{{--                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>

<!-- SDV Solutions Section -->
<section x-data="{ cards: [
    {
      title: 'SDV Cloud',
      text: 'SDV Orchestrator Platform, Vehicle Software Update Platform & Digital Vehicle Twin, Subscription Management Platform, Virtual Workbenches for Simulations and DevOps',
      image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'Cloud Solutions'
    },
    {
      title: 'Over-the-Air (OTA)',
      text: 'Over-the-Air updates are essential for modern automotive software. We provide secure and efficient OTA strategies that reduce recall costs and keep vehicles at peak performance.',
      image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'Software Updates'
    },
    {
      title: 'Apps and Services Engineering',
      text: 'Create infotainment apps, driver-assist tools, and cloud-based services that enrich the driving experience. We cover development from embedded systems to backend services',
      image: 'https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'App Development'
    },
    {
      title: 'SDV OPS',
      text: 'Optimize operations for Software-Defined Vehicles with automated pipelines, continuous monitoring, and quick incident response.',
      image: 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
      link: '#',
      category: 'Operations'
    }
] }" class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24 content-fade-in">
    <div class="max-w-7xl md:w-[90%] xl:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scale-in">
            <h2 class="font-heading-2 text-gray-900 mb-6 text-reveal">
                Our Software-defined Vehicle (SDV) solutions
            </h2>
            <p class="font-body-large text-gray-600 max-w-3xl mx-auto text-reveal">
                Driving the shift towards Software-Defined Vehicles (SDVs)
            </p>
        </div>

        <!-- Enhanced Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="(card, index) in cards" :key="index">
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden enhanced-card stagger-animation"
                     :class="`stagger-delay-${(index % 6) + 1}`">

                    <!-- Image Container with Overlay -->
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img :src="card.image" alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 lazy-image">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-700/75 text-white text-xs font-semibold rounded-full" x-text="card.category"></span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="font-card-title text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300" x-text="card.title"></h3>
                            <p class="font-card-description text-gray-600 line-clamp-3" x-text="card.text"></p>
                        </div>

                        <!-- Enhanced Arrow Button -->
                        <div class="mt-2 flex justify-between items-center">
{{--                            <a :href="card.link" class="group/btn inline-flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">--}}
{{--                                <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
                            <!-- Learn More Link -->
                            <a :href="card.link" class="text-blue-600 hover:text-blue-800 font-button-small transition-colors duration-300">
                                Learn more →
                            </a>
                        </div>
                    </div>

                    <!-- Hover Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            </template>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="/destro" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-button-large shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                View All Solutions
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24 content-fade-in">
    <div class="max-w-7xl md:w-[90%] xl:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 scale-in">
            <h2 class="font-heading-1 text-gray-900 mb-6 text-reveal">
                Contact Us
            </h2>
            <p class="font-body-large text-gray-600 max-w-3xl mx-auto text-reveal">
                Ready to redefine your automotive and cybersecurity journey? We're here to help. Reach out to us for consultations, product inquiries, or partnership opportunities.
            </p>
        </div>

        <!-- Contact Content -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row enhanced-card">
            <!-- Left Side - Image -->
            <div class="w-full lg:w-1/2 slide-in-left">
                <div class="relative h-64 lg:h-full min-h-[400px]">
                    <!-- Skeleton placeholder -->
                    <div class="skeleton skeleton-image contact-image-skeleton absolute inset-0 z-10"></div>
                    <img data-src="https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                         alt="Contact Us"
                         class="w-full h-full object-cover lazy-image opacity-0 transition-opacity duration-1000 ease-out"
                         onload="this.classList.add('loaded'); this.style.opacity='1'; this.previousElementSibling.style.opacity='0'; setTimeout(() => this.previousElementSibling.remove(), 500);">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <!-- Content Overlay -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="font-heading-5 text-white mb-2">Get in Touch</h3>
                        <p class="font-body text-blue-100">Let's discuss your automotive cybersecurity needs</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="w-full lg:w-1/2 p-8 lg:p-12 slide-in-right">
                <form class="space-y-6">
                    <!-- Name and Email Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block font-label text-gray-700 mb-2">First Name</label>
                            <input type="text" id="firstName" name="firstName"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your first name">
                        </div>
                        <div>
                            <label for="lastName" class="block font-label text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="lastName" name="lastName"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your last name">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block font-label text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your email address">
                    </div>

                    <!-- Company -->
                    <div>
                        <label for="company" class="block font-label text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your company name">
                    </div>

                    <!-- Service Interest -->
                    <div>
                        <label for="service" class="block font-label text-gray-700 mb-2">Service Interest</label>
                        <select id="service" name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            <option value="">Select a service</option>
                            <option value="cybersecurity">Cybersecurity Management Systems</option>
                            <option value="functional-safety">Functional Safety</option>
                            <option value="software-updates">Software Update Management</option>
                            <option value="aspice">ASPICE Compliance</option>
                            <option value="autosar">AUTOSAR</option>
                            <option value="sdv-solutions">SDV Solutions</option>
                            <option value="consulting">Consulting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block font-label text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none"
                                  placeholder="Tell us about your project or requirements"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                                onclick="window.lazyLoadingSystem.addButtonLoading(this)"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-button-large py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
                            <span>Send Message</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Contact Info -->
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-label text-gray-900">Email</p>
                                <p class="font-body-small text-gray-600">info@destrosolutions.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-label text-gray-900">Phone</p>
                                <p class="font-body-small text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-12">

            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-500 rounded-xl shadow-lg mr-3">
                        <div class="text-white font-black text-xl tracking-tight">D</div>
                    </div>
                    <h3 class="font-brand text-2xl text-white">DestroSolutions</h3>
                </div>
                <p class="font-body text-gray-300 mb-6 max-w-md leading-relaxed">
                    Enabling the future of mobility through Software-Defined Vehicles (SDVs) with comprehensive automotive cybersecurity and compliance solutions.
                </p>

                <!-- Contact Info Compact -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-body-small text-gray-300">info@destrosolutions.com</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="font-body-small text-gray-300">+91-93987 93452 | +49-15510142201</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-heading-6 text-white mb-4">Solutions</h4>
                <ul class="space-y-2">
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Products</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Services</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Training</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">SDV Solutions</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Cybersecurity</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="font-heading-6 text-white mb-4">Company</h4>
                <ul class="space-y-2">
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">About Us</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Blog</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Careers</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Contact</a></li>
                    <li><a href="/destro" class="font-body-small text-gray-300 hover:text-blue-400 transition-colors duration-200">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- Offices Section -->
        <div class="border-t border-gray-800 py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- India Office -->
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                        <span class="text-sm">🇮🇳</span>
                    </div>
                    <div>
                        <h5 class="font-label text-white mb-1">India Office</h5>
                        <p class="font-body-small text-gray-400 leading-relaxed">
                            #649, Vasanth Nagar, KPHB,<br>
                            Hyderabad, Telangana, India 500082
                        </p>
                    </div>
                </div>

                <!-- Germany Office -->
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                        <span class="text-sm">🇩🇪</span>
                    </div>
                    <div>
                        <h5 class="font-label text-white mb-1">Germany Office</h5>
                        <p class="font-body-small text-gray-400 leading-relaxed">
                            Pfaffenwaldring,<br>
                            Stuttgart, Germany
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-800 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Copyright -->
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="font-body-small text-gray-400">
                        © 2025 DestroSolutions. All rights reserved.
                    </p>
                </div>

                <!-- Social Links -->
                <div class="flex items-center space-x-4">
                    <a href="/destro" class="w-8 h-8 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="/destro" class="w-8 h-8 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Alpine.js Logic -->
<script>
    function slider() {
        return {
            activeIndex: 0,
            progress: 0,
            interval: null,
            duration: 2000, // 6 seconds per slide for better UX
            isPaused: false,
            slides: [
                {
                    title: "Digital. Smart. Future.",
                    text: "MHP delivers innovative solutions for digital transformation across all industries with proven expertise.",
                    button: "Learn more",
                    link: "/destro",
                    image: "{{asset('images/dark2.jpg')}}",
                    position: "right"
                },

                {
                    title: "Driving Innovation Forward",
                    text: "We develop strategies and technologies that sustainably transform businesses and create lasting value.",
                    button: "Get in touch",
                    link: "/destro",
                    image: "{{asset('images/light3.jpg')}}",
                    position: "left"
                },

                {
                    title: "Transformation needs leadership",
                    text: "Why 75% fail - and how leadership makes the difference. Discover the key elements of successful digital transformation.",
                    button: "Explore More",
                    link: "/destro",
                    image: "{{asset('images/dark4.jpg')}}",
                    position: "right"
                },

                {
                    title: "Driving Innovation Forward",
                    text: "We develop strategies and technologies that sustainably transform businesses and create lasting value.",
                    button: "Know More",
                    link: "/destro",
                    image: "{{asset('images/light5.jpg')}}",
                    position: "left"
                }
            ],
            start() {
                this.animateProgress();
                // Pause on hover
                this.$el.addEventListener('mouseenter', () => this.pause());
                this.$el.addEventListener('mouseleave', () => this.resume());
            },
            animateProgress() {
                clearInterval(this.interval);
                this.progress = 0;
                const totalSteps = this.duration / 16; // 60fps (16ms per frame)
                const step = 100 / totalSteps;
                this.interval = setInterval(() => {
                    if (!this.isPaused) {
                        this.progress += step;
                        if (this.progress >= 100) {
                            this.progress = 100;
                            this.next();
                        }
                    }
                }, 16); // 60fps for smooth animation
            },
            next() {
                this.activeIndex = (this.activeIndex + 1) % this.slides.length;
                this.progress = 0; // Reset progress immediately
                this.animateProgress();
            },
            prev() {
                this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
                this.progress = 0; // Reset progress immediately
                this.animateProgress();
            },
            goToSlide(i) {
                this.activeIndex = i;
                this.progress = 0; // Reset progress immediately
                this.animateProgress();
            },
            pause() {
                this.isPaused = true;
            },
            resume() {
                this.isPaused = false;
            }
        }
    }
</script>

<!-- Debug and Testing Script -->
<script>
    // Debug function to test animations
    function testAnimations() {
        console.log('Testing animations...');

        // Reset all animations
        document.querySelectorAll('.content-fade-in, .slide-in-left, .slide-in-right, .scale-in, .stagger-animation, .text-reveal').forEach(el => {
            el.classList.remove('loaded', 'animate', 'visible', 'revealed');
        });

        // Wait a bit then trigger animations
        setTimeout(() => {
            window.debugTriggerAnimations();
            console.log('Animations triggered');
        }, 500);
    }

    // Add keyboard shortcut for testing (Ctrl+Shift+A)
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.shiftKey && e.key === 'A') {
            e.preventDefault();
            testAnimations();
        }
    });

    // Log system status
    console.log('Lazy Loading System Status:', {
        system: window.lazyLoadingSystem ? 'Loaded' : 'Not Loaded',
        debugFunction: typeof window.debugTriggerAnimations,
        testFunction: typeof testAnimations
    });
</script>
</body>

</html>
