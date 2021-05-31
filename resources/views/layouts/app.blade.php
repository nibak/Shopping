<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>You Wears</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
  <img src="{{ URL::to('/images/logo.png') }}" width="70" height="60" class="d-inline-block align-top" alt="">
</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
              <a href="#"></a>
                 <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         {{ Auth::user()->name }}
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                       </div>
                    </li>

                </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </ul>

      </div>
    </nav>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer bg-light">
          <div class="container">
            <div class="row">
              <div class="col-sm ">
                   <p>Lorem ipsum dolor sit ameton proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
             <div class="col-sm">
              <div id="googleMap" style="width:100%;height:300px; margin:10px"></div>

             </div>
            </div>
            <div class="row">
              <div class="d-flex flex-column">
                <p class="text-muted align-self-center">Copyright 2017.</p>

              </div>
            </div>

          </div>
   </footer>

   <script>
         function myMap() {
         var mapProp= {
           center:new google.maps.LatLng(-45.028911,168.744802),
           zoom:5,
         };
         var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
         }
   </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhsfpB3ly_sxiAYdua8WeGoh9p_r05-uo&callback=myMap"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
