@extends('layout')

@section('title', 'Home | Blingit Grocery')

@section('content')

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- SwiperJS CDN for Carousel -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Bootstrap Carousel -->
<div id="topBannerCarousel" class="carousel slide mb-10 rounded-2xl overflow-hidden shadow" data-bs-ride="carousel" data-aos="fade">
  <div class="carousel-inner">
    @php
    $banners = [
        asset('images/banner1.png'),
        asset('images/banner1.png'),
        asset('images/banner1.png'),
    ];
    @endphp
    @foreach($banners as $index => $banner)
    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
      <img src="{{ $banner }}" class="d-block w-100 object-cover" style="height: 300px;" alt="Banner {{ $index + 1 }}">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#topBannerCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#topBannerCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mx-auto px-4 py-10">

    <!-- Milk & Eggs Section -->
<div class="flex items-center justify-between mb-4" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Milk & Eggs</h2>
    <a href="/shop" class="text-green-600 font-semibold hover:underline">See All</a>
</div>
<div class="swiper mySwiper mb-10" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper-wrapper">
        @php
            $products = [
                ['title' => 'Amul Gold Full Cream Milk', 'size' => '500 ml', 'price' => '₹34', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/1203470_2-amul-gold-homogenised-standardised-milk.jpg'],
                ['title' => 'Banana Robusta', 'size' => '1 kg', 'price' => '₹45', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/40075561_2-fresho-banana-robusta.jpg'],
                ['title' => 'Fresh Onion', 'size' => '1 kg', 'price' => '₹30', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000263_15-fresho-onion.jpg'],
                ['title' => 'Tomato Hybrid', 'size' => '1 kg', 'price' => '₹28', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000331_14-fresho-tomato-hybrid.jpg'],
            ];
        @endphp
        @foreach($products as $product)
        <div class="swiper-slide">
            <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center hover:bg-green-50 transition transform hover:-translate-y-1">
                <img src="{{ $product['img'] }}" class="w-24 h-24 object-contain mb-2" alt="{{ $product['title'] }}">
                <div class="font-semibold text-gray-700 text-center mb-1">{{ $product['title'] }}</div>
                <div class="text-gray-500 text-sm mb-2">{{ $product['size'] }}</div>
                <div class="font-bold text-green-700 mb-2">{{ $product['price'] }}</div>
                <button class="border border-green-600 text-green-700 font-semibold px-6 py-1.5 rounded-lg bg-white hover:bg-green-100 transition">ADD</button>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination mt-4"></div>
</div>

<!-- Vegetables Section -->
<div class="flex items-center justify-between mb-4" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Vegetables</h2>
    <a href="/shop" class="text-green-600 font-semibold hover:underline">See All</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
    @php
        $veggies = [
            ['title' => 'Fresh Potato', 'size' => '1 kg', 'price' => '₹25', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000401_14-fresho-potato.jpg'],
            ['title' => 'Cucumber', 'size' => '500 g', 'price' => '₹18', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000148_15-fresho-cucumber.jpg'],
            ['title' => 'Carrot Orange', 'size' => '500 g', 'price' => '₹22', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000142_14-fresho-carrot-orange.jpg'],
            ['title' => 'Apple Shimla', 'size' => '4 pcs (approx. 500g)', 'price' => '₹99', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000103_14-fresho-apple-shimla.jpg'],
        ];
    @endphp
    @foreach($veggies as $index => $veg)
    <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center hover:bg-green-50 transition transform hover:-translate-y-1" 
         data-aos="fade-up" 
         data-aos-delay="{{ 100 + ($index * 50) }}">
        <img src="{{ $veg['img'] }}" class="w-24 h-24 object-contain mb-2" alt="{{ $veg['title'] }}">
        <div class="font-semibold text-gray-700 text-center mb-1">{{ $veg['title'] }}</div>
        <div class="text-gray-500 text-sm mb-2">{{ $veg['size'] }}</div>
        <div class="font-bold text-green-700 mb-2">{{ $veg['price'] }}</div>
        <button class="border border-green-600 text-green-700 font-semibold px-6 py-1.5 rounded-lg bg-white hover:bg-green-100 transition">ADD</button>
    </div>
    @endforeach
</div>


<!-- Vegetables Section -->
<div class="flex items-center justify-between mb-4" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Vegetables</h2>
    <a href="/shop" class="text-green-600 font-semibold hover:underline">See All</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
    @php
        $veggies = [
            ['title' => 'Fresh Potato', 'size' => '1 kg', 'price' => '₹25', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000401_14-fresho-potato.jpg'],
            ['title' => 'Cucumber', 'size' => '500 g', 'price' => '₹18', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000148_15-fresho-cucumber.jpg'],
            ['title' => 'Carrot Orange', 'size' => '500 g', 'price' => '₹22', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000142_14-fresho-carrot-orange.jpg'],
            ['title' => 'Apple Shimla', 'size' => '4 pcs (approx. 500g)', 'price' => '₹99', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000103_14-fresho-apple-shimla.jpg'],
        ];
    @endphp
    @foreach($veggies as $index => $veg)
    <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center hover:bg-green-50 transition transform hover:-translate-y-1" 
         data-aos="fade-up" 
         data-aos-delay="{{ 100 + ($index * 50) }}">
        <img src="{{ $veg['img'] }}" class="w-24 h-24 object-contain mb-2" alt="{{ $veg['title'] }}">
        <div class="font-semibold text-gray-700 text-center mb-1">{{ $veg['title'] }}</div>
        <div class="text-gray-500 text-sm mb-2">{{ $veg['size'] }}</div>
        <div class="font-bold text-green-700 mb-2">{{ $veg['price'] }}</div>
        <button class="border border-green-600 text-green-700 font-semibold px-6 py-1.5 rounded-lg bg-white hover:bg-green-100 transition">ADD</button>
    </div>
    @endforeach
</div>


<!-- Vegetables Section -->
<div class="flex items-center justify-between mb-4" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Vegetables</h2>
    <a href="/shop" class="text-green-600 font-semibold hover:underline">See All</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
    @php
        $veggies = [
            ['title' => 'Fresh Potato', 'size' => '1 kg', 'price' => '₹25', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000401_14-fresho-potato.jpg'],
            ['title' => 'Cucumber', 'size' => '500 g', 'price' => '₹18', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000148_15-fresho-cucumber.jpg'],
            ['title' => 'Carrot Orange', 'size' => '500 g', 'price' => '₹22', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000142_14-fresho-carrot-orange.jpg'],
            ['title' => 'Apple Shimla', 'size' => '4 pcs (approx. 500g)', 'price' => '₹99', 'img' => 'https://www.bigbasket.com/media/uploads/p/l/10000103_14-fresho-apple-shimla.jpg'],
        ];
    @endphp
    @foreach($veggies as $index => $veg)
    <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center hover:bg-green-50 transition transform hover:-translate-y-1" 
         data-aos="fade-up" 
         data-aos-delay="{{ 100 + ($index * 50) }}">
        <img src="{{ $veg['img'] }}" class="w-24 h-24 object-contain mb-2" alt="{{ $veg['title'] }}">
        <div class="font-semibold text-gray-700 text-center mb-1">{{ $veg['title'] }}</div>
        <div class="text-gray-500 text-sm mb-2">{{ $veg['size'] }}</div>
        <div class="font-bold text-green-700 mb-2">{{ $veg['price'] }}</div>
        <button class="border border-green-600 text-green-700 font-semibold px-6 py-1.5 rounded-lg bg-white hover:bg-green-100 transition">ADD</button>
    </div>
    @endforeach
</div>

    

    <!-- How Blingit Works Section -->
    <div class="bg-gray-50 p-8 rounded-2xl my-12" data-aos="fade-up">
        <h2 class="text-2xl font-bold mb-8 text-center text-gray-800" data-aos="fade-up">How Blingit Works</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-6 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">1. Add Products</h3>
                <p class="text-gray-600">Browse our fresh selection and add items to your cart</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-6 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">2. Checkout Securely</h3>
                <p class="text-gray-600">Complete your order with our safe payment options</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-6 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">3. Fast Delivery</h3>
                <p class="text-gray-600">Get your groceries delivered fresh to your doorstep</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-green-50 p-8 rounded-2xl my-12" data-aos="fade-up">
        <h2 class="text-2xl font-bold mb-8 text-center text-gray-800" data-aos="fade-up">Why Choose Blingit</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm flex items-start" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Fast Delivery</h3>
                    <p class="text-gray-600 text-sm">Get your order delivered in under 2 hours</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm flex items-start" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Quality Guarantee</h3>
                    <p class="text-gray-600 text-sm">100% fresh and high quality products</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm flex items-start" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Secure Payments</h3>
                    <p class="text-gray-600 text-sm">Multiple safe payment options</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm flex items-start" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold mb-2">24/7 Support</h3>
                    <p class="text-gray-600 text-sm">Dedicated customer care team</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  // Initialize Swiper
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2.5,
      },
      768: {
        slidesPerView: 3.5,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });

  // Initialize AOS
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 120,
      delay: 100
    });
  });
</script>
@endsection