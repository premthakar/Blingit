<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blingit Grocery')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">


    <style>
    body {
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    @if (!Route::is('login') && !Route::is('register'))
    <header
        class="bg-gradient-to-r from-green-100 via-yellow-50 to-green-50 shadow-lg sticky top-0 z-30 rounded-b-2xl border-b border-green-200">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="/" class="flex items-center gap-2">
                <span class="select-none px-4 py-1 rounded-lg"
                    style="background: #FFD600; font-family: 'Montserrat', 'Poppins', Arial, sans-serif; font-weight: 800; font-size: 2rem; line-height: 1;">
                    <span style="color: #222;">bling</span><span style="color: #4CAF50;">it</span>
                </span>
            </a>
            &nbsp; &nbsp; &nbsp;
            <nav class="hidden md:flex gap-2 lg:gap-6 text-base font-semibold items-center">
                <a href="/"
                    class="px-3 py-2 rounded-lg transition hover:bg-green-100 hover:text-green-700 focus:bg-green-200 focus:text-green-800 @if(request()->is('/')) bg-green-200 text-green-800 @endif">Home</a>
                <a href="/shop"
                    class="px-3 py-2 rounded-lg transition hover:bg-green-100 hover:text-green-700 focus:bg-green-200 focus:text-green-800">Shop</a>
                <a href="/cart"
                    class="px-3 py-2 rounded-lg transition hover:bg-green-100 hover:text-green-700 focus:bg-green-200 focus:text-green-800 flex items-center gap-1">
                    <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0" />
                    </svg>
                    Cart
                    <span class="ml-1 bg-yellow-300 text-green-900 text-xs font-bold px-2 py-0.5 rounded-full">2</span>
                </a>
                <a href="/about"
                    class="px-3 py-2 rounded-lg transition hover:bg-green-100 hover:text-green-700 focus:bg-green-200 focus:text-green-800">About</a>
                <a href="/contact"
                    class="px-3 py-2 rounded-lg transition hover:bg-green-100 hover:text-green-700 focus:bg-green-200 focus:text-green-800">Contact</a>
            </nav>
            <div class="hidden lg:flex flex-1 justify-center mx-6">
                <div class="relative w-72">
                    <!-- Search Icon -->
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                        </svg>
                    </div>

                    <!-- Input -->
                    <input type="text" placeholder="Search for products..."
                        class="w-full pl-10 pr-4 py-2 rounded-full border border-green-200 focus:outline-none focus:ring-2 focus:ring-green-300 bg-white shadow-sm" />
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="/login"
                    class="hidden md:inline-block px-5 py-2 rounded-full border border-green-600 text-green-700 font-bold bg-white hover:bg-green-50 shadow-sm transition">Login</a>
                <button class="md:hidden focus:outline-none bg-green-100 p-2 rounded-full border border-green-200"
                    id="mobileMenuBtn">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white border-t border-green-200 rounded-b-2xl shadow-lg">
            <nav class="flex flex-col gap-2 px-4 py-3">
                <a href="/" class="py-2 rounded hover:bg-green-50 hover:text-green-700">Home</a>
                <a href="/shop" class="py-2 rounded hover:bg-green-50 hover:text-green-700">Shop</a>
                <a href="/cart" class="py-2 rounded hover:bg-green-50 hover:text-green-700 flex items-center gap-1">
                    <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0" />
                    </svg>
                    Cart <span
                        class="ml-1 bg-yellow-300 text-green-900 text-xs font-bold px-2 py-0.5 rounded-full">2</span>
                </a>
                <a href="/about" class="py-2  rounded hover:bg-green-50 hover:text-green-700">About</a>
                <a href="/contact" class="py-2 rounded hover:bg-green-50 hover:text-green-700">Contact</a>
                <a href="/login" class="py-2 rounded hover:bg-green-50 hover:text-green-700">Login</a>
            </nav>
            <div class="flex justify-center mt-3 mb-2">
                <input type="text" placeholder="Search for products..."
                    class="w-full px-4 py-2 rounded-full border border-green-200 focus:outline-none focus:ring-2 focus:ring-green-300 bg-white shadow-sm" />
            </div>
        </div>
    </header>
    @endif
    <main class="flex-1">
        @yield('content')
    </main>
    @if (!Route::is('login') && !Route::is('register'))
    <footer
        class="relative bg-gradient-to-br from-yellow-100 via-green-50 to-yellow-200 border-t border-yellow-200 mt-16 overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none select-none"
            style="background-image: url('https://www.transparenttextures.com/patterns/food.png');"></div>
        <div
            class="container mx-auto px-4 py-12 relative z-10 flex flex-col md:flex-row md:items-start md:justify-between gap-12">
            <div class="flex-1 flex flex-col items-center md:items-start gap-4">
                <a href="/" class="flex items-center mb-2">
                    <span class="text-3xl font-extrabold lowercase"
                        style="font-family: 'Montserrat', 'Poppins', sans-serif;">
                        <span class="text-black">bling</span><span class="text-green-600">it</span>
                    </span>
                </a>
                <p class="text-green-800 text-base font-semibold">Fresh groceries, delivered fast.</p>
                <div class="flex gap-3 mt-2">
                    <a href="#"
                        class="text-green-700 hover:text-green-900 bg-white rounded-full p-2 shadow hover:scale-110 transition"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#"
                        class="text-green-700 hover:text-green-900 bg-white rounded-full p-2 shadow hover:scale-110 transition"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#"
                        class="text-green-700 hover:text-green-900 bg-white rounded-full p-2 shadow hover:scale-110 transition"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="flex-1 grid grid-cols-2 md:grid-cols-3 gap-8 text-center md:text-left">
                <div>
                    <h4 class="font-bold text-gray-800 mb-2">Quick Links</h4>
                    <ul class="space-y-1">
                        <li><a href="/shop" class="text-green-700 hover:underline">Shop</a></li>
                        <li><a href="/about" class="text-green-700 hover:underline">About</a></li>
                        <li><a href="/contact" class="text-green-700 hover:underline">Contact</a></li>
                        <li><a href="/admin/dashboard" class="text-green-700 hover:underline">Admin</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-800 mb-2">Customer Service</h4>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-green-700 hover:underline">Help Center</a></li>
                        <li><a href="#" class="text-green-700 hover:underline">Shipping & Delivery</a></li>
                        <li><a href="#" class="text-green-700 hover:underline">Returns & Refunds</a></li>
                        <li><a href="#" class="text-green-700 hover:underline">Terms & Conditions</a></li>
                        <li><a href="#" class="text-green-700 hover:underline">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-800 mb-2">Contact Us</h4>
                    <ul class="space-y-1 text-green-800">
                        <li class="flex items-center gap-2 justify-center md:justify-start"><i
                                class="fa-solid fa-location-dot"></i> 123, Market Street, Mumbai, India</li>
                        <li class="flex items-center gap-2 justify-center md:justify-start"><i
                                class="fa-solid fa-phone"></i> +91 98765 43210</li>
                        <li class="flex items-center gap-2 justify-center md:justify-start"><i
                                class="fa-solid fa-envelope"></i> support@blingit.com</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="border-t border-yellow-200 text-center py-4 text-sm text-gray-500 bg-yellow-50 relative z-10">
            &copy; {{ date('Y') }} Blingit. All rights reserved.
        </div>
    </footer>
    @endif
    <script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenuBtn?.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
    document.addEventListener('click', function(e) {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
    </script>
</body>

</html>