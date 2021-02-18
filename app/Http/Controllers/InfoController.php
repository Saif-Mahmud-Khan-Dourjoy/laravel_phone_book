<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\info;
use App\number;
use Auth;
use Session;

class InfoController extends Controller
{
    public function index(){
         
         return view('pages.info_form');
    }

    public function store(Request $request){

       
        $this->validate($request,[
            'name' => 'required|max:150',
            'address' => 'required|max:255',
            'phone'=>'required|max:20',  
      ],

      [
          'name.required'=>'Please Provide a Name',
          'address.required'=>'Please Provide a Address',
          'phone.required'=>'Please Provide a Phone number',
          

      ]);

      $info = new info;

      $phone=$request->phone;

      $info->name=$request->name;
      $info->address=$request->address;
      $info->added_by= Auth::user()->id;
      $info->save();
      
      $number= new number;
      $number->number=$phone;
      $number->person_id=$info->id;

      $number->save();
      
      Session::flash('Success','Successfully Added');
      
      return redirect()->route('home');
    }
}