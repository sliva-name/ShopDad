<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * @throws \JsonException
     */
    public function index(Product $product)
    {
        seo()->title($product->title)->description(Str::limit($product->description, 50));

        return view('product.index', compact('product'));
    }
}
