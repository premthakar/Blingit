@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="p-8 bg-gradient-to-br from-blue-100 via-white to-green-100 min-h-screen">
    <h1 class="text-4xl font-black mb-10 text-gray-900 tracking-tight flex items-center gap-3 drop-shadow-lg">
        <i class="bi bi-speedometer2 text-blue-700"></i>
        Dashboard
    </h1>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
        <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:scale-105 hover:shadow-xl transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-tags-fill text-4xl text-blue-600"></i>
                <span class="text-gray-800 font-bold text-xl">Categories</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-3xl font-black px-7 py-3 rounded-2xl shadow-inner">12</span>
        </div>
        <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:scale-105 hover:shadow-xl transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-box-seam text-4xl text-green-700"></i>
                <span class="text-gray-800 font-bold text-xl">Products</span>
            </div>
            <span class="bg-green-100 text-green-800 text-3xl font-black px-7 py-3 rounded-2xl shadow-inner">120</span>
        </div>
        <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:scale-105 hover:shadow-xl transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-bag-check-fill text-4xl text-yellow-600"></i>
                <span class="text-gray-800 font-bold text-xl">Orders</span>
            </div>
            <span class="bg-yellow-100 text-yellow-800 text-3xl font-black px-7 py-3 rounded-2xl shadow-inner">34</span>
        </div>
        <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:scale-105 hover:shadow-xl transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-people-fill text-4xl text-purple-700"></i>
                <span class="text-gray-800 font-bold text-xl">Users</span>
            </div>
            <span class="bg-purple-100 text-purple-800 text-3xl font-black px-7 py-3 rounded-2xl shadow-inner">56</span>
        </div>
    </div>
    <!-- Secondary Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:shadow-xl hover:-translate-y-1 transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-currency-rupee text-4xl text-green-700"></i>
                <span class="text-gray-800 font-bold text-xl">Total Revenue</span>
            </div>
            <span class="bg-green-100 text-green-800 text-2xl font-black px-6 py-2 rounded-xl">₹12,500</span>
        </div>
        <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:shadow-xl hover:-translate-y-1 transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-people text-4xl text-blue-700"></i>
                <span class="text-gray-800 font-bold text-xl">New Users (This Month)</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-2xl font-black px-6 py-2 rounded-xl">8</span>
        </div>
        <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-md p-8 flex flex-col items-center hover:shadow-xl hover:-translate-y-1 transition-all duration-200">
            <div class="flex items-center gap-3 mb-3">
                <i class="bi bi-bag text-4xl text-yellow-600"></i>
                <span class="text-gray-800 font-bold text-xl">Pending Orders</span>
            </div>
            <span class="bg-yellow-100 text-yellow-800 text-2xl font-black px-6 py-2 rounded-xl">3</span>
        </div>
    </div>
    <!-- Charts -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-md p-8">
            <h2 class="text-xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                <i class="bi bi-bar-chart-line text-blue-600"></i>
                Monthly Revenue
            </h2>
            <svg viewBox="0 0 320 120" class="w-full h-40">
                <rect x="20" y="60" width="20" height="40" rx="8" fill="#E5E7EB"/>
                <rect x="60" y="40" width="20" height="60" rx="8" fill="#4CAF50"/>
                <rect x="100" y="30" width="20" height="70" rx="8" fill="#4CAF50"/>
                <rect x="140" y="50" width="20" height="50" rx="8" fill="#4CAF50"/>
                <rect x="180" y="20" width="20" height="80" rx="8" fill="#FFD600"/>
                <rect x="220" y="70" width="20" height="30" rx="8" fill="#4CAF50"/>
                <rect x="260" y="60" width="20" height="40" rx="8" fill="#4CAF50"/>
                <text x="20" y="115" font-size="13" fill="#6B7280">Jan</text>
                <text x="60" y="115" font-size="13" fill="#6B7280">Feb</text>
                <text x="100" y="115" font-size="13" fill="#6B7280">Mar</text>
                <text x="140" y="115" font-size="13" fill="#6B7280">Apr</text>
                <text x="180" y="115" font-size="13" fill="#6B7280">May</text>
                <text x="220" y="115" font-size="13" fill="#6B7280">Jun</text>
                <text x="260" y="115" font-size="13" fill="#6B7280">Jul</text>
            </svg>
        </div>
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-md p-8">
            <h2 class="text-xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                <i class="bi bi-pie-chart-fill text-yellow-500"></i>
                Order Status Breakdown
            </h2>
            <svg viewBox="0 0 120 120" class="w-40 h-40 mx-auto">
                <circle cx="60" cy="60" r="50" fill="#F3F4F6"/>
                <path d="M60 60 L60 10 A50 50 0 0 1 110 60 Z" fill="#4CAF50"/>
                <path d="M60 60 L110 60 A50 50 0 0 1 60 110 Z" fill="#FFD600"/>
                <path d="M60 60 L60 110 A50 50 0 0 1 10 60 Z" fill="#EF4444"/>
                <path d="M60 60 L10 60 A50 50 0 0 1 60 10 Z" fill="#3B82F6"/>
                <circle cx="60" cy="60" r="30" fill="#fff"/>
            </svg>
            <div class="flex justify-center gap-6 mt-6 text-sm">
                <span class="flex items-center gap-2"><span class="inline-block w-4 h-4 rounded-full bg-green-500"></span>Completed</span>
                <span class="flex items-center gap-2"><span class="inline-block w-4 h-4 rounded-full bg-yellow-400"></span>Pending</span>
                <span class="flex items-center gap-2"><span class="inline-block w-4 h-4 rounded-full bg-red-500"></span>Cancelled</span>
                <span class="flex items-center gap-2"><span class="inline-block w-4 h-4 rounded-full bg-blue-500"></span>Other</span>
            </div>
        </div>
    </div>
    <!-- Recent Orders Table -->
    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-md p-8 mt-12">
        <h2 class="text-2xl font-black mb-8 text-gray-900 flex items-center gap-3">
            <i class="bi bi-clock-history text-indigo-600"></i>
            Recent Orders
        </h2>
        <div class="overflow-x-auto rounded-xl">
            <table class="min-w-full text-base">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-100 to-green-100 text-gray-900">
                        <th class="py-4 px-6 font-bold">Order #</th>
                        <th class="py-4 px-6 font-bold">Customer</th>
                        <th class="py-4 px-6 font-bold">Date</th>
                        <th class="py-4 px-6 font-bold">Total</th>
                        <th class="py-4 px-6 font-bold">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                        <td class="py-4 px-6 font-mono">1005</td>
                        <td class="py-4 px-6">Rahul Singh</td>
                        <td class="py-4 px-6">2024-07-04</td>
                        <td class="py-4 px-6">₹150.00</td>
                        <td class="py-4 px-6"><span class="bg-red-100 text-red-700 px-4 py-1.5 rounded-full text-sm font-bold shadow">Cancelled</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                        <td class="py-4 px-6 font-mono">1004</td>
                        <td class="py-4 px-6">Priya Verma</td>
                        <td class="py-4 px-6">2024-07-03</td>
                        <td class="py-4 px-6">₹580.00</td>
                        <td class="py-4 px-6"><span class="bg-green-100 text-green-700 px-4 py-1.5 rounded-full text-sm font-bold shadow">Completed</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                        <td class="py-4 px-6 font-mono">1003</td>
                        <td class="py-4 px-6">Amit Kumar</td>
                        <td class="py-4 px-6">2024-07-03</td>
                        <td class="py-4 px-6">₹210.00</td>
                        <td class="py-4 px-6"><span class="bg-green-100 text-green-700 px-4 py-1.5 rounded-full text-sm font-bold shadow">Completed</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                        <td class="py-4 px-6 font-mono">1002</td>
                        <td class="py-4 px-6">Jane Smith</td>
                        <td class="py-4 px-6">2024-07-02</td>
                        <td class="py-4 px-6">₹320.00</td>
                        <td class="py-4 px-6"><span class="bg-yellow-100 text-yellow-700 px-4 py-1.5 rounded-full text-sm font-bold shadow">Pending</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                        <td class="py-4 px-6 font-mono">1001</td>
                        <td class="py-4 px-6">John Doe</td>
                        <td class="py-4 px-6">2024-07-01</td>
                        <td class="py-4 px-6">₹450.00</td>
                        <td class="py-4 px-6"><span class="bg-green-100 text-green-700 px-4 py-1.5 rounded-full text-sm font-bold shadow">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection