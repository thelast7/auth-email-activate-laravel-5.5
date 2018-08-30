<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
//        $product = Product::all();
        $cart = Cart::content();
        return view('layouts._cart.cart', [
            'data' => $cart 
        ]);
    }

    public function addItem($id)
    {
        $products = Product::find($id);
        Cart::add(['id' => $products->id, 'name' => $products->name, 'qty' => 1, 'price' => $products->price, 'options' => ['img' => $products->cover]]);
        //        Cart::add(['id' => $products->id, 'name' => $products->name, 'qty' => 1, 'price' => $products->price,
        //'option' => [
        //            'img' => $products->cover 
        //        ]]);
        return back();
    }
    /*
    public function update(Request $request)
    {
        $qty = $request->newQty;
        $rowId = $request->rowID;

        Cart::update($rowId,$qty);
        return back();
    }
    */

    public function update(Request $request)
    {
        //Cart::update($id, $request->qty);
        $qty=$request->qty;
        $rowId=$request->rowId;
        Cart::update($rowId,$qty);
        return back();
    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return back();
    }
}
