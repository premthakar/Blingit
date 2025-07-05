@extends('layout')

@section('title', 'Home | Blingit Grocery')

@section('content')
<div class="bg-gradient-to-br from-green-50 via-yellow-50 to-green-100 py-10" style="font-family: 'Montserrat', 'Poppins', sans-serif;">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <div class="flex-1">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-black drop-shadow-lg">
                Get Groceries Delivered <span class="text-green-600">Fast</span>
            </h1>
            <p class="text-lg text-green-700 mb-6">Shop fresh groceries, snacks, and essentials delivered to your door in minutes.</p>
            <a href="/shop" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg text-lg transition">Shop Now</a>
        </div>
        <div class="flex-1 flex justify-center">
            <img src="https://img.icons8.com/color/144/000000/shopping-basket-2.png" alt="Groceries" class="rounded-2xl shadow-2xl w-80 h-64 object-contain bg-white p-4">
        </div>
    </div>
</div>
<!-- How Blingit Works Section -->
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">How Blingit Works</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="flex flex-col items-center bg-white rounded-2xl shadow p-6 hover:bg-green-50 transition">
            <div class="bg-green-100 text-green-600 rounded-full p-4 mb-4">
                <!-- Bootstrap search icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.242 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"/>
                </svg>
            </div>
            <div class="font-bold text-lg mb-2">Browse Products</div>
            <div class="text-gray-600">Explore a wide range of fresh groceries and daily essentials.</div>
        </div>
        <div class="flex flex-col items-center bg-white rounded-2xl shadow p-6 hover:bg-green-50 transition">
            <div class="bg-yellow-100 text-yellow-600 rounded-full p-4 mb-4">
                <!-- Bootstrap basket icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                  <path d="M2.31 5.243 8 1.07l5.69 4.172a.5.5 0 0 1-.58.814L8 2.13 2.89 6.057a.5.5 0 1 1-.58-.814z"/>
                  <path d="M13.443 6.56 14.964 13.1A2 2 0 0 1 13.03 16H2.97a2 2 0 0 1-1.934-2.9l1.52-6.54A1.5 1.5 0 0 1 4.01 5h7.98a1.5 1.5 0 0 1 1.453 1.56zM4.01 6a.5.5 0 0 0-.485.378l-1.52 6.54A1 1 0 0 0 2.97 15h10.06a1 1 0 0 0 .965-1.082l-1.52-6.54A.5.5 0 0 0 11.99 6H4.01z"/>
                </svg>
            </div>
            <div class="font-bold text-lg mb-2">Place Your Order</div>
            <div class="text-gray-600">Add your favorite items to the cart and checkout in seconds.</div>
        </div>
        <div class="flex flex-col items-center bg-white rounded-2xl shadow p-6 hover:bg-green-50 transition">
            <div class="bg-green-100 text-green-600 rounded-full p-4 mb-4">
                <!-- Bootstrap truck icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1h10a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 14 4.5V6h.5A1.5 1.5 0 0 1 16 7.5v3a.5.5 0 0 1-.5.5H15v1a2 2 0 1 1-4 0v-1H5v1a2 2 0 1 1-4 0v-1h-.5a.5.5 0 0 1-.5-.5v-9zM1 2v8h14V7.5a.5.5 0 0 0-.5-.5H14V4.5a.5.5 0 0 0-.5-.5H11V2H1zm1 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm10 0a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                </svg>
            </div>
            <div class="font-bold text-lg mb-2">Get Fast Delivery</div>
            <div class="text-gray-600">Sit back and relax while we deliver to your doorstep in minutes!</div>
        </div>
    </div>
</div>
<div class="container mx-auto px-4 py-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Shop by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
        <a href="/shop" class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-2xl hover:bg-green-50 transition">
            <img src="https://img.icons8.com/color/96/000000/milk-bottle.png" class="w-16 h-16 mb-2" alt="Dairy">
            <span class="font-semibold text-gray-700">Dairy & Eggs</span>
        </a>
        <a href="/shop" class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-2xl hover:bg-green-50 transition">
            <img src="https://img.icons8.com/color/96/000000/broccoli.png" class="w-16 h-16 mb-2" alt="Vegetables">
            <span class="font-semibold text-gray-700">Vegetables</span>
        </a>
        <a href="/shop" class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-2xl hover:bg-green-50 transition">
            <img src="https://img.icons8.com/color/96/000000/apple.png" class="w-16 h-16 mb-2" alt="Fruits">
            <span class="font-semibold text-gray-700">Fruits</span>
        </a>
        <a href="/shop" class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-2xl hover:bg-green-50 transition">
            <img src="https://img.icons8.com/color/96/000000/bread.png" class="w-16 h-16 mb-2" alt="Bakery">
            <span class="font-semibold text-gray-700">Bakery</span>
        </a>
    </div>
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Featured Products</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/1203470_2-amul-gold-homogenised-standardised-milk.jpg" class="w-24 h-24 object-contain mb-2" alt="Amul Gold Milk">
            <div class="font-semibold text-gray-700 mb-1">Amul Gold Full Cream Milk</div>
            <div class="text-gray-500 text-sm mb-2">500 ml</div>
            <div class="font-bold text-green-700 mb-2">₹34</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/40075561_2-fresho-banana-robusta.jpg" class="w-24 h-24 object-contain mb-2" alt="Banana">
            <div class="font-semibold text-gray-700 mb-1">Banana Robusta</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹45</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000263_15-fresho-onion.jpg" class="w-24 h-24 object-contain mb-2" alt="Onion">
            <div class="font-semibold text-gray-700 mb-1">Fresh Onion</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹30</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000331_14-fresho-tomato-hybrid.jpg" class="w-24 h-24 object-contain mb-2" alt="Tomato">
            <div class="font-semibold text-gray-700 mb-1">Tomato Hybrid</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹28</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000401_14-fresho-potato.jpg" class="w-24 h-24 object-contain mb-2" alt="Potato">
            <div class="font-semibold text-gray-700 mb-1">Fresh Potato</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹25</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000148_15-fresho-cucumber.jpg" class="w-24 h-24 object-contain mb-2" alt="Cucumber">
            <div class="font-semibold text-gray-700 mb-1">Cucumber</div>
            <div class="text-gray-500 text-sm mb-2">500 g</div>
            <div class="font-bold text-green-700 mb-2">₹18</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000142_14-fresho-carrot-orange.jpg" class="w-24 h-24 object-contain mb-2" alt="Carrot">
            <div class="font-semibold text-gray-700 mb-1">Carrot Orange</div>
            <div class="text-gray-500 text-sm mb-2">500 g</div>
            <div class="font-bold text-green-700 mb-2">₹22</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-2xl hover:bg-green-50">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000103_14-fresho-apple-shimla.jpg" class="w-24 h-24 object-contain mb-2" alt="Apple Shimla">
            <div class="font-semibold text-gray-700 mb-1">Apple Shimla</div>
            <div class="text-gray-500 text-sm mb-2">4 pcs (approx. 500g)</div>
            <div class="font-bold text-green-700 mb-2">₹99</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
    </div>
    <div class="flex justify-center mb-12">
        <a href="/shop" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg text-lg transition">See All Products</a>
    </div>
</div>
@endsection 