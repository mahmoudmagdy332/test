<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Product;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/pr',"ProductController@p");
Route::get('/add',"ProductController@add");
Route::post('/add',"ProductController@add");
Route::get('/ad/{id}',  function ($id){
    $product=Product::find($id);
    $product->delete();
   return redirect('pr');
});
Route::get('/edit/{id}',"ProductController@edit");
Route::post('/edit/{id}',"ProductController@edit");
