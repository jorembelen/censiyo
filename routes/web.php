<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/add-to-cart/{product}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkOut'])->name('cart.checkout')->middleware('auth');

Route::resource('orders', OrderController::class);
Route::resource('shops', ShopController::class);

Route::get('paypal/checkout/{order}', [PaypalController::class, 'getExpressCheckOut'])->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', [PaypalController::class, 'getExpressCheckOutSuccess'])->name('paypal.success');
Route::get('paypal/checkout-cancel', [PaypalController::class, 'cancenPage'])->name('paypal.cancel');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
