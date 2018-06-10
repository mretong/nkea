<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarianController extends Controller
{
    public function index()
    {
    	return view('carian.index');
    }

    public function carian(Request $request)
    {
    	
    }
}
