@extends('layout')

@section('title', 'Order Placed | Blingit Grocery')

@section('content')
<div class="relative container mx-auto px-4 py-16">
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
    <div class="relative bg-white rounded-3xl shadow-xl border-4 border-yellow-200 p-8 md:p-12 max-w-5xl mx-auto z-10">
        
        <!-- Success Icon -->
        <div class="flex flex-col items-center text-center mb-12">
            <div class="bg-yellow-400 p-6 rounded-full shadow-lg mb-6">
                <i class="bi bi-bag-check-fill text-green-600 text-6xl"></i>
            </div>
            <h1 class="text-4xl font-extrabold text-green-700 mb-2">Thank You for Your Order!</h1>
            <p class="text-gray-600 text-lg">We’ve received your order. We’ll notify you once it’s on the way.</p>
            <p class="mt-2 text-xl font-bold text-yellow-600">Order ID: <span class="text-green-700">#{{ $order->id }}</span></p>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left: Order Summary -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">🛒 Order Summary</h2>
                <div class="space-y-4">
                    @foreach($items as $item)
                        <div class="flex items-center justify-between bg-gray-50 rounded-2xl p-4 shadow-sm">
                            <div class="flex items-center gap-4">
                                <img src="{{ $item['img'] }}" class="w-16 h-16 rounded-xl border border-yellow-300" alt="{{ $item['name'] }}">
                                <div>
                                    <div class="font-semibold text-lg text-gray-800">{{ $item['name'] }}</div>
                                    <div class="text-sm text-gray-500">Qty: {{ $item['qty'] }}</div>
                                </div>
                            </div>
                            <div class="text-green-700 text-xl font-bold">₹{{ $item['total'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-between items-center text-xl font-extrabold mt-6 pt-6 border-t">
                    <span>Total</span>
                    <span class="text-green-700">₹{{ $order->total }}</span>
                </div>
            </div>

            <!-- Right: Address & Payment -->
            <div class="space-y-8">
                <!-- Delivery Address -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">📦 Delivery Address</h2>
                    <div class="bg-yellow-50 rounded-2xl p-6 text-gray-700 text-lg shadow-sm">
                        <p class="font-semibold">{{ $order->address }}</p>
                        <p>{{ $order->state }}, {{ $order->zip }}</p>
                    </div>
                </div>

                <!-- Payment Method -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">💳 Payment Method</h2>
                    <div class="bg-blue-50 rounded-2xl p-6 flex items-center gap-4 text-lg font-semibold text-blue-900 shadow-sm">
                        @php
                            $method = $order->payment_method ?? 'Cash on Delivery';
                            $icon = match($method) {
                                'UPI' => '<i class="bi bi-upc-scan text-2xl text-blue-600"></i>',
                                'Razorpay' => '<i class="bi bi-lightning-charge-fill text-2xl text-indigo-600"></i>',
                                default => '<i class="bi bi-cash-coin text-2xl text-green-600"></i>',
                            };
                        @endphp
                        {!! $icon !!}
                        <span>{{ $method }}</span>
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