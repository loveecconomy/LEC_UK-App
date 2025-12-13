@extends('layouts.app')

@section('title', 'New Here - Love Economy Church')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/img_1.JPG') }}');"></div>
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-4 lg:px-4 text-center text-white py-24">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                New Here?
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Welcome to Love Economy Church - A place where you belong
            </p>
        </div>
    </section>
    
    <!-- Main Content Section -->
    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Welcome to Our Family</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="space-y-12">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-xl text-gray-700 leading-relaxed mb-6">
                            We're excited that you're here! Whether you're exploring faith for the first time or looking for a new church home, we're here to help you discover what it means to be part of Love Economy Church.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Our community is built on love, grace, and the power of the Holy Spirit. We believe in building a nation where Christ is all and in all, and we'd love for you to be part of this journey.
                        </p>
                    </div>
                    
                    <!-- What to Expect -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">What to Expect</h3>
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Service Times</h4>
                                    <p class="text-gray-600 leading-relaxed">Join us on Sundays at 11:00 AM  or 2:00 PM. Our services typically last about 90 minutes and include worship, teaching, and fellowship.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Welcoming Community</h4>
                                    <p class="text-gray-600 leading-relaxed">You'll be greeted with warm smiles and genuine care. We're a diverse, family-driven community that welcomes everyone, regardless of where you are on your faith journey.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Powerful Worship</h4>
                                    <p class="text-gray-600 leading-relaxed">Experience authentic worship that connects you with God. Our worship is led by the Holy Spirit and creates an atmosphere where you can encounter God's presence.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Biblical Teaching</h4>
                                    <p class="text-gray-600 leading-relaxed">Our messages are grounded in Scripture and focused on helping you grow in your relationship with Christ. We believe in practical, life-transforming teaching.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Our Beliefs -->
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">What We Believe</h3>
                        <div class="space-y-6">
                            <p class="text-lg text-gray-700 leading-relaxed">
                                At Love Economy Church, we believe in building a nation where <strong class="text-gray-900">Christ is all and in all</strong>. Our foundation is built on:
                            </p>
                            <ul class="space-y-4 text-lg text-gray-700">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Dispensing Christ with love through the power of the Holy Spirit</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Building Christ into all men through revelation, formation, magnification, and glorification</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Conforming all men to the image of His Son, using Christ as the building material</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Creating a diverse, life-giving community where everyone can grow and thrive</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-10 lg:p-14 text-white text-center">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6">Ready to Take Your Next Step?</h3>
                        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                            We'd love to connect with you and help you on your journey. Whether you have questions or want to get involved, we're here for you.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/#contact" class="text-white px-8 py-4 rounded-full font-semibold custom-blue-bg hover:opacity-90 transition-opacity inline-flex items-center justify-center">
                                Get In Touch
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('pages.next-steps') }}" class="text-white px-8 py-4 rounded-full font-semibold border-2 border-white/50 hover:bg-white/10 transition-all inline-flex items-center justify-center">
                                Next Steps
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
