<?php

namespace App\Http\Controllers;
use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $url =url('/add');
        $title = "Registration";
        $data = compact('url','title');
        return view('customer')->with($data);
    } 
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        $customer = new CustomerModel;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->save();

        return redirect('/view');

       /* echo"<pre>";
        print_r($request->all());*/
    }
    /* Show data
    public function show(){
        $customers = CustomerModel::all();
        $data = compact('customers');
        // print_r($data);
         return view('show-customer')->with($data);
    } */

    //search
    public function show(Request $request){
        $search = $request["search"] ?? "";
        if($search !=""){
            $customers = CustomerModel::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();            
        }else{
            $customers = CustomerModel::paginate(10);
        }
        $data = compact('customers','search');
        // print_r($data);
         return view('show-customer')->with($data);
    }  
    public function delete($id){
        $res = CustomerModel::find($id)->delete();
        return redirect('view');
        // echo"<pre>";
        // print_r($res);
    } 
    public function edit($id){
        $result = CustomerModel::find($id);
        if(is_null($result)){
            //not found
            return redirect('view');
        }else{
            //found
            $title = "Update customer";
            $url = url('/update')."/".$id;
           $data = compact('result','url','title');
           return view('customer')->with($data); 
        }
    }
    public function update($id, Request $request){
        $result = CustomerModel::find($id);
        $result->name = $request['name'];
        $result->email = $request['email'];
        $result->save();
        return redirect('/view');   
     }
}
