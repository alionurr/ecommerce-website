<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [ProductController::class, 'index']);

Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::view('/register', 'register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/products', [ProductController::class, 'products']);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/product_details/{id}', [ProductController::class, 'productDetails']);
Route::get('/search_results', [ProductController::class, 'search']);

Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cartList']);
Route::get('/remove_item/{id}', [ProductController::class, 'removeItem']);
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/orderinfo', [ProductController::class, 'orderInfo']);
Route::get('/myorders', [ProductController::class, 'myOrders']);
