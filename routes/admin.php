<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsersController;
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
    Route::post('fullcalenderAjax', [HomeController::class, 'ajax'])->name('add_event');

    Route::resource('setting', SiteSettingController::class)->only(['index', 'update']);

    Route::resource('category', CategoryController::class);

    Route::resource('subcategory', SubCategoryController::class);

    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);
    Route::resource('users', UsersController::class);

    Route::get('sections/{id}', [ProductController::class, 'getsubcategory']);



    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
