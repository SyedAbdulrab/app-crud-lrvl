<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view("products.index",["products"=>$products]);
    }
    public function create(){
        return view("products.create");
    }
    public function store(Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);
        $product = Product::create($data);       
        return redirect(route("product.index"))->with("success","Product Added successfully");
    }

    public function edit(Product $product){
        return view('products.edit',["product"=>$product]);
    }

    public function update(Product $product,Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $product->update($data);
        return redirect(route("product.index"))->with("success","Product updated successfully");
    }


    public function destroy(Product $product){
        $product->delete();
        return redirect(route("product.index"))->with("success","Product deleted successfully");
    }


    
}
