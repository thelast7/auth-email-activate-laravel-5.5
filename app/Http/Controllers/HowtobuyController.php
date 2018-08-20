<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtobuyController extends Controller
{
    public function index()
    {
     return view('layouts._layanan.howtobuy');
    }
}
