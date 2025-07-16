@extends('layout')

@section('title', 'Order Placed | Blingit Grocery')

@section('content')
<!-- Main Container -->
<div class="relative w-full h-full max-h-screen overflow-y-auto bg-white shadow-2xl rounded-none border-t-8 border-b-8 border-yellow-300 p-6 md:p-10 z-10 mx-2 md:mx-6">


    <!-- Confetti Animation -->
    <div class="absolute inset-0 pointer-events-none z-0 flex justify-center">
        <svg class="w-full h-48 opacity-60" viewBox="0 0 600 150" fill="none">
            <circle cx="50" cy="30" r="10" fill="#FFD600"/>
            <circle cx="120" cy="60" r="8" fill="#4CAF50"/>
            <circle cx="200" cy="20" r="9" fill="#FFD600"/>
            <circle cx="300" cy="50" r="12" fill="#4CAF50"/>
            <circle cx="400" cy="30" r="8" fill="#FFD600"/>
            <circle cx="500" cy="70" r="10" fill="#4CAF50"/>
            <circle cx="580" cy="40" r="9" fill="#FFD600"/>
        </svg>
    </div>

    <!-- Main Container -->
    <div class="relative w-full h-full max-h-screen overflow-y-auto bg-white shadow-2xl rounded-none border-t-8 border-b-8 border-yellow-300 p-6 md:p-10 z-10">

        <!-- Success Header -->
        <div class="flex flex-col items-center text-center mb-12">
            <div class="bg-yellow-400 p-6 rounded-full shadow-xl mb-6">
                <i class="bi bi-bag-check-fill text-green-600 text-6xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-2">Thank You for Your Order!</h1>
            <p class="text-gray-600 text-lg">We’ve received your order. We’ll notify you once it’s on the way.</p>
            <p class="mt-2 text-xl font-bold text-yellow-600">Order ID: <span class="text-green-700">#12345</span></p>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <!-- Order Summary -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">🛒 Order Summary</h2>
                <div class="space-y-6">

                    <!-- Product Card -->
                    <div class="bg-gray-100 rounded-2xl p-5 shadow-md hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <img src="/images/apple.jpg" class="w-16 h-16 rounded-xl border border-yellow-300" alt="Apple">
                                <div>
                                    <div class="font-semibold text-lg text-gray-800">Fresh Apple</div>
                                    <div class="text-sm text-gray-500">Qty: 2</div>
                                </div>
                            </div>
                            <div class="text-green-700 text-xl font-bold">₹100</div>
                        </div>

                        <!-- Review Section -->
                        <div class="mt-4 space-y-2">
                            <textarea rows="2" placeholder="Write your review..." class="w-full rounded-xl border border-gray-300 p-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                            <div class="flex justify-between items-center">
                                <div class="flex gap-1 text-yellow-500 text-xl">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-green-900 px-4 py-2 rounded-xl font-semibold shadow transition hover:-translate-y-0.5">Submit Review</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center text-xl font-extrabold mt-6 pt-6 border-t">
                    <span>Total</span>
                    <span class="text-green-700">₹100</span>
                </div>
            </div>

            <!-- Address & Payment Info -->
            <div class="space-y-10">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">📦 Delivery Address</h2>
                    <div class="bg-yellow-50 rounded-2xl p-6 text-gray-700 text-lg shadow-sm border-l-4 border-yellow-300">
                        <p class="font-semibold">123, Sunrise Apartments</p>
                        <p>Ahmedabad, Gujarat - 380015</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">💳 Payment Method</h2>
                    <div class="bg-blue-50 rounded-2xl p-6 flex items-center gap-4 text-lg font-semibold text-blue-900 shadow-sm border-l-4 border-blue-300">
                        <i class="bi bi-cash-coin text-2xl text-green-600"></i>
                        <span>Cash on Delivery</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col md:flex-row gap-4 mt-12">
            <a href="/shop" class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-4 text-lg font-bold rounded-2xl transition shadow-md hover:-translate-y-1">Continue Shopping</a>
            <a href="/orders" class="flex-1 bg-yellow-400 hover:bg-yellow-500 text-green-900 text-center py-4 text-lg font-bold rounded-2xl transition shadow-md hover:-translate-y-1">View My Orders</a>
        </div>

        <!-- Invoice Button -->
        <div class="mt-8 text-center">
            <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 text-lg font-bold rounded-2xl shadow-md transition hover:-translate-y-1">
                <i class="bi bi-receipt-cutoff text-2xl"></i> Generate Invoice
            </button>
        </div>
    </div>
</div>
@endsection
