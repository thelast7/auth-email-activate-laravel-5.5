<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shipping;
use App\Product;
use Auth;
use Cart;
use Intervention\Image\Facades\Image;

class CheckoutController extends Controller
{
    public $items = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippings = Shipping::where('namee', $namee)->first();
        return view('layouts._account.account', compact('shippings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = Cart::content();
        return view('layouts._order.create', [
            'data' => $cart 
        ]);
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
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'alamatt' => 'required',
        ]);
        $shippings = new Shipping();
        $shippings->user_id = $request->user()->id;
        $shippings->namee = $request->namee;
        $shippings->no_hpp = $request->no_hpp;
        $shippings->kotaa = $request->kotaa;
        $shippings->kecamatan = $request->kecamatan;
        $shippings->kode_pos = $request->kode_pos;
        $shippings->alamatt = $request->alamatt;
        $shippings->items = $this->getItemsArray();

        $shippings->save();
        dd($shippings);
    }

    protected function getItemsArray()
    {
        $cart = Cart::content();
        $items = [];
        foreach ($this->items as $item) {
            $items[] = [
                'id'                     => $cart->product->id,
                'name'                   => $cart->name,
                'price'                  => $cart->price,
                'qty'                    => $cart->qty,
            ];
        }

        return $items;
    }
/**
    public function store(Request $request)
    {
        $this->validate($request, [
            'namee' => 'required',
            'no_hpp' => 'required',
            'kotaa' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'alamatt' => 'required',
        ]);
        $request['user_id'] = $request->user()->id;
        Shipping::create($request->all());

        return redirect()->route('rekening');
    }

    public function confrim(Request $request)
    {
        $this->validate($request, [
            'nama_rek' => 'required',
            'tgl_pay' => 'required',
            'bank' => 'required',
            'bukti' => 'required',
        ]);
        dd($id);
        $product = Product::findOrFail($id);
            if ($request->file('bukti')) {
                $file           = $request->file('bukti');
                $filename       = time().'.'.$file->getClientOriginalExtension();
                $location       = public_path('/photos/bukti');
                $file->resize(800, 500);
                $file->move($location, $filename);
                $shippings->bukti  = $filename;
            }
        $product->update($request->all());
        Cart::destroy();
        $shippings->save();
        return view('layouts._account.account');
    }
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function rekening()
    {
        return view('layouts._rekening.rekening');        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shippings = Shipping::find($id);
        return view('layouts._rekening.rekening');
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
