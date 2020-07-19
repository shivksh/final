
      
      @extends('layouts.head');

@section('content')
<div  class="container-fluid mt-4"  >

<div class='row'>
@foreach($hom as $magzine)

<div class="col-sm-12 col-lg-3">
                     <div class="card" style="width: 18rem;">
                         <img src="{{ asset('uploads/Pics/' . $magzine->Image) }}" class="card-img-top">
                         
                         <!-- <!-- <div class="card-img-overlay d-flex align-items ">
                                   <h1 class="card-text" ><i class="fa fa-star mr-1" aria-hidden="true"></i>
 {{$magzine->Average}}</h1> -->
                                    <!-- </div> --> 

                                   
                         <div class="card-body">
                             <h4 class="card-title">{{$magzine->Name}}</h4>  
                             <h4 class="card-text" ><i class="fa fa-star mr-1" aria-hidden="true"></i>
 {{$magzine->Average}}<i class="fa fa-thumbs-up ml-3" aria-hidden="true"></i>{{$magzine->Likes}}</h4>
 
                             <h6>{{$magzine->Details}}</h6>
                             <h5 class="card-text">{{$magzine->Website}}</h5>

                             <!-- <button type="button" class="btn btn-warning">Read More</button>
                             <form action="{{route('reviews')}}" method="post">
                             {{csrf_field()}}
                             <input type="text" value="{{$magzine->Name}}" name="mag">
                             <input type="text" value="{{$magzine->Brand_Type}}" name="abc">
                             <input type="text"  name='def'>
                             <div class="form-group mt-4" >
<label for="exampleInputPassword1">Brand Type</label>
<select name="ghi" id="pace" class="ml-4">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="6">7</option>
<option value="6">8</option>
<option value="6">9</option>
<option value="6">10</option>



</select> 
</div>
<input type="submit">

                             </form>
                             <a class="btn btn-primary" href="{{route('edit',$magzine->Id)}}" role="button">Edit</a>
                       <a class="btn btn-primary" href="{{route('delete',$magzine->Id)}}" role="button">Delete</a> -->

                             
                         </div>
                         <a class="btn btn-primary" href="{{route('adDash')}}" role="button">Rate</a>

                         
                     </div>
                     
    </div>

  <hr>
  @endforeach
  




@endsection