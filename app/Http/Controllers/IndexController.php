<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::where('status', 1)->limit(10)->get();
        return view('layouts._home.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $products = Product::where('slug', $slug)->first();
        return view('layouts._home.show', compact('products'));
    }

    public function all_product()
    {
        $products = Product::where('status', 1)->limit(10)->get();
        return view('layouts._product.index', compact('products'));
    }
}
