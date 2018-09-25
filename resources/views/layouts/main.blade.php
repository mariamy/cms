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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app" class="page">
    	<div class="d-flex">
    		@include('partials.sidebar')
        	<div class="main col-md-10">
        		@include('partials.top')
        		<div class="p-2">
                    @include('partials.message')
           		   @yield('main')
           		</div>
       		</div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
     <!-- Scripts -->
     @stack('scripts')
</body>
</html>