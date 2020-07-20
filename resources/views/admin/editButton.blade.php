@extends('layouts.insertLayout');
  
@section('content');


    

 <div  class="container mt-5" id="main" >   
 <h3 class="mb-4 mt-5 ">Update  Brand</h3>





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
<div class="form-group">
    <label for="exampleInputEmail1">Brand Email</label>
    <input type="email" name="email" value="{{$student->Email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Brand Name</label>
    <input type="text" name="name" value="{{$student->Name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CEO </label>
    <input type="text" name="ceo" value="{{$student->CEO}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Company Contact</label>
    <input type="text" name="phone" value="{{$student->Contact}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input type="text" name="details" value="{{$student->Details}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Website</label>
    <input type="text" name="website" value="{{$student->Website}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>


  <div class="form-group mt-4" >
    <label for="exampleInputPassword1">Brand Type</label>
  <select name="pass" value="{{$student->Brand_Type}}"  id="pace" class="ml-4">
    <option value="Movies&Entertainment">Movies&Entertainment</option>
    <option value="Magzine&Books">Magzine&Books</option>
    <option value="Bussiness&Entrepreneurship">Bussiness&Entrepreneurship</option>
    <option value="Foods">Foods</option>
    <option value="Fitness&Sports">Fitness&Sports</option>
    <option value="Others">Others</option>


  </select> 
   </div>

  
  

  <input type="file" name="image" value="{{$student->Image}}" ><br>
  <input class="btn btn-primary mt-4 mb-3" type="submit" value="Submit">



  
</form>


</div>


</div>
@endsection