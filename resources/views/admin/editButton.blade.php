<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Brand</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
#main{
  margin:0 auto;
  width:28%;
  height:65vh;
  border-radius:2%;
  background-color:lightblue;
  transition:width .2s;

}

#main:hover{
width:30%;
height:65vh;

}


</style>
</head>
<body>
    

 <div  class="container mt-5" id="main" >   
 <h3 class="mb-4 mt-5 ">Edit Brand</h3>





 @if(count($errors)>0)
  <div class="alert alert-danger">
  <ul>
  
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>  
  @endforeach

  
  </ul>
  </div>
@endif

@if(session('success'))
<div class="alert alert-success">
<h6>{{session('success')}}</h6>
</div>
@endif




 <form class="md-form" action="{{route('upd',$student->Id)}}" enctype="multipart/form-data" method="post">
   {{csrf_field()}}
   {{method_field('PUT')}}

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  value="{{$student->Email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Brand Name</label>
    <input type="text" name="name" value="{{$student->Name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>
  
  <div class="form-group mt-4" >
    <label for="exampleInputPassword1">Brand Type</label>
  <select name="pass" id="pace" class="ml-4">
    <option value="Movies&Entertainment">Movies&Entertainment</option>
    <option value="Magzine&Books">Magzine&Books</option>
    <option value="Bussiness&Entrepreneurship">Bussiness&Entrepreneurship</option>
    <option value="Foods">Foods</option>
    <option value="Fitness&Sports">Fitness&Sports</option>
    <option value="Others">Others</option>


  </select> 
   </div>

  
  

  <input type="file" name="image"  value="{{ $student->Image }}" ><br>
  <input class="btn btn-primary mt-4 mb-3" type="submit" value="Submit">



  
</form>


</div>


</div>
</body>
</html>