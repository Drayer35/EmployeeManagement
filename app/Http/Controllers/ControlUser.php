<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlUser extends Controller
{
    public function login(){
        return view('Login');
    }
}
