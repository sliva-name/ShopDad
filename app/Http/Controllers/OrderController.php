<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function addOrder(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
        ], [
            'first_name.required' => 'Введите имя.',
            'last_name.required' => 'Введите фамилию.',
            'email.required' => 'Введите email.',
            'street_address.required' => 'Введите улицу.',
            'city.required' => 'Введите город.',
            'region.required' => 'Введите регион.',
            'postal_code.required' => 'Введите почтовый индекс.',
            'phone.required' => 'Введите Ваш номер телефона.',
        ]);

        $request['summ'] = \Cart::getTotal();

        $order = Order::create($request->all());

        $items = \Cart::getContent();

        foreach ($items as $item) {
            if ($item->quantity > 0) {
                $order->orderItems()->create([
                    'name' => $item->name,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'product_id' => $item->id
                ]);
                Product::query()->where('id', $item->id)->decrement('quantity', $item->quantity);
            }
            else {
                return back()->withInput();
            }
        }

        \Cart::clear();
        // Mail::to($request->email)->send(new OrderShipped($order));
        Mail::to('antyuhov2@gmail.com')->send(new OrderShipped($order));

        return to_route('home');
    }

    public function get(Request $request)
    {
        // Дописать логику получения заказа по авторизациии
        return view('order.get');
    }
}
