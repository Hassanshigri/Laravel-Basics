<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bcontroller extends Controller
{
    //
    function getData(Request $req)
    {
        return $req->input();
    }



    function loadView()
    {
        return view("btemp");
    }
}
