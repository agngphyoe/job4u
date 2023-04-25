<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>@yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/img/logo.jpg') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
   </head>

   <body>
    @include('layouts.enduser.header')

    @yield('contents')
    @include('layouts.enduser.footer')

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('assets2/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('assets2/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets2/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('assets2/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets2/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets2/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets2/js/price_rangs.js') }}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('assets2/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets2/js/animated.headline.js') }}"></script>
        <script src="{{ asset('assets2/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('assets2/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('assets2/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('assets2/js/contact.js') }}"></script>
        <script src="{{ asset('assets2/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets2/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets2/js/mail-script.js') }}"></script>
        <script src="{{ asset('assets2/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('assets2/js/plugins.js') }}"></script>
        <script src="{{ asset('assets2/js/main.js') }}"></script>
        
    </body>
</html>