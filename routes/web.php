<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us.php', function () {
    return view('about-us');
});

Route::get('/index.php', function () {
    return view('index');
});

Route::get('/checkout.php', function () {
    return view('checkout');
});

Route::get('/products.php', function () {
    return view('products');
});

Route::get('/contact.php', function () {
    return view('contact');
});
