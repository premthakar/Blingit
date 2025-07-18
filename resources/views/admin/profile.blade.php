@extends('admin.layout')

@section('title', 'Profile')

@section('content')
{{-- 
  This Blade template provides a modern, responsive "Admin Profile" page.
  - It's styled entirely with Tailwind CSS, matching the "Blingit Grocery" theme.
  - Features a clean layout with distinct sections for profile information and password management.
  - The user's profile picture, name, and role are prominently displayed.
  - The form is enhanced for a better user experience and is fully responsive.
  - All icons are inline SVGs for optimal performance.
--}}

<div>
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-gray-800">My Profile</h1>
        <p class="text-gray-500 mt-1">Manage your profile details and update your password.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Profile Card -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 text-center">
                <img src="https://ui-avatars.com/api/?name=Admin&background=10b981&color=fff&size=128&rounded=true" alt="Admin Avatar" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-green-100 shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Admin</h2>
                <p class="text-gray-500">Super Admin</p>
                <button class="mt-4 w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-lg transition text-sm">
                    Change Profile Picture
                </button>
            </div>
        </div>

        <!-- Right Column: Form -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                <form>
                    <!-- Profile Information -->
                    <div class="border-b border-gray-200 pb-6 mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Profile Information</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg bg-gray-50 text-gray-500 cursor-not-allowed" value="Admin" readonly>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg bg-gray-50 text-gray-500 cursor-not-allowed" value="admin@blingit.com" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Change Password -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Change Password</h3>
                        <div class="space-y-4">
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                <input type="password" id="current_password" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your current password">
                            </div>
                            <div>
                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                <input type="password" id="new_password" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter a new password">
                            </div>
                            <div>
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                <input type="password" id="confirm_password" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Confirm your new password">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                            Update Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
