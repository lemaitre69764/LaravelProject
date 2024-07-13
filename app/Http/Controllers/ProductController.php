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
        $products = Product::get();

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
            //$product = DB::table('products')->where('id', $product)->get();
            //$product = DB::table('products')->where('id', $product)->first();
            //$product = DB::table('products')->find($product);
             //$product = Product::where('id', $product)->get();
             //$product = Product::where('id', $product)->first();
             //$product = Product::find($product); 
        // ----------------------------------------
        $product = Product::findOrFail($product);
        /*Описание: Метод findOrFail() используется 
        для поиска записи по ее первичному ключу.
         Если запись не найдена, метод выбросит исключение
         Illuminate\Database\Eloquent\ModelNotFoundException.*/
         //----------------------------------------------------
        /*вот это команда заебись работает, так как
        с помощью него можно выводить ошибку 
        404 Not Found если продукта в нашей таблице
        нету =)
        а так же его можно написать вместо несколько строчного
        кода(снизу пример)
        ---
        if (isset($product)){
        dd();
        }
        return 'failer'
        ---
        */
        dd($product);
        
        
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
