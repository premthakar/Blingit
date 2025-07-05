@extends('layout')

@section('title', 'About Us | Blingit Grocery')

@section('content')
<div class="bg-gradient-to-br from-green-50 via-yellow-50 to-green-100 py-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8 mb-12">
            <div class="flex-1 flex justify-center mb-6 md:mb-0">
                <img src="https://img.icons8.com/color/144/000000/grocery-store.png" alt="Grocery Store" class="w-40 h-40 drop-shadow-xl">
            </div>
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-green-800 tracking-tight">About <span class="text-yellow-400">Blingit</span></h1>
                <p class="text-lg text-green-700 mb-4">Making grocery shopping <span class="font-bold text-green-900">easy</span>, <span class="font-bold text-yellow-600">fast</span>, and <span class="font-bold text-green-900">delightful</span> for everyone.</p>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://img.icons8.com/color/96/000000/idea.png" alt="Our Story" class="w-16 h-16 mb-3">
                <h2 class="text-xl font-bold mb-2 text-green-700">Our Story</h2>
                <p class="text-gray-700">Blingit was founded with a simple mission: to make grocery shopping easy, fast, and delightful. We bring the freshest produce, daily essentials, and your favorite snacks right to your doorstep, so you can spend more time on what matters most.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://img.icons8.com/color/96/000000/goal.png" alt="Our Mission" class="w-16 h-16 mb-3">
                <h2 class="text-xl font-bold mb-2 text-green-700">Our Mission</h2>
                <p class="text-gray-700">To deliver quality groceries at lightning speed, with a smile. We believe in supporting local farmers, reducing food waste, and making healthy food accessible to everyone.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://img.icons8.com/color/96/000000/like--v3.png" alt="Our Values" class="w-16 h-16 mb-3">
                <h2 class="text-xl font-bold mb-2 text-green-700">Our Values</h2>
                <ul class="space-y-2 mt-2">
                    <li class="flex items-center gap-2 text-gray-700"><img src='https://img.icons8.com/color/32/000000/vegetarian-food-symbol.png' class='w-6 h-6'> Freshness First</li>
                    <li class="flex items-center gap-2 text-gray-700"><img src='https://img.icons8.com/color/32/000000/happy--v1.png' class='w-6 h-6'> Customer Delight</li>
                    <li class="flex items-center gap-2 text-gray-700"><img src='https://img.icons8.com/color/32/000000/earth-planet.png' class='w-6 h-6'> Sustainability</li>
                    <li class="flex items-center gap-2 text-gray-700"><img src='https://img.icons8.com/color/32/000000/handshake.png' class='w-6 h-6'> Community Support</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-green-700 text-sm font-semibold">&copy; 2024 Blingit Grocery. All rights reserved.</div>
    </div>
</div>
@endsection 