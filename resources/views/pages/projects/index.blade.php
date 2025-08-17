@extends('layouts.app')

@section('title', 'Our Projects - TG Developments')
@section('description', 'Explore our residential and commercial projects including Palm East, Palm Capital, Palm Square, and Palm Hub.')

@section('content')
<!-- Hero Section -->
<section class="relative h-[60vh] md:h-[70vh] overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" 
             alt="Our Projects Hero" 
             class="w-full h-full object-cover"
             loading="eager"
             fetchpriority="high">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>
    </div>
    
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4" data-aos="fade-right">
                    <span class="text-[#FF6B00]">Our</span><br>
                    <span class="text-white">Projects</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Residential Projects Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-[#FF6B00] mb-2">Residential</h2>
            <div class="w-24 h-1 bg-[#FF6B00]"></div>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($residentialProjects as $index => $project)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ $index * 100 }}">
                
                <!-- Project Image -->
                <div class="relative h-80 md:h-96 overflow-hidden">
                    <img src="{{ $project['image'] }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold text-gray-800">
                            {{ $project['location'] }}
                        </span>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3 group-hover:text-[#FF6B00] transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-white/90 text-sm leading-relaxed mb-4 line-clamp-4">
                        {{ $project['description'] }}
                    </p>
                    
                    <!-- Project Details -->
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-white/70">{{ $project['area'] }}</span>
                        <a href="{{ route('projects.show', $project['slug']) }}" 
                           class="inline-flex items-center text-[#FF6B00] hover:text-white transition-colors">
                            <span class="text-sm font-medium">Learn More</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Commercial Projects Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-[#FF6B00] mb-2">Commercial</h2>
            <div class="w-24 h-1 bg-[#FF6B00]"></div>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($commercialProjects as $index => $project)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ $index * 100 }}">
                
                <!-- Project Image -->
                <div class="relative h-80 md:h-96 overflow-hidden">
                    <img src="{{ $project['image'] }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold text-gray-800">
                            {{ $project['location'] }}
                        </span>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3 group-hover:text-[#FF6B00] transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-white/90 text-sm leading-relaxed mb-4 line-clamp-4">
                        {{ $project['description'] }}
                    </p>
                    
                    <!-- Project Details -->
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-white/70">{{ $project['area'] }}</span>
                        <a href="{{ route('projects.show', $project['slug']) }}" 
                           class="inline-flex items-center text-[#FF6B00] hover:text-white transition-colors">
                            <span class="text-sm font-medium">Learn More</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ready to Find Your Perfect Property?
            </h2>
            <p class="text-gray-300 text-lg mb-8">
                Discover our range of residential and commercial developments designed to meet your lifestyle and business needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-[#FF6B00] hover:bg-[#e55a00] text-white font-semibold rounded-lg transition-colors">
                    Contact Us Today
                </a>
                <a href="tel:16497" 
                   class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-gray-900 font-semibold rounded-lg transition-colors">
                    Call 16497
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.line-clamp-4 {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush