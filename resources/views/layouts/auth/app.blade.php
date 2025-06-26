<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('layouts.auth.meta')


    @include('layouts.auth.style')

    <title>{{ $title }}</title>
</head>

<body>
    <div class="d-lg-flex half">
        @yield('content')
    </div>

    @include('layouts.auth.script')
</body>

</html>
