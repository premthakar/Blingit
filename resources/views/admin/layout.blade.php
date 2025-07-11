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
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="flex h-screen overflow-hidden">
        <!-- Mobile Sidebar Overlay -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-30 z-40 hidden md:hidden transition-opacity">
        </div>
        <!-- Sidebar -->
        <div>
            <!-- Sidebar -->
            <aside id="admin-sidebar"
                class="fixed md:static top-0 left-0 h-full w-64 bg-white border-r border-yellow-200 z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col">
                <div class="flex items-center justify-between px-6 py-4 border-b border-yellow-200">
                    <a href="/admin/dashboard" class="flex items-center gap-2">
                        <span class="inline-flex items-center px-5 py-2 rounded-2xl bg-yellow-300"
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
                <ul class="space-y-2 mt-6">
                    <li>
                        <a href="{{ url('/admin/dashboard') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/dashboard')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-gauge-high mr-2 text-black"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/categories') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/categories')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-list-ul mr-2 text-black"></i> Category Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/coupons') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/coupons')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-ticket mr-2 text-black"></i> Coupons
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/orders') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/orders')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-receipt mr-2 text-black"></i> Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/products') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/products')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-boxes-stacked mr-2 text-black"></i> Product Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/users') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/users')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fa-solid fa-users mr-2 text-black"></i> Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact') }}"
                            class="block py-2 px-3 rounded transition font-medium text-gray-900 hover:bg-yellow-200 hover:text-green-700 @if(request()->is('admin/contact')) bg-green-100 text-green-700 font-bold @endif">
                            <i class="fas fa-address-book mr-2 text-black"></i> Contact Messages
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- Hamburger menu button -->
            <button id="sidebar-open"
                class="fixed top-4 left-4 z-50 md:hidden bg-white border border-yellow-200 rounded-full p-2 shadow-lg focus:outline-none">
                <i class="bi bi-list text-2xl text-green-700"></i>
            </button>
        </div>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 bg-[#FFFDE7]">
            <!-- Top Navbar -->
            <header class="bg-white border-b border-yellow-200 flex items-center justify-between px-4 md:px-8 h-16">
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
                    <div class="text-lg md:text-xl font-semibold text-gray-800 truncate">@yield('title', 'Admin
                        Dashboard')</div>
                    <form class="hidden md:block flex-1 max-w-xs ml-2 md:ml-8 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="bi bi-search text-lg"></i>
                        </span>
                        <input type="text" placeholder="Search..."
                            class="w-full pl-10 pr-3 py-2 rounded border border-gray-200 focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800 placeholder-gray-400 text-sm md:text-base">
                    </form>

                </div>
                <div class="relative ml-2 md:ml-0">
                    <div class="relative ml-2 md:ml-0">
                        <!-- Button with user icon -->
                        <button id="userDropdownBtn"
                            class="flex items-center space-x-2 md:space-x-3 focus:outline-none px-3 py-2 rounded bg-gray-100 hover:bg-gray-200 transition text-gray-700"
                            aria-haspopup="true" aria-expanded="false" aria-controls="userDropdownMenu">
                            <i class="bi bi-person-circle text-xl md:text-2xl text-gray-700"></i>
                            <span class="text-gray-700 font-medium hidden sm:inline">Admin</span>
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="userDropdownMenu"
                            class="absolute right-0 mt-2 w-36 md:w-44 bg-white rounded shadow-lg py-2 z-50 hidden"
                            role="menu" aria-labelledby="userDropdownBtn">
                            <a href="{{ route('admin.profile') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">
                                <i class="bi bi-person me-2"></i> Profile
                            </a>
                            <a href="{{ route('admin.settings') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">
                                <i class="bi bi-gear me-2"></i> Settings
                            </a>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 w-full text-left flex items-center gap-2"
                                role="menuitem">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>

                        </div>
                    </div>

                    <div id="userDropdownMenu"
                        class="absolute right-0 mt-2 w-36 md:w-44 bg-white rounded shadow-lg py-2 z-50 hidden"
                        role="menu" aria-labelledby="userDropdownBtn">
                        <a href="{{ route('admin.profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            role="menuitem">Profile</a>
                        <a href="{{ route('admin.settings') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            role="menuitem">Settings</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-y-auto p-3 md:p-8">
                @yield('content')
            </main>
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
    </script>
</body>

</html>