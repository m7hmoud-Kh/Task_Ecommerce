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

    public function search(Request $request)
    {
        $searchKey = $request->searchKey;
        $products = Product::where('name', 'like', "%$searchKey%")
        ->orWhereHas('category', function ($q) use ($searchKey) {
            $q->where('name', 'like', "%$searchKey%");
        })
        ->orWhereHas('supplier', function ($q) use ($searchKey) {
            $q->where('name', 'like', "%$searchKey%");
        })
        ->get();
        $categories = Category::get(['id', 'name']);

        return view('website.search', compact('products', 'categories', 'searchKey'));

    }
}
