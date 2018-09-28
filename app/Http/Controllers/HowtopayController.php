<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtopayController extends Controller
{
    public function index()
    {
     return view('layouts._layanan.howtopay');
    }
}
