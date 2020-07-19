
      
      @extends('layouts.adminLayout');

      @section('content')
      <div  class="container-fluid mt-4" >
	  
      <div class='row'>
      @foreach($mag as $magzine)

      <div class="col-sm-12 col-lg-3">
      		 			<div class="card" style="width: 18rem;">
      		 				<img src="{{ asset('uploads/Pics/' . $magzine->Image) }}" class="card-img-top">

      		 				<div class="card-body">
      		 					<h2 class="card-title">{{$magzine->Name}}</h2>
      		 					<p class="card-text">{{$magzine->Details}}</p>
								   <h1 class="card-text"><i class="fa fa-star mr-2" aria-hidden="true"></i>{{$magzine->Average}}
								   <i class="fa fa-thumbs-up ml-3" aria-hidden="true"></i>{{$magzine->Likes}}</h1>


								   <form action="{{route('reviews')}}" method="post" name="checkup">
								   {{csrf_field()}}
								   <input type="hidden"  value="{{$magzine->Name}}" name="mag">
								   <input type="hidden" value="{{$magzine->Brand_Type}}" name="abc">
								   <!-- <input type="text"  name='def'> -->
								   <!-- <a class="btn btn-primary"role="button">Reviews</a> -->

								   <!-- <input id="inp" type="text" name="in">
    <button name="but" value="1" type="button" onclick="rev();">click</button> -->
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
								   	 <a class="btn btn-primary" href="{{url('/review',$magzine->Name)}}" role="button" style="width:100%">Reviews</a>
								   <!-- <a class="btn btn-primary" href="{{route('edit',$magzine->Id)}}" role="button">Edit</a>
                             <a class="btn btn-primary" href="{{route('delete',$magzine->Id)}}" role="button">Delete</a> -->

      		 					
      		 				</div>
      		 				
      		 			</div>
      		 			
      	</div>
		 
        <hr>
        @endforeach




      
      
@endsection
