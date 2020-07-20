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
          <img src="logoFile/logo.png" class="logo mr-4"></a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <form class="form-inline my-2 my-lg-0"  type="get" action="{{ url('/magSearch') }}" >
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>        </li>

      </ul>


      
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" style="font-size: larger;font-weight: 600;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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








      
        @yield('content')

        </div>

         </body>

         <footer class="mt-5">
<div class="footer-copyright text-center py-3 -dark bg-dark" style="color:white;position:fixed, bottom:0">© 2020 Copyright:
    <a href="{{url('/')}}">ReviewAdd.com</a>
  </div>
<footer>



</html>