<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('status', 1)->paginate(2);
        return view('layouts._recipe.index', compact('recipes'));
    }

    public function show($slug)
    {
        $recipes = Recipe::where('slug', $slug)->first();
        return view('layouts._recipe.show', compact('recipes'));
    }
}


