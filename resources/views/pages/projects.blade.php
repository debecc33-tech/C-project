@extends('layouts.app')

@section('title', 'Our Projects - TG Developments')

@section('description', 'Explore our residential and commercial projects including Palm East, Palm Capital, Palm Square, and Palm Hub.')

@section('content')

<!-- Projects Section -->
<section class="w-full">
    
    <!-- Hero Section with Background Image -->
    <div class="relative h-[40vh] sm:h-[45vh] md:h-[50vh] lg:h-[55vh] xl:h-[60vh] bg-black overflow-hidden flex items-center">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 w-full h-full">
            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" 
                alt="Our Projects Hero" 
                class="w-full h-full object-cover opacity-60"
                loading="lazy"
                width="1920"
                height="1080"
            >
            <!-- Dark overlay for better text readability -->
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-4xl" data-aos="fade-up" data-aos-duration="1200">
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-light text-white leading-none">
                    <span class="text-orange-500 italic font-light">Our</span><br>
                    <span class="font-normal">Projects</span>
                </h1>
            </div>
        </div>
    </div>

    <!-- Residential Section -->
    <div class="bg-gray-50 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-semibold text-orange-500 mb-2 relative">
                    Residential
                    <div class="absolute bottom-0 left-0 w-20 h-1 bg-orange-500 mt-2"></div>
                </h2>
            </div>

            <!-- Residential Projects Grid -->
            <div class="grid md:grid-cols-2 gap-8 mb-20">
                <!-- Palm East -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 h-80" 
                     data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/projects/5.jpeg') }}" 
                         alt="Palm East" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Name -->
                    <div class="absolute top-6 left-6">
                        <h3 class="text-2xl md:text-3xl font-semibold text-white">Palm East</h3>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-white/90 text-sm leading-relaxed">
                            Palm East is a high-end residential development located in the heart of New Cairo, spanning an area of 12 acres. It is strategically located near 90th North and Mohamed Naguib axis, close to the American University in Cairo, Waterway, Al-Zayed Club and 5 flourishing malls.
                        </p>
                    </div>
                </div>

                <!-- Palm Capital -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 h-80" 
                     data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/images/projects/1.jpg') }}" 
                         alt="Palm Capital" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Name -->
                    <div class="absolute top-6 left-6">
                        <h3 class="text-2xl md:text-3xl font-semibold text-white">Palm Capital</h3>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-white/90 text-sm leading-relaxed">
                            Palm Capital is a residential compound spanning 18 acres, distinguished by its natural palm tree surroundings that provide both privacy and aesthetic appeal. The compound comprises twenty-four modern buildings, each featuring spacious apartments across four floors (Ground + 3).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Commercial Section -->
    <div class="bg-white py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-semibold text-orange-500 mb-2 relative">
                    Commercial
                    <div class="absolute bottom-0 left-0 w-20 h-1 bg-orange-500 mt-2"></div>
                </h2>
            </div>

            <!-- Commercial Projects Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Palm Square -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 h-80" 
                     data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/projects/4.jpg') }}" 
                         alt="Palm Square" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Name -->
                    <div class="absolute top-6 left-6">
                        <h3 class="text-2xl md:text-3xl font-semibold text-white">Palm Square</h3>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-white/90 text-sm leading-relaxed">
                            Palm Square is an expansive and uniquely designed commercial destination, occupying an impressive 10,000m² across ground and two floors. It is located on Suez Road, opposite Open Air Madinaty Mall, near La Vista Compound, universities, and Shorouk City.
                        </p>
                    </div>
                </div>

                <!-- Palm Hub -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 h-80" 
                     data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/images/projects/3.jpg') }}" 
                         alt="Palm Hub" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    
                    <!-- Project Name -->
                    <div class="absolute top-6 left-6">
                        <h3 class="text-2xl md:text-3xl font-semibold text-white">Palm Hub</h3>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-white/90 text-sm leading-relaxed">
                            Palm Hub is an expansive commercial destination spanning an impressive 8,000 m². Our modern mall boasts three floors of retail, dining, and entertainment options, creating a vibrant community hub.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@push('styles')
<style>
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}
</style>
@endpush