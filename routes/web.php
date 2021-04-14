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


Route::view('login', 'login');
Route::post('login', [UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});


Route::get('/', [ProductController::class, 'index']);

Route::get('products', [ProductController::class,'products']);
