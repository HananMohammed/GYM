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
<!--Chat Section-->
    <!--Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--Floating WhatsApp javascript-->
    <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

</head>
<body>
@include('front.include.navbar')
<div class="main-wrapper">
@yield('content')
    <div id="WAButton"></div>
    @include('front.include.footer')
</div>
<!--
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
{{--<script src="{{asset_public('front/plugins/jquery/jquery.js')}}"></script>--}}
<!-- Bootstrap 4.3.1 -->
<script src="{{asset_public('front/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--  Magnific Popup-->
<script src="{{asset_public('front/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<!-- Form Validator -->
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>--}}
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset_public('front/plugins/google-map/gmap.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset_public('front/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset_public('front/js/script.js')}}"></script>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#WAButton').floatingWhatsApp({
            phone: '+201201611733', //WhatsApp Business phone number
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            position: "right" //Position: left | right

        });
    });
</script>
@yield('scripts')
</body>

</html>
