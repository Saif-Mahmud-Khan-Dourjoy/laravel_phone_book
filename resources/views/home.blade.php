
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Success'))
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>
          {{Session::get('Success')}}
        </p>
      </div>

   @endif
    <div class="row justify-content-center">
    <div class="col-md-4">
   
<ul class="list-group">
  <a href="{{route('form_index')}}"><li class="list-group-item">Add New Contact</li></a>
  <!-- <a href=""><li class="list-group-item">View Contact</li></a> -->
  
</ul>
  
    </div>
    
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    <p>Welcome</p>
                    {{ Auth::user()->name }}
                    </div>
                    {{ __('You are logged in!') }}

                    <div>

                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                            
                            
                            @php
                            
                            $len=sizeof($info);

                            @endphp

                            @if($len>0)
                            @php

                            $i=1;

                            @endphp
                            @foreach($info as $info)
                            <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$info->name}}</td>

                            <td>
                            @foreach($info->number as $num)
                            <div> {{$num->number}}</div>
                            @endforeach
                            </td>

                            <td>{{$info->address}}</td>
                            <td>

                                <a class="btn btn-outline-danger" href="{{route('single_view',$info->id)}}" >Single view</a>
                            </td> 
                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                            
                            @else

                            <tr>
                            <td colspan=5>

                            No Data Found
                            
                            </td>
                            
                            </tr>

                            @endif

                            
                            
                           
                        
                        </tbody>
                        </table>   
                    </div>
                </div>






            </div>
        </div>
    </div>
</div>
@endsection
