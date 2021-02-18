<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add New!</title>
  </head>
  <body>
  <h2 class="my-2 text-info font-weight-bold text-center">Add New  Number</h2>
  <div class="container d-flex ">
  <div class="ml-auto">
  <a href="{{route('home')}}" class="btn btn-outline-info"> Go To Home</a>
  </div>
  </div>

  <div class="container">@include('pages.msg')</div>
  
  <div class="container d-flex justify-content-center ">
  
  <div class="card p-5">
  <form method="post" action="{{route('new_con_store',$data->id)}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <!-- <input type="text" class="form-control" id="exampleInputName1" value name="name" aria-describedby="NameHelp" placeholder="Enter Name"> -->
    <h6>{{$data->name}}</h3>
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <!-- <input type="text" class="form-control" id="exampleInputAddress1" name="address" aria-describedby="AddressHelp" placeholder="Enter Name">
    -->
    <h6>{{$data->address}}</h3>
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Previous Phone Number</label>
    <!-- <input type="text" class="form-control" id="exampleInputAddress1" name="address" aria-describedby="AddressHelp" placeholder="Enter Name">
    -->
    @foreach($data->number as $num)
    <h6>{{$num->number}}</h3>
    @endforeach

  </div>
  <div class="form-group">
    <label for="exampleInputPhone1"> New Phone Number</label>
    <input type="number" class="form-control" id="exampleInputPhone1" name="phone" aria-describedby="PhoneHelp" placeholder="Enter Name">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
  </div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>