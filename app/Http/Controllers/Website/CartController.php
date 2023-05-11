<?php

namespace App\Http\Controllers\Website;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{

    public function addToCart($productId)
    {
        session()->start();
        if (key_exists($productId, session()->get('cart') ?? [])) {
            session()->increment("cart.$productId");
        } else {
            session()->put("cart.$productId", 1);
        }

        return redirect()->back()->with([
            'alert' => 'success',
            'message' => "Product Added Successfully"
        ]);
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $products = [];
        foreach ($cart as $productId => $quantity) {
            $products[$productId] = Product::find($productId);
            $products[$productId]['cart_quantity'] = $quantity;
        }

        $categories = Category::get(['id', 'name']);
        return view('website.cart', compact('products', 'categories'));
    }

    public function destory($productId)
    {
        session()->forget("cart.$productId");
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        //update lastest session
        foreach ($request->products as $productId => $quantity) {
            session()->put("cart.$productId", $quantity);
        }

        $cart = Cart::where('user_id', Auth::user()->id)->first();
        //add UserId in cart
        if (empty($cart)) {
            $cart = Cart::create([
                'user_id' => Auth::user()->id
            ]);
        }
        // add all Product with quantity in cartId

        foreach (session()->get('cart') as $productId => $quantity) {
            $cartItem = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'cart_quantity' => $quantity
            ]);
        }

        // forget session
        session()->forget('cart');
        $categories = Category::get(['id', 'name']);
        $cartItem = CartItem::with('products')
        ->where('cart_id', $cart->id)
        ->where('created_at', $cartItem->created_at)
        ->get();
        return view('website.checkout', compact('categories', 'cartItem'));
    }
}
