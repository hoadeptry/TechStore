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
    return view('client/index');
});
Route::get('/category', function () {
    return view('client/category');
});
Route::get('/cart', function () {
    return view('client/cart');
});
Route::get('/checkout', function () {
    return view('client/checkout');
});
Route::get('/contact', function () {
    return view('client/contact');
});
Route::get('/single-blog', function () {
    return view('client/single-blog');
});
Route::get('/single-product', function () {
    return view('client/single-product');
});
Route::get('/tracking', function () {
    return view('client/tracking');
});

// admin
Route::get('/admin', function () {
    return view('admin/index');
});
