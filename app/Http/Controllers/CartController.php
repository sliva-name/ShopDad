<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {

        \Cart::session(\Auth::user()->id)->clearCartConditions();
        $condition = new CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '12.5%',
            'attributes' => array( // attributes field is optional
                'description' => 'Value added tax',
                'more_data' => 'more data here'
            )
        ));
        $condition2 = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Express Shipping $15',
            'type' => 'shipping',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '+15',
            'order' => 1
        ));


        \Cart::session(\Auth::user()->id)->condition([$condition, $condition2]);
        $cartConditions = \Cart::session(\Auth::user()->id)->getConditions();
        $cartItems = \Cart::session(\Auth::user()->id)->getContent();
        //$cartItems = \Cart::session(session()->get('userID'))->getContent();
        return view('cart.index', compact('cartItems', 'cartConditions'));
    }


    public function addItem(Product $item)
    {

        if ($item->quantity < 0) {
            return abort(404);
        }

        \Cart::session(\Auth::user()->id)->add(array(
            'id' => $item->id, // inique row ID
            'name' => $item->title, //
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $item,
        ));

        return to_route('cart.index');
    }

    public function updateCart(Request $item): \Illuminate\Http\JsonResponse
    {
        \Cart::session(\Auth::user()->id)->update($item->id,[
            'quantity' => [
                'relative' => false,
                'value' => $item->quantity,
            ]
        ]);

        $total = \Cart::session(\Auth::user()->id)->getTotal();
        $quantity = $item->quantity;
        return response()->json(['total' => $total . ' руб', 'quantity' => $quantity]);
    }

    public function removeItem(Request $request): \Illuminate\Http\JsonResponse
    {
        \Cart::session(\Auth::user()->id)->remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return response()->json(['success']);
    }

    public function clearAllCart()
    {
        \Cart::session(\Auth::user()->id)->clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
