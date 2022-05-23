<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studContro extends Controller
{
    //
    public function show(){
        return view('students.profile');
    }
}
