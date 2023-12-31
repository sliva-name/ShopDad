<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// create route for cart
Route::get('/products/get', fn() => \App\Http\Resources\Product::collection(Product::paginate(20)))->name('api.products.get');
Route::get('/product/get/{id}', fn($id) => new \App\Http\Resources\Product(Product::findOrFail($id)));
Route::get('/categories/get', fn() => new \App\Http\Resources\Category(\App\Models\Category::all()));
Route::get('/cart/get', fn() => \App\Http\Resources\Cart::collection('2')); // Доработать бд и переписать корзину
