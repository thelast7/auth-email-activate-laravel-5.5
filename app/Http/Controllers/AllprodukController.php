<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllprodukController extends Controller
{
    public function index()
    {
        return view('layouts._product.index');
    }
}
