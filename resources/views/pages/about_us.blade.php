<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Imari Real Estate</title>
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
            <h1 class="text-3xl md:text-4xl font-bold text-white text-center">About Imari Real Estate</h1>
            <p class="text-white text-center mt-2 text-lg">Our story, values, and commitment to excellence</p>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative py-16 px-4 bg-gray-900 text-white">
        <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Building Trust in Real Estate Since 2005</h2>
                <p class="text-xl text-gray-300 mb-8">We've helped over 5,000 clients find their dream properties and maximize their real estate investments.</p>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-primary bg-opacity-20 px-6 py-3 rounded-lg border-l-4 border-primary">
                        <p class="text-2xl font-bold">18+</p>
                        <p class="text-gray-300">Years Experience</p>
                    </div>
                    <div class="bg-primary bg-opacity-20 px-6 py-3 rounded-lg border-l-4 border-primary">
                        <p class="text-2xl font-bold">5K+</p>
                        <p class="text-gray-300">Happy Clients</p>
                    </div>
                    <div class="bg-primary bg-opacity-20 px-6 py-3 rounded-lg border-l-4 border-primary">
                        <p class="text-2xl font-bold">$1.5B+</p>
                        <p class="text-gray-300">Properties Sold</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Humble Beginnings</h2>
                    <p class="text-gray-600 mb-4">Founded in 2025 by Edison Muhayimana, Imari Real Estate started as a small business agency with a simple mission: to provide honest, transparent real estate services in an industry that often lacked both.</p>
                    <p class="text-gray-600 mb-4">What began as a one-person operation in a modest office has grown into one of the region's most trusted full-service real estate firms, with more dedicated professionals serving residential and commercial clients.</p>
                    <div class="bg-orange-50 p-6 rounded-lg border-l-4 border-secondary">
                        <h3 class="font-bold text-secondary mb-2">Our Founding Principle</h3>
                        <p class="text-gray-700">"Real estate isn't just about properties — it's about people's lives, dreams, and futures. We succeed when our clients do."</p>
                        <p class="text-gray-600 mt-2">— Edison Muhayimana, Founder</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-xl">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Our first office" 
                         class="w-full h-auto object-cover transition-transform duration-500 hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16 px-4 bg-gray-100">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Core Values</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Integrity</h3>
                    <p class="text-gray-600">We believe in doing what's right, not what's easy. Our clients trust us because we're transparent, honest, and ethical in all our dealings.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-bullseye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Expertise</h3>
                    <p class="text-gray-600">Our team undergoes continuous training to stay ahead of market trends, ensuring we provide the most informed advice and solutions.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Client Focus</h3>
                    <p class="text-gray-600">Every decision we make is guided by what's best for our clients. Your success is our most important metric.</p>
                </div>
                
                <!-- Value 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Innovation</h3>
                    <p class="text-gray-600">We embrace technology and creative solutions to deliver exceptional service and results in an evolving market.</p>
                </div>
                
                <!-- Value 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Community</h3>
                    <p class="text-gray-600">We're committed to strengthening the neighborhoods we serve through volunteerism and local partnerships.</p>
                </div>
                
                <!-- Value 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-primary bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-trophy text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Excellence</h3>
                    <p class="text-gray-600">Good enough never is. We strive for perfection in every detail of our service delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Meet Our Leadership</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Our experienced leadership team brings decades of combined real estate expertise to serve your needs.</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/director.jpg') }}" alt="The Managing Director" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Edison Muhayimana</h3>
                        <p class="text-secondary font-medium mb-3">The Managing Director</p>
                        <p class="text-gray-600 mb-4">Edison has over 20 years of experience in the real estate industry, Private Notary specializing in luxury properties.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/hr.jpg') }}" alt="Human Resources" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Claudine Kayitesi</h3>
                        <p class="text-secondary font-medium mb-3">Human Resources</p>
                        <p class="text-gray-600 mb-4">Claudine is an expert in talent acquisition and employee relations, with a passion for fostering inclusive workplaces.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/land_analyst.jpg') }}" alt="Land Analyst" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Jean Pierre Bangambiki</h3>
                        <p class="text-secondary font-medium mb-3">Land Analyst</p>
                        <p class="text-gray-600 mb-4">Jean Pierre specializes in land use planning and environmental assessment, ensuring sustainable development practices.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/cto.jpg') }}" alt="Chief Technology Officer" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Benjamin Kuradusenge</h3>
                        <p class="text-secondary font-medium mb-3">Chief Technology Officer</p>
                        <p class="text-gray-600 mb-4">Benjamin is a technology visionary with a focus on innovative solutions and digital transformation.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/elodie.jpg') }}" alt="Customer Relations Manager" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Elodie Akoyiremeye</h3>
                        <p class="text-secondary font-medium mb-3">Customer Relations Manager</p>
                        <p class="text-gray-600 mb-4">Elodie is dedicated to enhancing customer satisfaction and fostering long-term relationships.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('img/nelson.jpg') }}" alt="Legal Advisor" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Nelson Turinumugisha</h3>
                        <p class="text-secondary font-medium mb-3">Legal Advisor</p>
                        <p class="text-gray-600 mb-4">Nelson is an expert in legal matters, ensuring compliance and mitigating risks.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 7 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('resources/img/member7.jpg') }}" alt="Project Design Manager" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Peter Dushime</h3>
                        <p class="text-secondary font-medium mb-3">Project Design Manager</p>
                        <p class="text-gray-600 mb-4">Short description about this team member.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 8 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-64 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('resources/img/member8.jpg') }}" alt="Team Member 8" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Member Name</h3>
                        <p class="text-secondary font-medium mb-3">Position</p>
                        <p class="text-gray-600 mb-4">Short description about this team member.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fab fa-linkedin-in text-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-primary transition duration-300"><i class="fas fa-envelope text-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-primary hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-md">
                    Meet the Full Team <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 bg-gradient-to-r from-primary to-secondary">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to Work With Us?</h2>
            <p class="text-white mb-8 max-w-2xl mx-auto">Discover the Imari Real Estate difference for yourself. Let's discuss how we can help with your property goals.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                    Contact Us <i class="fas fa-phone-alt ml-2"></i>
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:bg-opacity-10 transition duration-300 shadow-lg">
                    Our Services <i class="fas fa-home ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
     </footer>
</body>
</html>