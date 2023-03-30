<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\CategoryController;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Auth::routes();

