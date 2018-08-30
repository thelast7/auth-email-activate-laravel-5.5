<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Shipping;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.orders.create');
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
            'order_id' => 'required',
            'namee' => 'required',
            'no_hpp' => 'required',
            'kotaa' => 'required',
            'alamat' => 'required'
            //'price' => 'required|string|min:4',
            //'quantity' => 'required|string|max:3',
            //'review' => 'required'
        ]);
        $request['order_id'] = $request->user()->id;

        Shipping::create($request->all());

        return redirect()->route('backend.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipping = Shipping::findOrFail($id);
        return view('backend.orders.show', compact('shipping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipping = Shipping::findOrFail($id);
        return view('backend.orders.edit', compact('shipping'));
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
        if (! Shipping::destroy($id)) return redirect()->back();
            return redirect()->route('backend.orders.index');
    }

    public function dataTable()
    {
        $shippings = Shipping::query();
        return DataTables::of($shippings)
            ->addColumn('pembeli', function ($shippings) {
                return $shippings->user->name;
            })
            //>addColumn('no_shipping', function ($shippings) {
              //  return $shippings->id;
            //})
            ->addColumn('action', function ($shippings) {
                return view('backend.partials._action', [
                    'model' => $shippings,
                    'show_url' => route('backend.orders.show', $shippings->id),
                    'edit_url' => route('backend.orders.edit', $shippings->id),
                    'delete_url' => route('backend.orders.destroy', $shippings->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
