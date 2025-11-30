@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">
                Join Our Team
            </h1>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto font-light">
                We're looking for passionate individuals to serve with us in building a nation where Christ is all
            </p>
        </div>
    </div>
</section>

<!-- Job Listings Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
        @if(session('success'))
            <div class="mb-8 bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg" id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $jobs = [
                    [
                        'id' => 1,
                        'title' => 'Charity Worker',
                        'type' => 'Charity Worker',
                        'description' => 'Join our team as a Charity Worker and make a meaningful difference in the community. You will work alongside our team to organize and participate in various charitable activities, community outreach programs, and support initiatives that help those in need. This role requires compassion, dedication, and a heart to serve others.',
                        'requirements' => 'Passionate about serving others, excellent communication skills, ability to work in a team environment, commitment to the mission and values of Love Economy Church.',
                        'location' => 'Various Locations, UK',
                        'image' => 'bg_1.JPG',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Religious Worker',
                        'type' => 'Religious Worker',
                        'description' => 'We are seeking dedicated Religious Workers to support our ministry operations and community services. You will be involved in organizing religious activities, supporting worship services, facilitating study groups, and providing spiritual guidance to our congregation. This role is perfect for those called to serve in ministry.',
                        'requirements' => 'Strong faith foundation, understanding of Christian principles, experience in ministry work preferred, excellent interpersonal skills, ability to guide and support others in their spiritual journey.',
                        'location' => 'Various Locations, UK',
                        'image' => 'bg_2.JPG',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Religious Minister',
                        'type' => 'Religious Minister',
                        'description' => 'We are looking for an experienced Religious Minister to lead and shepherd our congregation. You will be responsible for delivering sermons, providing pastoral care, leading worship services, and overseeing various ministry programs. This is a leadership role that requires deep spiritual maturity and ministerial experience.',
                        'requirements' => 'Ordained minister or equivalent theological training, proven experience in ministry leadership, strong preaching and teaching abilities, ability to provide pastoral care, commitment to the vision of building a nation where Christ is all.',
                        'location' => 'Various Locations, UK',
                        'image' => 'img_1.JPG',
                    ],
                ];
            @endphp

            @foreach($jobs as $job)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group cursor-pointer" onclick="openApplicationModal({{ $job['id'] }}, '{{ addslashes($job['title']) }}')">
                    <!-- Job Image -->
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/' . $job['image']) }}" 
                             alt="{{ $job['title'] }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-full">
                                {{ $job['type'] }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Job Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                            {{ $job['title'] }}
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ Str::limit($job['description'], 120) }}
                        </p>
                        @if($job['location'])
                            <div class="flex items-center text-gray-500 text-sm mb-4">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $job['location'] }}
                            </div>
                        @endif
                        <button class="w-full custom-blue-bg text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Apply Now
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Application Modal -->
<div id="applicationModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-900" id="modalJobTitle">Apply for Position</h2>
            <button onclick="closeApplicationModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <form id="applicationForm" class="p-6">
            @csrf
            <input type="hidden" id="jobId" name="job_id" value="">
            <input type="hidden" id="jobTitle" name="job_title" value="">
            
            <div id="jobDetails" class="mb-6 p-4 bg-blue-50 rounded-lg"></div>
            
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Location *</label>
                    <input type="text" id="location" name="location" required
                           placeholder="City, Country"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div id="formErrors" class="hidden bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg"></div>
                <div id="formSuccess" class="hidden bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg"></div>
                
                <div class="flex gap-4">
                    <button type="button" onclick="closeApplicationModal()" 
                            class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" id="submitBtn"
                            class="flex-1 custom-blue-bg text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Submit Application
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
const jobs = {
    @foreach($jobs as $job)
        {{ $job['id'] }}: {
            id: {{ $job['id'] }},
            title: @json($job['title']),
            type: @json($job['type']),
            description: @json($job['description']),
            requirements: @json($job['requirements']),
            location: @json($job['location']),
            image: @json($job['image'])
        },
    @endforeach
};

function openApplicationModal(jobId, jobTitle) {
    const job = jobs[jobId];
    if (!job) return;
    
    document.getElementById('jobId').value = jobId;
    document.getElementById('jobTitle').value = job.title;
    document.getElementById('modalJobTitle').textContent = `Apply for ${jobTitle}`;
    
    const jobDetails = document.getElementById('jobDetails');
    jobDetails.innerHTML = `
        <h3 class="font-bold text-lg text-gray-900 mb-2">${job.title}</h3>
        <p class="text-gray-600 text-sm mb-3">${job.description}</p>
        ${job.requirements ? `<div class="mt-3"><strong class="text-sm text-gray-700">Requirements:</strong><p class="text-sm text-gray-600 mt-1">${job.requirements}</p></div>` : ''}
    `;
    
    // Reset form
    document.getElementById('applicationForm').reset();
    document.getElementById('formErrors').classList.add('hidden');
    document.getElementById('formSuccess').classList.add('hidden');
    document.getElementById('jobId').value = jobId;
    document.getElementById('jobTitle').value = job.title;
    
    document.getElementById('applicationModal').classList.remove('hidden');
    document.getElementById('applicationModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeApplicationModal() {
    document.getElementById('applicationModal').classList.add('hidden');
    document.getElementById('applicationModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
    document.getElementById('applicationForm').reset();
    document.getElementById('formErrors').classList.add('hidden');
    document.getElementById('formSuccess').classList.add('hidden');
}

// Handle form submission
document.getElementById('applicationForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = document.getElementById('submitBtn');
    const errorsDiv = document.getElementById('formErrors');
    const successDiv = document.getElementById('formSuccess');
    
    // Reset messages
    errorsDiv.classList.add('hidden');
    successDiv.classList.add('hidden');
    
    // Disable submit button
    submitBtn.disabled = true;
    submitBtn.textContent = 'Submitting...';
    
    try {
        const response = await fetch('{{ route("job.apply") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || formData.get('_token')
            }
        });
        
        const data = await response.json();
        
        if (response.ok && data.success) {
            successDiv.textContent = data.message;
            successDiv.classList.remove('hidden');
            
            // Reset form
            this.reset();
            
            // Close modal after 3 seconds
            setTimeout(() => {
                closeApplicationModal();
                // Reload page to show success message
                window.location.reload();
            }, 3000);
        } else {
            let errorMessage = data.message || 'An error occurred. Please try again.';
            
            if (data.errors) {
                const errorList = Object.values(data.errors).flat().join('<br>');
                errorMessage = errorList;
            }
            
            errorsDiv.innerHTML = errorMessage;
            errorsDiv.classList.remove('hidden');
        }
    } catch (error) {
        errorsDiv.textContent = 'An error occurred. Please try again.';
        errorsDiv.classList.remove('hidden');
    } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit Application';
    }
});

// Close modal when clicking outside
document.getElementById('applicationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeApplicationModal();
    }
});
</script>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection