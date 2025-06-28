<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Imari Real Estate</title>
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
    <!-- Header (Optional) -->
    @include('navbar.navbar')

    <!-- Registration Section -->
    <section class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">

            <!-- resources/views/components/validation-errors.blade.php -->

@if($errors->any())
<div class="mb-4">
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">There were some errors with your submission:</span>
            </div>
        </div>
        <ul class="mt-2 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
            <!-- Registration Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-primary to-secondary py-6 px-8 text-center">
                    <h2 class="text-2xl font-bold text-white">Create Your Account</h2>
                    <p class="text-white opacity-90 mt-1">Join us to get started</p>
                </div>

                <!-- Card Body (Registration Form) -->
                <div class="p-8">
                    <form action="/register_user" method="POST">
                        @csrf
                        <!-- Full Name -->
                        <div class="mb-4">
                            <label for="fullName" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="fullName" 
                                    name="fullName"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" 
                                    placeholder="John Doe"
                                    required
                                >
                            </div>
                        </div>
                    
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email" 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" 
                                    placeholder="your.email@example.com"
                                    required
                                >
                            </div>
                        </div>
                    
                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" 
                                    placeholder="+1 (555) 123-4567"
                                    required
                                >
                            </div>
                        </div>
                    
                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" 
                                    placeholder="At least 8 characters"
                                    required
                                    minlength="8"
                                >
                                <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">Must be at least 8 characters</p>
                        </div>
                    
                        <!-- Confirm Password -->
                        <div class="mb-6">
                            <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    type="password" 
                                    id="password_confirmation"
                                    name="password_confirmation" 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" 
                                    placeholder="Re-enter your password"
                                    required
                                >
                            </div>
                        </div>
                    
                        <!-- Register Button -->
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-primary to-secondary hover:from-blue-600 hover:to-orange-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md"
                        >
                            Create Account <i class="fas fa-user-plus ml-2"></i>
                        </button>
                    </form>
                </div>

                <!-- Card Footer (Login Link) -->
                <div class="bg-gray-50 px-8 py-6 text-center">
                    <p class="text-gray-600">
                        Already have an account? 
                        <a href="/login" class="text-primary font-semibold hover:underline">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Optional) -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
     </footer>

    <!-- Toggle Password Visibility Script -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    </script>
</body>
</html>