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
        class="bg-white w-full transition-all duration-500 ease-in-out"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center space-x-4">
                <!-- Use your provided SVG icon here -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 -43.92 122.88 122.88"
                     class="h-10 w-10 text-blue-700 transition-colors duration-300 hover:text-blue-500"
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

                <div>
                    <div class="text-2xl font-extrabold text-gray-900 leading-tight">Destro Solution</div>
                    <div class="text-sm text-gray-500">Bringing SDV to Life</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------- Initial Navbar (visible initially, becomes fixed when scrolled) ---------- -->
    <nav
        :class="scrolled ? 'fixed top-0 left-0 w-full z-50 bg-white shadow-sm' : 'relative bg-white'"
        class="transition-all duration-500 ease-in-out"
        aria-label="Primary"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-16 flex items-center justify-between">
                <!-- Left: small logo + menu -->
                <div class="flex items-center space-x-6">
                    <!-- small logo icon (hidden initially, shows when scrolled) -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 -43.92 122.88 122.88"
                         :class="scrolled ? 'h-10 w-10 text-blue-700 transition-colors duration-300 hover:text-blue-500' : 'h-0 w-0 opacity-0'"
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
                    <div class="hidden md:flex items-center space-x-8">
                        @foreach ($menuItems as $item)
                            <a href="{{ $item['url'] }}"
                               class="group relative text-gray-800 font-medium px-3 py-2 transition-all duration-300 hover:text-blue-600 {{ request()->is(trim($item['url'], '/')) ? 'text-blue-600' : '' }}">
                                <span class="relative z-10">
                                    {{ $item['label'] }}
                                </span>

                                <!-- Gradient blue underline with smooth hover effect -->
                                <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-blue-700 transition-all duration-300 group-hover:w-full {{ request()->is(trim($item['url'], '/')) ? 'w-full' : '' }}"></span>
                                
                                <!-- Subtle background hover effect -->
                                <!-- <span class="absolute inset-0 bg-gradient-to-r from-blue-50 to-blue-100 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span> -->
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Right: search + language (and mobile hamburger) -->
                <div class="flex items-center space-x-4">
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Search -->
                        <button class="group relative text-gray-600 hover:text-blue-600 p-3 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:shadow-md hover:scale-105">
                            <svg class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <!-- Subtle glow effect -->
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                        </button>

                        <!-- Language -->
                        <button class="group relative text-gray-600 hover:text-blue-600 p-3 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:shadow-md hover:scale-105">
                            <!-- <svg class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 3c4.97 0 9 4.03 9 9s-4.03 9-9 9-9-4.03-9-9 4.03-9 9-9z"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>

                            <!-- Subtle glow effect -->
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-sm"></div>
                        </button>
                    </div>

                    <!-- Mobile hamburger -->
                    <div class="md:hidden">
                        <button @click="open = !open" class="p-2 text-gray-700 focus:outline-none">
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile dropdown -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden bg-white border-t border-gray-100"
        >
            <div class="px-4 py-4 space-y-2">
                @foreach ($menuItems as $item)
                    <a href="{{ $item['url'] }}" class="block text-gray-800 font-medium py-2 hover:text-[#0000CC]">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <div class="flex items-center space-x-4 pt-3">
                    <button class="text-gray-600 hover:text-[#0000CC] p-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <button class="text-gray-600 hover:text-[#0000CC] p-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 3c4.97 0 9 4.03 9 9s-4.03 9-9 9-9-4.03-9-9 4.03-9 9-9z"/>
                        </svg>
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
        <div class="relative h-[500px] sm:h-[600px] lg:h-[700px]">
            <template x-for="(slide, index) in slides" :key="index">
                <div
                    x-show="activeIndex === index"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform scale-105"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute inset-0 w-full h-full flex flex-col lg:flex-row"
                >
                    <!-- Desktop Background Image -->
                    <div
                        class="hidden lg:block absolute inset-0 bg-cover bg-center bg-no-repeat"
                        :style="`background-image: url(${slide.image})`">
                    </div>
                    <div class="hidden lg:block absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/60 to-transparent"></div>

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
                        <div class="relative max-w-2xl group">
                            <!-- Glass morphism background -->
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-3xl border border-white/20 shadow-2xl"></div>
                            
                            <!-- Gradient overlay for depth -->
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-white/10 to-transparent rounded-3xl"></div>
                            
                            <!-- Content -->
                            <div class="relative p-8 lg:p-12">
                                <!-- Title with animation -->
                                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight transform transition-all duration-700 group-hover:scale-105" 
                                    x-text="slide.title"
                                    x-transition:enter="transition ease-out duration-700"
                                    x-transition:enter-start="opacity-0 translate-y-8"
                                    x-transition:enter-end="opacity-100 translate-y-0">
                                </h2>
                                
                                <!-- Description with animation -->
                                <p class="text-white/90 text-lg sm:text-xl mb-8 leading-relaxed transform transition-all duration-700 delay-100 group-hover:translate-x-2" 
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
                                    <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Subtle glow effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-purple-400/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl"></div>
                        </div>
                    </div>

                    <!-- Mobile layout: Image on top, card below -->
                    <div class="lg:hidden w-full">
                        <div class="relative h-80 overflow-hidden">
                            <img :src="slide.image" alt="" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                        <div class="bg-white w-full p-8 shadow-lg">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4" x-text="slide.title"></h2>
                            <p class="text-gray-700 text-lg mb-6" x-text="slide.text"></p>
                            <a :href="slide.link"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300">
                                <span x-text="slide.button"></span>
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
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
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="flex items-center space-x-4">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="relative cursor-pointer" @click="goToSlide(index)">
                            <!-- Inactive dot -->
                            <div class="w-3 h-3 rounded-full bg-blue-200 transition-all duration-300 hover:bg-blue-400" 
                                 x-show="activeIndex !== index"></div>
                            <!-- Active progress bar -->
                            <div x-show="activeIndex === index"
                                 class="h-3 rounded-full bg-blue-200 overflow-hidden w-16 transition-all duration-200 ease-in-out">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 transition-all duration-50 ease-linear"
                                     :style="{ width: progress + '%' }"></div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Right Arrow -->
                <button @click="next()"
                        class="group flex items-center justify-center w-12 h-12 border-2 border-blue-600 text-blue-600 rounded-2xl hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
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
                    As a technology and business partner, MHP digitizes its clients' processes and products and supports them in their IT transformations along the entire value chain. As a digitalization pioneer in the mobility and manufacturing sectors, MHP applies its expertise to a wide range of industries and is the premium partner for thought leaders on their path to a Better Tomorrow.
                </p>
                
                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        Who we are
                        <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
      title: 'Digitale Kompetenz als Wettbewerbsvorteil',
      text: 'Strategisch transformieren, unternehmerisch profitieren',
      image: '{{asset("images/img_1.png")}}',
      link: '#',
      category: 'Digital Transformation'
    },
    {
      title: 'Mit KI die volle Datenpower entfesseln',
      text: 'Produktivität maximieren, Geschäftsergebnisse transformieren.',
      image: '{{asset("images/img_2.png")}}',
      link: '#',
      category: 'Artificial Intelligence'
    },
    {
      title: 'Agilität für nachhaltigen Erfolg',
      text: 'Schneller anpassen, langfristig profitieren.',
      image: '{{asset("images/img.png")}}',
      link: '#',
      category: 'Agile Solutions'
    },
    {
      title: 'Cloud-First Strategien',
      text: 'Skalierbare Lösungen für moderne Unternehmen.',
      image: '{{asset("images/dark1.jpg")}}',
      link: '#',
      category: 'Cloud Computing'
    }
] }" class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 lg:py-24">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Zukunft beginnt jetzt
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Entdecken Sie unsere innovativen Lösungen für die digitale Transformation
            </p>
        </div>

        <!-- Enhanced Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="(card, index) in cards" :key="index">
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col overflow-hidden hover:-translate-y-2"
                     x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateY(30px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateY(0)'; }, index * 100)"
                     style="transition: all 0.6s ease-out;">
                    
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
                            <a :href="card.link"
                               class="group/btn inline-flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-lg">
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



<!-- Inspirational Topics Section -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Inspirational Topics
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover insights, success stories, and innovative solutions
            </p>
        </div>

        <!-- Alternating Content Blocks -->
        <div class="space-y-16">
            <!-- Publications Block -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Content -->
                <div class="order-2 lg:order-1" 
                     x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateX(-50px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateX(0)'; }, 200)"
                     style="transition: all 0.8s ease-out;">
                    <div class="max-w-lg">
                        <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                            Publications
                        </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            Learn more about MHP studies and white papers and download your free copy. Access our latest research and insights.
                        </p>
                        <a href="#" class="group inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            Read more
                            <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="order-1 lg:order-2 relative"
                     x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateX(50px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateX(0)'; }, 400)"
                     style="transition: all 0.8s ease-out;">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl group">
                        <img src="{{asset('images/dark1.jpg')}}" alt="Professional with tablet" class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Floating Badge -->
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                            <span class="text-sm font-semibold text-gray-900">Research</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Stories Block -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Image -->
                <div class="relative"
                     x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateX(-50px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateX(0)'; }, 200)"
                     style="transition: all 0.8s ease-out;">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl group">
                        <img src="{{asset('images/dark2.jpg')}}" alt="Success story" class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Floating Badge -->
                        <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                            <span class="text-sm font-semibold text-gray-900">Case Study</span>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div 
                     x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateX(50px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateX(0)'; }, 400)"
                     style="transition: all 0.8s ease-out;">
                    <div class="max-w-lg">
                        <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                            Success Stories
                        </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            We want our clients to be successful. Because your success is our success, too. By providing excellent service, we help you achieve your goals.
                        </p>
                        <a href="#" class="group inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            Read more
                            <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA Section -->
        <div class="mt-20 text-center"
             x-intersect="$el.style.opacity = '0'; $el.style.transform = 'translateY(30px)'; setTimeout(() => { $el.style.opacity = '1'; $el.style.transform = 'translateY(0)'; }, 600)"
             style="transition: all 0.8s ease-out;">
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-3xl p-12 shadow-lg">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                    Ready to Transform Your Business?
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Join thousands of successful companies who have transformed their operations with our innovative solutions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        Get Started Today
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-xl font-semibold transition-all duration-300 hover:scale-105">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    x-data="{
    cards: [
      {
        title: 'Digitale Kompetenz als Wettbewerbsvorteil',
        text: 'Strategisch transformieren, unternehmerisch profitieren',
        image: 'https://via.placeholder.com/600x400?text=Image+1',
        link: '#'
      },
      {
        title: 'Mit KI die volle Datenpower entfesseln',
        text: 'Produktivität maximieren, Geschäftsergebnisse transformieren.',
        image: 'https://via.placeholder.com/600x400?text=Image+2',
        link: '#'
      }
    ]
  }"
    class="bg-gray-50 py-12 sm:py-16 lg:py-20"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Title -->
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-10 sm:mb-14">
            Zukunft beginnt jetzt
        </h2>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

            <!-- Card -->
            <template x-for="(card, index) in cards" :key="index">
                <div
                    class="bg-white rounded-3xl shadow hover:shadow-lg transition flex flex-col overflow-hidden"
                >
                    <!-- Image -->
                    <div class="h-52 sm:h-64 overflow-hidden">
                        <img :src="card.image" alt="" class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2" x-text="card.title"></h3>
                            <p class="text-gray-600 text-sm sm:text-base" x-text="card.text"></p>
                        </div>

                        <!-- Arrow Button -->
                        <div class="mt-6 flex justify-end">
                            <a :href="card.link"
                               class="inline-flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>


<!-- Alpine.js Logic -->
<script>
    function slider() {
        return {
            activeIndex: 0,
            progress: 0,
            interval: null,
            duration: 6000, // 6 seconds per slide for better UX
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
