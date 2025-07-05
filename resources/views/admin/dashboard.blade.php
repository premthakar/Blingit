@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-tags-fill text-2xl text-blue-500"></i>
                <span class="text-gray-800 font-semibold">Categories</span>
            </div>
            <span class="bg-blue-100 text-blue-700 text-lg font-bold px-3 py-1 rounded">12</span>
        </div>
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-box-seam text-2xl text-green-600"></i>
                <span class="text-gray-800 font-semibold">Products</span>
            </div>
            <span class="bg-green-100 text-green-700 text-lg font-bold px-3 py-1 rounded">120</span>
        </div>
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-bag-check-fill text-2xl text-yellow-600"></i>
                <span class="text-gray-800 font-semibold">Orders</span>
            </div>
            <span class="bg-yellow-100 text-yellow-700 text-lg font-bold px-3 py-1 rounded">34</span>
        </div>
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-people-fill text-2xl text-green-700"></i>
                <span class="text-gray-800 font-semibold">Users</span>
            </div>
            <span class="bg-green-100 text-green-700 text-lg font-bold px-3 py-1 rounded">56</span>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-currency-rupee text-2xl text-green-700"></i>
                <span class="text-gray-800 font-semibold">Total Revenue</span>
            </div>
            <span class="bg-green-100 text-green-700 text-lg font-bold px-3 py-1 rounded">₹12,500</span>
        </div>
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-people text-2xl text-green-700"></i>
                <span class="text-gray-800 font-semibold">New Users (This Month)</span>
            </div>
            <span class="bg-green-100 text-green-700 text-lg font-bold px-3 py-1 rounded">8</span>
        </div>
        <div class="bg-white rounded-xl shadow border p-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <i class="bi bi-bag text-2xl text-yellow-600"></i>
                <span class="text-gray-800 font-semibold">Pending Orders</span>
            </div>
            <span class="bg-yellow-100 text-yellow-700 text-lg font-bold px-3 py-1 rounded">3</span>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="bg-white rounded-xl shadow border p-4">
            <h2 class="text-base font-semibold mb-2 text-gray-700">Monthly Revenue</h2>
            <svg viewBox="0 0 320 120" class="w-full h-32">
                <rect x="20" y="60" width="20" height="40" fill="#E5E7EB"/>
                <rect x="60" y="40" width="20" height="60" fill="#4CAF50"/>
                <rect x="100" y="30" width="20" height="70" fill="#4CAF50"/>
                <rect x="140" y="50" width="20" height="50" fill="#4CAF50"/>
                <rect x="180" y="20" width="20" height="80" fill="#FFD600"/>
                <rect x="220" y="70" width="20" height="30" fill="#4CAF50"/>
                <rect x="260" y="60" width="20" height="40" fill="#4CAF50"/>
                <text x="20" y="115" font-size="12" fill="#6B7280">Jan</text>
                <text x="60" y="115" font-size="12" fill="#6B7280">Feb</text>
                <text x="100" y="115" font-size="12" fill="#6B7280">Mar</text>
                <text x="140" y="115" font-size="12" fill="#6B7280">Apr</text>
                <text x="180" y="115" font-size="12" fill="#6B7280">May</text>
                <text x="220" y="115" font-size="12" fill="#6B7280">Jun</text>
                <text x="260" y="115" font-size="12" fill="#6B7280">Jul</text>
            </svg>
        </div>
        <div class="bg-white rounded-xl shadow border p-4">
            <h2 class="text-base font-semibold mb-2 text-gray-700">Order Status Breakdown</h2>
            <svg viewBox="0 0 120 120" class="w-32 h-32 mx-auto">
                <circle cx="60" cy="60" r="50" fill="#E5E7EB"/>
                <path d="M60 60 L60 10 A50 50 0 0 1 110 60 Z" fill="#4CAF50"/>
                <path d="M60 60 L110 60 A50 50 0 0 1 60 110 Z" fill="#FFD600"/>
                <path d="M60 60 L60 110 A50 50 0 0 1 10 60 Z" fill="#EF4444"/>
                <path d="M60 60 L10 60 A50 50 0 0 1 60 10 Z" fill="#3B82F6"/>
                <circle cx="60" cy="60" r="30" fill="#fff"/>
            </svg>
            <div class="flex justify-center gap-4 mt-2 text-xs">
                <span class="flex items-center gap-1"><span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>Completed</span>
                <span class="flex items-center gap-1"><span class="inline-block w-3 h-3 rounded-full bg-yellow-400"></span>Pending</span>
                <span class="flex items-center gap-1"><span class="inline-block w-3 h-3 rounded-full bg-red-500"></span>Cancelled</span>
                <span class="flex items-center gap-1"><span class="inline-block w-3 h-3 rounded-full bg-blue-500"></span>Other</span>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow border p-4 mt-6">
        <h2 class="text-lg font-semibold mb-4 text-gray-700">Recent Orders</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-2 px-4">Order #</th>
                        <th class="py-2 px-4">Customer</th>
                        <th class="py-2 px-4">Date</th>
                        <th class="py-2 px-4">Total</th>
                        <th class="py-2 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                        <td class="py-2 px-4">1005</td>
                        <td class="py-2 px-4">Rahul Singh</td>
                        <td class="py-2 px-4">2024-07-04</td>
                        <td class="py-2 px-4">₹150.00</td>
                        <td class="py-2 px-4"><span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold">Cancelled</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                        <td class="py-2 px-4">1004</td>
                        <td class="py-2 px-4">Priya Verma</td>
                        <td class="py-2 px-4">2024-07-03</td>
                        <td class="py-2 px-4">₹580.00</td>
                        <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                        <td class="py-2 px-4">1003</td>
                        <td class="py-2 px-4">Amit Kumar</td>
                        <td class="py-2 px-4">2024-07-03</td>
                        <td class="py-2 px-4">₹210.00</td>
                        <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                        <td class="py-2 px-4">1002</td>
                        <td class="py-2 px-4">Jane Smith</td>
                        <td class="py-2 px-4">2024-07-02</td>
                        <td class="py-2 px-4">₹320.00</td>
                        <td class="py-2 px-4"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold">Pending</span></td>
                    </tr>
                    <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                        <td class="py-2 px-4">1001</td>
                        <td class="py-2 px-4">John Doe</td>
                        <td class="py-2 px-4">2024-07-01</td>
                        <td class="py-2 px-4">₹450.00</td>
                        <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 