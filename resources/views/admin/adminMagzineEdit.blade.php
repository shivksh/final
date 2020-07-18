
      
      @extends('layouts.adminLayout');

@section('content')
<div  class="container-fluid mt-4" style="margin=0 auto;width:90%" >
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
<h1>{{session('success')}}</h1>
</div>
@endif

<div class='row'>
@foreach($mag as $magzine)

<div class="col-sm-12 col-lg-3">
                     <div class="card" style="width: 18rem;">
                         <img src="{{ asset('uploads/Pics/' . $magzine->Image) }}" class="card-img-top">
                         <div class="card-body">
                             <h4 class="card-title">{{$magzine->Name}}</h4>
                             <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                             <a class="btn btn-primary" href=""  role="button">See More</a>
                             <a class="btn btn-primary" href="{{route('edit',$magzine->Id)}}" role="button">Edit</a>
                             <a class="btn btn-primary" href="{{route('delete',$magzine->Id)}}" role="button">Delete</a>

                             
                         </div>
                         
                     </div>
                     
    </div>

  
  @endforeach
  <hr>
  




@endsection