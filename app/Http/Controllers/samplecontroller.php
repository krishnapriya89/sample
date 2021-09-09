<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class samplecontroller extends Controller
{
    public function hellodata(){
        return view('newsample');

    }
    public function viewarray(){
        return view('newfirst',['name'=>['krishna','akhila','haritha']]);
        
    }
}

