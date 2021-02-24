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
            'phone.*'=>'required|unique:numbers,number',  
      ],

      [
          'name.required'=>'Please Provide a Name',
          'address.required'=>'Please Provide a Address',
         
          

      ]);

      $info = new info;

      $phone=$request->phone;

      $info->name=$request->name;
      $info->address=$request->address;
      $info->added_by= Auth::user()->id;
      $info->save();


    

    


    if (count($request->phone) > 0) {
      $i=0;
        foreach ($request->phone as $phone) {

          $this->validate($request,[
            'phone.'.$i=>'required|unique:numbers,number',  
           ]);

           $i++;
             
      $number= new number;
      $number->number=$phone;
      $number->person_id=$info->id;

      $number->save();

        }
    }
      
      Session::flash('Success','Successfully Added');
      
      return redirect()->route('home');
    }
    public function form_update(Request $request, $id){
      $this->validate($request,[
        'name' => 'required|max:150',
        'address' => 'required|max:255',
      

  ],

  [
    'name.required'=>'Please Provide a Name',
    'address.required'=>'Please Provide a Address',

  ]);

  $info =info::find($id);

  $info->name=$request->name;
  $info->address=$request->address;

  $info->save();
Session::flash('Success','Successfully Updated');

  return redirect()->back();
    }
}