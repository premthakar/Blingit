@extends('layout')

@section('title', 'Shop | Blingit Grocery')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Shop All Products</h1>
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-8">
        <input type="text" placeholder="Search products..." class="w-full md:w-1/3 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" />
        <select class="w-full md:w-1/6 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>All Categories</option>
            <option>Dairy & Eggs</option>
            <option>Vegetables</option>
            <option>Fruits</option>
            <option>Bakery</option>
        </select>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/1203470_2-amul-gold-homogenised-standardised-milk.jpg" class="w-24 h-24 object-contain mb-2" alt="Amul Gold Milk">
            <div class="font-semibold text-gray-700 mb-1">Amul Gold Full Cream Milk</div>
            <div class="text-gray-500 text-sm mb-2">500 ml</div>
            <div class="font-bold text-green-700 mb-2">₹34</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/40075561_2-fresho-banana-robusta.jpg" class="w-24 h-24 object-contain mb-2" alt="Banana">
            <div class="font-semibold text-gray-700 mb-1">Banana Robusta</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹45</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000263_15-fresho-onion.jpg" class="w-24 h-24 object-contain mb-2" alt="Onion">
            <div class="font-semibold text-gray-700 mb-1">Fresh Onion</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹30</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000331_14-fresho-tomato-hybrid.jpg" class="w-24 h-24 object-contain mb-2" alt="Tomato">
            <div class="font-semibold text-gray-700 mb-1">Tomato Hybrid</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹28</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000401_14-fresho-potato.jpg" class="w-24 h-24 object-contain mb-2" alt="Potato">
            <div class="font-semibold text-gray-700 mb-1">Fresh Potato</div>
            <div class="text-gray-500 text-sm mb-2">1 kg</div>
            <div class="font-bold text-green-700 mb-2">₹25</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000148_15-fresho-cucumber.jpg" class="w-24 h-24 object-contain mb-2" alt="Cucumber">
            <div class="font-semibold text-gray-700 mb-1">Cucumber</div>
            <div class="text-gray-500 text-sm mb-2">500 g</div>
            <div class="font-bold text-green-700 mb-2">₹18</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000142_14-fresho-carrot-orange.jpg" class="w-24 h-24 object-contain mb-2" alt="Carrot">
            <div class="font-semibold text-gray-700 mb-1">Carrot Orange</div>
            <div class="text-gray-500 text-sm mb-2">500 g</div>
            <div class="font-bold text-green-700 mb-2">₹22</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000159_14-fresho-capsicum-green.jpg" class="w-24 h-24 object-contain mb-2" alt="Capsicum">
            <div class="font-semibold text-gray-700 mb-1">Capsicum Green</div>
            <div class="text-gray-500 text-sm mb-2">250 g</div>
            <div class="font-bold text-green-700 mb-2">₹24</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000144_14-fresho-cabbage.jpg" class="w-24 h-24 object-contain mb-2" alt="Cabbage">
            <div class="font-semibold text-gray-700 mb-1">Cabbage</div>
            <div class="text-gray-500 text-sm mb-2">1 pc (approx. 500g)</div>
            <div class="font-bold text-green-700 mb-2">₹20</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000150_14-fresho-cauliflower.jpg" class="w-24 h-24 object-contain mb-2" alt="Cauliflower">
            <div class="font-semibold text-gray-700 mb-1">Cauliflower</div>
            <div class="text-gray-500 text-sm mb-2">1 pc (approx. 500g)</div>
            <div class="font-bold text-green-700 mb-2">₹32</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000174_14-fresho-brinjal.jpg" class="w-24 h-24 object-contain mb-2" alt="Brinjal">
            <div class="font-semibold text-gray-700 mb-1">Brinjal</div>
            <div class="text-gray-500 text-sm mb-2">500 g</div>
            <div class="font-bold text-green-700 mb-2">₹19</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000103_14-fresho-apple-shimla.jpg" class="w-24 h-24 object-contain mb-2" alt="Apple Shimla">
            <div class="font-semibold text-gray-700 mb-1">Apple Shimla</div>
            <div class="text-gray-500 text-sm mb-2">4 pcs (approx. 500g)</div>
            <div class="font-bold text-green-700 mb-2">₹99</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000569_10-amul-butter-pasteurised.jpg" class="w-24 h-24 object-contain mb-2" alt="Amul Butter">
            <div class="font-semibold text-gray-700 mb-1">Amul Salted Butter</div>
            <div class="text-gray-500 text-sm mb-2">100 g</div>
            <div class="font-bold text-green-700 mb-2">₹62</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
            <img src="https://www.bigbasket.com/media/uploads/p/l/10000631_13-amul-processed-cheese-cubes.jpg" class="w-24 h-24 object-contain mb-2" alt="Amul Cheese Cubes">
            <div class="font-semibold text-gray-700 mb-1">Amul Cheese Cubes</div>
            <div class="text-gray-500 text-sm mb-2">200 g</div>
            <div class="font-bold text-green-700 mb-2">₹127</div>
            <button class="border-2 border-green-600 text-green-700 font-bold px-6 py-1.5 rounded-lg bg-white hover:bg-green-50 transition">ADD</button>
        </div>
    </div>
</div>
@endsection 