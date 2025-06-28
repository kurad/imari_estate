<style type="text/tailwindcss">
    @keyframes slide {
        0% { transform: translateX(0); }
        15% { transform: translateX(0); }
        20% { transform: translateX(-20%); }
        35% { transform: translateX(-20%); }
        40% { transform: translateX(-40%); }
        55% { transform: translateX(-40%); }
        60% { transform: translateX(-60%); }
        75% { transform: translateX(-60%); }
        80% { transform: translateX(-80%); }
        95% { transform: translateX(-80%); }
        100% { transform: translateX(-100%); }
    }

    .animate-slide {
        animation: slide 25s infinite;
        width: 500%; /* 5 images */
    }
</style>

<section class="">
    <!-- Carousel Container -->
    <div class="relative overflow-hidden">
        <!-- Sliding Images -->
        <div class="flex animate-slide">
            <!-- Image 1 -->
            <div class="w-1/5  h-64">
                <div class="h-full rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                    <img src="{{asset('hero/house1.jpeg')}}" alt="House" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Image 2 -->
            <div class="w-1/5 px-2 h-64">
                <div class="h-full rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                    <img src="{{asset('hero/house2.jpeg')}}" alt="Apartment" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Image 3 -->
            <div class="w-1/5 px-2 h-64">
                <div class="h-full rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                    <img src="{{asset('hero/house4.jpeg')}}" alt="Office" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Image 4 -->
            <div class="w-1/5 px-2 h-64">
                <div class="h-full rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                    <img src="{{asset('hero/house3.jpg')}}" alt="Construction" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Image 5 (duplicate first image for seamless looping) -->
            <div class="w-1/5 px-2 h-64">
                <div class="h-full rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                    <img src="{{asset('hero/house1.jpeg')}}" alt="House" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Pause animation on hover
    const carousel = document.querySelector('.animate-slide');
    carousel.addEventListener('mouseenter', () => {
        carousel.style.animationPlayState = 'paused';
    });
    carousel.addEventListener('mouseleave', () => {
        carousel.style.animationPlayState = 'running';
    });
</script>
