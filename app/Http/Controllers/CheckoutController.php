<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shipping;
use Auth;
use Cart;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts._order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namee' => 'required',
            'no_hpp' => 'required',
            'kotaa' => 'required',
            'alamatt' => 'required',
        ]);
        $shippings = New Shipping;
        $shippings->user_id = Auth::user()->id;
        $shippings->namee = $request->namee;
        $shippings->no_hpp = $request->no_hpp;
        $shippings->kotaa = $request->kotaa;
        $shippings->alamatt = $request->alamatt;
        $shippings->totall = Cart::total();
        $shippings->save();
        return redirect()->route('rekening');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
