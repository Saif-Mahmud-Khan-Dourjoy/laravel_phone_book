
@extends('layouts.app')

@include('pages.nav')

@section('content')
<div class="container">
 @include('pages.msg')
    <div class="row justify-content-center">
    <div class="col-md-2">
   
<ul class="list-group">
  <a href="{{route('form_index')}}"><li class="list-group-item">Add New Contact</li></a>
  <!-- <a href=""><li class="list-group-item">View Contact</li></a> -->
  
</ul>
  
    </div>
    
        <div class="col-md-10">

            <div class="card">
                <div class="card-header" style="margin:auto; border:2px solid black; border-radius:5px; font-weight:bold" >{{ __('Dashboard') }}</div>

               
                

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

                                <a class="btn btn-outline-info" href="{{route('single_view',$info->id)}}" >Single view</a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{route('all_del',$info->id)}}" >Delete</a>
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
