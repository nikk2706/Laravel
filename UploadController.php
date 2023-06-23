<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }
    public function upload(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $filename = time()."-myimg.".$request->file("MyImage")->getClientOriginalExtension();
        echo $request->file("MyImage")->storeAs('UploadedImage',$filename);
        // echo $request->file("MyImage")->store('UploadedImage');
    }
}
