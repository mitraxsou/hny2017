<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    //
    public function createAShare(Request $request){

    	$name = 'soumitra';
    	$name = $request->name;

    	return redirect()->route('sharewithid', ['id' => $name]);


    }

    public function createAShareId($id){

    	$name = 'soumitra';
    	$name = $id;

    	return view('share', ['name' => $name]);

    }
}
