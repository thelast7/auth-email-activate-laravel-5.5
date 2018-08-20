<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
   public function index()
    {
        return view('layouts._contactus.index');
    }
}
