<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with('shippedFrom')->paginate(20);
        return response()->json([
            'success' => true,
            'products' => $products,
        ], 200);
    }
}
