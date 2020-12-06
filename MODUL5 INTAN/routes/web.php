<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;



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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::view('/product', 'products/index');

Route::resource('products', ProductController::class);
Route::resource('order', OrderController::class);
Route::resource('history', HistoryController::class);


// Route::view('/order', 'order/index');
Route::view('/order-form', 'order/create');
// Route::view('/history', 'history/index');
