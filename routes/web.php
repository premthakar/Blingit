<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlaceOrderController;


// Public grocery eCommerce pages
Route::view('/', 'home');
Route::view('/shop', 'shop');
Route::view('/milk', 'milk')->name('milk');
Route::view('/vegetables', 'vegetables')->name('vegetables');
Route::view('/fruits', 'fruits')->name('fruits');
Route::view('/elctronics', 'electronics')->name('electronics');
Route::view('/personal-products', 'personal-products')->name('personal-products');
Route::view('/product', 'product'); // For demo, static product page
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::get('/place-order', [PlaceOrderController::class, 'show'])->name('place-order');

Route::get('/orders', [OrderController::class, 'userOrders'])->name('orders');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::view('/register', 'register')->name('register');
Route::view('/forgot-password', 'forgot-password')->name('password.request');
Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
})->name('logout');



// Admin Dashboard Routes
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/categories', 'admin.categories')->name('admin.categories');
    Route::view('/coupons', 'admin.coupons')->name('admin.coupons');
    Route::view('/products', 'admin.products')->name('admin.products');
    Route::get('/orders', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders');
    Route::view('/users', 'admin.users')->name('admin.users');
    Route::view('/profile', 'admin.profile')->name('admin.profile');
    Route::view('/settings', 'admin.settings')->name('admin.settings');
    Route::get('/admin/contact', function () {
    return view('admin.contact');
})->name('admin.contact');

   
});

