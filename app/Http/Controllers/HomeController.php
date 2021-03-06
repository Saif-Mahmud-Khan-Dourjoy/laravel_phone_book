<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use App\number;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {     
          $id=Auth::user()->id;
          $info=info::where('added_by',$id)->get();

          return view('home',compact('info'));
        
 
    }
}
