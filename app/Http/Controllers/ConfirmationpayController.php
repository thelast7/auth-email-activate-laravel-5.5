<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationpayController extends Controller
{
   public function index()
    {
        return view('layouts._confirmation.confirmation');
    }
}
