<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function p(){
$product=Product::all();
$arr=Array('pr'=>$product);
        return view('product.gg',$arr);
    }
        public function add(Request $rec){
     if($rec->isMethod('post')){
         $pro=new Product();
         $pro->name=$rec->input('name');
         $pro->price=$rec->input('price');
         $pro->save();
       
      
     }
    
      return view('product.add');
            
     
    }
            public function edit(Request $rec,$id){
     if($rec->isMethod('post')){
         $product=Product::find($id);
         $product->name=$rec->input('name');
         $product->price=$rec->input('price');
         $product->save();
         
         return redirect("pr");
      
     }
     else{
     $product=Product::find($id);
     $arr=Array('product'=>$product);
     return view('product.edit',$arr);
     }  
     
    }
}
