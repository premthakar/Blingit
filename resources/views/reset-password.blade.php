<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Blingit Grocery</title>

    <!-- Tailwind CSS v3 -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* Apply Poppins font to the entire application */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    {{-- 
      This is a static HTML version of the "Reset Password" page.
      - It's styled entirely with Tailwind CSS.
      - Features a two-column layout consistent with the login/register pages.
      - The form allows the user to set a new password.
      - After submission, it shows a success message and redirects to the login page after 3 seconds.
      - All icons are inline SVGs for optimal performance.
    --}}
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
                            Create a New Password
                        </h2>
                        <p class="mt-4 text-gray-600 text-lg">
                           Your security is important. Choose a strong, new password to protect your account.
                        </p>
                    </div>
                    <div class="mt-10 space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Strong & Secure</h3>
                                <p class="text-gray-600">Use a mix of letters, numbers, and symbols.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full">
                               <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Easy to Remember</h3>
                                <p class="text-gray-600">Choose something memorable for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form -->
            <div class="p-8 sm:p-12 flex flex-col justify-center">
                <div class="w-full max-w-md mx-auto">
                    <div id="reset-form-container">
                        <div class="text-center lg:text-left mb-8">
                             <a href="/" class="lg:hidden flex items-center justify-center gap-2 group mb-6">
                                <span class="text-3xl font-extrabold text-gray-900">
                                    bling<span class="text-green-600">it</span>
                                </span>
                            </a>
                            <h1 class="text-3xl font-extrabold text-gray-900">Set Your New Password</h1>
                            <p class="text-gray-500 mt-1">Please create a new password for your account.</p>
                        </div>

                        <form id="reset-password-form" method="POST" action="#" class="space-y-6">
                            <!-- Password Reset Token (static placeholder) -->
                            <input type="hidden" name="token" value="static_token_placeholder">

                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                                    </span>
                                    <input type="email" id="email" name="email" value="user@example.com" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition" required readonly />
                                </div>
                            </div>
                            
                            <!-- New Password -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                <div class="relative">
                                     <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                    </span>
                                    <input type="password" id="password" name="password" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition" placeholder="••••••••" required />
                                </div>
                            </div>

                            <!-- Confirm New Password -->
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                <div class="relative">
                                     <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                    </span>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition" placeholder="••••••••" required />
                                </div>
                            </div>
                            
                            <div>
                                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:shadow-green-500/30 transition-all duration-300 transform hover:-translate-y-0.5 text-lg">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="success-view" class="hidden text-center">
                        <div class="bg-green-100 p-4 rounded-full mb-5 ring-4 ring-green-50 w-24 h-24 mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-extrabold text-gray-900">Password Reset!</h1>
                        <p class="text-gray-500 mt-2">Your password has been changed successfully.</p>
                        <p class="text-gray-500 mt-4">Redirecting to login in <span id="countdown">3</span> seconds...</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resetFormContainer = document.getElementById('reset-form-container');
            const successView = document.getElementById('success-view');
            const resetForm = document.getElementById('reset-password-form');
            const countdownElement = document.getElementById('countdown');

            resetForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent actual form submission

                // Simple validation for demonstration
                const password = document.getElementById('password').value;
                const passwordConfirmation = document.getElementById('password_confirmation').value;

                if (password.length < 8) {
                    alert('Password must be at least 8 characters long.');
                    return;
                }

                if (password !== passwordConfirmation) {
                    alert('Passwords do not match.');
                    return;
                }

                // If validation passes, show success message and start countdown
                console.log('Password reset successfully.');
                resetFormContainer.classList.add('hidden');
                successView.classList.remove('hidden');

                let seconds = 3;
                countdownElement.textContent = seconds;

                const countdownInterval = setInterval(() => {
                    seconds--;
                    countdownElement.textContent = seconds;
                    if (seconds <= 0) {
                        clearInterval(countdownInterval);
                        window.location.href = '/login';
                    }
                }, 1000);
            });
        });
    </script>
</body>
</html>
