<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.meta')

    <title>{{ $title }}</title>

    @include('layouts.frontend.style')

</head>

<body class="index-page">
    @include('layouts.frontend.navbar')

    <main class="main">
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    @include('layouts.frontend.script')
</body>

</html>
