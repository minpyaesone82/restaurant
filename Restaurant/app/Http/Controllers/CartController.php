<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function product(){
        $products = Product::all();
        return view('cart.product',compact('products'));
    }

    public function add_to_cart(Request $request){

      
        $cart= new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id=$request->product_id;
        $cart->save();
        return redirect()->back()->with('success','Food order is success.');

    }

    public function homepage(){
        return view('HomePage');
    }

    static function cartItem()
    {
        $userId = Auth::user()->id;
        $counts = Cart::where('user_id',$userId)->count();
        return $counts;
    }

    function cart()
    {
        $userId=Auth::user()->id;
        $products= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();

        return view('cart.cart',compact('products'));
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect()->back();
    }

    function checkBill()
    {
        $userId=Auth::user()->id;
        $total= $products= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->sum('products.price');
 
         Order::where('user_id',$userId)->delete();
         return view('cart.checkBill',['total'=>$total]);
    }

    function order(Request $req)
    {
        $userId=Auth::user()->id;

         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
            
            $order= new Order();
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="confirm";
            $order->save();  
         }
         Cart::where('user_id',$userId)->delete();  

         return redirect()->route('myOrders')->with('success','Order is successfully.');
    }

    function showOrder()
    {
        $userId=Auth::user()->id;
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('HomePage',compact('orders'));
    }

}