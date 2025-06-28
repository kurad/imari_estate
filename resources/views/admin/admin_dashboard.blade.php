<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Admin Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 px-4 py-6 flex flex-col">
            <div class="mb-8">
                <h1 class="text-2xl font-bold flex items-center">
                    <i class="fas fa-home mr-3"></i>
                    <span>Property Admin</span>
                </h1>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#dashboard" onclick="switchTab('dashboard')"
                            class="flex items-center p-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                            <i class="fas fa-tachometer-alt w-6"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#properties" onclick="switchTab('properties')"
                            class="flex items-center p-3 rounded-lg hover:bg-gray-700">
                            <i class="fas fa-building w-6"></i>
                            <span>Properties</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#users" onclick="switchTab('users')"
                            class="flex items-center p-3 rounded-lg hover:bg-gray-700">
                            <i class="fas fa-users w-6"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#messages" onclick="switchTab('messages')"
                            class="flex items-center p-3 rounded-lg hover:bg-gray-700">
                            <i class="fas fa-envelope w-6"></i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <!-- <li class="mb-4">
                        <a href="#houseplans" onclick="switchTab('houseplans')" class="flex items-center p-3 rounded-lg hover:bg-gray-700">
                            <i class="fas fa-blueprint w-6"></i>
                            <span>House Plans</span>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <div class="mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center p-3 rounded-lg hover:bg-gray-700 w-full text-left">
                        <i class="fas fa-sign-out-alt w-6"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <button id="menuToggle" class="mr-4 lg:hidden">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h2 id="pageTitle" class="text-xl font-semibold">Dashboard</h2>
                    </div>
                    <div class="flex items-center">
                        {{-- <div class="relative">
                            <input type="text" placeholder="Search..." class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <button class="absolute right-2 top-2 text-gray-500">
                                <i class="fas fa-search"></i>
                            </button>
                        </div> --}}
                        <div
                            class="ml-4 bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center">
                            <span>A</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Dashboard Tab -->
                <div id="dashboard" class="tab-content block">
                    @include('admin.components.dashboard')
                </div>

                <!-- Properties Tab -->
                <div id="properties" class="tab-content hidden">
                    @include('admin.components.property')
                </div>

                <!-- Users Tab -->
                <div id="users" class="tab-content hidden">
                    @include('admin.components.user')
                </div>

                <!-- Messages Tab -->
                <div id="messages" class="tab-content hidden">
                    @include('admin.components.message')
                </div>

            </main>
        </div>
    </div>

    <script>
    // Tab switching functionality
    function switchTab(tabId) {
        // Hide all tabs
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(tab => {
            tab.classList.add('hidden');
        });

        // Show the selected tab
        document.getElementById(tabId).classList.remove('hidden');

        // Update page title
        const pageTitle = document.getElementById('pageTitle');
        pageTitle.textContent = tabId.charAt(0).toUpperCase() + tabId.slice(1);

        // Update active state in sidebar
        const navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(link => {
            link.classList.remove('bg-blue-600', 'text-white');
            link.classList.add('hover:bg-gray-700');
        });

        const activeLink = document.querySelector(`a[href="#${tabId}"]`);
        activeLink.classList.add('bg-blue-600', 'text-white');
        activeLink.classList.remove('hover:bg-gray-700');
    }

    // Mobile menu toggle
    document.getElementById('menuToggle').addEventListener('click', () => {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('hidden');
    });

    // Initialize the dashboard as the active tab
    document.addEventListener('DOMContentLoaded', () => {
        switchTab('dashboard');
    });
    </script>
</body>

</html>