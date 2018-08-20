<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->limit(4)->get();
        return view('layouts._home.index', compact('products'));
    }
}
