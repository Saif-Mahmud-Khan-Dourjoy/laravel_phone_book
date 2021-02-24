<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Info!</title>
  </head>
  <body>
  @include('pages.nav')
  <h2 class="my-2 text-info font-weight-bold text-center">Add Contact</h2>
  <!-- <div class="container d-flex ">
  <div class="ml-auto">
  <a href="{{route('home')}}" class="btn btn-outline-info"> Go To Home</a>
  </div>
  </div> -->

  <div class="container">
  @include('pages.msg')
  <form method="post" action="{{route('form_add')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" aria-describedby="NameHelp" placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <input type="text" class="form-control" id="exampleInputAddress1" name="address" aria-describedby="AddressHelp" placeholder="Enter Address">
   
  </div>
  
                <div class="new_field form-group">
                <p>Phone Number :</p>
                    <div" class="my-3">
                        <input style="width:95%; display:inline;float:left;" type="number" class="form-control"  name="phone[]"  placeholder="Enter Phone Number" value=""/>
                        <a href="javascript:void(0);" class="new_button"><i class="fas fa-plus-circle text-info fa-2x"></i></a>
                    </div>
                </div>
                <div class="text-center">
                <button type="submit" style="width:50%" class="btn btn-primary ">Submit</button>
                </div>
  
</form>
  </div>

  <script type="text/javascript">
$(document).ready(function(){
  
  var newField = '<div class="my-4"><input style="width:95%; display:inline;float:left;" type="text" class="form-control" placeholder="Enter Phone Number"  name="phone[]" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fas fa-minus-circle text-danger fa-2x"></i></a></div>'; 
   
    $('.new_button').click(function(){
        
            $('.new_field').append(newField); 
    }); 
    $('.new_field').on('click', '.remove_button', function(){
     
        $(this).parent('div').remove();
    });
});
</script>


    
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>