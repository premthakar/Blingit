@extends('layout')

@section('title', 'Login | Blingit Grocery')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-green-50 via-yellow-50 to-green-100 py-10">
    <div class="w-full max-w-md">
        <div class="flex justify-center mb-6">
            <img src="https://img.icons8.com/color/96/000000/grocery-bag.png" alt="Grocery Bag" class="w-20 h-20 drop-shadow-lg">
        </div>
        <div id="mock-credentials" class="bg-yellow-100 border-l-4 border-yellow-400 text-yellow-900 px-4 py-3 rounded-lg mb-6 relative">
            <button onclick="this.parentElement.style.display='none'" class="absolute top-2 right-2 text-yellow-700 hover:text-yellow-900 text-xl leading-none">&times;</button>
            <div class="font-bold mb-1">Demo Credentials</div>
            <div class="text-sm">
                <div><span class="font-semibold">Admin:</span> <span class="font-mono">admin.guest@gmail.com</span> / <span class="font-mono">admin123</span></div>
                <div><span class="font-semibold">Guest:</span> <span class="font-mono">guest.user@gmail.com</span> / <span class="font-mono">guest123</span></div>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-2xl px-8 py-10">
            <h1 class="text-3xl font-extrabold text-center mb-6 text-green-700 tracking-tight">Welcome Back!</h1>
            <form method="POST" action="/login">
                @csrf
                <div class="relative mb-6">
                    <input type="email" id="login-email" name="email" value="{{ old('email') }}" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition @error('email') border-red-400 @enderror" placeholder="Email" />
                    <label for="login-email" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Email</label>
                    @error('email')
                        <span class="text-red-600 text-xs absolute left-4 -bottom-5">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mb-8">
                    <input type="password" id="login-password" name="password" class="peer w-full px-4 pt-6 pb-2 border-2 border-green-100 rounded-xl focus:outline-none focus:border-green-400 bg-green-50 placeholder-transparent transition @error('password') border-red-400 @enderror" placeholder="Password" />
                    <label for="login-password" class="absolute left-4 top-2 text-green-700 text-sm font-semibold pointer-events-none transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-green-700 peer-focus:text-sm">Password</label>
                    @error('password')
                        <span class="text-red-600 text-xs absolute left-4 -bottom-5">{{ $message }}</span>
                    @enderror
                    <div class="mt-2 text-right">
                        <a href="/forgot-password" class="text-green-700 font-bold hover:underline text-sm">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-green-400 to-yellow-300 hover:from-green-500 hover:to-yellow-400 text-white font-bold py-3 rounded-xl shadow-lg transition text-lg">Login</button>
            </form>
            <div class="mt-6 text-center">
                <span class="text-gray-600">Don't have an account?</span>
                <a href="/register" class="text-green-700 font-bold hover:underline ml-1">Register</a>
            </div>
        </div>
    </div>
</div>
@endsection 