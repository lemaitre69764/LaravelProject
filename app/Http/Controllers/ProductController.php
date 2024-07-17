<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    
    public function index()
    {
        //$products = DB::table("products")->get();
        $products = Product::all();

        return view('products.index')->with([
        'products' => $products,
    ]);
    }
    public function create()
    {
        return view('products.create'); 
    }
    public function store()
    {
        //
    }
    public function show($product) 
    {
            //$product = DB::table('products')->where('id', $product)->get();
            //$product = DB::table('products')->where('id', $product)->first();
            //$product = DB::table('products')->find($product);
             //$product = Product::where('id', $product)->get();
             //$product = Product::where('id', $product)->first();
             //$product = Product::find($product); 
        // ----------------------------------------
        $product = Product::findOrFail($product);
        
        return view('products.show')->with([
            'product' => $product,
            'subtitle' => '<h2>Something</h2>',
        ]);// test


    }
    public function edit($product)
    {
        return "Showing the form to edit the {$product}";
    }
    public function update($product)
    {
        //
    }
    public function destroy($product)
    {

    }
}
