@extends('layout')

@section('title', 'Vegetables | Blingit Grocery')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <!-- Vegetables Header -->
    <div class="flex items-center justify-between mb-6" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-800">Fresh Vegetables</h2>
    </div>

    <!-- Vegetables Product Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6" data-aos="fade-up" data-aos-delay="100">
        @php
            $vegetables = [
                ['title' => 'Onion', 'size' => '1 kg', 'price' => '₹30', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000150_19-fresho-onion.jpg'],
                ['title' => 'Potato', 'size' => '1 kg', 'price' => '₹25', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000159_27-fresho-potato.jpg'],
                ['title' => 'Tomato (Hybrid)', 'size' => '500 g', 'price' => '₹20', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000203_16-fresho-tomato-hybrid.jpg'],
                ['title' => 'Carrot (Orange)', 'size' => '500 g', 'price' => '₹40', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000073_16-fresho-carrot-orange.jpg'],
                ['title' => 'Capsicum (Green)', 'size' => '250 g', 'price' => '₹35', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000067_17-fresho-capsicum-green.jpg'],
                ['title' => 'Cauliflower', 'size' => '1 pc (approx 500 g)', 'price' => '₹45', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000074_19-fresho-cauliflower.jpg'],
                ['title' => 'Brinjal (Bharta)', 'size' => '500 g', 'price' => '₹30', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000050_20-fresho-brinjal-bharta.jpg'],
                ['title' => 'Cucumber', 'size' => '500 g', 'price' => '₹22', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000083_18-fresho-cucumber.jpg'],
                ['title' => 'Ginger', 'size' => '250 g', 'price' => '₹50', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000130_16-fresho-ginger.jpg'],
                ['title' => 'Garlic', 'size' => '250 g', 'price' => '₹40', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000129_16-fresho-garlic.jpg'],
            ];
        @endphp

        @foreach($vegetables as $product)
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-md hover:shadow-lg transition-all transform hover:-translate-y-1 relative hover:border-green-400 cursor-pointer">
            <!-- Delivery Badge -->
            <div class="absolute top-3 left-3 bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full shadow-lg z-10">
                8 MINS
            </div>
            
            <img src="{{ $product['img'] }}" class="w-full h-32 object-contain mb-3" alt="{{ $product['title'] }}" onerror="this.onerror=null;this.src='https://placehold.co/150x128/E0E0E0/666666?text=Image+Not+Found';">

            <!-- Product Info -->
            <div class="text-base font-bold text-gray-800 text-center line-clamp-2 mb-1">{{ $product['title'] }}</div>
            <div class="text-sm text-gray-500 text-center mb-1">{{ $product['size'] }}</div>

            <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                <span class="text-xl font-extrabold text-green-700">{{ $product['price'] }}</span>
                <button class="px-5 py-2 text-sm font-semibold rounded-lg border-2 border-green-600 text-green-700 bg-green-50 hover:bg-green-600 hover:text-white transition duration-300 ease-in-out shadow-sm">
                    ADD
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Clamp styling -->
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection
