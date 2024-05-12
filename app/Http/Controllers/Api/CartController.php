<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem($itemId)
    {
        $item = Product::find($itemId);

        if (!$item) {
            return response()->json(['status' => 'error', 'message' => 'Товар не найден']);
        }

        if ($item->quantity < 0) {
            return response()->json(['status' => 'error', 'message' => 'Товар закончился']);
        }

        \Cart::session(\Auth::user()->id)->add(array(
            'id' => $item->id, // inique row ID
            'name' => $item->title, //
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $item,
        ));

        return response()->json(['status' => 'success', 'message' => 'Товар успешно добавлен в корзину']);
    }
    public function removeItem($itemId): \Illuminate\Http\JsonResponse
    {
        $item = \Cart::session(\Auth::user()->id)->get($itemId);

        if (!$item) {
            return response()->json(['status' => 'error', 'message' => 'Товар не найден в корзине']);
        }

        \Cart::session(\Auth::user()->id)->remove($itemId);

        return response()->json(['status' => 'success', 'message' => 'Товар удален из корзины']);
    }
}
