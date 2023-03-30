<?php

use App\Http\Controllers\Admin\CateogryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SupplierController;

Route::group(['middleware' => ['auth','is-admin']], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('proudcts-create', [ProductController::class, 'create'])
    ->name('products.create');
    Route::post('products', [ProductController::class, 'store'])
    ->name('products.store');
    Route::get('products/{id}', [ProductController::class, 'edit'])
    ->name('products.edit');
    Route::patch('products/{id}', [ProductController::class, 'update'])
    ->name('products.update');
    Route::delete('products/{id}', [ProductController::class, 'destory'])->name('products.destory');

    Route::resource('category', CateogryController::class);
    Route::resource('supplier', SupplierController::class);


});

