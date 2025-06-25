<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta  -->
  @include('layouts.meta')

  <!-- style  -->
  @include('layouts.style')
</head>

<body class="index-page">
  <!-- navbar  -->
  @include('layouts.navbar')

  @yield('content')



  <!-- footer  -->
  @include('layouts.footer')

  <!-- script  -->
  @include('layouts.script')

</body>

</html>