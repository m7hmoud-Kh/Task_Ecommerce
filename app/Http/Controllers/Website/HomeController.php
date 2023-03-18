<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(12)->get();
        $categories = Category::get(['id', 'name']);
        return view('website.home', compact('products', 'categories'));
    }
}
