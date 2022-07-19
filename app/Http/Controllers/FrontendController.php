<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class FrontendController extends Controller
{
public  function index()
{
    return view('layouts.login');
}
public  function add()
{
    return view('add');
}
public  function insert(Request $request)
{
   $students=new students;
   $students->firstname= $request['firstname'];
   $students->lastname= $request['lastname'];
   $students->dob= $request['dob'];
   $students->gender= $request['gender'];
   $students->email= $request['email'];
   $students->phone= $request['phone'];
   $students->save();
  
   return redirect('list');
   
}

public function list()

{
    $students=students::get();
    $data= compact('students');
    return view('list',($data));
}
public function  delete($id)
    {
        $students=students::where('id','=',$id)->delete();
       
        return redirect()->back();
    }
    public function edit(Request $request,$id) 
    {
        $students=students::find($id);
        return view ('edit',compact('students'));
   }
   public function update(Request $request,$id) 
   {
    $students=students::find($id);
    $students->firstname= $request['firstname'];
    $students->lastname= $request['lastname'];
    $students->dob= $request['dob'];
    $students->gender= $request['gender'];
    $students->email= $request['email'];
    $students->phone= $request['phone'];
    $students->update();
    return redirect('list')->with('status',"Data Update Successfully");


   }

}
