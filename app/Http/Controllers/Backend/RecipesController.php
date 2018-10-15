<?php

namespace App\Http\Controllers\Backend;

use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use File;
use Yajra\Datatables\Datatables;

class RecipesController extends BackendController
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
        $this->validate($request, [
            'name' => 'required|string|min:5|unique:recipes',
            'description' => 'required',
            'status' => 'required',
        ]);

        $recipes = new Recipe();
        $recipes->name = $request->name;
        $recipes->slug = str_slug($request->get('name'), '-');
        $recipes->user_id = $request->user()->id;
        $recipes->description = $request->description;
        $recipes->status = $request->status;

        //save our image
        if ($request->file('cover')) {
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path() . '/foto-recipe/' . $filename;
            Image::make($file)->resize(800, 500)->save($location);
            $recipes->cover = $filename;
        }
        //dd($recipes);
        $recipes->save();
        //SessionHandler
        //For permanent session use Session::put
        //Session::flash is for temporary session

        return redirect()->route('backend.recipes.index')->withSuccess('Konten Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('backend.recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('backend.recipes.edit', compact('recipe'));
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
        $recipes = Recipe::find($id);
        $this->validate($request, [
            'name' => 'required|string|min:5|unique:recipes',
            'description' => 'required',
            'status' => 'required',
        ]);

        $recipes->name = $request->name;
        $recipes->slug = str_slug($request->get('name'), '-');
        $recipes->user_id = $request->user()->id;
        $recipes->description = $request->description;
        $recipes->status = $request->status;

        //save our image
        if ($request->file('cover')) {
            //add new photo
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path() . '/cover-product/' . $filename;
            Image::make($file)->resize(800, 500)->save($location);
            $oldFileName = $recipes->cover;

            //update the database
            $recipes->cover = $filename;

            //delete the old photo
            $path = public_path() . '/foto-recipe/' . $oldFileName;
            File::delete($path);
            // Storage::delete($oldFileName);
        }
        //dd($recipes);
        $recipes->save();
        //SessionHandler
        //For permanent session use Session::put
        //Session::flash is for temporary session

        return redirect()->route('backend.recipes.show', $recipes->id)->withSuccess('Konten Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find the Post
        $recipe = Recipe::find($id);

        // Storage::delete($recipe->cover);
        $path = public_path() . '/foto-recipe/' . $recipe->cover;
        File::delete($path);

        //Delete the recipe
        $recipe->delete();

        return redirect()->route('backend.recipes.index')->withDanger('Konten Berhasil Dihapus!');
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
