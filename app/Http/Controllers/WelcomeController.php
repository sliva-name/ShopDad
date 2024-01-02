<?php

namespace App\Http\Controllers;


use App\Filters\ProductFilters;
use App\Models\Category;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products = Product::filter($filters)->paginate(20);
        $categories = Category::all();
        seo()->title('SpareShop | маркетплейс техники')
            ->description('SpareShop | маркетплейс техники')
            ->keywords('купить,техника,spareshop,дешево,пилу,косу,мотор');
        return view('welcome', compact('products', 'categories'));
    }
    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->paginate(20);
        $categories = Category::all();
        seo()->title('SpareShop | маркетплейс техники')
            ->description('SpareShop | маркетплейс техники')
            ->keywords('купить,техника,spareshop,дешево,пилу,косу,мотор');
        return view('welcome', compact('products', 'categories'));
    }
}
