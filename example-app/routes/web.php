<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/db', function () {
    return view('dbconn');
});


Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/shop', function () {
    $products = Product::all(); // Fetch all products from the database
    return view('shopNow', ['products' => $products]);
})->name('shopNow');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/auth', function () {
    return view('register');
})->name('registeration');

Route::get('/sign', function () {
    return view('login');
})->name('loginView');

Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dash');

    Route::post('/store-product', [AdminController::class, 'storeProduct'])->name('storeProduct');
});


