<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shipping;
use App\Product;
use App\Order;
use Session;
use Auth;
use Cart;
use Intervention\Image\Facades\Image;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shippings = Shipping::with('order')->get();
        return view('layouts._account.index', compact('shippings', 'order'));
    }

    public function show($id)
    {
        $shippings = Shipping::find($id);
        return view('layouts._account.show', compact('shippings'));
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
        $cart = Cart::content();
        $this->validate($request, [
            'namee' => 'required',
            'no_hpp' => 'required',
            'kotaa' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'alamatt' => 'required',
        ]);
        $shipping = new Shipping();
        $shipping->user_id = $request->user()->id;
        $shipping->namee = $request->namee;
        $shipping->no_hpp = $request->no_hpp;
        $shipping->kotaa = $request->kotaa;
        $shipping->kecamatan = $request->kecamatan;
        $shipping->kode_pos = $request->kode_pos;
        $shipping->alamatt = $request->alamatt;
        //dd($request);
        foreach ($cart as $item)
        {
            $items[] = [
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price, 
            ];
        }
        $shipping->items = $items;
        $shipping->totall = Cart::total();
        $shipping->statuss = 'Belum Bayar';
        $shipping->save();
        //$request->session()->put('shipping_id', $shipping);
        $request->session()->put('shipping_id', $shipping->id);
        Cart::destroy();

        return redirect()->route('rekening');
    }


    public function confirmation()
    {
        return view('layouts._confirmation.create');
    }

    public function saveOrder(Request $request, Shipping $shipping_id)
    {
        $this->validate($request, [
            'nama_rek' => 'required',
            'tgl_pay' => 'required',
            'bank' => 'required',
            'bukti' => 'image|mimes:jpg,jpeg,png|required',
        ]);
        $order = new Order();
        $order->shipping_id = $request->session()->get('shipping_id');
        //dd($request->session()->get('shipping_id'));
        //$order->shipping_id = Session::get('shipping_id', $shipping);

        $order->nama_rek = $request->nama_rek;
        $order->tgl_pay = $request->tgl_pay;
        $order->bank = $request->bank;
        $order->bukti = $request->bukti;
        if ($request->file('bukti')) {
            $file = $request->file('bukti');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path() . '/bukti-pembayaran/' . $filename;
            Image::make($file)->resize(700, 400)->save($location);
            $order->bukti = $filename;
        }
        $order->status_bayar = true;
        $order->save();

        return redirect()->route('account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function rekening()
    {
        return view('layouts._rekening.index');        
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
        return view('layouts._rekening.index');
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
