<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer',[CustomerController::class,'index']);
Route::post('/add',[CustomerController::class,'store']);
Route::get('/view',[CustomerController::class,'show']);
Route::get('/delete/{id}',[CustomerController::class,'delete']);
Route::get('/edit/{id}',[CustomerController::class,'edit']);
Route::post('/update/{id}',[CustomerController::class,'update']);

// session handling
Route::get('/get-all-session',function(){
    $session = session()->all();
    echo"<pre>";
    print_r($session);
});

Route::get('/set-session',function(Request $request){
    $request->session()->put('UName','Nikunj');
    $request->session()->put('Passwd','123');
    $request->session()->flash('Status','SUCCESS');
    return redirect('get-all-session');
});

Route::get('/destroy-session',function(){
    session()->forget('UName');
    session()->forget('Passwd');
    return redirect('get-all-session');

});


//file upload

// Route::get('/upload',function(){
//     return view('upload');
// });
Route::get('/upload',[UploadController::class,'index']);
Route::post('/upload',[UploadController::class,'upload']);