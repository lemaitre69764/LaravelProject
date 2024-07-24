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
    // dd(request(), request()->title, request()->all());
     $product = Product::create(request()->all());
        return $product;
     //   dd('In store');
    }
    public function show($product) 
    {
        $product = Product::findOrFail($product);
        
        return view('products.show')->with([
            'product' => $product,
            'subtitle' => '<h2>Something</h2>',
        ]);
    }
    public function edit($product)
    {
      return view('products.edit')->with([
        'product' => Product::findOrFail($product),
      ]);
    }
    public function update($product)
    {
        //
    }
    public function destroy($product)
    {

    }
}
