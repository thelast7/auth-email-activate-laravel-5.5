<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;
use Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts._cart.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if (!$duplicates->isEmpty()) {
            return redirect('layouts._cart.cart')->withSuccessMessage('Item is already in your cart!');
        }
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect('layouts._cart.cart')->withSuccessMessage('Item was added to your cart!');
        //Cart::associate('Product','App')->add($request->id, $request->name, 1, $request->price);
        //return redirect('layouts._cart.cart')->withSuccessMessage('Item was added to your cart!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);
         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }
        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('layouts._cart.cart')->withSuccessMessage('Item has been removed!');
    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect('layouts._cart.cart')->withSuccessMessage('Your cart has been cleared!');
    }
}