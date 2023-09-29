<!DOCTYPE HTML>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Rex — Clean & Minimal Portfolio HTML5 Template | Blog Classic</title>

    <!-- ============ Google Fonts ============ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">


    <!-- CSS -->
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/flexslider.css')}}">
    <!-- Font-Awesome 6 PRO-->
    <link rel="stylesheet" href="{{asset('assets/fonts/all.min.css')}}" />
    <!-- LightCase -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/lightcase.css')}}">
    <!-- SlickNav -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/slicknav.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/cubeportfolio.min.css')}}">
    <!-- Custom styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

</head>

<body>


<script type='text/javascript'>var words = ["LOADING", "PORTFOLIO", "MODERN", "MINIMAL", "CLEAN"];</script>

<!-- LOADER TEMPLATE -->
<div class="page-loader">
    <div class="text-loader">
        <div class="right">
            <h4 class="randoms"></h4>
            <h1 class="randoms"></h1>
            <h4 class="randoms"></h4>
        </div>
        <div class="left">
            <h4 class="randoms"></h4>
            <h1 class="randoms"></h1>
            <h4 class="randoms"></h4>
        </div>
    </div>
</div>
<!-- /LOADER TEMPLATE -->


@include('partials.header')

@yield('blog.content')
@yield('blog.single')

@include('partials.footer')

<!-- Javascript files -->
<!-- jQuery -->
<script src="{{asset('assets/js/plugins/jquery-1.12.4.min.js')}}"></script>
<!-- Modernizr -->
<script src="{{asset('assets/js/plugins/modernizr.js')}}"></script>
<!-- jQuery.appear -->
<script src="{{asset('assets/js/plugins/jquery.appear.js')}}"></script>
<!-- Lettering -->
<script src="{{asset('assets/js/plugins/lettering.js')}}"></script>
<!-- Textillate -->
<script src="{{asset('assets/js/plugins/textillate.js')}}"></script>
<!-- Wow -->
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<!-- Jarallax -->
<script src="{{asset('assets/js/plugins/jarallax.js')}}"></script>
<!-- Lightcase -->
<script src="{{asset('assets/js/plugins/lightcase.js')}}"></script>
<!-- Skills bar -->
<script src="{{asset('assets/js/plugins/skills-bar.js')}}"></script>
<!-- Slick Nav -->
<script src="{{asset('assets/js/plugins/slick-nav.js')}}"></script>
<!-- Flex Slider -->
<script src="{{asset('assets/js/plugins/flexslider.js')}}"></script>
<!-- Images Loaded -->
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<!-- Isotope -->
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<!-- Sticky Plugin -->
<script src="{{asset('assets/js/plugins/jquery.sticky.js')}}"></script>
<!-- Cube Portfolio -->
<script src="{{asset('assets/js/plugins/jquery.cubeportfolio.min.js')}}"></script>
<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV1KS10sb3O462XosfZTKohHJwi6C0joo"></script>
<!-- Custom -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
