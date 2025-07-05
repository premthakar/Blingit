@extends('layout')

@section('title', 'Contact Us | Blingit Grocery')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Contact Us</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <form class="bg-white rounded-lg shadow p-6">
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-600">Name</label>
                <input type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-600">Email</label>
                <input type="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-600">Message</label>
                <textarea class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" rows="5" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-semibold mt-2">Send Message</button>
        </form>
        <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col gap-4 justify-center">
            <div>
                <div class="font-bold text-gray-700 mb-1">Customer Support</div>
                <div class="text-gray-600">support@blingit.com</div>
            </div>
            <div>
                <div class="font-bold text-gray-700 mb-1">Phone</div>
                <div class="text-gray-600">+91 98765 43210</div>
            </div>
            <div>
                <div class="font-bold text-gray-700 mb-1">Address</div>
                <div class="text-gray-600">123, Market Street, Mumbai, India</div>
            </div>
        </div>
    </div>
</div>
@endsection 