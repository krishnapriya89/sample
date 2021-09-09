<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testcontroller extends Controller
{
     public function viewdata(){
         return view('newsample');
     }
     public function postdata(Request $rq){
        $x=$rq->tnum1;
        $y=$rq->tnum2;
        $z=$x+$y;
        return view('newsample',['data'=>$z]);
    }
    public  function dataaction(){
        return view('first',['name'=>['krishna','akhila','haritha']]);

    }
    public function formdata(){
        $value=DB::table("datatable")->get();
        return view('form',['data'=>$value]);
    }
    public function formfun(Request $req){
        $uname=$req->username;
        $fname=$req->fullname;
       $rt= DB::table("datatable")->insert([
            'username'=>$uname,
            'fullname'=>$fname
        ]);
        if($rt){
            // $value=DB::table("datatable")->get();
            // return view('form',['data'=>$value]);
            return redirect('af');
        
        }else{
            echo "data insertion unsuccessful";
        }


       
    }
}
