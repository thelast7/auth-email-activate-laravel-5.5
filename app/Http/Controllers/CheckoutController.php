<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Shipping;
use App\Product;
use App\Order;
use App\User;
use Session;
use Auth;
use Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shippings = Shipping::with('order')->paginate(5);
        return view('layouts._account.index', compact('shippings', 'order'));
    }

    public function show($id)
    {
        $shippings = Shipping::with('order')->find($id);
        return view('layouts._account.show', compact('shippings'));
    }

    public function create()
    {
        $cart = Cart::content();
        return view('layouts._order.create', [
            'data' => $cart 
        ]);
    }

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
        $shipping->statuss = 'MENUNGGU';
        $shipping->save();
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
        $order->shipping->update(['statuss' => 'DIPROSES']);
        $order->save();

        $request->session()->forget('shipping_id');

        return redirect()->route('account');
    }

    public function edit(Request $request, $id)
    {
        $shippings = Shipping::find($id);
        $request->session()->put('shipping_id', $shippings->id);

        return view('layouts._account.edit');
    }

    public function confirm(Request $request)
    {
        $this->validate($request, [
            'nama_rek' => 'required',
            'tgl_pay' => 'required',
            'bank' => 'required',
            'bukti' => 'image|mimes:jpg,jpeg,png|required',
        ]);

        $order = new Order;
        $order->shipping_id = $request->session()->get('shipping_id');
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
        $order->shipping->update(['statuss' => 'DIPROSES']);
        $order->save();

        $request->session()->forget('shipping_id');

        return redirect()->route('account');
    }

    public function rekening()
    {
        return view('layouts._rekening.index');        
    }
}
