@extends('layout')

@section('title', 'Order Placed | Blingit Grocery')

@section('content')
{{-- 
  This Blade template provides a modern, static, and celebratory order confirmation page.
  - It's styled entirely with Tailwind CSS without any JavaScript.
  - The layout is clean, responsive, and includes a static order status tracker.
  - All dynamic animations (confetti, progress bar) have been removed.
  - The review section is a simple, non-interactive form.
  - All icons are inline SVGs for better performance and styling.
--}}
<div class="bg-gray-100 min-h-screen font-sans flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="relative w-full max-w-5xl bg-white rounded-3xl shadow-2xl border border-gray-200 p-6 sm:p-10 z-10 mx-auto overflow-hidden">
        
        <!-- Main Content -->
        <div class="relative z-10">

            <!-- Success Header -->
            <div class="flex flex-col items-center text-center mb-8">
                <div class="bg-green-100 p-4 rounded-full mb-5 ring-4 ring-green-50">
                    <div class="bg-green-200 p-3 rounded-full">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">Thank You for Your Order!</h1>
                <p class="text-gray-600 text-base md:text-lg max-w-2xl">Your order has been confirmed. You can track its progress below.</p>
                <p class="mt-4 text-lg font-bold text-gray-500">Order ID: <span class="text-green-600">#BLINGIT-12345</span></p>
            </div>

          
            
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                
                <!-- Left Column: Order Summary -->
                <div class="lg:col-span-3">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                        Order Summary
                    </h2>
                    <div class="space-y-4">
                        @php
                            // Mock data for order summary
                            $orderItems = [
                                ['img' => 'https://www.bigbasket.com/media/uploads/p/l/10000159_27-fresho-potato.jpg', 'name' => 'Fresh Potato', 'qty' => 2, 'price' => 60],
                                ['img' => 'https://www.bigbasket.com/media/uploads/p/l/10000068_22-fresho-carrot-ooty.jpg', 'name' => 'Ooty Carrots', 'qty' => 1, 'price' => 40],
                            ];
                            $totalPrice = array_sum(array_column($orderItems, 'price'));
                        @endphp

                        @foreach($orderItems as $item)
                        <!-- Product Card -->
                        <div class="bg-gray-50 rounded-2xl p-4 shadow-sm border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{$item['img']}}" class="w-16 h-16 rounded-xl border border-gray-200 object-cover" alt="{{$item['name']}}" onerror="this.onerror=null;this.src='https://placehold.co/64x64/f0f0f0/999999?text=Img';">
                                    <div>
                                        <div class="font-semibold text-base text-gray-800">{{$item['name']}}</div>
                                        <div class="text-sm text-gray-500">Quantity: {{$item['qty']}}</div>
                                    </div>
                                </div>
                                <div class="text-green-700 text-lg font-bold">₹{{number_format($item['price'], 2)}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex justify-between items-center text-xl font-extrabold mt-6 pt-6 border-t border-gray-200">
                        <span class="text-gray-900">Total Paid</span>
                        <span class="text-green-600">₹{{number_format($totalPrice, 2)}}</span>
                    </div>
                </div>

                <!-- Right Column: Address, Payment -->
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Delivery Address
                        </h2>
                        <div class="bg-gray-50 rounded-2xl p-5 text-gray-700 text-base shadow-sm border border-gray-200">
                            <p class="font-semibold text-gray-800">123, Sunrise Apartments</p>
                            <p>Near Kalawad Road, Rajkot</p>
                            <p>Gujarat - 360005</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                            Payment Method
                        </h2>
                        <div class="bg-gray-50 rounded-2xl p-5 flex items-center gap-4 text-base font-semibold text-gray-800 shadow-sm border border-gray-200">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            <span>Cash on Delivery</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mt-12 border-t border-gray-200 pt-8">
                <a href="/shop" class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-3 px-6 text-base font-bold rounded-xl transition shadow-lg hover:shadow-green-500/30 hover:-translate-y-1 transform duration-300 ease-in-out flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    <span>Continue Shopping</span>
                </a>
                <a href="/orders" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 text-center py-3 px-6 text-base font-bold rounded-xl transition shadow-lg hover:shadow-gray-400/30 hover:-translate-y-1 transform duration-300 ease-in-out flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                    <span>View My Orders</span>
                </a>
            </div>

            
            <!-- Website Review Section -->
            <div class="my-10 border-t border-b border-gray-200 py-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">How was your experience?</h2>
                    <p class="text-gray-500 text-center mb-6">Your feedback helps us improve our service.</p>
                    <div class="bg-gray-50 rounded-2xl p-6 space-y-4 shadow-sm border border-gray-200 max-w-2xl mx-auto">
                         <div class="flex justify-center gap-2 text-gray-300 text-4xl">
                             <svg data-value="1" class="w-10 h-10 cursor-pointer transition-colors hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                             <svg data-value="2" class="w-10 h-10 cursor-pointer transition-colors hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                             <svg data-value="3" class="w-10 h-10 cursor-pointer transition-colors hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                             <svg data-value="4" class="w-10 h-10 cursor-pointer transition-colors hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                             <svg data-value="5" class="w-10 h-10 cursor-pointer transition-colors hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                         </div>
                         <textarea rows="3" placeholder="Tell us more..." class="w-full rounded-lg border border-gray-300 p-3 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition"></textarea>
                         <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-lg font-semibold shadow-sm transition-transform hover:-translate-y-0.5 text-base">Submit Feedback</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
