<!-- Include Livewire styles and scripts -->
@livewireStyles

<header class="bg-white shadow-lg relative">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4 md:py-6">
            <!-- Logo Container - Improved alignment -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('logo/Imari.jpg') }}" class="h-16 w-16 md:h-20 md:w-20" alt="Company Logo">
                <!-- <h4>Logo of IMARI Estate</h4> -->
                <!-- Text Logo - Better grouping and spacing -->

            </div>

            <!-- Rest of your code remains the same -->
            <div class="hidden md:block flex-1 max-w-md mx-4">
                <livewire:data-search />
            </div>

            <div class="hidden md:flex items-center">
                <a href="tel:+250788228919"
                    class="text-blue-900 hover:text-orange-500 transition-colors duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +250 788 545 947
                </a>
            </div>

            <div class="flex md:hidden">
                <button id="mobile-menu-button"
                    class="text-blue-900 hover:text-orange-500 transition-colors duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="md:hidden fixed inset-0 z-50 hidden">
        <div class="fixed inset-0 bg-black bg-opacity-50" id="menu-backdrop"></div>
        <div
            class="fixed top-0 left-0 w-72 h-full bg-white shadow-xl transform transition-transform duration-300 ease-in-out -translate-x-full">
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <div class="flex items-center">
                    <span class="text-green-900 text-2xl font-bold">I</span>
                    <span class="text-orange-500 text-2xl font-bold">MAR</span>
                    <span class="text-green-900 text-2xl font-bold">I</span>

                </div>
                <button id="close-menu" class="text-gray-500 hover:text-orange-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile search component -->
            <div class="px-4 py-3">
                <livewire:data-search />
            </div>

            <nav class="px-4 py-2 items-center">
                <ul class="space-y-4">
                    <li>
                        <a href="/"
                            class="flex items-center text-sm text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/properties"
                            class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Properties
                        </a>
                    </li>

                    <li>
                        <a href="/for_sale"
                            class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect>
                                <path d="M12 12h.01M17 12h.01M7 12h.01"></path>
                            </svg>
                            For Sale
                        </a>
                    </li>
                    <li>
                        <a href="/for_rent"
                            class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                            </svg>
                            For Rent
                        </a>
                    </li>
                    <li>
                        <a href="/contact_us"
                            class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="/about_us"
                            class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="/login"
                            class="flex items-center bg-orange-500 text-white font-medium px-4 py-2 rounded-md animate-blink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Login
                        </a>
                    </li>

                    <li>
                        <a href="/register"
                            class="flex items-center bg-blue-500 text-white font-medium px-4 py-2 rounded-md animate-blink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Register
                        </a>
                    </li>
                </ul>
                <div class="mt-6">
                    <a href="tel:+250788228919"
                        class="flex items-center text-blue-900 hover:text-orange-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +250788407941
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main Navigation (Desktop) -->
    <nav class="hidden md:block bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 items-center">
            <ul class="flex justify-center space-x-12 py-4">
                <li>
                    <a href="/"
                        class="flex items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/properties"
                        class=" text-sm flex items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Properties
                    </a>
                </li>

                <li>
                    <a href="/for_sale"
                        class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect>
                            <path d="M12 12h.01M17 12h.01M7 12h.01"></path>
                        </svg>
                        For Sale
                    </a>
                </li>
                <li>
                    <a href="/for_rent"
                        class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        </svg>
                        For Rent
                    </a>
                </li>
                <li>
                    <a href="/contact_us"
                        class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Us
                    </a>
                </li>

                <li>
                    <a href="/about_us"
                        class="flex text-sm items-center text-blue-900 font-medium hover:text-orange-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        About Us
                    </a>
                </li>

                <li>
                    <a href="/login"
                        class="flex text-sm items-center bg-orange-500 text-white font-medium px-4 py-2 rounded-md animate-blink">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Login
                    </a>
                </li>

                <li>
                    <a href="/register"
                        class="flex items-center bg-blue-500 text-white font-medium px-4 py-2 rounded-md animate-blink">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Register
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>

<script>
// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBackdrop = document.getElementById('menu-backdrop');
    const menuPanel = mobileMenu.querySelector('.w-72'); // The sliding panel

    function openMenu() {
        // First remove hidden class
        mobileMenu.classList.remove('hidden');
        // Small delay to allow DOM to update before animation
        setTimeout(() => {
            menuPanel.classList.remove('-translate-x-full');
        }, 10);
    }

    function closeMenu() {
        menuPanel.classList.add('-translate-x-full');
        // Wait for animation to complete before hiding
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    }

    mobileMenuButton.addEventListener('click', openMenu);
    closeMenuButton.addEventListener('click', closeMenu);
    menuBackdrop.addEventListener('click', closeMenu);

    // Close menu when pressing Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            closeMenu();
        }
    });
});
</script>

<!-- Include Livewire scripts -->
@livewireScripts