<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/category_view', [AdminController::class, 'category_view']);
Route::post('/upload_category', [AdminController::class, 'upload_category']);

Route::get('/updateCategory_view', [AdminController::class, 'updateCategory_view']);

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
Route::get('/update_category_upload/{id}', [AdminController::class, 'update_category_upload']);
Route::post('/updated_category/{id}', [AdminController::class, 'updated_category']);
Route::get('/add_product_view', [AdminController::class, 'add_product_view']);

Route::post('/add_product', [AdminController::class, 'add_product']);
Route::get('/manage_product', [AdminController::class, 'manage_product']);


Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

Route::get('/update_product_after/{id}', [AdminController::class, 'update_product_after']);

Route::post('/updated_product/{id}', [AdminController::class, 'updated_product']);


Route::get('/tshirt_view', [HomeController::class, 'tshirt_view']);
Route::get('/overSize_view', [HomeController::class, 'overSize_view']);
Route::get('/cart_view/{id}', [HomeController::class, 'cart_view']);
Route::get('/view_cart', [HomeController::class, 'view_cart']);

Route::get('/delete_cart/{id}', [HomeController::class, 'delete_cart']);

Route::get('/checkout_view', [HomeController::class, 'checkout_view']);
Route::post('/order_done', [HomeController::class, 'order']);

Route::get('/my_orders', [AdminController::class, 'my_orders']);

Route::get('/sweetpants', [HomeController::class, 'sweetpants']);
Route::get('/jacket', [HomeController::class, 'jacket']);
Route::get('/jeans', [HomeController::class, 'jeans']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
