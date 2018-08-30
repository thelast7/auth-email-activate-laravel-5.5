<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.recipes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = Recipe::findOrFail($id);
        return view('backend.recipes.show', compact('recipes'));
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
        if (! Recipe::destroy($id)) return redirect()->back();
            return redirect()->route('backend.recipes.index');
    }

    public function dataTable()
    {
        $recipes = Recipe::query();
        return DataTables::of($recipes)
            ->addColumn('author', function ($recipes) {
                return $recipes->user->name;
            })
            ->addColumn('action', function ($recipes) {
                return view('backend.partials._action', [
                    'model' => $recipes,
                    'show_url' => route('backend.recipes.show', $recipes->id),
                    'edit_url' => route('backend.recipes.edit', $recipes->id),
                    'delete_url' => route('backend.recipes.destroy', $recipes->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
