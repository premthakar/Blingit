@extends('layout')

@section('title', 'Order Placed | Blingit Grocery')

@section('content')
<div class="relative container mx-auto px-2 py-12 flex flex-col items-center">
    <!-- Confetti Animation (SVG) -->
    <div class="absolute inset-0 pointer-events-none z-0 flex justify-center">
        <svg class="w-full h-40 md:h-56 opacity-60" viewBox="0 0 600 150" fill="none">
            <circle cx="50" cy="30" r="10" fill="#FFD600"/>
            <circle cx="120" cy="60" r="8" fill="#4CAF50"/>
            <circle cx="200" cy="20" r="9" fill="#FFD600"/>
            <circle cx="300" cy="50" r="12" fill="#4CAF50"/>
            <circle cx="400" cy="30" r="8" fill="#FFD600"/>
            <circle cx="500" cy="70" r="10" fill="#4CAF50"/>
            <circle cx="580" cy="40" r="9" fill="#FFD600"/>
        </svg>
    </div>
    <div class="relative bg-white rounded-3xl shadow-2xl border-4 border-yellow-200 p-12 max-w-3xl w-full flex flex-col items-center z-10">
        <div class="bg-green-100 rounded-full p-10 mb-8 shadow-xl">
            <svg class="w-32 h-32 text-green-500" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4"/></svg>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-4 text-center tracking-tight">Thank you for your order!</h1>
        <div class="text-gray-700 text-2xl mb-10 text-center">Your order has been placed successfully.<br>Order #<span class="font-bold text-green-700">{{ $order->id }}</span></div>
        <div class="w-full mb-10">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Order Summary</h2>
            <div class="space-y-5 mb-4">
                @foreach($items as $item)
                <div class="flex items-center justify-between gap-4 bg-gray-50 rounded-2xl px-6 py-4 shadow-md">
                    <div class="flex items-center gap-5">
                        <img src="{{ $item['img'] }}" class="w-20 h-20 object-contain rounded-2xl border-2 border-yellow-200 shadow" alt="{{ $item['name'] }}">
                        <span class="font-bold text-xl text-gray-800">{{ $item['name'] }} <span class="ml-3 bg-yellow-200 text-yellow-800 text-lg font-extrabold px-4 py-1 rounded-full align-middle">x{{ $item['qty'] }}</span></span>
                    </div>
                    <span class="font-extrabold text-green-700 text-2xl">₹{{ $item['total'] }}</span>
                </div>
                @endforeach
            </div>
            <div class="border-t-2 my-6"></div>
            <div class="flex justify-between font-extrabold text-2xl">
                <span>Total</span>
                <span class="text-green-700">₹{{ $order->total }}</span>
            </div>
        </div>
        <div class="w-full mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Delivery Address</h2>
            <div class="bg-yellow-50 rounded-2xl p-6 text-gray-700 shadow flex flex-col gap-2 text-lg">
                <span class="font-bold">{{ $order->address }}</span>
                <span>{{ $order->state }}, {{ $order->zip }}</span>
            </div>
        </div>
        <div class="w-full mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Payment Method</h2>
            <div class="bg-blue-50 rounded-2xl p-6 text-blue-800 shadow flex items-center gap-4 text-xl">
                @php
                    $icon = '<svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">';
                    if (($order->payment_method ?? '') === 'UPI') {
                        $icon .= '<circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>';
                    } elseif (($order->payment_method ?? '') === 'Razorpay') {
                        $icon .= '<path d="M7 20L17 4M10 20L20 4M4 20h16"/></svg>';
                    } else {
                        $icon .= '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3v4M8 3v4"/></svg>';
                    }
                @endphp
                {!! $icon !!}
                <span class="font-extrabold">{{ $order->payment_method ?? 'Cash on Delivery' }}</span>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 w-full mt-2">
            <a href="/shop" class="flex-1 bg-green-600 hover:bg-green-700 text-white px-8 py-5 rounded-2xl font-extrabold text-2xl shadow-lg text-center transition transform hover:-translate-y-1">Continue Shopping</a>
            <a href="/orders" class="flex-1 bg-yellow-400 hover:bg-yellow-500 text-green-900 px-8 py-5 rounded-2xl font-extrabold text-2xl shadow-lg text-center transition transform hover:-translate-y-1">View My Orders</a>
        </div>
        <button class="mt-10 w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-5 rounded-2xl font-extrabold text-2xl shadow-lg text-center transition transform hover:-translate-y-1 flex items-center justify-center gap-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 0h6m-6 0a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2m-6 0v2a2 2 0 002 2h2a2 2 0 002-2v-2"/></svg>
            Generate Invoice
        </button>
    </div>
</div>
@endsection 