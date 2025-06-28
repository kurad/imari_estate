<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    
    /* Hide scrollbar for IE, Edge and Firefox */
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    
    /* Better styling for the scroll container */
    .scroll-container {
        position: relative;
        max-width: 100%;
        margin: 0 auto;
    }
    
    /* Improved fade gradients */
    .scroll-fade-left,
    .scroll-fade-right {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 25px;
        pointer-events: none;
        z-index: 1;
    }
    
    .scroll-fade-left {
        left: 0;
        background: linear-gradient(90deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 100%);
    }
    
    .scroll-fade-right {
        right: 0;
        background: linear-gradient(270deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 100%);
    }
    
    /* Improved animation for scroll hint */
    @keyframes pulseArrow {
        0% { transform: translateX(-3px); opacity: 0.7; }
        50% { transform: translateX(3px); opacity: 1; }
        100% { transform: translateX(-3px); opacity: 0.7; }
    }
    
    .scroll-hint {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(59, 130, 246, 0.15);
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulseArrow 2s infinite ease-in-out;
        z-index: 2;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: none; /* Hidden by default, will be shown only on small screens */
    }
    
    /* Show scroll hint only on small screens */
    @media (max-width: 768px) {
        .scroll-hint {
            display: flex;
        }
    }
    
    .scroll-hint svg {
        width: 18px;
        height: 18px;
        color: rgba(30, 64, 175, 0.8);
    }
    
    /* Better centering of navigation items */
    .nav-container {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    
    /* Enhanced style for navigation items */
    .nav-item {
        display: flex;
        align-items: center;
        padding: 8px 12px;
        border-radius: 8px;
        transition: all 0.25s ease;
        white-space: nowrap;
        font-weight: 500;
    }
    
    .nav-item:hover {
        background-color: rgba(249, 115, 22, 0.1);
        transform: translateY(-2px);
    }
    
    .nav-item svg {
        margin-right: 8px;
    }
</style>

<!-- Improved Sub Navigation -->
<div class="bg-white shadow-sm">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Better centered container -->
        <div class="nav-container">
            <!-- Scrollable container for all screen sizes -->
            <div class="scroll-container relative w-full max-w-4xl">
                <!-- Fade effect on left edge -->
                <div class="scroll-fade-left"></div>
                
                <!-- Scroll content -->
                <div class="overflow-x-auto scrollbar-hide relative py-4">
                    <div class="flex justify-center space-x-3 min-w-max px-4">
                        <a href="/house" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>House</span>
                        </a>
                        <a href="/apartment" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <span>Apartment</span>
                        </a>
                        <a href="/room" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                            </svg>
                            <span>Room</span>
                        </a>
                        <a href="/villa" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="12 22 12 15 17 15 17 22"></polyline>
                                <polyline points="7 22 7 15 12 15"></polyline>
                            </svg>
                            <span>Villa</span>
                        </a>
                        <a href="/airbnb" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9"></path>
                                <path d="M9 22V12h6v10M2 10.6L12 2l10 8.6"></path>
                            </svg>
                            <span>Airbnb</span>
                        </a>
                        <a href="/short_saty" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                            </svg>
                            <span>Short Stay</span>
                        </a>
                        <a href="/studio_room" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                <rect x="5" y="10" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="12" width="4" height="4" rx="1"></rect>
                                <line x1="2" y1="9" x2="22" y2="9"></line>
                            </svg>
                            <span>Studio Room</span>
                        </a>
                        <a href="/plot" class="nav-item text-blue-900 hover:text-orange-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <path d="M3.27 6.96L12 12.01l8.73-5.05"></path>
                                <path d="M12 22.08V12"></path>
                            </svg>
                            <span>Plot</span>
                        </a>
                    </div>
                </div>
                
                <!-- Fade effect on right edge -->
                <div class="scroll-fade-right"></div>
                
                <!-- Scroll hint - visible only on small screens -->
                <div class="scroll-hint">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>