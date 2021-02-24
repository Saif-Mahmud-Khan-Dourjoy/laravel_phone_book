<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Info!</title>
  </head>
  <body>
  @include('pages.nav')

  <h2 class="my-2 text-info font-weight-bold text-center">Record of {{$data->name}}</h2>
  
  <div class="container my-2">
  @include('pages.msg')
  </div>
  <div class="container ">
  
 
            <div class="border ">
                <div class="row m-1 bg-info">
                    <div class="col-8"><h4 class="text-light">Basic Info</h4></div>
                    <div class="col-4 text-right"><a class="text-light btn btn-success"  data-toggle="modal" href="#editModal{{$data->id}}">Edit</a></h4></div>
                </div>

              <!-- modal -->
              <div class="modal fade" id="editModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <form method="post" action="{{route('form_update',$data->id)}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" value='{{$data->name}}' class="form-control" id="exampleInputName1" name="name" aria-describedby="NameHelp" placeholder="Enter Name">
            
            </div>
            <div class="form-group">
              <label for="exampleInputAddress1">Address</label>
              <input type="text" class="form-control" value='{{$data->address}}' id="exampleInputAddress1" name="address" aria-describedby="AddressHelp" placeholder="Enter Address">
            
            </div>

            <div class="text-center">
                <button type="submit" style="width:50%" class="btn btn-primary ">Submit</button>
                </div>
  
          </form>
          
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><p>Name : <p><p>{{ $data->name }}</p></li>
                        <li class="list-group-item"><p>Address : <p><p>{{ $data->address }}</p></li>
                    </ul>
                </div>
            </div>

            <div class="border ">
                <div class="row m-1 bg-warning">
                    <div class="col-8"><h4 class="text-light">Phone Number</h4></div>
                    
                </div>

                <div>
                    <ul class="list-group list-group-flush d-flex">
                    @foreach ($data->number as $num)
                        <li class="list-group-item"> <div class="row">
                        <div class="col-md-8">
                        <strong class="mr-5">{{$num->number }}</strong>
                        
                        </div>
                        <div class="col-md-4 text-right">
                        <a class=" btn btn-outline-success" data-toggle="modal" href="#editnumModal{{$num->id}}">Edit</a>
                        <a class=" btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{route('single_del',$num->id)}}">Delete</a>
                         
                         
                      <div class="modal fade" id="editnumModal{{$num->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Number</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form method="post" action="{{route('number_update',$num->id)}}">
                            @csrf
                            
                            <div class="form-group">
                            
                              <input type="number" class="form-control" value='{{$num->number}}' id="exampleInputAddress1" name="phone" aria-describedby="AddressHelp" placeholder="Enter Number">
                            
                            </div>

                            <div class="text-center">
                                <button type="submit" style="width:50%" class="btn btn-primary ">Submit</button>
                                </div>
                  
                          </form>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                        </div></div> </li>

                    @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="container text-center mt-2">
        <a data-toggle="modal" href="#addNewNumModal{{$data->id}}" class="btn btn-outline-info">Add New Number</a>
        </div>
 
        
      <div class="modal fade" id="addNewNumModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Number</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('add_new_number',$data->id)}}" method="post">
              {{csrf_field()}}
              <div class="new_field form-group">
                <p>Phone Number :</p>
                    <div" class="my-3">
                        <input style="width:80%; display:inline;float:left;" type="number" class="form-control"  name="phone[]"  placeholder="Enter Phone Number" value=""/>
                        <a href="javascript:void(0);" class="new_button"><i class="fas fa-plus-circle text-info fa-2x"></i></a>
                    </div>
                </div>
                <div class="text-center">
                <button type="submit" style="width:50%" class="btn btn-primary ">Submit</button>
                </div>

            </form>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
$(document).ready(function(){
  
  var newField = '<div class="my-4"><input style="width:80%; display:inline;float:left;" type="text" class="form-control" placeholder="Enter Phone Number"  name="phone[]" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fas fa-minus-circle text-danger fa-2x"></i></a></div>'; 
   
    $('.new_button').click(function(){
        
            $('.new_field').append(newField); 
    }); 
    $('.new_field').on('click', '.remove_button', function(){
     
        $(this).parent('div').remove();
    });
});
</script>
   
  



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>