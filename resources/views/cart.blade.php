@extends('layout')

@section('title', 'Cart | Blingit Grocery')

@section('content')
<div class="container mx-auto px-4 py-10">
   <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-3">
    <i class="fas fa-shopping-cart text-green-500 text-3xl"></i>
    Your Cart
</h1>

    @php $cartItems = [
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="md:col-span-2 overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl shadow text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-green-800">
                        <th class="py-3 px-4 text-left">Product</th>
                        <th class="py-3 px-4 text-left">Price</th>
                        <th class="py-3 px-4 text-left">Quantity</th>
                        <th class="py-3 px-4 text-left">Total</th>
                        <th class="py-3 px-4 text-left">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                    <tr class="border-b hover:bg-green-50 transition">
                        <td class="py-3 px-4 flex items-center gap-3">
                            <img src="{{ $item['img'] }}" class="w-12 h-12 object-contain rounded border"
                                alt="{{ $item['name'] }}">
                            <span class="font-semibold text-gray-800">{{ $item['name'] }}</span>
                        </td>
                        <td class="py-3 px-4 text-green-700 font-semibold">₹{{ $item['price'] }}</td>
                        <td class="py-3 px-4">
                            <!-- Minus Button -->
                            <button class="bg-gray-200 px-2 rounded disabled:opacity-50" @if($item['qty']==1) disabled
                                @endif>
                                <i class="bi bi-dash"></i>
                            </button>

                            <!-- Plus Button -->
                            <button class="bg-gray-200 px-2 rounded">
                                <i class="bi bi-plus"></i>
                            </button>

                        </td>
                        <td class="py-3 px-4 font-bold text-green-700">₹{{ $item['total'] }}</td>
                        <td class="py-3 px-4">
                            <button class="text-red-500 hover:bg-red-50 rounded-full p-2 transition" title="Remove">
                                <i class="bi bi-trash-fill"></i>
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="md:col-span-1">
            <div class="sticky top-24 bg-green-50 rounded-xl shadow p-6 flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <span class="text-lg font-semibold">Subtotal:</span>
                    <span class="text-green-700 text-xl font-bold">₹{{ $subtotal }}</span>
                </div>
                @if($subtotal >= 100)
                <div
                    class="bg-yellow-100 text-yellow-800 rounded px-3 py-2 text-sm font-semibold flex items-center gap-2">
                    <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01" />
                    </svg>
                    Free delivery on orders above ₹100!
                </div>
                @endif
                <a href="/checkout"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-bold text-lg shadow transition text-center">Proceed
                    to Checkout</a>
            </div>
        </div>
    </div>
    @else
    <div class="flex flex-col items-center justify-center py-20">
        <svg class="w-20 h-20 text-gray-200 mb-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0" />
        </svg>
        <div class="text-gray-500 text-xl font-medium mb-2">Your cart is empty</div>
        <a href="/shop" class="mt-4 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-semibold">Shop
            Now</a>
    </div>
    @endif
</div>
@endsection