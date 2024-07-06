<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
})->name('main'); */ 

Route::get('/', 'App\Http\Controllers\MainController@index')->name('Main.index');
//index
Route::get('products','App\Http\Controllers\ProductController@index')->name('products.index');
//create
Route::get('products/create',  'App\Http\Controllers\ProductController@create')->name('products.create');
//store
Route::post('products/', 'App\Http\Controllers\ProductController@store')->name('products.store');
//show
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show')->name("products.show");
//edit
Route::get('products/{product}/edit','App\Http\Controllers\ProductController@edit')->name('products.edit');
//update
Route::match(['put','patch'],'products/{product}', 'App\Http\Controllers\ProductController@update')->name('products.update');
//destroy
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
