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
     $product = Product::create(request()->all());
     if (request()->stock == 0 && request()->status == 'available'){
        session()->flash('error', 'If available must have stock');
//flash работает однажды для последующего пост запроса, и поэтому полезен в нашем
// случае
        return redirect()->back();
     }
     

     return redirect()->route('products.index');
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
        $product = Product::findOrFail($product);

        $product->update(request()->all());
        
        return //redirect;
        
        redirect()->route('products.index');

       //redirect()->action('ProductController@index');
    }
    public function destroy($product)
    {
        $product = Product::findOrFail($product);

        $product->delete();

        return $product;
    }
}
