<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session('cart', []);
        return view('checkout.index', compact('cart'));
    }

    public function store()
    {
        $cart = session('cart', []);

        $total = collect($cart)->sum(
            fn($item) => $item['price'] * $item['quantity']
        );

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $total
        ]);

        foreach ($cart as $id => $item) {
            $order->items()->create([
                'artwork_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');

        return redirect()->route('shop.index')
            ->with('success', 'Order placed!');
    }
}
