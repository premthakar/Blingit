<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blingit Grocery')</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tailwind and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    @if (!Route::is('login') && !Route::is('register'))
    <header class="bg-white shadow sticky top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo + Delivery Info -->
            <div class="flex items-center gap-4">
                <a href="/" class="flex items-center gap-1">
                   <span class="text-3xl font-extrabold px-3 py-1 rounded-lg"
    style="background-color: #FFFF00; font-family: 'Montserrat', 'Poppins', sans-serif;">
    <span class="text-black">bling</span><span class="text-green-600">it</span>
</span>

                </a>
                <span class="text-sm font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full shadow-sm hidden sm:inline-flex">
                    🚴 Delivery in 10 minutes
                </span>
            </div>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 justify-center px-4">
                <div class="relative w-full max-w-xl">
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                        <i class="fa fa-search text-green-500 text-lg"></i>
                    </div>
                    <input type="text" placeholder="Search fruits, snacks, daily needs..."
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-green-300 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white shadow text-base" />
                </div>
            </div>

            <!-- Cart & Login -->
            <div class="flex items-center gap-4">
                <a href="/cart" class="relative group text-green-700 hover:text-green-900 transition">
                    <i class="fa fa-shopping-cart text-2xl"></i>
                    <span class="absolute -top-1 -right-2 text-xs bg-yellow-300 text-green-900 font-bold px-2 py-0.5 rounded-full shadow">
                        2
                    </span>
                </a>
                <a href="/login"
                    class="hidden md:inline-block px-4 py-2 rounded-full border border-green-600 text-green-700 font-semibold hover:bg-green-50 shadow-sm transition">
                    Login
                </a>
                <button class="md:hidden p-2 bg-green-100 rounded-full border border-green-200" id="mobileMenuBtn">
                    <i class="fa fa-bars text-green-600 text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Search -->
        <div class="block md:hidden px-6 pb-4">
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <i class="fa fa-search text-green-500 text-base"></i>
                </div>
                <input type="text" placeholder="Search..."
                    class="w-full pl-10 pr-4 py-3 rounded-xl border border-green-300 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white shadow-sm text-base" />
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden px-6 pb-4">
            <nav class="flex flex-col gap-2">
                <a href="/" class="py-2 rounded hover:bg-green-50">Home</a>
                <a href="/shop" class="py-2 rounded hover:bg-green-50">Shop</a>
                <a href="/cart" class="py-2 rounded hover:bg-green-50 flex items-center gap-2">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="ml-1 bg-yellow-300 text-green-900 text-xs font-bold px-2 py-0.5 rounded-full">2</span>
                </a>
                <a href="/login" class="py-2 rounded hover:bg-green-50">Login</a>
            </nav>
        </div>
    </header>
    @endif

    <main class="flex-1">
        @yield('content')
    </main>

    @if (!Route::is('login') && !Route::is('register'))
    <footer class="bg-gradient-to-br from-green-50 via-yellow-50 to-yellow-100 border-t border-yellow-200 mt-16 relative">
        <!-- Background Texture -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/food.png'); pointer-events: none;"></div>

        <div class="container mx-auto px-6 py-12 relative z-10 grid md:grid-cols-4 gap-10">
            <!-- Brand & Social -->
            <div class="flex flex-col gap-4 items-start">
                <a href="/" class="flex items-center">
                    <span class="text-3xl font-extrabold lowercase bg-yellow-300 px-3 py-1 rounded-xl"
                          style="font-family: 'Montserrat', 'Poppins', sans-serif;">
                        <span class="text-black">bling</span><span class="text-green-600">it</span>
                    </span>
                </a>
                <p class="text-green-800 font-medium">Fresh groceries, delivered fast.</p>
                <div class="flex gap-3 mt-1">
                    <a href="#" class="bg-white p-2 rounded-full text-green-700 hover:text-green-900 shadow hover:scale-110 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="bg-white p-2 rounded-full text-green-700 hover:text-green-900 shadow hover:scale-110 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="bg-white p-2 rounded-full text-green-700 hover:text-green-900 shadow hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-3">Quick Links</h4>
                <ul class="space-y-2 text-green-700">
                    <li><a href="/shop" class="hover:underline">Shop</a></li>
                    <li><a href="/admin/dashboard" class="hover:underline">Admin</a></li>
                    <li><a href="/login" class="hover:underline">Login</a></li>
                    <li><a href="/cart" class="hover:underline">My Cart</a></li>
                </ul>
            </div>

            <!-- Customer Support -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-3">Customer Service</h4>
                <ul class="space-y-2 text-green-700">
                    <li><a href="#" class="hover:underline">Help Center</a></li>
                    <li><a href="#" class="hover:underline">Shipping & Delivery</a></li>
                    <li><a href="#" class="hover:underline">Returns & Refunds</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-3">Contact Us</h4>
                <ul class="space-y-3 text-green-800 text-sm">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-green-600"></i> 123, Market Street, Mumbai, India</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-green-600"></i> +91 98765 43210</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-envelope text-green-600"></i> support@blingit.com</li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-yellow-200 text-center py-4 text-sm text-gray-600 bg-yellow-50 relative z-10">
            &copy; {{ date('Y') }} Blingit. All rights reserved.
        </div>
    </footer>
    @endif

    <script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
        
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    }
    </script>

    @stack('scripts')
</body>

</html>