<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;
use App\Daerah;
use Validator;
use Session;

class WilayahController extends Controller
{
    public function index()
    {
    	$territorys = Wilayah::paginate(10);

    	return view('wilayah.index', compact('territorys'));
    }

    public function create() {

        $district = Daerah::pluck('nama','id');
    	return view('wilayah.create',compact('district'));
    }

    public function createPost(Request $request) {

    	$validation = Validator::make($request->all(), [
    		'nama'	=> 'required|min:3',
    		'kod'	=> 'required|min:3'
    	]);

    	if($validation->fails()) {
    		return redirect()->route('members.wilayah.create')
    			->withErrors($validation)
    			->withInputs();
    	}

    	$state = Negeri::create([
    			'nama'	=> strtoupper($request->get('nama')),
    			'kod'	=> strtoupper($request->get('kod'))
    		]);

    	if($state) 
    		Session::flash('message', 'Berjaya. Data telah ditambah.');
    	else
    		Session::flash('message', 'Gagal. Data gagal ditambah.');

    	return redirect()->route('members.negeri.index');

    }

    public function hapus($id) {

    	$state = Negeri::findOrFail($id)->delete();

    	// delete jugak daerah
    	$daerah = Daerah::where('negeri_id', $id)->delete();


    	if($state)
    		Session::flash('message', 'Berjaya. Data telah dihapus.');
    	else
    		Session::flash('message', 'Gagal. Data gagal dihapus.');


    	return redirect()->route('members.negeri.index');
    }
}