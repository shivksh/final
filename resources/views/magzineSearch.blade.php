
      
      @extends('layouts.adminLayout');

@section('content')
<div  class="container-fluid mt-4" >

<div class='row'>
@foreach($result as $magzine)

<div class="col-sm-12 col-lg-3">
                     <div class="card" >
                         <img src="{{ asset('uploads/Pics/' . $magzine->Image) }}" class="card-img-top">

                         <div class="card-body">
                             <h4 class="card-title">{{$magzine->Name}}</h4>
               <h6 class="card-text">{{$magzine->Details}}</h6>

                             <h3 class="card-text"><i class="fa fa-star mr-2" aria-hidden="true"></i>{{$magzine->Average}}
                             <i class="fa fa-thumbs-up ml-3" aria-hidden="true"></i>{{$magzine->Likes}}  <i class="fa fa-commenting ml-3" aria-hidden="true"></i>
{{$magzine->Total_reviews}}  </h3>


                             <form action="{{route('reviews')}}" method="post" name="checkup">
                             {{csrf_field()}}
                             <input type="hidden"  value="{{$magzine->Name}}" name="mag">
                             <input type="hidden" value="{{$magzine->Brand_Type}}" name="abc">
           <div class="form-group mt-4" >
<label style="font-weight:bold;font-size:larger" for="exampleInputPassword1" >Rate</label>
<select name="ghi" id="pace" style="font-weight:bold;font-size:larger"  class="ml-4">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>



</select> 
</div>
<button type="submit" class="btn btn-primary" style="width:100%"> Submit Rating</button>


                             </form>
                                  <a class="btn btn-primary" href="{{url('/review',$magzine->Name)}}" role="button" style="width:100%">See All Reviews</a>	
                         </div>
                         
                     </div>
                     
    </div>
   
  <hr>
  @endforeach






@endsection
