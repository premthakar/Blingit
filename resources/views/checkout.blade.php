@extends('layout')

@section('title', 'Checkout | Blingit Grocery')

@section('content')
<div class="bg-gradient-to-br from-yellow-50 via-green-50 to-white min-h-screen py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl md:text-3xl font-extrabold text-green-500 mb-8 flex items-center gap-3">
            <svg class="w-9 h-9 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0" />
            </svg>
            Checkout
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <form class="md:col-span-2 bg-white rounded-2xl shadow-2xl border-2 border-yellow-100 p-8">
                <h2 class="text-xl font-bold mb-6 text-green-700">Shipping Details</h2>
                <div class="mb-5">
                    <label class="block mb-1 font-semibold text-gray-700">Full Name</label>
                    <input type="text"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        placeholder="Your Name">
                </div>
                <div class="mb-5">
                    <label class="block mb-1 font-semibold text-gray-700">Address</label>
                    <input type="text"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        placeholder="Street, City">
                </div>
                <div class="mb-5 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 font-semibold text-gray-700">State</label>
                        <input type="text"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                            placeholder="State">
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold text-gray-700">ZIP</label>
                        <input type="text"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                            placeholder="ZIP Code">
                    </div>
                </div>
                <div class="mb-5">
                    <label class="block mb-1 font-semibold text-gray-700">Phone</label>
                    <input type="text"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        placeholder="Phone Number">
                </div>
                <div class="mb-5">
                    <label class="block mb-1 font-semibold text-gray-700">Email</label>
                    <input type="email"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        placeholder="Email Address">
                </div>
                <div class="mb-7">
                    <label class="block mb-1 font-semibold text-gray-700">Payment Method</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                        <!-- Cash on Delivery -->
                        <label
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-gray-200 hover:border-green-500 transition cursor-pointer shadow-sm bg-white payment-option">
                            <input type="radio" name="payment_method" value="Cash on Delivery" required
                                class="accent-green-600 mb-2">
                            <i class="bi bi-cash-coin text-green-500 text-3xl mb-1"></i>
                            <span class="font-semibold text-gray-800">Cash on Delivery</span>
                        </label>

                        <!-- Razorpay -->
                        <label
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-gray-200 hover:border-green-500 transition cursor-pointer shadow-sm bg-white payment-option">
                            <input type="radio" name="payment_method" value="Razorpay" required
                                class="accent-green-600 mb-2">
                            <i class="bi bi-credit-card-2-front-fill text-green-500 text-3xl mb-1"></i>
                            <span class="font-semibold text-gray-800">Razorpay</span>
                        </label>
                    </div>
                </div>

                <button id="placeOrderBtn" type="button"
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-2xl font-extrabold text-lg shadow-lg w-full transition transform hover:-translate-y-1">Place
                    Order</button>
            </form>
            <div class="bg-white rounded-2xl shadow-2xl border-2 border-green-100 p-8">
                <h2 class="text-xl font-bold mb-6 text-green-700">Order Summary</h2>
                <div class="space-y-4 mb-4">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-3">
                            <img src="https://www.bigbasket.com/media/uploads/p/l/1203470_2-amul-gold-homogenised-standardised-milk.jpg"
                                class="w-12 h-12 object-contain rounded border shadow-sm"
                                alt="Amul Gold Full Cream Milk">
                            <span class="font-semibold text-gray-800">Amul Gold Full Cream Milk <span
                                    class="ml-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-0.5 rounded-full align-middle">x2</span></span>
                        </div>
                        <span class="font-semibold text-green-700 text-lg">₹68</span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-3">
                            <img src="https://www.bigbasket.com/media/uploads/p/l/40075561_2-fresho-banana-robusta.jpg"
                                class="w-12 h-12 object-contain rounded border shadow-sm" alt="Banana Robusta">
                            <span class="font-semibold text-gray-800">Banana Robusta <span
                                    class="ml-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-0.5 rounded-full align-middle">x1</span></span>
                        </div>
                        <span class="font-semibold text-green-700 text-lg">₹45</span>
                    </div>
                </div>
                <div class="border-t my-4"></div>
                <div class="flex justify-between font-semibold text-xl">
                    <span>Total</span>
                    <span class="text-green-700">₹113</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('placeOrderBtn').addEventListener('click', function(e) {
    e.preventDefault();
    window.location.href = '/place-order';
});
</script>
@endsection