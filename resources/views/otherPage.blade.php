      
@extends('layouts.head');

@section('content')
<div  class="container-fluid mt-4" style="margin=0 auto;width:90%" >
<div class='row'>
@foreach($other as $data)

<div class="col-sm-12 col-lg-3">
                <div class="card" style="width: 18rem;">
                   <img src="{{ asset('uploads/Pics/' . $data->Image) }}" class="card-img-top">
                   <div class="card-body">
                      <h4 class="card-title">{{$data->Name}}</h4>
                      <p class="card-text">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                      <button type="button" class="btn btn-warning">Read More</button>
                      
                   </div>
                   
                </div>
                
   </div>

  <hr>
  @endforeach
  




@endsection