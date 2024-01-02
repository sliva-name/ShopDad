<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\SeoGenerator\SeoGenerator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * @throws \JsonException
     */
    public function index(Product $product)
    {
        seo()->title($product->title)
            ->description(Str::limit($product->description, 50))
            ->keywords(SeoGenerator::generateKeywords($product->description));

        return view('product.index', compact('product'));
    }
}
