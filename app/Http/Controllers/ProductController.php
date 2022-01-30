<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::find(2);
        dump($product->price);
        dump($product->name);
        dump($product->description);
    }

}
