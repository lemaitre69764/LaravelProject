<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    
    public function index()
    {
        $products = DB::table("products")->get();

        dd($products);
        return view('products.index');
    }
    public function create()
    {
        return 'a form to create a product FROM controller'; 
    }
    public function store()
    {
        //
    }
    public function show($product) 
    {
        return view('products.show');// test
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
