<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\addcart;
use App\Http\Controllers\crt;
use Hash;

class FinalController extends Controller
{
    //
    public function login()
    {
        return view("login");
    }
    public function admin(){
        return view("admin");
    }
    public function register(Request $request)
    {
       $user = new User();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=Hash::make($request->password);
       $res=$user->save();
       $request->session()->flash('alert-success', 'Resgistration Successful');
       return view("login");
    }
    public function userLogin(Request $request){
        if($request->email=="admin@gmail.com" && $request->password=="admin"){
            return view("admin");
        }
        $user= User::where('email', '=' ,$request->email)->first();
        if($user){
           if(Hash::check($request->password,$user->password)){
            $data = product::paginate(4);
            return view("home",compact('data'));
            }
        }
    }
    public function product()
    {
        $data = product::all();
        return view("product",compact('data'));
    }
    public function cart()
    {
        $crt=addcart::all();
        return view("cart",compact('crt'));
    }
    public function home()
    {
        $data = product::paginate(4);
        return view("home",compact('data'));
    }
    public function contact()
    {
        return view("contact");
    }
    public function uploadProduct(Request $request){
        $data=new product;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();
        return view("admin")->with('message','Product Added');
    }
    public function adminProduct(){
        $data = product::all();
        return view('adminproduct',compact('data'));
    }
    public function deleteproduct($id){
        $data=product::find($id);
        $data->delete();
        $data = product::all();
        return view('adminproduct',compact('data'));
    }
    public function updateproduct($id){
        $data=product::find($id);
        return view('update',compact('data'));
    }
    public function updatesProduct(Request $request,$id){
        $data=product::find($id);
        $image=$request->file;
        if($image){
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();
        $data = product::all();
        return view('adminproduct',compact('data'));
    }
    public function addcart($id){
        $data=product::find($id);
        $crt=new addcart;
        $crt->title=$data->title;
        $crt->description=$data->description;
        $crt->price=$data->price;
        $crt->quantity=1;
        $crt->image=$data->image;
        $crt->save();
        $crt=addcart::all();
        return view("cart",compact('crt'));
    }
    public function purchase($id){
        $data=addcart::find($id);
        $data->delete();
        return view('success');
    }
    public function cancel($id){
        $data=addcart::find($id);
        $data->delete();
        return view('cancel');
    }
}

