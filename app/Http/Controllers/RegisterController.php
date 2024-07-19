<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
class RegisterController extends Controller
{
    public function index()
    {
        $registered = Registration::all();
        return view('register.output',compact('registered'));
    }

    public function Create()
    {

        return view('register.create');
    }

    public function Store(Request $request)
    {
        //Validaton
        $request->validate([
            'name'=>'required',
            'f_name'=>'required',
            'address'=>'required',
            'phone_no'=>'required',


        ]);

         $register=new Registration;
         $register->name=$request->name;
         $register->f_name=$request->f_name;
         $register->address=$request->address;
         $register->phone_no=$request->phone_no;
         $register->save();
         return redirect()->route('index');
    }
    public function Edit($id)
    {
        $edit = Registration::FindOrFail($id);
        return view('register.edit',compact('edit'));
    }

 public function Update(Request $request,$id)
 {
     $request->validate([
         'name'=>'required',
         'f_name'=>'required',
         'address'=>'required',
         'phone_no'=>'required',


        ]);
    $edit = Registration::FindOrFail($id);
    $edit->name=$request->name;
    $edit->f_name=$request->f_name;
    $edit->address=$request->address;
    $edit->phone_no=$request->phone_no;
    $edit->save();
    return redirect()->route('index');
 }

 public function Delete($id)
 {
    $register=Registration::find($id);
    $register->delete();
    return back();
 }
}
