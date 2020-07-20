<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>REVIEW ADDA</title>
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
  



</head>
   <body>
   <div  class="container-fluid" style="margin=0 auto;width:90%" > 
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a   href="{{url('/')}}">
          <img src="logoFile/logo.png" class="logo"></a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
      
      
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" style="font-size: larger;font-weight: 600;">
                                <a id="navbarDropdown"    class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  style="font-size: larger;font-weight: 400;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        
        
      </ul>
      
      </div>
      </nav>
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


<div class="container mt-4" style="margin:0 auto; width:30%;background-color:lightblue">

    <form name="checkup" method="post" action="{{route('addRev')}}">
    {{ csrf_field() }}
    <h1 class="mt-5"><i class="fa fa-star mr-2" aria-hidden="true"></i> {{ $names[0]->Average }}</h1>
    <input id="inpjj" type="hidden" name="abc" value="{{ $names[0]->Brand_Type }}" ><br>

    <div class="form-group mt-4" >
    <label style="font-weight:bold;font-size:larger" for="exampleInputPassword1" >Rate Us</label>
  <select name="ghi" id="pace" style="font-weight:bold;font-size:larger;width:20%"  class="ml-4">
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




    <input id="inp" type="hidden" name="in" ><br>
    <button type="type" name="but" value="1" onclick="rev(); return false" class="btn btn-primary mt-2" ><i class="fa fa-thumbs-up" aria-hidden="true"></i>
 </button>                

    <!-- <button name="but" type='button' value="1" onclick="rev(); return false">click</button> -->
    <input type="text" class="mt-3"  name="def" placeholder ="Add Reviews" style="width:100%; height:50px"> <br>  
    <input type="hidden" name="mag" value="{{ $names[0]->Name }}"><br>
    
    <button type="submit" class="btn btn-primary mt-2" style="width:100%"> Submit Your Review </button>                
    
</form>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        SEE Latest Reviews
                      </th>
                      
                    </thead>
                    <tbody>
   @for($i=0 ; $i < count($names); $i++)

@for($j=count($rate)-1 ; $j >= 0; $j--)

@if(($rate[$j]->Reviews)!=NULL)
 <tr>   
                        <td>
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
{{ $rate[$j]->Reviews }}
                                     </td>

</tr>

@endif
@endfor

@endfor    
                    </tbody>
                  </table>
                 <!-- <a href="{{route('insert')}}"> <button type="button" class="btn btn-primary btn-lg">Register New Brands</button></a> -->

                </div>
              </div>
            </div>
          </div>
        </div> 
    </div>
    <script>
    
    function rev(){
    return document.checkup.in.value=document.checkup.but.value;
}
    
    </script>

         </body>
</html>
























