<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajeroController extends Controller
{
    public function cajerovista()
    {
        return view('cajero');
    }
}
