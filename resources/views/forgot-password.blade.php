<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Blingit Grocery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-yellow-50 via-green-50 to-white py-12 px-4">
    <div class="bg-white rounded-3xl shadow-2xl border-2 border-yellow-200 p-8 max-w-md w-full flex flex-col items-center">
        <div class="bg-yellow-100 rounded-full p-6 mb-4 shadow-lg">
            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 17v.01M9 9a3 3 0 1 1 6 0c0 1.657-1.343 3-3 3s-3 1.343-3 3v1m6 0v1a3 3 0 0 1-6 0v-1"/></svg>
        </div>
        <h1 class="text-2xl md:text-3xl font-extrabold text-green-700 mb-2 text-center">Forgot your password?</h1>
        <div class="text-gray-600 text-center mb-6">Enter your email address and we'll send you a link to reset your password.</div>
        <form class="w-full flex flex-col gap-4">
            <input type="email" class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-green-400 text-lg" placeholder="Email address" required>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-2xl font-extrabold text-lg shadow-lg w-full transition">Send Reset Link</button>
        </form>
        <a href="/login" class="mt-6 text-green-700 hover:underline font-semibold text-base flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            Back to Login
        </a>
    </div>
</div>
</body>
</html> 