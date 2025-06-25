<!doctype html>
<html lang="en">
  <head>
    <!-- style  -->
    @include('layouts.auth.style')
    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <img class="bg order-1 order-md-2" src="{{ asset('images/gambar-3.jpg') }}" alt="">
    <div class="contents order-2 order-md-1">

        @yield('content')
    </div>

    
  </div>
    
    <!-- script  -->
    @include('layouts.auth.script')
  </body>
</html>