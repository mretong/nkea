<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blok;
use App\Lot;

use Session;
use Validator;

class CarianController extends Controller
{
    public function index()
    {
    	$blok = Blok::pluck('nama','id');
    	$lot = Lot::pluck('no_lot','id');
    	
    	return view('carian.index',compact('blok','lot'));
    }

    public function carian(Request $request)
    {

    }
}
