<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ProductController extends Controller
{
    
    public function index()
    {
        return view('products.index'); // test
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
