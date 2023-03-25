<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});

