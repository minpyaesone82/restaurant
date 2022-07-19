<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    Route::get('products',[ProductController::class,'index'])->name('product.index');
    Route::get('products-create',[ProductController::class,'create'])->name('product.product-create');
    Route::post('products-store',[ProductController::class,'store'])->name('product.store');
    Route::get('products-edit/{product_id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('products-edit/{product_id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('products-destroy/{product_id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('cart-product',[CartController::class,'product'])->name('product.all');
    Route::post('add-to-cart',[CartController::class,'add_to_cart'])->name('add_to_cart');
    Route::get('cart',[CartController::class,'cart'])->name('cart');
    Route::get("removecart/{id}",[CartController::class,'removeCart']); 
    Route::get("order",[CartController::class,'order'])->name('order');
    Route::get("myOrders",[CartController::class,'showOrder'])->name('myOrders');
    Route::get("checkBill",[CartController::class,'checkBill'])->name('checkBill');

});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('auth.logout');
Route::get("/",[CartController::class,'homepage'])->name('HomePage');

