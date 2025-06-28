<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMARI Real Estate - Your Trusted Property Partner</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/Imari.jpg') }}">
    <!-- SEO Meta Tags -->
    <meta name="description" content="IMARI Real Estate offers personalized property solutions. Find your dream home, apartment, or commercial space for rent or sale in prime locations.">
    <meta name="keywords" content="real estate, property, houses for sale, apartments for rent, commercial property, IMARI real estate, property listings">
    <meta name="author" content="IMARI Real Estate">
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="IMARI Real Estate - Your Trusted Property Partner">
    <meta property="og:description" content="Find your dream property with IMARI Real Estate. We offer personalized solutions for all your real estate needs.">
    <meta property="og:image" content="{{ asset('logo/Imari.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IMARI Real Estate - Your Trusted Property Partner">
    <meta name="twitter:description" content="Find your dream property with IMARI Real Estate. We offer personalized solutions for all your real estate needs.">
    <meta name="twitter:image" content="{{ asset('logo/Imari.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @livewireStyles
    @livewireScripts
</head>

<body class="font-sans bg-gray-50">
    <!-- Header with Navigation -->
    @include('navbar.navbar')

    @include('navbar.subnavbar')

    <!-- Hero Section -->

    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Find Your Dream <span
                        class="text-blue-500">Property</span> With Us</h1>
                <p class="text-lg mb-8">Imari real estate solutions with personalized service. Discover apartments,
                    houses, and commercial spaces for rent or sale.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-6 rounded-md transition-all duration-300 hover:shadow-lg">List
                        Your Properties</a>
                    {{-- <a href="#" class="border border-white hover:bg-white hover:text-blue-900 text-white font-medium py-3 px-6 rounded-md transition-all duration-300">List Your Property</a> --}}
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Luxury Property" class="w-full h-auto rounded-lg">
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Property Search Section -->

    <!-- Featured Properties Section -->
    <section class="py-16 bg-gray-50">
        @include('home.realestate')
    </section>

    <!-- Property Services Section -->
    <section class="py-16 bg-white">
        @include('home.property_service')
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-50">
        @include('home.why_choose_us')
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        @include('home.testmonial')
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-orange-500 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Ready to Find Your Dream Property?</h2>
                    <p class="text-white opacity-90">Contact our expert agents today for personalized assistance</p>
                </div>
                <a href="{{ route('contact_us') }}"
                    class="mt-6 md:mt-0 bg-white text-blue-900 hover:bg-blue-900 hover:text-white border border-white font-medium py-3 px-8 rounded-md transition-all duration-300">Contact
                    Us Today</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Get Property Updates</h2>
                <p class="text-gray-600 mb-8">Subscribe to receive the latest property listings and market insights</p>
                <form class="flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Enter your email"
                        class="flex-grow px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-300">
                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-6 rounded-md transition-all duration-300">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
    </footer>
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/250788545947?text=Hello%20Imari%20Real%20Estate%2C%20I%20am%20interested%20in%20your%20properties"
        class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50"
        target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

</body>

</html>