<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Main_productController extends Controller
{
    public function index(){
        return view('layouts.main_product');
    }
    public function create(){
        return view('product.create');
    }
    public function add_db(){
        $data = request()->validate([
            'name'=>'string',
            'description'=>'string',
            'price'=>'integer'
        ]);
        Product::create($data);
        return redirect()->route('product.show');
    }
    public function show(){
        $product = Product::all();;
        return view('product.show',compact('product'));
    }
    public function delete(Product $product){
        $product->delete();

        return redirect()->route('product.show');
    }
    public function update(Product $product){
        $data = request()->validate([
            'name' =>'string',
            'description' =>'string',
            'price' =>'integer',
        ]);
        $product->update($data);
        
        return redirect()->route('product.show');
    }
    public function edit(Product $product){
        return view('product.edit',compact('product'));
    }
}
