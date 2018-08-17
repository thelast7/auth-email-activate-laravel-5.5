<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Yajra\Datatables\Datatables;

class CategoriesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'name' => 'required|string|min:3|unique:categories'
        ]);
        $request['slug'] = str_slug($request->get('name'), '-');

        Category::create($request->all());

        return redirect()->route('backend.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit', compact('category'));
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
            'name' => 'required|string|min:3|unique:categories,name,' . $id
        ]);
        $request['slug'] = str_slug($request->get('name'), '-');

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('backend.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Category::destroy($id)) return redirect()->back();
        return redirect()->route('backend.categories.index');
    }

    public function dataTable()
    {
        $categories = Category::query();

        return DataTables::of($categories)
            ->addColumn('action', function ($categories) {
                return view('backend.partials._action', [
                    'model' => $categories,
                    'show_url' => route('backend.categories.show', $categories->id),
                    'edit_url' => route('backend.categories.edit', $categories->id),
                    'delete_url' => route('backend.categories.destroy', $categories->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
