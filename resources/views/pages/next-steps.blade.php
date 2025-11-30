@extends('layouts.app')

@section('title', 'Next Steps - Love Economy Church')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/img_2.JPG') }}');"></div>
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-4 lg:px-4 text-center text-white py-24">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Next Steps
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Take your next step in your journey of faith and spiritual growth
            </p>
        </div>
    </section>
    
    <!-- Main Content Section -->
    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Your Journey Starts Here</h2>
                    <div class="section-divider"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                        Whether you're new to faith or have been following Jesus for years, we want to help you take your next step.
                    </p>
                </div>
                
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                                    01
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Attend a Service</h3>
                                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                                    Join us on Sundays at 9:30 AM or 11:00 AM. Experience our worship, teaching, and community. Come as you are - there's no dress code, and you'll be welcomed with open arms.
                                </p>
                                <div class="flex items-center gap-2 text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="font-semibold">Sundays: 9:30 AM & 11:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                                    02
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Connect with Community</h3>
                                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                                    Join a small group or connect with others through our community gatherings. Building relationships is essential to your spiritual growth, and we have various opportunities for you to connect.
                                </p>
                                <a href="{{ route('pages.community') }}" class="inline-flex items-center text-gray-900 font-semibold group">
                                    Explore Community
                                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                                    03
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get Involved</h3>
                                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                                    Discover your gifts and find ways to serve. Whether it's through worship, hospitality, children's ministry, or outreach, there's a place for you to make a difference.
                                </p>
                                <a href="/#get-involved" class="inline-flex items-center text-gray-900 font-semibold group">
                                    View Opportunities
                                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                                    04
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Grow in Your Faith</h3>
                                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                                    Engage with our resources, attend Bible studies, and participate in discipleship opportunities. We're committed to helping you grow deeper in your relationship with Christ.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Bible Study Groups</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span>Online Sermons</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Discipleship Programs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-10 lg:p-14 text-white text-center">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6">Ready to Begin?</h3>
                        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                            We're here to support you every step of the way. Let's start this journey together.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/#contact" class="text-white px-8 py-4 rounded-full font-semibold custom-blue-bg hover:opacity-90 transition-opacity inline-flex items-center justify-center">
                                Get In Touch
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('pages.community') }}" class="text-white px-8 py-4 rounded-full font-semibold border-2 border-white/50 hover:bg-white/10 transition-all inline-flex items-center justify-center">
                                Join Community
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
