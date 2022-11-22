<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SilderController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TypeProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dash', [HomeController::class, 'index'])->name('home');
    Route::get('/link_get', [HomeController::class, 'link_get'])->name('link_get');
    Route::post('fullcalenderAjax', [HomeController::class, 'ajax'])->name('add_event');

    Route::resource('setting', SiteSettingController::class)->only(['index', 'update']);


    Route::get('admin.shop',[HomeController::class,'shop'])->name('admin.shop');
    Route::get('admin.payment',[HomeController::class,'payment'])->name('admin.payment');
    Route::get('admin.customer_support',[HomeController::class,'customer_support'])->name('admin.customer_support');
    Route::get('admin.contact_Us',[HomeController::class,'contact_Us'])->name('admin.contact_Us');
    Route::get('admin.satisfaction_guarantee',[HomeController::class,'satisfaction_guarantee'])->name('admin.satisfaction_guarantee');
    Route::get('admin.shipping',[HomeController::class,'shipping'])->name('admin.shipping');
    Route::get('admin.commercial_sales',[HomeController::class,'commercial_sales'])->name('admin.commercial_sales');
    Route::get('admin.wishlist',[HomeController::class,'wishlist'])->name('admin.wishlist');


    Route::resource('group', GroupController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('silder', SilderController::class);

    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('typeProduct', TypeProductController::class);

    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);
    Route::get('statusorder/{status}',[OrderController::class,'status'])->name('order.status');
    Route::get('assgin_order', [OrderController::class,'assgin_order'])->name('assgin_order');
    Route::post('assgin_order_status', [OrderController::class,'assgin_order_status'])->name('assgin_order_status');
    Route::post('assgin_order', [OrderController::class,'assgin'])->name('order_assgin');
    Route::resource('users', UsersController::class);
    Route::resource('coupon', CouponController::class);

    Route::get('sections/{id}', [ProductController::class, 'getsubcategory']);



    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
