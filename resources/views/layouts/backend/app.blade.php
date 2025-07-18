<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.backend.meta')

    <title>{{ $title }}</title>

    @include('layouts.backend.style')

</head>

<body id="page-top">
    <div id="wrapper">
        @include('layouts.backend.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.backend.navbar')

                <div class="container-fluid">
                    @include('layouts.backend.toast')
                    @yield('content')
                </div>
            </div>

            @include('layouts.backend.footer')
        </div>
    </div>


    @stack('prepend-script')

    @include('layouts.backend.script')

    @stack('addon-script')

</body>

</html>
