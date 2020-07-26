
      
      @extends('layouts.head');

@section('content')
<div  class="container-fluid mt-4"  >

<div class='row'>
@foreach($hom as $magzine)

<div class="card-group">

                     <div class="card mt-3" style="width: 18rem;">
                         <img src="{{ asset('uploads/Pics/' . $magzine->Image) }}" class="card-img-top"> 
                         <div class="card-body">
                             <h4 class="card-title">{{$magzine->Name}}</h4>  
                             <h6  class="card-text">{{$magzine->Details}}</h6>
                             <h4 class="card-text" ><i class="fa fa-star mr-1" aria-hidden="true"></i>
 {{$magzine->Average}}<i class="fa fa-thumbs-up ml-3" aria-hidden="true"></i>{{$magzine->Likes}} <i class="fa fa-commenting ml-3" aria-hidden="true"></i>
    {{$magzine->Total_reviews}}        </h4>    
                             <h5 class="card-text">{{$magzine->Website}}</h5>

                          </div>
                         <a class="btn btn-primary" href="{{route('adDash')}}" role="button">Rate</a>                         
                     </div>
    </div>
  
  @endforeach
  




@endsection