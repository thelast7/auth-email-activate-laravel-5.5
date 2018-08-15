<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1);
        return view('layouts._home.index', compact('products'));
    }
}
