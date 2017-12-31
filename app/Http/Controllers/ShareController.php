<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    //
    public function createAShare(Request $request){

    	$name = $request->name;

    	return view('welcome', ['name' => $name]);

    }
}
