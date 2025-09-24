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
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;900&family=Inter:wght@300;400;600;900&display=swap"
        rel="stylesheet">
    <style>
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
    </style>
</head>
<body class="font-inter">
<!-- resources/views/components/navbar.blade.php -->

<!-- resources/views/components/navbar.blade.php -->
@php
    $menuItems = [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Quantum', 'url' => '/quantum'],
        ['label' => 'Services', 'url' => '/services'],
        ['label' => 'Products', 'url' => '/products'],
        ['label' => 'Training', 'url' => '/training'],
        ['label' => 'Blog', 'url' => '/blog'],
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
    class="w-full"
>
    <!-- ---------- Top Main Logo (slides up when scrolled) ---------- -->
    <div
        x-ref="headerBlock"
        :class="scrolled ? 'transform -translate-y-full opacity-0' : 'transform translate-y-0 opacity-100'"
        class="bg-white w-full transition-all duration-500 ease-in-out relative z-40"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <!-- Left: Logo and Brand -->
                <div class="flex items-center space-x-4">
                    <!-- Professional Logo with Typography -->
                    <div class="relative group">
                        <!-- Logo Container -->
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-500 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <!-- Main Logo Letter -->
                            <div class="z-10 text-white font-black text-2xl tracking-tight">
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
                        <div class="text-2xl font-extrabold text-gray-900 leading-tight">Destro Solution</div>
                        <div class="text-sm text-gray-500">Bringing SDV to Life</div>
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
            <div class="px-6 py-6 space-y-1">
                @foreach ($menuItems as $item)
                    <a href="{{ $item['url'] }}"
                       class="group relative block text-gray-800 font-medium py-3 px-4 rounded-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600 bg-blue-50' : '' }}">
                        <span class="relative z-10">{{ $item['label'] }}</span>

                        <!-- Animated underline -->
                        <span
                            class="absolute left-4 bottom-2 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}"
                            style="width: calc(100% - 2rem);"></span>
                    </a>
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
        aria-label="Primary"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-16 flex items-center justify-between">
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
                            <a href="{{ $item['url'] }}"
                               class="group relative text-gray-800 font-medium px-3 py-2 transition-all duration-300 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600' : '' }}">
                                <span class="relative z-10">
                                    {{ $item['label'] }}
                                </span>

                                <!-- Gradient blue underline with smooth hover effect -->
                                <span
                                    class="absolute left-0 bottom-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}"></span>
                            </a>
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
            <div class="relative h-[400px] sm:h-[450px] lg:h-[500px]">
                <template x-for="(slide, index) in slides" :key="index">
                    <div
                        x-show="activeIndex === index"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform scale-105"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="absolute inset-0 w-full h-full flex flex-col lg:flex-row">
                        <!-- Mobile layout: Clean structure - Image first, then content -->
                        <div class="lg:hidden w-full h-auto bg-white">
                            <!-- Mobile Image Section - Clean, full-width image -->
                            <a :href="slide.link">
                                <div class="w-full h-48 bg-gray-50 flex items-center justify-center">
                                    <img :src="slide.image" alt="" class="w-full h-full object-cover">
                                </div>
                            </a>
                            <!-- Mobile Content Section - Clean white card -->
                            <div class="bg-blue-600 px-6 py-8">
                                <h2 class="text-2xl sm:text-3xl font-bold text-gray-100 mb-4" x-text="slide.title"></h2>
                                <p class="text-gray-100 text-base sm:text-lg mb-6 leading-relaxed"
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
                            class="hidden lg:block absolute inset-0 bg-contain sm:bg-cover bg-center bg-no-repeat"
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
                            <div class="relative max-w-xl group">
                                <!-- Glass morphism background -->
                                <div
                                    class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-3xl border border-white/20 shadow-2xl"></div>

                                <!-- Gradient overlay for depth -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-white/20 via-white/10 to-transparent rounded-3xl"></div>

                                <!-- Content -->
                                <div class="relative p-6 lg:p-8">
                                    <!-- Title with animation -->
                                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight transform transition-all duration-700 group-hover:scale-105"
                                        x-text="slide.title"
                                        x-transition:enter="transition ease-out duration-700"
                                        x-transition:enter-start="opacity-0 translate-y-8"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                    </h2>

                                    <!-- Description with animation -->
                                    <p class="text-white/90 text-base sm:text-lg mb-6 leading-relaxed transform transition-all duration-700 delay-100 group-hover:translate-x-2"
                                       x-text="slide.text"
                                       x-transition:enter="transition ease-out duration-700 delay-200"
                                       x-transition:enter-start="opacity-0 translate-y-8"
                                       x-transition:enter-end="opacity-100 translate-y-0">
                                    </p>

                                    <!-- CTA Button with enhanced animation -->
                                    <a :href="slide.link"
                                       class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500/90 to-blue-600/90 backdrop-blur-sm hover:from-blue-600 hover:to-blue-700 text-white rounded-2xl font-semibold shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 hover:-translate-y-1 border border-white/20"
                                       x-transition:enter="transition ease-out duration-700 delay-300"
                                       x-transition:enter-start="opacity-0 translate-y-8"
                                       x-transition:enter-end="opacity-100 translate-y-0">
                                        <span x-text="slide.button"></span>
                                        <svg
                                            class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
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
        <div class="bg-white py-6 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Left Arrow -->
                    <button @click="prev()"
                            class="group flex items-center justify-center w-12 h-12 border-2 border-blue-600 text-blue-600 rounded-2xl hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-0.5" fill="none"
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
                                    class="w-3 h-3 rounded-full bg-blue-200 transition-all duration-300 hover:bg-blue-400"
                                    x-show="activeIndex !== index"></div>
                                <!-- Active progress bar -->
                                <div x-show="activeIndex === index"
                                     class="h-3 rounded-full bg-blue-200 overflow-hidden w-16 transition-all duration-200 ease-in-out">
                                    <div
                                        class="h-full bg-gradient-to-r from-blue-500 to-blue-600 transition-all duration-50 ease-linear"
                                        :style="{ width: progress + '%' }"></div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Right Arrow -->
                    <button @click="next()"
                            class="group flex items-center justify-center w-12 h-12 border-2 border-blue-600 text-blue-600 rounded-2xl hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none"
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
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    Our drive, our purpose
                    <br>
                    <span class="text-blue-600">Enabling You To Shape A Better</span>
                    <br>
                    Tomorrow
                </h2>
            </div>

            <!-- Right Content -->
            <div class="space-y-8">
                <p class="text-lg sm:text-xl text-gray-700 leading-relaxed">
                    At DestroSolutions, we enable the future of mobility by driving the transition to Software-Defined
                    Vehicles (SDVs). Our expertise spans end-to-end automotive cybersecurity, software update
                    management, functional safety, and E/E architecture transformation. Our commitment to Safety &
                    security standards, expert training positions us as a trusted partner in delivering tomorrow’s
                    mobility—today.
                </p>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="#"
                       class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
      image: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
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
] }" class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                The Future Begins
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Entdecken Sie unsere innovativen Lösungen für die digitale Transformation
            </p>
        </div>

        <!-- Enhanced Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <template x-for="(card, index) in cards" :key="index">
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden hover:-translate-y-2 animate-fade-in-up"
                    :style="`animation-delay: ${index * 100}ms;`">

                    <!-- Image Container with Overlay -->
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img :src="card.image" alt=""
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <!-- Gradient Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full"
                                  x-text="card.category"></span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300"
                                x-text="card.title"></h3>
                            <p class="text-gray-600 text-sm leading-relaxed" x-text="card.text"></p>
                        </div>

                        <!-- Enhanced Arrow Button -->
                        <div class="mt-6 flex justify-between items-center">
                            <a :href="card.link"
                               class="group/btn inline-flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5"
                                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <!-- Learn More Link -->
                            <a :href="card.link"
                               class="text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors duration-300">
                                Learn more →
                            </a>
                        </div>
                    </div>

                    <!-- Hover Glow Effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            </template>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="#"
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
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
            position: 'left'
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
            image: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
            icon: 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12',
            position: 'right'
        }
    ]
}" class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
            Our Products
        </h2>
        <p class="text-gray-600 text-lg leading-relaxed line-clamp-3  mb-6">
        DestroSolutions delivers a robust portfolio of products engineered for the Software-Defined Vehicle era. Designed for security, compliance, and performance, our solutions seamlessly integrate into modern E/E architectures while aligning with global automotive standards.
        </p>

        <!-- Products with Alternating Layout -->
        <div class="space-y-16">
            <template x-for="(product, index) in products" :key="index">
                <!-- Product Card -->
                <div class=" overflow-hidden flex flex-col rounded-lg lg:flex-row items-center justify-center lg:items-stretch group hover:shadow-xl transition-all duration-300 gap-x-8"
                     :class="product.position === 'right' ? 'lg:flex-row-reverse' : 'lg:flex-row'">

                    <!-- Content Section -->
                    <div class="w-full lg:w-1/3 h-auto flex flex-col justify-center rounded-l-lg pl-8">
                        <h3 class="text-4xl font-bold text-gray-900 mb-4" x-text="product.title"></h3>
                        <!-- <p x-show="product.subtitle" class="text-lg font-semibold text-gray-500 uppercase tracking-wider mb-2" x-text="product.subtitle"></p> -->
                        <p class="text-gray-600 text-lg leading-relaxed line-clamp-3  mb-6" x-text="product.description"></p>
                        <a href="#" class="max-w-max inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 font-medium rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-105">
                            <span>Read more</span>
                            <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="product.icon"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Image Section -->
                    <div class="w-full lg:w-2/3 overflow-hidden">
                        <img :src="product.image" :alt="product.title "
                             class="w-full shadow-lg h-72 sm:h-72 lg:h-72 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105"
                             :class="product.position === 'right' ? 'lg:rounded-l-2xl lg:rounded-r-none' : 'lg:rounded-l-none lg:rounded-r-2xl'">
                    </div>
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
}" class="py-20" style="background: linear-gradient(135deg, #0907C3 0%, #1411F5 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                Our Services
            </h2>
            <p class="text-xl text-blue-100 max-w-4xl mx-auto leading-relaxed">
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
                                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4" x-text="service.title"></h3>

                                <!-- Service Description -->
                                <p class="text-blue-100 text-lg leading-relaxed mb-8 max-w-2xl mx-auto" x-text="service.description"></p>

                                <!-- Learn More Button -->
                                <a href="#" class="inline-flex items-center px-8 py-4 bg-white/20 hover:bg-white/30 text-white rounded-xl font-semibold transition-all duration-300 hover:scale-105 backdrop-blur-sm">
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
      image: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
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
] }" class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Our Software-defined Vehicle (SDV) solutions
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Driving the shift towards Software-Defined Vehicles (SDVs)
            </p>
        </div>

        <!-- Enhanced Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <template x-for="(card, index) in cards" :key="index">
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden hover:-translate-y-2">

                    <!-- Image Container with Overlay -->
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img :src="card.image" alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full" x-text="card.category"></span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300" x-text="card.title"></h3>
                            <p class="text-gray-600 text-sm leading-relaxed" x-text="card.text"></p>
                        </div>

                        <!-- Enhanced Arrow Button -->
                        <div class="mt-6 flex justify-between items-center">
                            <a :href="card.link" class="group/btn inline-flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <!-- Learn More Link -->
                            <a :href="card.link" class="text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors duration-300">
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
            <a href="#" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                View All Solutions
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Contact Us
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to redefine your automotive and cybersecurity journey? We're here to help. Reach out to us for consultations, product inquiries, or partnership opportunities.
            </p>
        </div>

        <!-- Contact Content -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col lg:flex-row">
            <!-- Left Side - Image -->
            <div class="w-full lg:w-1/2">
                <div class="relative h-64 lg:h-full min-h-[400px]">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Contact Us" 
                         class="w-full h-full object-cover">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <!-- Content Overlay -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Get in Touch</h3>
                        <p class="text-blue-100">Let's discuss your automotive cybersecurity needs</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="w-full lg:w-1/2 p-8 lg:p-12">
                <form class="space-y-6">
                    <!-- Name and Email Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" id="firstName" name="firstName" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your first name">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="lastName" name="lastName" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Enter your last name">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your email address">
                    </div>

                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                               placeholder="Enter your company name">
                    </div>

                    <!-- Service Interest -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
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
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none"
                                  placeholder="Tell us about your project or requirements"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
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
                                <p class="text-sm font-medium text-gray-900">Email</p>
                                <p class="text-sm text-gray-600">info@destrosolutions.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Phone</p>
                                <p class="text-sm text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gradient-to-br from-blue-50 to-blue-100 py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            
            <!-- Company Branding and Contact Information -->
            <div class="space-y-6">
                <!-- Logo -->
                <div>
                    <h3 class="text-3xl font-bold text-blue-900 mb-6">DestroSolutions</h3>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Email</p>
                            <p class="text-sm text-gray-600">info@destrosolutions.com</p>
                        </div>
                    </div>
                    
                    <!-- Phone India -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Phone (India)</p>
                            <p class="text-sm text-gray-600">+91-93987 93452</p>
                        </div>
                    </div>
                    
                    <!-- Phone Germany -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Phone (Germany)</p>
                            <p class="text-sm text-gray-600">+49-15510142201</p>
                        </div>
                    </div>
                </div>
                
                <!-- LinkedIn -->
                <div class="pt-4">
                    <a href="#" class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="space-y-6">
                <h4 class="text-xl font-bold text-blue-900 mb-6">QUICK LINKS</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Home</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Products</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Services</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Trainings</a>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">SDV</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Blog</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-colors duration-300">Contact US</a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Us - Addresses -->
            <div class="space-y-6">
                <h4 class="text-xl font-bold text-blue-900 mb-6">CONTACT US</h4>
                
                <!-- India Address -->
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                        <span class="text-lg">🇮🇳</span>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900 mb-1">India Office</p>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            #649, Vasanth Nagar, KPHB,<br>
                            Hyderabad, Telangana,<br>
                            India 500082
                        </p>
                    </div>
                </div>
                
                <!-- Divider -->
                <div class="border-t border-gray-300 my-6"></div>
                
                <!-- Germany Address -->
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                        <span class="text-lg">🇩🇪</span>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900 mb-1">Germany Office</p>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Pfaffenwaldring,<br>
                            Stuttgart, Germany
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="mt-16 pt-8 border-t border-gray-300">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Copyright -->
                <div class="flex items-center mb-4 lg:mb-0">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="text-sm text-gray-600">
                        Copyright © 2025 All Right Reserved By Destro Solutions
                    </p>
                </div>
                
                <!-- Decorative Element -->
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
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
                    title: "Transformation needs leadership",
                    text: "Why 75% fail - and how leadership makes the difference. Discover the key elements of successful digital transformation.",
                    button: "Download white paper",
                    link: "#",
                    image: "{{asset('images/dark1.jpg')}}",
                    position: "right"
                },
                {
                    title: "Digital. Smart. Future.",
                    text: "MHP delivers innovative solutions for digital transformation across all industries with proven expertise.",
                    button: "Learn more",
                    link: "#",
                    image: "{{asset('images/dark2.jpg')}}",
                    position: "left"
                },
                {
                    title: "Driving Innovation Forward",
                    text: "We develop strategies and technologies that sustainably transform businesses and create lasting value.",
                    button: "Get in touch",
                    link: "#",
                    image: "{{asset('images/light.jpg')}}",
                    position: "center"
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
</body>

</html>
