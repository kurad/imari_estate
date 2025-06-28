<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imari Real Estate Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6', // blue-500
                        secondary: '#F97316', // orange-500
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">

    @include('navbar.navbar')
    <!-- Header Section -->
    <header class="bg-gradient-to-r from-primary to-secondary py-6 shadow-lg">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-white text-center">Premium Real Estate Services</h1>
            <p class="text-white text-center mt-2 text-lg">Your trusted partner in property solutions</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-12 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Comprehensive Services</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property Buying -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-home text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">Property Buying</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">We guide you through the entire property purchasing process to find your dream home or investment property.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Access to exclusive listings</li>
                                <li>Expert negotiation for best prices</li>
                                <li>Legal and paperwork assistance</li>
                                <li>Property inspection coordination</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Property Selling -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-sign text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">Property Selling</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Maximize your property's value with our strategic marketing and sales expertise.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Professional valuation services</li>
                                <li>High-impact marketing campaigns</li>
                                <li>Targeted buyer outreach</li>
                                <li>Closing process management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Property Management -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-building text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">Property Management</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Comprehensive management solutions to maximize your rental property's performance.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Tenant screening and placement</li>
                                <li>Rent collection services</li>
                                <li>Maintenance coordination</li>
                                <li>Regular property inspections</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Market Analysis -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-chart-line text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">Market Analysis</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Data-driven insights to help you make informed real estate decisions.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Neighborhood trend reports</li>
                                <li>Comparative market analysis</li>
                                <li>Investment opportunity scoring</li>
                                <li>Future value projections</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Investment Consulting -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-hand-holding-usd text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">Investment Consulting</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Strategic advice to build and optimize your real estate portfolio.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Portfolio diversification strategies</li>
                                <li>Tax optimization guidance</li>
                                <li>Risk assessment analysis</li>
                                <li>Exit strategy planning</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- House Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="bg-primary p-4">
                        <div class="flex items-center">
                            <i class="fas fa-ruler-combined text-white text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-white">House Plan Services</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Custom design solutions to bring your dream home to life.</p>
                        <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-semibold text-secondary mb-2">Key Notes:</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Architectural design services</li>
                                <li>Space optimization planning</li>
                                <li>Construction documentation</li>
                                <li>Permit application assistance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 px-4 bg-gradient-to-r from-primary to-secondary">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to Start Your Real Estate Journey?</h2>
            <p class="text-white mb-8 max-w-2xl mx-auto">Contact us today to discuss how we can help you achieve your property goals.</p>
            <button class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                Get in Touch <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
     </footer>
</body>
</html>