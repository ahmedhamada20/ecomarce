<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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



Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index'])->name('site');
Route::get('/customer_support', [\App\Http\Controllers\Home\HomeController::class, 'customer_support'])->name('customer_support');
Route::get('/contact_us', [\App\Http\Controllers\Home\HomeController::class, 'contact_us'])->name('contact_us');
Route::get('mincategory/{id}', [\App\Http\Controllers\Home\HomeController::class, 'mincategory'])->name('mincategory');
Route::get('minproduct/{id}', [\App\Http\Controllers\Home\HomeController::class, 'minproduct'])->name('minproduct');
Route::get('mincateg/{id}', [\App\Http\Controllers\Home\HomeController::class, 'mincateg'])->name('mincateg');

Route::middleware('auth')->group(function () {

    Route::post('addToCart', [\App\Http\Controllers\Home\HomeController::class, 'addToCart'])->name('addToCart');
    Route::post('deletedCart', [\App\Http\Controllers\Home\HomeController::class, 'deletedCart'])->name('deletedCart');
    Route::get('cart', [\App\Http\Controllers\Home\HomeController::class, 'cart'])->name('show_cart');
    Route::post('order_paymaents', [\App\Http\Controllers\Home\HomeController::class, 'order_paymaents'])->name('order_paymaents');
});


Route::get('/guarantee', function () {
    return view('website.guarantee');
})->name('guarantee');
Route::get('/shipping', function () {
    return view('website.shipping');
})->name('shipping');
Route::get('/representatives', function () {
    return view('website.representatives');
})->name('representatives');
Route::get('/oders', function () {
    return view('website.order');
})->name('oders');
Route::get('/wishlist', function () {
    return view('website.wishlist');
})->name('wishlist');

require __DIR__ . '/auth.php';
