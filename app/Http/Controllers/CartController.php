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
        \Cart::clearCartConditions();
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


        \Cart::condition([$condition, $condition2]);
        $cartConditions = \Cart::getConditions();
        $cartItems = \Cart::getContent();
        //$cartItems = \Cart::session(session()->get('userID'))->getContent();
        return view('cart.index', compact('cartItems', 'cartConditions'));
    }


    public function addItem(Product $item)
    {
        $userId = session()->has('userID') ? session()->get('userID') : session(['userID' => Str::random(10)]);

      \Cart::add(array(
            'id' => $item->id, // inique row ID
            'name' => $item->title, //
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $item,
        ));
//        \Cart::session($userId->add(array(
//            'id' => $item->id, // inique row ID
//            'name' => $item->title, //
//            'price' => $item->price,
//            'quantity' => 1,
//            'attributes' => [],
//            'associatedModel' => $item,
//        ));

        return to_route('cart.index');
    }

    public function updateCart(Request $item): \Illuminate\Http\JsonResponse
    {
        \Cart::update($item->id,[
            'quantity' => [
                'relative' => false,
                'value' => $item->quantity,
            ]
        ]);

        $total = \Cart::getTotal();

        return response()->json(['total' => $total . ' руб']);
    }

    public function removeItem(Request $request): \Illuminate\Http\JsonResponse
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return response()->json(['success']);
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
