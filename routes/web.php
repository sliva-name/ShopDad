<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/product/category/{id}', [WelcomeController::class, 'productByCategory']);
Route::get('/product/{product}', [ProductController::class, 'index'])->name('product');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{item}', [CartController::class, 'addItem'])->name('cart.add');
    Route::post('/remove', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::post('/update', [CartController::class, 'updateCart'])->name('cart.update');
});

Route::group(['prefix' => 'order'], function () {
   Route::get('/', [OrderController::class, 'index'])->name('order.index');
   Route::post('/add', [OrderController::class, 'addOrder'])->name('order.add');
   Route::get('/get', [OrderController::class, 'get'])->name('order.get');
});

require __DIR__.'/auth.php';
