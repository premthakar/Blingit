@extends('admin.layout')

@section('title', 'Orders')

@section('content')
<div class="p-2 md:p-6">
    <div class="flex flex-col md:flex-row gap-2 mb-4">
        <div class="relative w-full md:w-1/2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/></svg>
            </span>
            <input type="text" class="w-full pl-10 pr-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800 placeholder-gray-400" placeholder="Search orders by customer or order #...">
        </div>
    </div>
    <h1 class="text-xl md:text-2xl font-bold mb-4">Orders</h1>
    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-lime-100 text-left">
                    <th class="py-2 px-2 md:px-4">#</th>
                    <th class="py-2 px-2 md:px-4">Customer</th>
                    <th class="py-2 px-2 md:px-4">Date</th>
                    <th class="py-2 px-2 md:px-4">Total</th>
                    <th class="py-2 px-2 md:px-4">Status</th>
                    <th class="py-2 px-2 md:px-4">Address</th>
                    <th class="py-2 px-2 md:px-4">Phone</th>
                    <th class="py-2 px-2 md:px-4">Payment</th>
                    <th class="py-2 px-2 md:px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-lime-50">
                    <td class="py-2 px-2 md:px-4 font-semibold align-top">1001</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">John Doe</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">2024-07-01</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">₹450.00</td>
                    <td class="py-2 px-2 md:px-4 align-top"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">123 Main St, City</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">9876543210</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Credit Card</td>
                    <td class="py-2 px-2 md:px-4 align-top"><button class="text-lime-700 hover:underline font-bold text-xs md:text-base">View</button></td>
                </tr>
                <tr class="border-b hover:bg-lime-50">
                    <td class="py-2 px-2 md:px-4 font-semibold align-top">1002</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Jane Smith</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">2024-07-02</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">₹320.00</td>
                    <td class="py-2 px-2 md:px-4 align-top"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold">Pending</span></td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">456 Park Ave, City</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">9123456780</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">UPI</td>
                    <td class="py-2 px-2 md:px-4 align-top"><button class="text-lime-700 hover:underline font-bold text-xs md:text-base">View</button></td>
                </tr>
                <tr class="border-b hover:bg-lime-50">
                    <td class="py-2 px-2 md:px-4 font-semibold align-top">1003</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Amit Kumar</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">2024-07-03</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">₹210.00</td>
                    <td class="py-2 px-2 md:px-4 align-top"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">789 Lake Rd, City</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">9988776655</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Cash</td>
                    <td class="py-2 px-2 md:px-4 align-top"><button class="text-lime-700 hover:underline font-bold text-xs md:text-base">View</button></td>
                </tr>
                <tr class="border-b hover:bg-lime-50">
                    <td class="py-2 px-2 md:px-4 font-semibold align-top">1004</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Priya Verma</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">2024-07-03</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">₹580.00</td>
                    <td class="py-2 px-2 md:px-4 align-top"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span></td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">101 Market St, City</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">9876501234</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Debit Card</td>
                    <td class="py-2 px-2 md:px-4 align-top"><button class="text-lime-700 hover:underline font-bold text-xs md:text-base">View</button></td>
                </tr>
                <tr class="border-b hover:bg-lime-50">
                    <td class="py-2 px-2 md:px-4 font-semibold align-top">1005</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Rahul Singh</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">2024-07-04</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">₹150.00</td>
                    <td class="py-2 px-2 md:px-4 align-top"><span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold">Cancelled</span></td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">202 Green Lane, City</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">9001122334</td>
                    <td class="py-2 px-2 md:px-4 align-top whitespace-nowrap">Net Banking</td>
                    <td class="py-2 px-2 md:px-4 align-top"><button class="text-lime-700 hover:underline font-bold text-xs md:text-base">View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 