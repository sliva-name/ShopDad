<?php

namespace App\Http\Controllers;


use App\Filters\ProductFilters;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products = Product::filter($filters)->paginate(20);
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }
    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->paginate(20);
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }
}
