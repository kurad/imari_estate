<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Imari Real Estate</title>
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
            <h1 class="text-3xl md:text-4xl font-bold text-white text-center">Contact Imari Real Estate</h1>
            <p class="text-white text-center mt-2 text-lg">We're here to help with all your property needs</p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                
                   
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your name" value="{{ old('name') }}">
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="your.email@example.com" value="{{ old('email') }}">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="+250 788 123 222" value="{{ old('phone') }}">
                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="service" class="block text-gray-700 font-medium mb-2">Service Interested In</label>
                            <select id="service" name="service" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Select a service</option>
                                <option value="buying" @if(old('service') == 'buying') selected @endif>Property Buying</option>
                                <option value="selling" @if(old('service') == 'selling') selected @endif>Property Selling</option>
                                <option value="management" @if(old('service') == 'management') selected @endif>Property Management</option>
                                <option value="analysis" @if(old('service') == 'analysis') selected @endif>Market Analysis</option>
                                <option value="consulting" @if(old('service') == 'consulting') selected @endif>Investment Consulting</option>
                                <option value="plan" @if(old('service') == 'plan') selected @endif>House Plan Services</option>
                            </select>
                            @error('service') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Tell us about your property needs...">{{ old('message') }}</textarea>
                            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                    
                    @if(session('success'))
                        <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Our Office</h3>
                                    <p class="text-gray-600">Bugesera-Ntarama</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                    <i class="fas fa-phone-alt text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Phone Numbers</h3>
                                    <p class="text-gray-600">

                                         <a href="tel:+250788545947" class="hover:text-primary">+250 788 545 947</a><br>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Email Addresses</h3>
                                    <p class="text-gray-600">
                                      <a href="mailto: emuhayimana@gmail.com" class="hover:text-primary"> emuhayimana@gmail.com</a><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Business Hours</h2>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between border-b border-gray-100 pb-2">
                                <span class="font-medium text-gray-700">Monday - Friday</span>
                                <span class="text-gray-600">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between border-b border-gray-100 pb-2">
                                <span class="font-medium text-gray-700">Saturday</span>
                                <span class="text-gray-600">Closed</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Sunday</span>
                                <span class="text-gray-600">10:00 AM - 4:00 PM</span>
                            </div>
                        </div>
                        
                        <div class="mt-6 p-4 bg-orange-50 rounded-lg border-l-4 border-secondary">
                            <h3 class="font-bold text-secondary mb-2">Emergency Service</h3>
                            <p class="text-gray-700">For urgent property matters outside business hours, please call our emergency line at <a href="tel:+250788545947" class="font-semibold hover:text-primary">+250 788 545 947</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="px-4 pb-12">
        <div class="container mx-auto max-w-6xl">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=Bugesera%20Ntarama&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-96">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Team CTA Section -->
   

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
     </footer>
</body>
</html>