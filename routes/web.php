<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\samplecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('welcome');
});
Route::view('sam','sample');
Route::get('sum',function(Request $request){
    $a=$request->text1;
    $b=$request->tx2;
    $c=$a+$b;
    return $c;

});
Route::post('postsum',function(Request $request){
    $a=$request->text1;
    $b=$request->tx2;
    $c=$a+$b;
    return view('sample',['sum'=>$c]);
});
Route::view('alpha','newsample');
Route::get('sum',function(Request $rq){
    $x=$rq->tnum1;
    $y=$rq->tnum2;
    $z=$x+$y;
    return $z;
});
Route::post('new',function(Request $rq){
    $x=$rq->tnum1;
    $y=$rq->tnum2;
    $z=$x+$y;
    return view('newsample',['sum'=>$z]);
});
Route::get('beta',[testcontroller::class,'viewdata']);
Route::post('gama',[testcontroller::class,'postdata']);
Route ::get('tera',[testcontroller::class,'dataaction']);
Route::get('a1',[samplecontroller::class,'hellodata']);
Route::get('a2',[samplecontroller::class,'viewarray']);
Route::view('yield','yieldpage');
Route::get('af',[testcontroller::class,'formdata']);
Route::post('af',[testcontroller::class,'formfun']);