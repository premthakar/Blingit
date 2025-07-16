@extends('layout')

@section('title', 'Cart | Blingit Grocery')

@section('content')
<div class="container mx-auto px-4 py-12 font-[Poppins]">
    <h1 class="text-3xl md:text-4xl font-extrabold mb-8 text-gray-800 flex items-center gap-3">
        <i class="fas fa-shopping-cart text-green-500 text-3xl"></i>
        Your Cart
    </h1>

    @php
        $cartItems = [
            [
                'img' => 'https://www.bigbasket.com/media/uploads/p/l/1203470_2-amul-gold-homogenised-standardised-milk.jpg',
                'name' => 'Amul Gold Full Cream Milk',
                'price' => 34,
                'qty' => 2,
                'total' => 68
            ],
            [
                'img' => 'https://www.bigbasket.com/media/uploads/p/l/40075561_2-fresho-banana-robusta.jpg',
                'name' => 'Banana Robusta',
                'price' => 45,
                'qty' => 1,
                'total' => 45
            ]
        ];
        $subtotal = 113;
    @endphp

    @if(count($cartItems) > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        
        <!-- Cart Table -->
        <div class="md:col-span-2 overflow-x-auto rounded-xl">
            <table class="min-w-full bg-white rounded-xl shadow-lg text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-green-800 uppercase text-xs tracking-wide">
                        <th class="py-4 px-4 text-left">Product</th>
                        <th class="py-4 px-4 text-left">Price</th>
                        <th class="py-4 px-4 text-left">Quantity</th>
                        <th class="py-4 px-4 text-left">Total</th>
                        <th class="py-4 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                    <tr class="border-b hover:bg-green-50 transition">
                        <td class="py-4 px-4 flex items-center gap-4">
                            <img src="{{ $item['img'] }}" class="w-14 h-14 object-contain rounded border" alt="{{ $item['name'] }}">
                            <span class="font-semibold text-gray-800">{{ $item['name'] }}</span>
                        </td>
                        <td class="py-4 px-4 text-green-700 font-semibold">₹{{ $item['price'] }}</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <button class="bg-gray-200 text-gray-700 px-2 rounded hover:bg-gray-300 transition disabled:opacity-50" @if($item['qty']==1) disabled @endif>
                                    <i class="bi bi-dash"></i>
                                </button>
                                <span class="px-2 font-bold">{{ $item['qty'] }}</span>
                                <button class="bg-gray-200 text-gray-700 px-2 rounded hover:bg-gray-300 transition">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="py-4 px-4 font-bold text-green-700">₹{{ $item['total'] }}</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:text-red-700 rounded-full p-2 transition" title="Remove">
                                <i class="bi bi-trash-fill text-xl"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="md:col-span-1">
            <div class="sticky top-24 bg-white border border-green-100 rounded-xl shadow-xl p-6 flex flex-col gap-4">
                <h2 class="text-xl font-bold text-gray-800">Cart Summary</h2>
                <div class="flex items-center justify-between text-base">
                    <span>Subtotal:</span>
                    <span class="text-green-700 font-bold text-lg">₹{{ $subtotal }}</span>
                </div>

                @if($subtotal >= 100)
                <div class="bg-yellow-50 border-l-4 border-yellow-300 text-yellow-700 rounded px-4 py-3 text-sm flex items-center gap-2">
                    <i class="bi bi-truck text-lg"></i>
                    Free delivery on orders above ₹100!
                </div>
                @endif

                <a href="/checkout"
                    class="bg-green-600 hover:bg-green-700 text-white text-center px-6 py-3 rounded-lg font-bold text-lg shadow-md transition hover:-translate-y-1">Proceed to Checkout</a>
            </div>
        </div>
    </div>
    @else
    <!-- Empty Cart -->
    <div class="flex flex-col items-center justify-center py-20">
        <svg class="w-20 h-20 text-gray-300 mb-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0" />
        </svg>
        <div class="text-gray-500 text-xl font-medium mb-2">Your cart is empty</div>
        <a href="/shop" class="mt-4 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full font-semibold shadow-md transition hover:-translate-y-1">Shop Now</a>
    </div>
    @endif
</div>
@endsection
