@extends('layouts.app')

@section('title', 'Community - Love Economy Church')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/img_3.JPG') }}');"></div>
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-4 lg:px-4 text-center text-white py-24">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Community
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Connect with others through small groups, events, and community gatherings
            </p>
        </div>
    </section>
    
    <!-- Main Content Section -->
    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">Join Our Community</h2>
                    <div class="section-divider"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                        We believe that life is better together. Our community is built on authentic relationships, mutual support, and shared growth in Christ.
                    </p>
                </div>
                
                <div class="space-y-12">
                    <!-- Small Groups -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Small Groups</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Small groups are the heartbeat of our community. They provide a space for deeper connection, Bible study, prayer, and mutual encouragement. Whether you're looking for a group based on age, interest, or location, we have options for everyone.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6 mt-8">
                            <div class="bg-white rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Bible Study Groups</h4>
                                <p class="text-gray-600">Dive deep into Scripture and grow in your understanding of God's Word together.</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Fellowship Groups</h4>
                                <p class="text-gray-600">Build friendships and enjoy life together through shared activities and meals.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Events & Gatherings -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Events & Gatherings</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Throughout the year, we host various events and gatherings that bring our community together. From worship nights to social events, there's always something happening.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 bg-white rounded-2xl p-6">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Regular Events</h4>
                                    <p class="text-gray-600">Join us for our weekly and monthly gatherings designed to strengthen community bonds.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white rounded-2xl p-6">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Worship Nights</h4>
                                    <p class="text-gray-600">Special evenings dedicated to extended worship and encountering God's presence.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white rounded-2xl p-6">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gray-900 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Social Gatherings</h4>
                                    <p class="text-gray-600">Fun and relaxed events where you can meet new people and build friendships.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Serving Together -->
                    <div class="bg-gray-50 rounded-3xl p-10 lg:p-14">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Serving Together</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            One of the best ways to build community is by serving together. When we use our gifts and talents to serve others, we not only make a difference but also form deeper connections with those around us.
                        </p>
                        <div class="grid md:grid-cols-3 gap-6 mt-8">
                            <div class="bg-white rounded-2xl p-6 text-center">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Volunteer Teams</h4>
                                <p class="text-gray-600 text-sm">Join a team and serve alongside others</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Outreach</h4>
                                <p class="text-gray-600 text-sm">Make a difference in our local community</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center">
                                <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Care Ministry</h4>
                                <p class="text-gray-600 text-sm">Support and care for those in need</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-10 lg:p-14 text-white text-center">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6">Ready to Connect?</h3>
                        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                            We'd love to help you find your place in our community. Get in touch and let's start this journey together.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/#contact" class="text-white px-8 py-4 rounded-full font-semibold custom-blue-bg hover:opacity-90 transition-opacity inline-flex items-center justify-center">
                                Get In Touch
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="/#get-involved" class="text-white px-8 py-4 rounded-full font-semibold border-2 border-white/50 hover:bg-white/10 transition-all inline-flex items-center justify-center">
                                Get Involved
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
