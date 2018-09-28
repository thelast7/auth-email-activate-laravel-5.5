<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use File;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ProductsController extends BackendController
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
            'category_id' => 'required',
            'name' => 'required|string|min:5|unique:products',
            'description' => 'required',
            'status' => 'required',
            'cover' => 'image|mimes:jpg,jpeg,png|required',
            //'price' => 'required|string|min:4',
            //'quantity' => 'required|string|max:3',
            //'review' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->get('name'), '-');
        $product->user_id = $request->user()->id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->cover = $request->cover;

        //save our image
        if ($request->file('cover')) {
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path() . '/cover-product/' . $filename;
            Image::make($file)->resize(500, 500)->save($location);
            $product->cover = $filename;
        }
        //dd($product);
        $product->save();
        //SessionHandler
        //For permanent session use Session::put
        //Session::flash is for temporary session

        return redirect()->route('backend.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //Grab the product and Save the data to database
        $product = Product::find($id);
        //Validate the data
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|string|min:5|unique:products,name,' . $id,
            'description' => 'required',
            'status' => 'required',
        ]);
        $product->name = $request->name;
        $product->slug  = str_slug($request->get('name'), '-');
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;

        //save our image
        if ($request->file('cover')) {
            //add new photo
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path() . '/cover-product/' . $filename;
            Image::make($file)->resize(500, 400)->save($location);
            $oldFileName = $product->cover;

            //update the database
            $product->cover = $filename;

            //delete the old photo
            $path = public_path() . '/cover-product/' . $oldFileName;
            File::delete($path);
            // Storage::delete($oldFileName);
        }

        $product->save();
        //set flash data with success Message
        //Session::flash('success', 'product successfully updated.');

        //redirect with flash data to products.show
        return redirect()->route('backend.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find the Post
        $product = Product::find($id);

        // Storage::delete($product->cover);
        $path = public_path() . '/cover-product/' . $product->cover;
        File::delete($path);

        //Delete the product
        $product->delete();

        return redirect()->route('backend.products.index');
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
