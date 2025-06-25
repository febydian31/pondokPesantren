<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta  -->
@include('layouts.admin.meta')
    <!-- sytle  -->
@include('layouts.admin.style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar  -->
        @include('layouts.admin.sidebar')
                <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- navbar  -->
                @include('layouts.admin.navbar')

                @yield('content')
        
    </div>
    <!-- End of Page Wrapper -->

    <!-- footer  -->
    @include('layouts.admin.footer')

    
    <!-- script  -->
    @include('layouts.admin.script')

</body>

</html>  