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




 <form class="md-form" action="{{route('userUpdate',$student->id)}}" enctype="multipart/form-data" method="post">
   {{csrf_field()}}
<div class="form-group">
    <label for="exampleInputEmail1">User Mail</label>
    <input type="email" name="email" value="{{$student->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>

  

  <div class="form-group">
    <label for="exampleInputEmail1">User Contact</label>
    <input type="text" name="phone" value="{{$student->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
  </div>
  

  

  
  

  <input class="btn btn-primary mt-4 mb-3" type="submit" value="Submit">



  
</form>


</div>


</div>
@endsection