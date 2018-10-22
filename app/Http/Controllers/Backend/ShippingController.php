<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Shipping;
use App\Order;
use File;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => 'destroy']);
        $this->middleware('role:admin,author,penjual', ['only' => ['index', 'show', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippings = Shipping::with('order')->get();
        return view ('backend.shippings.index', compact('shippings', 'order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shippings = Shipping::with('order')->findOrFail($id);
        return view('backend.shippings.show', compact('shippings', 'order'));
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
        $this->validate($request, [
            'statuss' => 'required',
        ]);
        $shippings = Shipping::with('order')->findOrFail($id);
        $shippings->statuss = $request->statuss;

        $shippings->save();

        return back();
    }

    public function destroy($id)
    {
        $shippings = Shipping::find($id);

        $path = public_path() . '/bukti-pembayaran/' . $shippings->bukti;
        File::delete($path);

        $shippings->delete();

        return redirect()->route('backend.shippings.index');
    }

    public function dataTable()
    {
        $shippings = Shipping::query();
        return DataTables::of($shippings)
            ->addColumn('pembeli', function ($shippings) {
                return $shippings->user->name;
            })
            ->addColumn('action', function ($shippings) {
                return view('backend.partials._change', [
                    'model' => $shippings,
                    'show_url' => route('backend.shippings.show', $shippings->id),
                    'delete_url' => route('backend.shippings.destroy', $shippings->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
