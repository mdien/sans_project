<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $first = $request->first_name;
        $duo = $request->last_name;
        $name = $first." ".$duo;
        return view('welcome',compact('name'));
    }
}
