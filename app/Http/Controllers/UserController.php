<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index(){
       return view('about');
    }
    function show($id){
        return "Hello $id" ;
    }

}

