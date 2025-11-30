<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Love Economy Church') }} - Building a Nation Where Christ is All</title>
    
    <!-- Meta Tags -->
    <meta property="og:title" content="Love Economy UK - Christ-Centered Church" />
    <meta property="og:description" content="Building a nation where Christ is all and in all. A Christ-centered church in the UK committed to dispensing Christ with love through the power of the Holy Spirit." />
    <meta property="og:site_name" content="Love Economy UK" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(135deg, #0057a2 0%, #15215b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-6px);
        }
        .section-divider {
            height: 3px;
            background: linear-gradient(90deg, transparent, #0057a2, transparent);
            width: 120px;
            margin: 0 auto;
            border-radius: 2px;
        }
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        .image-overlay {
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.4) 100%);
        }
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
        }
        .custom-blue {
            color: #0057a2;
        }
        .custom-blue-bg {
            background-color: #0057a2;
        }
        .custom-blue-bg:hover {
            background-color: #15215b;
        }
        .custom-blue-border {
            border-color: #0057a2;
        }
        a.custom-blue:hover {
            color: #15215b;
        }
        .event-title {
            transition: color 0.3s ease;
        }
        .group:hover .event-title {
            color: #0057a2;
        }
        .events-slider {
            position: relative;
            overflow: hidden;
        }
        .events-slider-container {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .event-slide {
            min-width: 100%;
            flex-shrink: 0;
        }
        @media (min-width: 768px) {
            .event-slide {
                min-width: 50%;
            }
        }
        @media (min-width: 1024px) {
            .event-slide {
                min-width: 33.333%;
            }
        }
        .slider-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(0, 87, 162, 0.1);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #0057a2;
        }
        .slider-button:hover {
            background: #0057a2;
            border-color: #0057a2;
            color: white;
        }
        .slider-button.prev {
            left: 10px;
        }
        .slider-button.next {
            right: 10px;
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-900">
    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-lg border-b border-gray-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home.index') }}" class="flex items-center group">
                        <img src="{{ asset('img/demo/logo-loading.png') }}" alt="Love Economy Church" class="h-14 w-auto transition-transform group-hover:scale-105" style="filter: brightness(0);" />
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="/#about" class="px-5 py-2.5 text-gray-900 transition-colors font-medium rounded-lg hover:bg-gray-50">About</a>
                    <a href="/#sermons" class="px-5 py-2.5 text-gray-900 transition-colors font-medium rounded-lg hover:bg-gray-50">Sermons</a>
                    <a href="/#get-involved" class="px-5 py-2.5 text-gray-900 transition-colors font-medium rounded-lg hover:bg-gray-50">Get Involved</a>
                    <a href="/#contact" class="px-5 py-2.5 text-gray-900 transition-colors font-medium rounded-lg hover:bg-gray-50">Contact</a>
                    <a href="{{ route('job.index')}}" class="px-5 py-2.5 text-gray-900 transition-colors font-medium rounded-lg hover:bg-gray-50">Jobs</a>
                    <a href="/#contact" class="ml-2 text-white px-7 py-2.5 rounded-full transition-all font-semibold hover:scale-105 custom-blue-bg">Give</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-gray-900 p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200">
            <div class="px-4 py-6 space-y-3">
                <a href="#about" class="block px-4 py-3 text-gray-900 hover:bg-gray-50 rounded-lg transition-colors font-medium">About</a>
                <a href="#sermons" class="block px-4 py-3 text-gray-900 hover:bg-gray-50 rounded-lg transition-colors font-medium">Sermons</a>
                <a href="#get-involved" class="block px-4 py-3 text-gray-900 hover:bg-gray-50 rounded-lg transition-colors font-medium">Get Involved</a>
                <a href="#contact" class="block px-4 py-3 text-gray-900 hover:bg-gray-50 rounded-lg transition-colors font-medium">Contact</a>
                <a href="#contact" class="block text-white px-6 py-3 rounded-full transition-colors font-semibold text-center mt-4 custom-blue-bg">Give</a>
                <a href="{{ route('job.index')}}" class="block text-white px-6 py-3 rounded-full transition-colors font-semibold text-center mt-4 custom-blue-bg">Jobs</a>
            </div>
        </div>
    </nav>
    
  @yield('content')
    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- About -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">About</h4>
                    <ul class="space-y-3">
                        <li><a href="#about" class="hover:text-white transition-colors">Our Story</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">Vision & Mission</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">Leadership</a></li>
                    </ul>
                </div>
                
                <!-- Connect -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Connect</h4>
                    <ul class="space-y-3">
                        <li><a href="/#get-involved" class="hover:text-white transition-colors">Get Involved</a></li>
                        <li><a href="/#contact" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="/#contact" class="hover:text-white transition-colors">Give</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Resources</h4>
                    <ul class="space-y-3">
                        <li><a href="/#sermons" class="hover:text-white transition-colors">Sermons</a></li>
                        <li><a href="/#get-involved" class="hover:text-white transition-colors">Events</a></li>
                        <li><a href="/#contact" class="hover:text-white transition-colors">Prayer Request</a></li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="https://web.facebook.com/LoveEconomyChurch" target="_blank" class="transition-all transform hover:scale-110 hover:-rotate-3 text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/loveeconomychurch" target="_blank" class="transition-all transform hover:scale-110 hover:rotate-3 text-white">
                            <span class="sr-only">X</span>
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <a href="http://instagram.com/loveeconomychurch" target="_blank" class="transition-all transform hover:scale-110 hover:-rotate-3 text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@bishopisaacotiboateng" target="_blank" class="transition-all transform hover:scale-110 hover:rotate-3 text-white">
                            <span class="sr-only">YouTube</span>
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-10 text-center">
                <p class="text-gray-500 text-lg">&copy; {{ date('Y') }} Love Economy Church. All rights reserved.</p>
                <p class="text-gray-500 mt-3 text-lg">Love Economy Church is a diverse, family driven, community focused, and life giving church in the UK.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script>
        // Events Slider
        let currentSlide = 0;
        let slider, totalSlides;
        
        function getSlidesPerView() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }
        
        function moveSlider(direction) {
            if (!slider) return;
            
            const slidesPerView = getSlidesPerView();
            const maxSlide = Math.max(0, totalSlides - slidesPerView);
            
            currentSlide += direction;
            
            if (currentSlide < 0) {
                currentSlide = maxSlide;
            } else if (currentSlide > maxSlide) {
                currentSlide = 0;
            }
            
            const slideWidth = 100 / slidesPerView;
            slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
        }
        
        // Initialize slider position on load and resize
        function updateSlider() {
            slider = document.getElementById('eventsSlider');
            if (!slider) return;
            
            totalSlides = slider.children.length;
            const slidesPerView = getSlidesPerView();
            const maxSlide = Math.max(0, totalSlides - slidesPerView);
            
            if (currentSlide > maxSlide) {
                currentSlide = maxSlide;
            }
            
            const slideWidth = 100 / slidesPerView;
            slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
        }
        
        window.addEventListener('resize', updateSlider);
        document.addEventListener('DOMContentLoaded', updateSlider);
        
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('main-nav');
            if (window.pageYOffset > 100) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
