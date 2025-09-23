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
        ['label' => 'Insights', 'url' => '/insights'],
        ['label' => 'Branchen', 'url' => '/branchen'],
        ['label' => 'Services', 'url' => '/services'],
        ['label' => 'Products', 'url' => '/products'],
        ['label' => 'Karriere', 'url' => '/karriere'],
        ['label' => 'Über Us', 'url' => '/about'],
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
                    <div class="text-sm text-gray-500">A clean & professional header</div>
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
                    <div class="hidden md:flex items-center space-x-6">
                        @foreach ($menuItems as $item)
                            <a href="{{ $item['url'] }}"
                               class="group relative text-gray-800 font-medium px-0 py-0">
                                <span class="{{ request()->is(trim($item['url'], '/')) ? 'text-[#0000CC]' : '' }}">
                                    {{ $item['label'] }}
                                </span>

                                <!-- underline: active = full, else hover expand -->
                                <span
                                    class="absolute left-0 -bottom-1 h-[2px] bg-[#0000CC] transition-all duration-300"
                                    :class=" {{ request()->is(trim($item['url'], '/')) ? '' : '' }}"
                                    style="@if(request()->is(trim($item['url'], '/'))) width:100%; @else width:0%; @endif"
                                ></span>

                                <!-- alternative approach to animate hover (works even without inline style if you prefer group-hover) -->
                                <style>
                                    /* To avoid Tailwind purging a few classes we also add this tiny rule for hover effect */
                                    .nav-link-{{ \Illuminate\Support\Str::slug($item['label']) }}:hover .hover-underline {
                                        width: 100% !important;
                                    }
                                </style>
                                <span
                                    class="hover-underline absolute left-0 -bottom-1 h-[2px] bg-[#0000CC] transition-all duration-300"
                                    style="@if(request()->is(trim($item['url'], '/'))) width:100%; @else width:0; @endif"></span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Right: search + language (and mobile hamburger) -->
                <div class="flex items-center space-x-4">
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Search -->
                        <button class="text-gray-600 hover:text-[#0000CC] p-2">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>

                        <!-- Language -->
                        <button class="text-gray-600 hover:text-[#0000CC] p-2">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 3c4.97 0 9 4.03 9 9s-4.03 9-9 9-9-4.03-9-9 4.03-9 9-9z"/>
                            </svg>
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

<!-- Banner / Hero Section -->
<div x-data="slider()" x-init="start()" class="relative w-full overflow-hidden bg-gray-50">

    <!-- Slides -->
    <div class="relative h-[500px] sm:h-[600px] lg:h-[650px]">
        <template x-for="(slide, index) in slides" :key="index">
            <div
                x-show="activeIndex === index"
                x-transition
                class="absolute inset-0 w-full h-full flex flex-col lg:flex-row"
            >
                <!-- Desktop Background Image -->
                <div
                    class="hidden lg:block absolute inset-0 bg-cover bg-center"
                    :style="`background-image: url(${slide.image})`">
                </div>
                <div class="hidden lg:block absolute inset-0 bg-black/30"></div>

                <!-- Content Wrapper -->
                <div
                    class="relative flex-1 flex items-center justify-center lg:justify-start px-6 sm:px-12 lg:px-20 z-10"
                    :class="{
          'lg:justify-start text-left': slide.position === 'left',
          'lg:justify-center text-center': slide.position === 'center',
          'lg:justify-end text-right': slide.position === 'right'
        }"
                >
                    <!-- Text Card -->
                    <div class="relative max-w-lg bg-white/70 backdrop-blur rounded-xl p-6 lg:p-10 shadow-md">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4" x-text="slide.title"></h2>
                        <p class="text-gray-700 text-base sm:text-lg mb-6" x-text="slide.text"></p>
                        <a :href="slide.link"
                           class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium shadow transition">
                            <span x-text="slide.button"></span>
                        </a>
                    </div>
                </div>

                <!-- Mobile layout: Image on top, card below -->
                <div class="lg:hidden w-full">
                    <img :src="slide.image" alt="" class="w-full h-64 object-cover">
                    <div class="bg-white w-full p-6 shadow-md">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4" x-text="slide.title"></h2>
                        <p class="text-gray-700 text-base mb-6" x-text="slide.text"></p>
                        <a :href="slide.link"
                           class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium shadow transition">
                            <span x-text="slide.button"></span>
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </div>



    <!-- Indicators -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <div class="relative">
                <!-- Inactive dot -->
                <div class="w-3 h-3 rounded-full bg-blue-400/40" x-show="activeIndex !== index"></div>
                <!-- Active progress bar -->
                <div x-show="activeIndex === index"
                     class="h-3 rounded-full bg-blue-600 overflow-hidden w-10">
                    <div class="h-full bg-blue-600"
                         :style="{ width: progress + '%' }"
                         class="transition-all duration-100"></div>
                </div>
            </div>
        </template>
    </div>

    <!-- Left Arrow -->
    <button @click="prev()"
            class="absolute top-1/2 left-4 -translate-y-1/2 w-10 h-10 flex items-center justify-center border-2 border-blue-600 text-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <!-- Right Arrow -->
    <button @click="next()"
            class="absolute top-1/2 right-4 -translate-y-1/2 w-10 h-10 flex items-center justify-center border-2 border-blue-600 text-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </button>
</div>

<section x-data="{ cards: [
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
] }" class="bg-gray-50 py-12">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-10">Zukunft beginnt jetzt</h2>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

            <template x-for="(card, index) in cards" :key="index">
                <div class="bg-white rounded-3xl shadow hover:shadow-lg transition flex flex-col overflow-hidden">

                    <!-- Image -->
                    <div class="h-56 sm:h-64 overflow-hidden">
                        <img :src="card.image" alt="" class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2" x-text="card.title"></h3>
                            <p class="text-gray-600 text-sm sm:text-base" x-text="card.text"></p>
                        </div>

                        <!-- Arrow Button -->
                        <div class="mt-6">
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
      },
      {
        title: 'Agilität für nachhaltigen Erfolg',
        text: 'Schneller anpassen, langfristig profitieren.',
        image: 'https://via.placeholder.com/600x400?text=Image+3',
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card -->
            <template x-for="(card, index) in cards" :key="index">
                <div
                    class="bg-white rounded-3xl shadow hover:shadow-lg transition flex flex-col overflow-hidden"
                >
                    <!-- Image -->
                    <div class="h-52 sm:h-56 lg:h-64 overflow-hidden">
                        <img :src="card.image" alt="" class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-1 p-6">
                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2" x-text="card.title"></h3>
                            <p class="text-gray-600 text-sm sm:text-base" x-text="card.text"></p>
                        </div>

                        <!-- Arrow Button -->
                        <div class="mt-6">
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
            duration: 5000, // 5 seconds per slide
            slides: [
                {
                    title: "Finden. Leasen. Losfahren.",
                    text: "Für die Deutsche Leasing AG entwickelt MHP eine innovative Vertriebslösung für Gewerbekunden, die Maßstäbe setzt.",
                    button: "Success Story lesen",
                    link: "#",
                    image: "{{asset('images/img.png')}}",
                    position: "right"
                },
                {
                    title: "Digital. Smart. Future.",
                    text: "MHP liefert innovative Lösungen für die digitale Transformation in allen Branchen.",
                    button: "Mehr erfahren",
                    link: "#",
                    image: "{{asset('images/img_1.png')}}",
                    position: "left"
                },
                {
                    title: "Driving Innovation.",
                    text: "Wir entwickeln Strategien und Technologien, die Unternehmen nachhaltig verändern.",
                    button: "Kontakt aufnehmen",
                    link: "#",
                    image: "{{asset('images/img_2.png')}}",
                    position: "left"
                }
            ],
            start() {
                this.animateProgress();
            },
            animateProgress() {
                clearInterval(this.interval);
                this.progress = 0;
                let step = 100 / (this.duration / 100); // increment per 100ms
                this.interval = setInterval(() => {
                    this.progress += step;
                    if (this.progress >= 100) {
                        this.next();
                    }
                }, 100);
            },
            next() {
                this.activeIndex = (this.activeIndex + 1) % this.slides.length;
                this.animateProgress();
            },
            prev() {
                this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
                this.animateProgress();
            },
            goToSlide(i) {
                this.activeIndex = i;
                this.animateProgress();
            }
        }
    }
</script>


</body>
</html>
