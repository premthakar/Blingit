@extends('layout')

@section('title', 'Register | Blingit Grocery')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-green-50 via-yellow-50 to-green-100 py-10">
    <div class="w-full max-w-md">
        <div class="flex justify-center mb-6">
            <img src="https://img.icons8.com/color/96/000000/grocery-store.png" alt="Grocery Store" class="w-20 h-20 drop-shadow-lg">
        </div>
        <div class="bg-white rounded-3xl shadow-2xl px-8 py-10">
            <h1 class="text-3xl font-extrabold text-center mb-6 text-green-700 tracking-tight">Create Your Account</h1>
            <form>
                <div class="relative mb-6">
                    <input type="text" id="register-name" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition" placeholder="Name" />
                    <label for="register-name" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Name</label>
                </div>
                <div class="relative mb-6">
                    <input type="email" id="register-email" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition" placeholder="Email" />
                    <label for="register-email" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Email</label>
                </div>
                <div class="relative mb-6">
                    <input type="password" id="register-password" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition" placeholder="Password" />
                    <label for="register-password" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Password</label>
                </div>
                <div class="relative mb-8">
                    <input type="password" id="register-password-confirm" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition" placeholder="Confirm Password" />
                    <label for="register-password-confirm" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Confirm Password</label>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-green-400 to-yellow-300 hover:from-green-500 hover:to-yellow-400 text-white font-bold py-3 rounded-xl shadow-lg transition text-lg">Register</button>
            </form>
            <div class="mt-6 text-center">
                <span class="text-gray-600">Already have an account?</span>
                <a href="/login" class="text-green-700 font-bold hover:underline ml-1">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection 