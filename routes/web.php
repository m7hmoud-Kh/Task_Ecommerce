<?php

use App\Http\Controllers\Website\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\OrderController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Auth::routes();

Route::group(['middleware'=>'auth'], function () {
    Route::get('/cart/{product_id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('cart', [CartController::class, 'index'])->name('cart.all');
    Route::get('removeCartItem/{product_id}', [CartController::class, 'destory'])->name('cart.remove');
    Route::post('checkout', [CartController::class, 'checkout'])->name('checkout');

    //order
    Route::post('orderCheckout', [OrderController::class, 'orderNow'])->name('purchaseOrder');
});

