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

Route::get('/login.php', function () {
    return view('login');
});

Route::get('/register.php', function () {
    return view('register');
});

Route::get('/check-stock.php', function () {
    return view('check-stock');
});

Route::get('/add-new-books.php', function () {
    return view('add-new-books');
});

Route::get('/featured-books-manage.php', function () {
    return view('featured-books-manage');
});

Route::get('/featured-books-edit.php', function () {
    return view('featured-books-edit');
});

Route::get('/admin-purchase-history.php', function () {
    return view('admin-purchase-history');
});

Route::get('/customer-purchase-history.php', function () {
    return view('customer-purchase-history');
});

Route::get('/edit-book.php', function () {
    return view('edit-book');
});

Route::get('/products_search.php', function () {
    return view('products_search');
});