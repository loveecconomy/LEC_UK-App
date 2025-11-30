@extends('layouts.app')

@section('title', 'Give - Love Economy Church')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/img_4.JPG') }}');"></div>
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-4 lg:px-4 text-center text-white py-24">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Give
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Partner with us as we build a nation for Christ and impact lives
            </p>
        </div>
    </section>
    
    <!-- Main Content Section -->
    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Your Generosity Makes a Difference</h2>
                    <div class="section-divider"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                        Your giving helps us reach more people, support our community, and make a lasting impact for the Kingdom of God.
                    </p>
                </div>
                
                <div class="space-y-12">
                    <!-- Why We Give -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why We Give</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Giving is an act of worship and a way to partner with God in His work. When we give, we acknowledge that everything we have comes from God, and we trust Him to provide for our needs while we invest in His Kingdom.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Worship</h4>
                                    <p class="text-gray-600">Giving is a form of worship that honors God and acknowledges His provision in our lives.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Partnership</h4>
                                    <p class="text-gray-600">Your giving partners with us in building a nation where Christ is all and in all.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Impact</h4>
                                    <p class="text-gray-600">Your generosity enables us to reach more people, support our community, and make a lasting difference.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Ways to Give -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ways to Give</h3>
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-8">
                                <div class="flex items-start gap-6">
                                    <div class="flex-shrink-0">
                                        <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-2xl font-bold text-gray-900 mb-3">Online Giving</h4>
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            Give securely online through our platform. You can set up one-time or recurring donations.
                                        </p>
                                        <a href="/#contact" class="inline-flex items-center text-gray-900 font-semibold group">
                                            Give Online
                                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-8">
                                <div class="flex items-start gap-6">
                                    <div class="flex-shrink-0">
                                        <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-2xl font-bold text-gray-900 mb-3">In Person</h4>
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            You can give during our Sunday services or visit us at either of our locations.
                                        </p>
                                        <div class="space-y-2 text-gray-600">
                                            <p><strong>Reading Branch:</strong> 90B Great Knollys St., Reading RG1 7HL</p>
                                            <p><strong>London Branch:</strong> 2D Arodene Road, Brixton Hill, London SW2 2BH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-8">
                                <div class="flex items-start gap-6">
                                    <div class="flex-shrink-0">
                                        <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-2xl font-bold text-gray-900 mb-3">Bank Transfer</h4>
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            You can also give via bank transfer. Please contact us for our bank details.
                                        </p>
                                        <a href="/#contact" class="inline-flex items-center text-gray-900 font-semibold group">
                                            Contact Us
                                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- What Your Giving Supports -->
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">What Your Giving Supports</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 rounded-2xl p-8">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Ministry & Programs</h4>
                                <p class="text-gray-600">Supporting our worship services, teaching, and various ministry programs.</p>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-8">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Community Outreach</h4>
                                <p class="text-gray-600">Helping us reach and serve our local community with love and compassion.</p>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-8">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Facilities</h4>
                                <p class="text-gray-600">Maintaining and improving our church facilities to serve our community better.</p>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-8">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Staff & Leadership</h4>
                                <p class="text-gray-600">Supporting our pastoral team and staff who serve our church family.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-10 lg:p-14 text-white text-center">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6">Thank You for Your Generosity</h3>
                        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                            Your giving makes it possible for us to continue building a nation where Christ is all and in all. We're grateful for your partnership.
                        </p>
                        <a href="/#contact" class="inline-flex items-center text-white px-8 py-4 rounded-full font-semibold custom-blue-bg hover:opacity-90 transition-opacity">
                            Give Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
