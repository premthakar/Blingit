<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #FFFDE7 0%, #f0f4c3 100%);
        }
        .sidebar-mobile {
            transition: transform 0.3s cubic-bezier(.4, 0, .2, 1);
        }
        .sidebar-mobile.closed {
            transform: translateX(-100%);
        }
        .sidebar-mobile.open {
            transform: translateX(0);
        }
        .sidebar-overlay {
            transition: opacity 0.3s cubic-bezier(.4, 0, .2, 1);
        }
        .sidebar-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }
        .sidebar-overlay.visible {
            opacity: 1;
            pointer-events: auto;
        }
        @media (min-width: 768px) {
            .sidebar-mobile {
                transform: none !important;
            }
            .sidebar-overlay {
                display: none !important;
            }
        }
        /* Custom scrollbar for sidebar and main */
        ::-webkit-scrollbar {
            width: 8px;
            background: #f9fafb;
        }
        ::-webkit-scrollbar-thumb {
            background: #e0e7af;
            border-radius: 4px;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-yellow-50 to-green-50 min-h-screen">
    <div class="flex flex-col md:flex-row h-screen overflow-hidden">
        <!-- Mobile Sidebar Overlay -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-40 z-40 hidden md:hidden transition-opacity"></div>
        <!-- Sidebar -->
        <aside id="admin-sidebar"
            class="fixed md:static top-0 left-0 h-full w-72 max-w-full bg-white border-r border-yellow-200 z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col shadow-2xl sidebar-mobile">
            <div class="flex items-center justify-between px-6 py-4 border-b border-yellow-200 bg-gradient-to-r from-yellow-200 to-green-100">
                <a href="/admin/dashboard" class="flex items-center gap-2">
                    <span class="inline-flex items-center px-5 py-2 rounded-2xl bg-yellow-300 shadow-md"
                        style="font-family: 'Montserrat', 'Poppins', sans-serif;">
                        <span class="text-3xl font-extrabold lowercase">
                            <span class="text-black">bling</span><span class="text-green-600">it</span>
                        </span>
                    </span>
                </a>
                <!-- Close button for mobile -->
                <button id="sidebar-close"
                    class="md:hidden text-gray-700 hover:text-green-700 text-2xl focus:outline-none">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <!-- Sidebar navigation links -->
            <ul class="space-y-2 mt-6 px-2 flex-1 overflow-y-auto">
                <li>
                    <a href="{{ url('/admin/dashboard') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/dashboard')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-gauge-high mr-2 text-green-600"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/categories') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/categories')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-list-ul mr-2 text-yellow-600"></i> Category Management
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/coupons') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/coupons')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-ticket mr-2 text-pink-600"></i> Coupons
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/orders') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/orders')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-receipt mr-2 text-blue-600"></i> Orders
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/products') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/products')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-boxes-stacked mr-2 text-purple-600"></i> Product Management
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/users') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/users')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fa-solid fa-users mr-2 text-orange-600"></i> Users
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contact') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-lg transition font-medium text-gray-900 hover:bg-green-100 hover:text-green-700 @if(request()->is('admin/contact')) bg-green-200 text-green-800 font-bold shadow @endif">
                        <i class="fas fa-address-book mr-2 text-teal-600"></i> Contact Messages
                    </a>
                </li>
            </ul>
            <div class="mt-auto p-4 text-xs text-gray-400 text-center">
                &copy; {{ date('Y') }} Blingit Admin
            </div>
        </aside>
        <!-- Hamburger menu button -->
        <button id="sidebar-open"
            class="fixed top-4 left-4 z-50 md:hidden bg-white border border-yellow-200 rounded-full p-2 shadow-lg focus:outline-none">
            <i class="bi bi-list text-2xl text-green-700"></i>
        </button>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 bg-gradient-to-br from-yellow-50 to-green-50">
            <!-- Top Navbar -->
            <header class="bg-white/90 backdrop-blur border-b border-yellow-200 flex items-center justify-between px-4 md:px-8 h-16 shadow-sm sticky top-0 z-30">
                <div class="md:hidden">
                    <!-- Mobile menu button -->
                    <button id="sidebarToggle" class="text-gray-600 focus:outline-none" aria-label="Open sidebar"
                        aria-controls="sidebar" aria-expanded="false">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center gap-2 md:gap-4">
                    <div class="text-lg md:text-xl font-semibold text-gray-800 truncate">@yield('title', 'Admin Dashboard')</div>
                    <form class="hidden md:block flex-1 max-w-xs ml-2 md:ml-8 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="bi bi-search text-lg"></i>
                        </span>
                        <input type="text" placeholder="Search..."
                            class="w-full pl-10 pr-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-green-200 focus:outline-none bg-gray-50 text-gray-800 placeholder-gray-400 text-sm md:text-base shadow-sm transition">
                    </form>
                </div>
                <div class="relative ml-2 md:ml-0">
                    <!-- Button with user icon and avatar -->
                    <button id="userDropdownBtn"
                        class="flex items-center space-x-2 md:space-x-3 focus:outline-none px-3 py-2 rounded-lg bg-gray-100 hover:bg-green-100 transition text-gray-700 shadow"
                        aria-haspopup="true" aria-expanded="false" aria-controls="userDropdownMenu">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=34d399&color=fff&rounded=true&size=32"
                            alt="Admin Avatar" class="w-8 h-8 rounded-full border-2 border-green-200 shadow-sm">
                        <span class="text-gray-700 font-medium hidden sm:inline">Admin</span>
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="userDropdownMenu"
                        class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg py-2 z-50 hidden transition-all duration-200"
                        role="menu" aria-labelledby="userDropdownBtn">
                        <a href="{{ route('admin.profile') }}"
                            class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:bg-green-50 transition" role="menuitem">
                            <i class="bi bi-person text-green-600"></i> Profile
                        </a>
                        <a href="{{ route('admin.settings') }}"
                            class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:bg-green-50 transition" role="menuitem">
                            <i class="bi bi-gear text-yellow-600"></i> Settings
                        </a>
                        <a href="{{ route('logout') }}"
                            class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:bg-green-50 transition" role="menuitem">
                            <i class="bi bi-box-arrow-right text-red-600"></i> Logout
                        </a>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-y-auto p-3 md:p-8">
                <div class="mx-auto max-w-7xl w-full">
                    @yield('content')
                </div>
            </main>
            <footer class="bg-white/90 backdrop-blur border-t border-yellow-200 text-center py-3 text-xs text-gray-400 shadow-inner">
                &copy; {{ date('Y') }} Blingit Admin. All rights reserved.
            </footer>
        </div>
    </div>
    <script>
        // Sidebar open/close logic
        const sidebar = document.getElementById('admin-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const openBtn = document.getElementById('sidebar-open');
        const closeBtn = document.getElementById('sidebar-close');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
        openBtn && openBtn.addEventListener('click', openSidebar);
        closeBtn && closeBtn.addEventListener('click', closeSidebar);
        overlay && overlay.addEventListener('click', closeSidebar);

        // User dropdown toggle
        const userDropdownBtn = document.getElementById('userDropdownBtn');
        const userDropdownMenu = document.getElementById('userDropdownMenu');
        let dropdownOpen = false;

        function openDropdown() {
            userDropdownMenu.classList.remove('hidden');
            userDropdownBtn.setAttribute('aria-expanded', 'true');
            dropdownOpen = true;
        }

        function closeDropdown() {
            userDropdownMenu.classList.add('hidden');
            userDropdownBtn.setAttribute('aria-expanded', 'false');
            dropdownOpen = false;
        }
        userDropdownBtn?.addEventListener('click', function(e) {
            e.stopPropagation();
            if (dropdownOpen) {
                closeDropdown();
            } else {
                openDropdown();
            }
        });
        // Close dropdown on click outside
        document.addEventListener('click', function(e) {
            if (dropdownOpen && !userDropdownMenu.contains(e.target) && !userDropdownBtn.contains(e.target)) {
                closeDropdown();
            }
        });
        // Close dropdown with Escape key
        document.addEventListener('keydown', function(e) {
            if (dropdownOpen && e.key === 'Escape') {
                closeDropdown();
            }
        });
        // Responsive: Hide sidebar on resize if needed
        window.addEventListener('resize', function() {
            if(window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>

</html>
