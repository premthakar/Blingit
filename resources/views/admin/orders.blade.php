@extends('admin.layout')

@section('title', 'Orders')

@section('content')
<div class="p-2 md:p-8 bg-gradient-to-br from-lime-50 to-white min-h-screen">
    <div class="flex flex-col md:flex-row gap-2 mb-6 items-center">
        <div class="relative w-full md:w-1/2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-lime-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/></svg>
            </span>
            <input type="text" class="w-full pl-10 pr-3 py-2 border border-lime-200 rounded-xl focus:ring-2 focus:ring-lime-300 focus:outline-none bg-white text-gray-800 placeholder-gray-400 shadow transition" placeholder="Search orders by customer or order #...">
        </div>
        <button class="mt-2 md:mt-0 md:ml-4 px-5 py-2 bg-lime-500 text-white rounded-xl font-semibold shadow hover:bg-lime-600 transition">+ New Order</button>
    </div>
    <h1 class="text-2xl md:text-3xl font-extrabold mb-6 text-lime-700 flex items-center gap-2">
        <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"/></svg>
        Orders
    </h1>
    <div class="bg-white rounded-3xl shadow-2xl overflow-x-auto border border-lime-100">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gradient-to-r from-lime-100 to-lime-50 text-lime-700">
                    <th class="py-3 px-2 md:px-4 font-semibold">#</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Customer</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Date</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Total</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Status</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Address</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Phone</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Payment</th>
                    <th class="py-3 px-2 md:px-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-lime-50 transition">
                    <td class="py-3 px-2 md:px-4 font-bold align-top text-lime-700">1001</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">John Doe</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">2024-07-01</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap font-semibold text-lime-600">₹450.00</td>
                    <td class="py-3 px-2 md:px-4 align-top">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow">Completed</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">123 Main St, City</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">9876543210</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Credit Card</td>
                    <td class="py-3 px-2 md:px-4 align-top flex gap-1">
                        <button class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-green-200 transition">Completed</button>
                        <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-yellow-200 transition">Pending</button>
                        <button class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-red-200 transition">Cancelled</button>
                    </td>
                </tr>
                <tr class="border-b hover:bg-lime-50 transition">
                    <td class="py-3 px-2 md:px-4 font-bold align-top text-lime-700">1002</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Jane Smith</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">2024-07-02</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap font-semibold text-lime-600">₹320.00</td>
                    <td class="py-3 px-2 md:px-4 align-top">
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow">Pending</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">456 Park Ave, City</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">9123456780</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">UPI</td>
                    <td class="py-3 px-2 md:px-4 align-top flex gap-1">
                        <button class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-green-200 transition">Completed</button>
                        <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-yellow-200 transition">Pending</button>
                        <button class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-red-200 transition">Cancelled</button>
                    </td>
                </tr>
                <tr class="border-b hover:bg-lime-50 transition">
                    <td class="py-3 px-2 md:px-4 font-bold align-top text-lime-700">1003</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Amit Kumar</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">2024-07-03</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap font-semibold text-lime-600">₹210.00</td>
                    <td class="py-3 px-2 md:px-4 align-top">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow">Completed</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">789 Lake Rd, City</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">9988776655</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Cash</td>
                    <td class="py-3 px-2 md:px-4 align-top flex gap-1">
                        <button class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-green-200 transition">Completed</button>
                        <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-yellow-200 transition">Pending</button>
                        <button class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-red-200 transition">Cancelled</button>
                    </td>
                </tr>
                <tr class="border-b hover:bg-lime-50 transition">
                    <td class="py-3 px-2 md:px-4 font-bold align-top text-lime-700">1004</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Priya Verma</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">2024-07-03</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap font-semibold text-lime-600">₹580.00</td>
                    <td class="py-3 px-2 md:px-4 align-top">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow">Completed</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">101 Market St, City</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">9876501234</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Debit Card</td>
                    <td class="py-3 px-2 md:px-4 align-top flex gap-1">
                        <button class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-green-200 transition">Completed</button>
                        <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-yellow-200 transition">Pending</button>
                        <button class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-red-200 transition">Cancelled</button>
                    </td>
                </tr>
                <tr class="border-b hover:bg-lime-50 transition">
                    <td class="py-3 px-2 md:px-4 font-bold align-top text-lime-700">1005</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Rahul Singh</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">2024-07-04</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap font-semibold text-lime-600">₹150.00</td>
                    <td class="py-3 px-2 md:px-4 align-top">
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow">Cancelled</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">202 Green Lane, City</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">9001122334</td>
                    <td class="py-3 px-2 md:px-4 align-top whitespace-nowrap">Net Banking</td>
                    <td class="py-3 px-2 md:px-4 align-top flex gap-1">
                        <button class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-green-200 transition">Completed</button>
                        <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-yellow-200 transition">Pending</button>
                        <button class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold shadow hover:bg-red-200 transition">Cancelled</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
