<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllproductController extends Controller
{
    public function index()
    {
     return view('layouts._product.index');
    }
}