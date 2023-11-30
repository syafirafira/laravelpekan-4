<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function welcome(Request $request)
    {
        $fnama = $request["fnama"];
        $lnama = $request["lnama"];
        return  compact(['fnama' ,'lnama'] );
    }
}
