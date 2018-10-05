<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title')@yield('title') &bull; {{ config('app.name', 'Laravel') }} @else{{ config('app.name', 'Laravel') }}@endif</title>
    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app">
            <div id="wrapper">
                    @include('partials.sidebar')
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="container-fluid">
                            @include('partials.top')
                            @include('partials.message')
                            @yield('main')
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->
            
                </div>
                <!-- /#wrapper -->
    </div>


   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function(){
                $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
     <!-- Scripts -->
     @stack('scripts')
</body>
</html>