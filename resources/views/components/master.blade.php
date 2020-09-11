<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Blog - B4 Template by Bootstrap Temple</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9e89e3dc89.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- theme stylesheet-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet" id="theme-stylesheet">
    @yield('head')
    @yield('style')
  </head>
  <body>
    @include('layouts._nav')    

    <div class="container">

      @include('components._alert')

      <div class="row">
        <!-- Latest Posts -->
        {{ $slot }}

        @yield("aside")
      </div>
    </div>

    <!-- Page Footer-->
    @include('layouts._footer')

    {{-- Script --}}
    <script>
        // Get the current year for the copyright
        $("#year").text(new Date().getFullYear());
    </script>
    <!-- JavaScript files-->
    @yield('extra-js')
  </body>
</html>