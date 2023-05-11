<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderCheckOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orderNow(Request $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $order = Order::create([
            'cart_id' => $cart->id,
        ]);
        OrderCheckOut::create([
            'order_id' => $order->id,
            'phone' => $request->phone,
            'address' => $request->address,
            'card_number' => $request->card_number
        ]);

        return redirect()->route('home')->with([
            'message' => 'Thanks For Purchasing',
            'alert' => 'success'
        ]);

    }
}
