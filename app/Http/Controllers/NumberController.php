<?php

namespace App\Http\Controllers;
use App\info;
use App\number;
use Session;

use Illuminate\Http\Request;

class NumberController extends Controller
{

    public function index($id){

        $single_view=info::find($id);

        return view('pages.single_view')->with('data',$single_view);

        // echo $single_view;

        
    }

    public function show($id){
        $add_new=info::find($id);

        return view('pages.add_new_num')->with('data',$add_new);

    }

    public function store($id, Request  $request){

        $this->validate($request,[
            
            'phone'=>'required|max:20',  
      ],

      [
         
          'phone.required'=>'Please Provide a Phone number',
          

      ]);

      $num = new number;

      

      $num->number=$request->phone;
      $num->person_id=$id;
      $num->save();
      
      Session::flash('Success','Successfully Added');
      
      return redirect()->route('home');
    }
    }
   

