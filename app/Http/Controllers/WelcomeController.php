<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(20);
        return view('welcome', compact('products'));
    }
    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->paginate(20);
        return view('welcome', compact('products'));
    }
}
