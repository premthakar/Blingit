@extends('admin.layout')

@section('title', 'Profile')

@section('content')
<div class="p-2 md:p-6 max-w-xl mx-auto">
    <h1 class="text-xl md:text-2xl font-bold mb-6">Profile</h1>
    <div class="bg-white rounded shadow p-6">
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800" value="John Doe" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800" value="john@example.com" readonly>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Role</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800" value="Admin" readonly>
            </div>
            <h2 class="text-lg font-semibold mb-4">Change Password</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Current Password</label>
                <input type="password" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">New Password</label>
                <input type="password" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Confirm New Password</label>
                <input type="password" class="w-full px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800">
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded">Update Password</button>
        </form>
    </div>
</div>
@endsection 