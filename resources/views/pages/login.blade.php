<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Premium Real Estate</title>
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

    <!-- Login Section -->
    <section class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Login Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-primary to-secondary py-6 px-8 text-center">
                    <h2 class="text-2xl font-bold text-white">Welcome Back</h2>
                    <p class="text-white opacity-90 mt-1">Sign in to access your account</p>
                </div>

                <!-- Card Body (Login Form) -->
                <div class="p-8">
                    <form action="{{ route('login_user') }}" method="POST">
                        @csrf
                        <!-- Email Input -->
                        <div class="mb-6">
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
                                    value="{{ old('email') }}"
                                >
                            </div>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    
                        <!-- Password Input -->
                        <div class="mb-6">
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
                                    placeholder="Enter your password"
                                    required
                                >
                                <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            {{-- <div class="flex justify-end mt-2">
                                <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">Forgot password?</a>
                            </div> --}}
                        </div>
                    
                        <!-- Remember Me Checkbox -->
                        <div class="mb-6 flex items-center">
                            <input 
                                type="checkbox" 
                                id="remember" 
                                name="remember"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded"
                            >
                            <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                        </div>
                    
                        <!-- Login Button -->
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-primary to-secondary hover:from-blue-600 hover:to-orange-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md"
                        >
                            Sign In <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </form>
     
                </div>

                <!-- Card Footer (Sign Up Link) -->
                <div class="bg-gray-50 px-8 py-6 text-center">
                    <p class="text-gray-600">
                        Don't have an account? 
                        <a href="/register" class="text-primary font-semibold hover:underline">Sign up</a>
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