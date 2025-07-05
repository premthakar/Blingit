@extends('layout')

@section('title', 'My Orders | Blingit Grocery')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0"/></svg>
        My Orders
    </h1>
    <div class="bg-white rounded-2xl shadow-lg p-6">
        @if(count($orders) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-green-800">
                        <th class="py-2 px-4">Order #</th>
                        <th class="py-2 px-4">Date</th>
                        <th class="py-2 px-4">Total</th>
                        <th class="py-2 px-4">Status</th>
                        <th class="py-2 px-4">Address</th>
                        <th class="py-2 px-4">Payment</th>
                        <th class="py-2 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b hover:bg-green-50">
                        <td class="py-2 px-4 font-semibold">{{ $order->id }}</td>
                        <td class="py-2 px-4">{{ $order->date }}</td>
                        <td class="py-2 px-4">₹{{ number_format($order->total, 2) }}</td>
                        <td class="py-2 px-4">
                            @if($order->status === 'Completed')
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Completed</span>
                            @elseif($order->status === 'Pending')
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold">Pending</span>
                            @elseif($order->status === 'Cancelled')
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold">Cancelled</span>
                            @else
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs font-bold">{{ $order->status }}</span>
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $order->address }}</td>
                        <td class="py-2 px-4">{{ $order->payment_method }}</td>
                        <td class="py-2 px-4">
                            <a href="#" class="text-green-700 hover:underline font-bold text-xs md:text-base">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="flex flex-col items-center justify-center py-12">
            <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5 0a2 2 0 1 1-4 0"/></svg>
            <div class="text-gray-500 text-lg font-medium">You have not placed any orders yet.</div>
        </div>
        @endif
    </div>
</div>
@endsection 