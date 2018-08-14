<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
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
            //'category_id' => 'required',
            //'name' => 'required|string|min:5|unique:products',
            //'description' => 'required',
            'status' => 'required',
            //'price' => 'required|string|min:4',
            //'quantity' => 'required|string|max:3',
            //'review' => 'required'
        ]);
        $request['slug'] = str_slug($request->get('name'), '-');
        $request['user_id'] = $request->user()->id;

        Product::create($request->all());

        return redirect()->route('backend.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function dataTable()
    {
        $products = Product::query();
        return DataTables::of($products)
            ->addColumn('penjual', function ($products) {
                return $products->user->name;
            })
            ->addColumn('category', function ($products) {
                return $products->category->name;
            })
            ->addColumn('action', function ($products) {
                return view('backend.partials._action', [
                    'model' => $products,
                    'show_url' => route('backend.products.show', $products->id),
                    'edit_url' => route('backend.products.edit', $products->id),
                    'delete_url' => route('backend.products.destroy', $products->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
