<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;
use DB;
class ShareController extends Controller
{
    // this url is going to hit with a post request from localhost
    public function createAShare(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            ]);
            $name = $request->name; //setting name to pass it to the createAShareId ($name, Request $request) method using return redirect()->route('sharewithid', ['name' => $name]); // sharewithid is named for handling get request for /share/{name}

        	return redirect()->route('sharewithid', ['name' => $name, 'request'=>$request]);
        
    }

    public function createAShareId($name, Request $request){

            if ($request->is('share/style.css')) {
                //
                return view('share', ['name' => $name]);
            }
            $start_time=microtime(true);
            $share= new Share;
            $share->url= request()->fullurl();
            $share->ip=request()->ip();
            $end_time=microtime(true);
            $share->querytime=$end_time - $start_time;
            $share->save();
    	    $this->name = $name;
            
            //dd($share);
    	   return view('share', ['name' => $name]);

    }
}
