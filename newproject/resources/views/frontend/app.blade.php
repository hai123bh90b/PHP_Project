<!doctype html>
<html lang="zxx">


<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Food Bakery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/smartmenus.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

</head>

<body class="home">

    <div class="ritekhana-wrapper">

        <!--// Header //-->
        @include('frontend.header')
        <!--// Header //-->
        
        <!--// Banner //-->
       @include('frontend.banner')
        <!--// Banner //-->

        <!--// Content //-->
         @yield('content') 
        
        <!--// Content //-->

        <!--// Footer //-->
        @include('frontend.footer')
        <!--// Footer //-->

    </div>


    <!-- jQuery -->
    <script src="{{ asset('frontend/script/jquery.js') }}"></script>
    <script src="{{ asset('frontend/script/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/script/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/script/slick.slider.min.js') }}"></script>
    <script src="{{ asset('frontend/script/fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/script/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/script/smartmenus.min.js') }}"></script>
    <script src="{{ asset('frontend/script/progressbar.js') }}"></script>
    <script src="{{ asset('frontend/script/selectize.min.js') }}"></script>
    <script src="{{ asset('frontend/script/functions.js') }}"></script>
</body>


</html>