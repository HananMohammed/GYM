<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">
    <meta name="author" content="Themefisher.com">
    <title>GymFit|@yield('title')</title>
    <link rel="icon" type="image/jpg" sizes="32x32" href="{{asset_public('front/images/logo.jpg')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/icofont/icofont.min.css')}}">
    <!-- Themify Css -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/themify/css/themify-icons.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/animate-css/animate.css')}}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset_public('front/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset_public('front/plugins/slick-carousel/slick/slick-theme.css')}}">
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    @endif
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset_public('front/css/style.css')}}">

        @yield('styles')
</head>
<body>
@include('front.include.navbar')
<div class="main-wrapper">
@yield('content')
@include('front.include.footer')
</div>
<!--
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="{{asset_public('front/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{asset_public('front/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--  Magnific Popup-->
<script src="{{asset_public('front/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<!-- Form Validator -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset_public('front/plugins/google-map/gmap.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset_public('front/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset_public('front/js/script.js')}}"></script>
@yield('scripts')
</body>

</html>
