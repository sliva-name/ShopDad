<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// create route for cart
Route::get('/products/get', fn() => \App\Http\Resources\Product::collection(Product::paginate(20)))->name('api.products.get');
Route::get('/product/get/{id}', fn($id) => new \App\Http\Resources\Product(Product::findOrFail($id)));
Route::get('/categories/get', fn() => new \App\Http\Resources\Category(\App\Models\Category::all()));
Route::get('/cart/get', fn() => \Cart::session(\Auth::user()->id)->getContent())->middleware('auth:sanctum'); // Доработать бд и переписать корзину
