<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    
    public function create()
    {
        return view('product.product-create');
    }

    public function store(Request $request)
    {   
        
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            
        ]);
        $product = new Product() ;
        $product->name = $request->name;
        $product->price = $request->price;
       
        $product->description = $request->description;
        if($product->save()){
            return redirect(route('product.index'))->with('success',$product->name . ' Added successfully.');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->update();
        return redirect(route('product.index'))->with('success','Product is successfully updated');
    }  
    
    public function destroy($id){
        $product = Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Product is Deleted');
    }


}
