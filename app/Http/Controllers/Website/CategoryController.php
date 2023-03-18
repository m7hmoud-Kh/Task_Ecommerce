<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($id)
    {
        $products = Product::with("category")->where('category_id', $id)
        ->latest('created_at')->limit(9)->get();
        $categories = Category::get(['id', 'name']);
        $category = Category::find($id);

        return view('website.category', compact('products', 'categories','category'));
    }
}
