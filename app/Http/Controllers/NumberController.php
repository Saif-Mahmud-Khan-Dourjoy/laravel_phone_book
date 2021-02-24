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

   public function all_del($id){
       $info=info::where('id',$id)->delete();
       $number=number::where('person_id',$id)->delete();
       if(!is_null($info)&&!is_null($number)){
        Session::flash('del','Successfully Delated');
      
        return redirect()->route('home');
       }
   }

   public function single_del($id){
    $number=number::where('id',$id)->delete();
    if(!is_null($number)){
        Session::flash('del','Successfully Delated');
      
        return redirect()->back();
       }

   }

   public function number_update(Request $request, $id){

    
                $this->validate($request,[
                    'phone'=>'required|unique:numbers,number', 
                ]);

                $number =number::find($id);

               
                $number->number=$request->phone;

                $number->save();
                Session::flash('Success','Successfully Updated');

                return redirect()->back();
                }
    public function add_new_number(Request $request,$id){
        $this->validate($request,[
            'phone.*'=>'required|unique:numbers,number',  
      ]);
      $phone=$request->phone;
    if (count($request->phone) > 0) {
      $i=0;
        foreach ($request->phone as $phone) {

          $this->validate($request,[
            'phone.'.$i=>'required|unique:numbers,number',  
           ]);

           $i++;
             
      $number= new number;
      $number->number=$phone;
      $number->person_id=$id;

      $number->save();

        }
    }
      
      Session::flash('Success','Successfully Added');
      
      return redirect()->route('home');

    }            

    }
   

