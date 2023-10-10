<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlEmployee extends Controller
{
    public function admin(){
        return view('FormAdmin');
    }

    public function recordEmployee(){
        return view('FormRecordEmployee');
    }
    public function assistEmployee(){
        return view('FormAssists');
    }
    public function store(Request $request){
        return $request->all();
    }

    public function register(){
        return view('FormEmployee');
    }

    
}
