<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();
        return view('layouts._cart.cart', [
            'data' => $cart 
        ]);
    }

    public function addItem($id)
    {
        $products = Product::find($id);
        Cart::add(['id' => $products->id, 'name' => $products->name, 'qty' => 1, 'price' => $products->price]);
        return back();
    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return back();
    }
}
