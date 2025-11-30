@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
  <!-- Hero Section - Simple Design -->
  <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/bg_1.JPG') }}');"></div>
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-4 lg:px-4 text-center text-white py-32">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                We are a diverse, life-giving church in the UK.
            </h1>
            
            <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto leading-relaxed">
                Building a nation where Christ is all and in all. Dispensing Christ with love through the power of the Holy Spirit.
            </p>
            
            <div class="mb-10">
                <p class="text-sm text-gray-300 uppercase tracking-wider mb-2">Join Us on Sundays</p>
                <p class="text-2xl md:text-3xl font-bold">9:30AM + 11:00AM</p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('pages.new-here') }}" class="text-white px-8 py-4 rounded-full font-semibold custom-blue-bg hover:opacity-90 transition-opacity inline-flex items-center justify-center">
                    New Here?
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#contact" class="text-white px-8 py-4 rounded-full font-semibold border-2 border-white/50 hover:bg-white/10 transition-all inline-flex items-center justify-center">
                    Get Directions
                </a>
            </div>
        </div>
    </section>
    
    <!-- Latest Sermon Section -->
    <section id="sermons" class="py-24 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Watch Us</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="rounded-3xl overflow-hidden card-hover">
                    <div class="relative aspect-video rounded-3xl">
                        <div class="absolute inset-0 bg-cover bg-center rounded-3xl" style="background-image: url('{{ asset('images/bg_2.JPG') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent rounded-3xl"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button  class="group bg-white/95 hover:bg-white rounded-full p-10 transition-all transform hover:scale-110">
                                <a  target="_blank" href="https://www.youtube.com/@bishopisaacotiboateng">
                                <svg class="w-24 h-24 ml-3 custom-blue" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="p-10 lg:p-14">
                        <div class="flex items-center gap-3 mb-4">
                            <!-- <span class="px-4 py-1.5 rounded-full text-sm font-semibold text-white custom-blue-bg">Latest</span> -->
                            <!-- <span class="text-gray-500 text-sm">November 9, 2025</span> -->
                        </div>
                        <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">All the words of this life</h3>
                        <!-- <p class="text-lg text-gray-600 mb-6 font-medium">Speaker Name</p> -->
                        <p class="text-gray-700 leading-relaxed mb-10 text-lg max-w-3xl">
                           Welcome to a new world - a new land called Christ. See your life transform before your eyes. Welcome to Christ World.
                        </p>
                        <a target="_blank" href="https://www.youtube.com/@bishopisaacotiboateng" class="inline-flex items-center text-white px-8 py-4 rounded-full font-semibold text-lg group transition-all custom-blue-bg">
                            Watch Now
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Discover Love Economy Section - New Approach -->
    <section id="about" class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Discover Love Economy</h2>
                <div class="section-divider"></div>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mt-8 font-light">
                    Whether you're new to faith or have been following Jesus for years, we want to help you take your next step.
                </p>
            </div>
            
            <!-- Large Split Layout -->
            <div class="space-y-12">
                <!-- Row 1: New Here - Large Image Left, Content Right -->
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="relative aspect-[4/3] lg:aspect-square rounded-3xl overflow-hidden group">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_1.JPG') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-10 text-white">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-3xl font-bold">New Here?</h3>
                            </div>
                            <p class="text-lg text-gray-200 mb-6">Learn more about who we are and what we believe as a church family.</p>
                            <a href="{{ route('pages.new-here') }}" class="inline-flex items-center bg-white text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all group">
                                Learn More
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:pl-12">
                        <div class="space-y-6">
                            <h3 class="text-4xl font-bold text-gray-900">Welcome to Our Family</h3>
                            <p class="text-xl text-gray-600 leading-relaxed">
                                We're excited that you're here! Whether you're exploring faith for the first time or looking for a new church home, we're here to help you discover what it means to be part of Love Economy Church.
                            </p>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Our community is built on love, grace, and the power of the Holy Spirit. We believe in building a nation where Christ is all and in all, and we'd love for you to be part of this journey.
                            </p>
                            <a href="{{ route('pages.new-here') }}" class="inline-flex items-center text-lg font-semibold group text-gray-900">
                                Explore More About Us
                                <svg class="w-6 h-6 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Row 2: Next Steps & Community - Side by Side -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Next Steps -->
                    <div class="relative aspect-[4/3] rounded-3xl overflow-hidden group">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_2.JPG') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-10 text-white">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </div>
                                <h3 class="text-3xl font-bold">Next Steps</h3>
                            </div>
                            <p class="text-lg text-gray-200 mb-6">Take your next step in your journey of faith and spiritual growth.</p>
                            <a href="{{ route('pages.next-steps') }}" class="inline-flex items-center bg-white/20 backdrop-blur-md text-white border-2 border-white px-6 py-3 rounded-full font-semibold hover:bg-white/30 transition-all group w-fit">
                                Get Started
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Community -->
                    <div class="relative aspect-[4/3] rounded-3xl overflow-hidden group">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_3.JPG') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-10 text-white">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-3xl font-bold">Community</h3>
                            </div>
                            <p class="text-lg text-gray-200 mb-6">Connect with others through small groups, events, and community gatherings.</p>
                            <a href="{{ route('pages.community') }}" class="inline-flex items-center bg-white/20 backdrop-blur-md text-white border-2 border-white px-6 py-3 rounded-full font-semibold hover:bg-white/30 transition-all group w-fit">
                                Join Community
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Row 3: Give - Full Width with Image -->
                <div class="relative aspect-[21/9] rounded-3xl overflow-hidden group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_4.JPG') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/70"></div>
                    <div class="absolute inset-0 flex items-center">
                        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4 w-full">
                            <div class="grid lg:grid-cols-2 gap-12 items-center">
                                <div class="text-white">
                                    <div class="flex items-center gap-4 mb-6">
                                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <h3 class="text-4xl lg:text-5xl font-bold">Give</h3>
                                    </div>
                                    <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                                        Partner with us as we build a nation for Christ and impact lives. Your generosity helps us reach more people and make a lasting difference.
                                    </p>
                                    <a href="{{ route('pages.give') }}" class="inline-flex items-center bg-white text-gray-900 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all group">
                                        Give Now
                                        <svg class="w-6 h-6 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="hidden lg:block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Vision & Mission Section -->
    <section class="py-24 lg:py-32 bg-[#EFF0F6]">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Our Vision & Mission</h2>
                <div class="section-divider"></div>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mt-8 font-light">
                    Our foundation and purpose for building a nation where Christ is all and in all
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-8 mb-16">
                <!-- Vision Card -->
                <div class="relative group flex flex-col">
                    <div class="absolute -inset-1 bg-gradient-to-r from-gray-200 via-gray-100 to-gray-200 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-opacity duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-12 lg:p-16 overflow-hidden flex flex-col flex-1">
                        <!-- Decorative Background Pattern -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-gray-900 opacity-5 rounded-full -mr-32 -mt-32"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-gray-900 opacity-5 rounded-full -ml-24 -mb-24"></div>
                        
                        <div class="relative flex flex-col flex-1">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="text-6xl md:text-7xl font-bold text-gray-900 opacity-20">01</div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-12 h-1 bg-gray-900 rounded-full"></div>
                                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Our Vision</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pl-16 flex-1 flex flex-col">
                                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-light flex-1">
                                    Building a nation where <span class="font-semibold text-gray-900">Christ is all and in all</span> and to make Christ the centre of the world by dispensing Christ with love, the Holy Ghost as our means.
                                </p>
                            </div>
                            
                            <!-- Icon at bottom right -->
                            <div class="absolute bottom-0 right-0 w-24 h-24 bg-gray-900 rounded-tl-3xl flex items-center justify-center opacity-10 group-hover:opacity-20 transition-opacity">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mission Card -->
                <div class="relative group flex flex-col">
                    <div class="absolute -inset-1 bg-gradient-to-r from-gray-200 via-gray-100 to-gray-200 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-opacity duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-12 lg:p-16 overflow-hidden flex flex-col flex-1">
                        <!-- Decorative Background Pattern -->
                        <div class="absolute top-0 left-0 w-64 h-64 bg-gray-900 opacity-5 rounded-full -ml-32 -mt-32"></div>
                        <div class="absolute bottom-0 right-0 w-48 h-48 bg-gray-900 opacity-5 rounded-full -mr-24 -mb-24"></div>
                        
                        <div class="relative flex flex-col flex-1">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="text-6xl md:text-7xl font-bold text-gray-900 opacity-20">02</div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-12 h-1 bg-gray-900 rounded-full"></div>
                                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Our Mission</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pl-16 flex-1 flex flex-col">
                                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-light flex-1">
                                    Building Christ into all men through the <span class="font-semibold text-gray-900">revelation, formation, magnification, and glorification</span> of Christ in all men, until all men conform to the image of His son, using Christ as the building material.
                                </p>
                            </div>
                            
                            <!-- Icon at bottom left -->
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gray-900 rounded-tr-3xl flex items-center justify-center opacity-10 group-hover:opacity-20 transition-opacity">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tagline - Enhanced -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-3xl transform rotate-1"></div>
                <div class="relative text-center rounded-3xl p-12 lg:p-16" style="background: linear-gradient(135deg, #0057a2 0%, #15215b 100%);">
                    <div class="max-w-4xl mx-auto">
                        <div class="inline-block mb-6">
                            <svg class="w-16 h-16 text-white/90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-3xl md:text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">Love God. Love People. Change the World.</h3>
                        <div class="w-24 h-1 bg-white/50 rounded-full mx-auto mb-6"></div>
                        <p class="text-xl md:text-2xl text-white/95 font-light leading-relaxed">This is our heartbeat, our passion, and our purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Upcoming Events Section - New Approach -->
    <section id="get-involved" class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Upcoming Events</h2>
                <div class="section-divider"></div>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mt-8 font-light">
                    Join us for worship, fellowship, and community gatherings
                </p>
            </div>
            
            <!-- Featured Event - Large Hero Style -->
            @php
                // Calculate next Sunday (always the upcoming Sunday, not today if today is Sunday)
                $today = \Carbon\Carbon::now();
                $nextSunday = $today->copy()->addDay()->next(\Carbon\Carbon::SUNDAY);
                
                // Calculate next Wednesday (always the upcoming Wednesday, not today if today is Wednesday)
                $nextWednesday = $today->copy()->addDay()->next(\Carbon\Carbon::WEDNESDAY);
            @endphp
            <div class="mb-16">
                <div class="relative aspect-[21/9] rounded-3xl overflow-hidden group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/bg_1.JPG') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/70"></div>
                    <div class="absolute inset-0 flex items-center">
                        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4 w-full">
                            <div class="grid lg:grid-cols-2 gap-12 items-center">
                                <div class="text-white">
                                    <div class="flex items-center gap-4 mb-6">
                                        <div class="flex flex-col items-center justify-center custom-blue-bg rounded-2xl px-8 py-6 min-w-[100px]">
                                            <span class="text-4xl font-bold leading-none">{{ $nextSunday->format('d') }}</span>
                                            <span class="text-lg font-semibold uppercase tracking-wider">{{ $nextSunday->format('M') }}</span>
                                        </div>
                                        <div>
                                            <!-- <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-sm font-semibold mb-3">
                                                Featured Event
                                            </div> -->
                                            <h3 class="text-4xl lg:text-5xl font-bold mb-4">Sunday Service</h3>
                                            <div class="flex items-center gap-4 text-gray-200 mb-6">
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    <span>Love Economy Church</span>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <span>9:30 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-lg text-gray-200 mb-8 leading-relaxed">
                                        Join us for this special gathering as we come together in worship and fellowship. Experience the power of community and the presence of God.
                                    </p>
                                    <a href="#contact" class="inline-flex items-center bg-white text-gray-900 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all group">
                                        Register Now
                                        <svg class="w-6 h-6 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="hidden lg:block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other Events - Image Slider -->
            <div class="events-slider relative">
                <button class="slider-button prev" onclick="moveSlider(-1)" aria-label="Previous events">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="slider-button next" onclick="moveSlider(1)" aria-label="Next events">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                
                <div class="events-slider-container" id="eventsSlider">
                    <!-- Event Slide 1 -->
                    <div class="event-slide px-3">
                        <div class="relative aspect-[4/5] rounded-3xl overflow-hidden group border-2 border-gray-100">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/bg_2.JPG') }}');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-black/50"></div>
                            <div class="absolute top-6 right-6">
                                <div class="custom-blue-bg rounded-2xl px-5 py-4 text-center shadow-lg">
                                    <div class="text-3xl font-bold leading-none text-white">{{ $nextWednesday->format('d') }}</div>
                                    <div class="text-xs font-semibold uppercase tracking-widest text-white/90 mt-1">{{ $nextWednesday->format('M') }}</div>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end p-8 lg:p-10 text-white">
                                <div class="mb-6">
                                    <h3 class="text-3xl md:text-3xl lg:text-4xl font-bold mb-4 leading-tight">LC Live Service</h3>
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-lg font-medium text-white/90">Love Economy Church</p>
                                    </div>
                                    <p class="text-base text-white/80 leading-relaxed">Come fellowship with the family and encounter the presence of God.</p>
                                </div>
                                <a href="#contact" class="inline-flex w-fit items-center bg-white text-gray-900 px-7 py-4 rounded-full font-semibold text-base hover:bg-gray-100 transition-all group/link shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Learn More
                                    <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Event Slide 2 -->
                    <div class="event-slide px-3">
                        <div class="relative aspect-[4/5] rounded-3xl overflow-hidden group border-2 border-gray-100">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/bg_3.JPG') }}');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-black/50"></div>
                            <div class="absolute top-6 right-6">
                                <div class="custom-blue-bg rounded-2xl px-5 py-4 text-center shadow-lg">
                                    <div class="text-3xl font-bold leading-none text-white">05</div>
                                    <div class="text-xs font-semibold uppercase tracking-widest text-white/90 mt-1">Jan</div>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end p-8 lg:p-10 text-white">
                                <div class="mb-6">
                                    <h3 class="text-3xl md:text-3xl lg:text-4xl font-bold mb-4 leading-tight">Special Service</h3>
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-lg font-medium text-white/90">Love Economy Church</p>
                                    </div>
                                    <p class="text-base text-white/80 leading-relaxed">Join us for a powerful time of worship and ministry</p>
                                </div>
                                <a href="#contact" class="inline-flex w-fit items-center bg-white text-gray-900 px-7 py-4 rounded-full font-semibold text-base hover:bg-gray-100 transition-all group/link shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Learn More
                                    <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Event Slide 3 -->
                    <div class="event-slide px-3">
                        <div class="relative aspect-[4/5] rounded-3xl overflow-hidden group border-2 border-gray-100">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_1.JPG') }}');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-black/50"></div>
                            <div class="absolute top-6 right-6">
                                <div class="custom-blue-bg rounded-2xl px-5 py-4 text-center shadow-lg">
                                    <div class="text-3xl font-bold leading-none text-white">12</div>
                                    <div class="text-xs font-semibold uppercase tracking-widest text-white/90 mt-1">Jan</div>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end p-8 lg:p-10 text-white">
                                <div class="mb-6">
                                    <h3 class="text-3xl md:text-3xl lg:text-4xl font-bold mb-4 leading-tight">Community Gathering</h3>
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-lg font-medium text-white/90">Love Economy Church</p>
                                    </div>
                                    <p class="text-base text-white/80 leading-relaxed">Connect with others and grow together in faith</p>
                                </div>
                                <a href="#contact" class="inline-flex w-fit items-center bg-white text-gray-900 px-7 py-4 rounded-full font-semibold text-base hover:bg-gray-100 transition-all group/link shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Learn More
                                    <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Event Slide 4 -->
                    <div class="event-slide px-3">
                        <div class="relative aspect-[4/5] rounded-3xl overflow-hidden group border-2 border-gray-100">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('{{ asset('images/img_2.JPG') }}');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-black/50"></div>
                            <div class="absolute top-6 right-6">
                                <div class="custom-blue-bg rounded-2xl px-5 py-4 text-center shadow-lg">
                                    <div class="text-3xl font-bold leading-none text-white">19</div>
                                    <div class="text-xs font-semibold uppercase tracking-widest text-white/90 mt-1">Jan</div>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-end p-8 lg:p-10 text-white">
                                <div class="mb-6">
                                    <h3 class="text-3xl md:text-3xl lg:text-4xl font-bold mb-4 leading-tight">Youth Service</h3>
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-lg font-medium text-white/90">Love Economy Church</p>
                                    </div>
                                    <p class="text-base text-white/80 leading-relaxed">A dynamic service designed for young people</p>
                                </div>
                                <a href="#contact" class="inline-flex w-fit items-center bg-white text-gray-900 px-7 py-4 rounded-full font-semibold text-base hover:bg-gray-100 transition-all group/link shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Learn More
                                    <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <a href="#contact" class="inline-flex items-center font-semibold text-xl group text-gray-900">
                    View All Events
                    <svg class="w-6 h-6 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="py-24 lg:py-32 bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Get In Touch</h2>
                <div class="section-divider" style="background: linear-gradient(90deg, transparent, white, transparent);"></div>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mt-8 font-light">
                    We would love to hear from you. Reach out to either of our branches and connect with our community.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center bg-gray-600">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Reading Branch</h3>
                        </div>
                        <p class="text-gray-300 mb-2 text-lg">90B Great Knollys St.</p>
                        <p class="text-gray-300 text-lg">Reading RG1 7HL</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center bg-gray-600">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">London Branch</h3>
                        </div>
                        <p class="text-gray-300 mb-2 text-lg">2D Arodene Road</p>
                        <p class="text-gray-300 mb-2 text-lg">Brixton Hill</p>
                        <p class="text-gray-300 text-lg">London SW2 2BH</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center bg-gray-600">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Contact Us</h3>
                        </div>
                        <p class="text-gray-300 mb-4 text-lg">
                            Email: <a href="mailto:info@loveeconomyuk.org" class="underline font-medium text-white hover:text-gray-200">info@loveeconomyuk.org</a>
                        </p>
                        <p class="text-gray-300 text-lg">
                            Phone: <a href="tel:+441234567890" class="underline text-white hover:text-gray-200">+44 (0) 123 456 7890</a>
                        </p>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10 lg:p-12">
                    <h3 class="text-2xl font-bold mb-8">Send us a Message</h3>
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <input type="text" name="idi_name" placeholder="Your Name" required
                                class="w-full px-6 py-4 bg-white/10 rounded-xl outline-none text-white placeholder-gray-400 transition-all text-lg" style="--tw-ring-color: #0057a2;" onfocus="this.style.boxShadow='0 0 0 2px rgba(0, 87, 162, 0.5)'" onblur="this.style.boxShadow='none'">
                        </div>
                        <div>
                            <input type="email" name="idi_mail" placeholder="Your Email" required
                                class="w-full px-6 py-4 bg-white/10 rounded-xl outline-none text-white placeholder-gray-400 transition-all text-lg" style="--tw-ring-color: #0057a2;" onfocus="this.style.boxShadow='0 0 0 2px rgba(0, 87, 162, 0.5)'" onblur="this.style.boxShadow='none'">
                        </div>
                        <div>
                            <textarea name="idi_text" rows="6" placeholder="Your Message" required
                                class="w-full px-6 py-4 bg-white/10 rounded-xl outline-none text-white placeholder-gray-400 transition-all resize-none text-lg" onfocus="this.style.boxShadow='0 0 0 2px rgba(0, 87, 162, 0.5)'" onblur="this.style.boxShadow='none'"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full text-white px-8 py-5 rounded-xl transition-all font-semibold text-lg transform hover:-translate-y-1 custom-blue-bg">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection
