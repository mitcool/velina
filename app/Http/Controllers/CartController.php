<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Artwork $artwork)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$artwork->id])) {
            $cart[$artwork->id]['quantity']++;
        } else {
            $cart[$artwork->id] = [
                'title' => $artwork->title,
                'price' => $artwork->price,
                'image' => $artwork->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        unset($cart[$id]);
        session()->put('cart', $cart);

        return back();
    }
}

