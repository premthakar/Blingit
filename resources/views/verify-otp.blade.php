<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP | Blingit Grocery</title>

    <!-- Tailwind CSS v3 -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    {{-- 
      This Blade template provides a modern, responsive "Verify OTP" page.
      - It's styled entirely with Tailwind CSS.
      - Features a two-column layout consistent with the login/register pages.
      - Informs the user that an OTP has been sent to their phone.
      - Provides a form to enter the OTP and redirects to the reset password page on submission.
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
                            One last step to secure your account.
                        </h2>
                        <p class="mt-4 text-gray-600 text-lg">
                           We've sent a One-Time Password (OTP) to your mobile number to ensure it's you.
                        </p>
                    </div>
                    <div class="mt-10 space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Account Security</h3>
                                <p class="text-gray-600">Verifying your number keeps your account safe.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full">
                               <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Seamless Communication</h3>
                                <p class="text-gray-600">Receive order updates via SMS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Verification Form -->
            <div class="p-8 sm:p-12 flex flex-col justify-center">
                <div class="w-full max-w-md mx-auto">
                    <div class="text-center lg:text-left mb-8">
                         <a href="/" class="lg:hidden flex items-center justify-center gap-2 group mb-6">
                            <span class="text-3xl font-extrabold text-gray-900">
                                bling<span class="text-green-600">it</span>
                            </span>
                        </a>
                        <h1 class="text-3xl font-extrabold text-gray-900">Verify Your OTP</h1>
                        <p class="text-gray-500 mt-2">
                            Please enter the 6-digit code we sent to your phone.
                        </p>
                    </div>

                    @if (session('status'))
                        <div class="mb-6 font-medium text-sm text-green-600 bg-green-50 p-4 rounded-lg border border-green-200">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="otp-form" class="space-y-6">
                        @csrf
                        <div>
                            <label for="otp-1" class="block text-sm font-medium text-gray-700 mb-2 text-center">Enter 6-Digit OTP</label>
                            <div class="flex gap-2 justify-center">
                                @for ($i = 1; $i <= 6; $i++)
                                    <input type="text"
                                           name="otp[]"
                                           maxlength="1"
                                           pattern="[0-9]*"
                                           inputmode="numeric"
                                           class="w-12 h-14 text-center text-2xl font-bold border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500"
                                           required
                                           autocomplete="off"
                                           id="otp-{{ $i }}">
                                @endfor
                            </div>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:shadow-green-500/30 transition-all duration-300 transform hover:-translate-y-0.5 text-lg">
                                Verify & Proceed
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-6 text-center text-sm">
                        <p class="text-gray-600">Didn't receive the code? 
                            <a href="#" class="font-semibold text-green-600 hover:underline">Resend OTP</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const otpInputs = document.querySelectorAll('input[name="otp[]"]');
            const otpForm = document.getElementById('otp-form');

            otpInputs.forEach((el, idx, arr) => {
                el.addEventListener('input', function() {
                    if (this.value.length === 1 && idx < arr.length - 1) {
                        arr[idx + 1].focus();
                    }
                });
                el.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && !this.value && idx > 0) {
                        arr[idx - 1].focus();
                    }
                });
            });

            otpForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Stop the form from submitting normally

                let otpValue = '';
                otpInputs.forEach(input => {
                    otpValue += input.value;
                });

                if (otpValue.length === 6) {
                    console.log('OTP Verified:', otpValue);
                    // Redirect to the reset password page
                    window.location.href = '/reset-password';
                } else {
                    alert('Please enter the complete 6-digit OTP.');
                }
            });
        });
    </script>
</body>
</html>
