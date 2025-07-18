@extends('layout')

@section('title', 'Login | Blingit Grocery')

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-4 sm:p-6 lg:p-8">
    <div class="relative w-full max-w-6xl bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden grid grid-cols-1 lg:grid-cols-2">
        
        <!-- Left Column: Information Panel -->
        <div class="hidden lg:block relative bg-green-50 p-10">
            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/leaves-3.png');"></div>
            <div class="relative z-10 flex flex-col justify-between h-full">
                <div>
                    <a href="/" class="flex items-center gap-2 group mb-8">
                        <span class="text-3xl font-extrabold text-gray-900">
                            bling<span class="text-green-600">it</span>
                        </span>
                    </a>
                    <h2 class="text-4xl font-extrabold text-gray-800 leading-tight">
                        Groceries delivered to your doorstep, <span class="text-green-600">lightning fast.</span>
                    </h2>
                    <p class="mt-4 text-gray-600 text-lg">
                        Shop from a wide selection of fresh produce, pantry staples, and household essentials.
                    </p>
                </div>
                <div class="mt-10 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">10-Minute Delivery</h3>
                            <p class="text-gray-600">Why wait? Get your order in minutes.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">Freshness Guaranteed</h3>
                            <p class="text-gray-600">We pick only the best for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Login Form -->
        <div class="p-8 sm:p-12 flex flex-col justify-center">
            <div class="w-full max-w-md mx-auto">
                <div class="text-center lg:text-left mb-8">
                     <a href="/" class="lg:hidden flex items-center justify-center gap-2 group mb-6">
                        <span class="text-3xl font-extrabold text-gray-900">
                            bling<span class="text-green-600">it</span>
                        </span>
                    </a>
                    <h1 class="text-3xl font-extrabold text-gray-900">Welcome Back!</h1>
                    <p class="text-gray-500 mt-1">Please enter your details to sign in.</p>
                </div>

                <div id="mock-credentials" class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-900 px-4 py-3 rounded-lg mb-6 relative text-sm">
                    <button onclick="this.parentElement.style.display='none'" class="absolute top-1.5 right-2 text-yellow-600 hover:text-yellow-800 text-2xl leading-none">&times;</button>
                    <div class="font-bold mb-1">Demo Credentials</div>
                    <div><span class="font-semibold">Admin:</span> <span class="font-mono">admin.guest@gmail.com</span> / <span class="font-mono">admin123</span></div>
                    <div><span class="font-semibold">Guest:</span> <span class="font-mono">guest.user@gmail.com</span> / <span class="font-mono">guest123</span></div>
                </div>

                <form method="POST" action="/login" class="space-y-6">
                    @csrf
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                            </span>
                            <input type="email" id="login-email" name="email" value="{{ old('email') }}" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition @error('email') border-red-500 @enderror" placeholder="you@example.com" required />
                        </div>
                        @error('email')
                            <span class="text-red-600 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="/forgot-password" class="text-sm font-medium text-green-600 hover:underline">Forgot Password?</a>
                        </div>
                        <div class="relative">
                             <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </span>
                            <input type="password" id="login-password" name="password" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition @error('password') border-red-500 @enderror" placeholder="••••••••" required />
                        </div>
                         @error('password')
                            <span class="text-red-600 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:shadow-green-500/30 transition-all duration-300 transform hover:-translate-y-0.5 text-lg">
                            Sign In
                        </button>
                    </div>
                </form>

                <div class="my-6 flex items-center">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 text-sm text-gray-500">Or continue with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 text-gray-700 font-semibold py-2.5 px-4 rounded-lg hover:bg-gray-50 transition">
                        <img src="https://www.google.com/favicon.ico" alt="Google" class="w-5 h-5"> Google
                    </button>
                     <button class="w-full flex items-center justify-center gap-2 bg-blue-600 text-white font-semibold py-2.5 px-4 rounded-lg hover:bg-blue-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.59 0 0 .59 0 1.325v21.351C0 23.41.59 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.735 0 1.325-.59 1.325-1.325V1.325C24 .59 23.41 0 22.675 0z"/></svg> Facebook
                    </button>
                </div>

                <div class="mt-8 text-center">
                    <span class="text-gray-600">Don't have an account?</span>
                    <a href="/register" class="text-green-600 font-bold hover:underline ml-1">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
