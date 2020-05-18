<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>{{config('app.name', 'ProJ')}}</title>
 
    </head>
   
</html>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themesflat.com/html/modaz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 13:27:33 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>JMShop</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/animate.css">


    <!-- Favicon and touch icons  -->
    <link href="icon/favicon.png" rel="shortcut icon">


</head> 
    <body class="header_sticky header-style-1 has-menu-extra" >
        @include('navbar.navbar')

            
                @yield('content')
            

        @include('navbar.fooder')


         <script src="../javascript/jquery.min.js"></script>
    <script src="../javascript/tether.min.js"></script>
    <script src="../javascript/bootstrap.min.js"></script> 
    <script src="../javascript/jquery.easing.js"></script>    
    <script src="../javascript/parallax.js"></script>
    <script src="../javascript/jquery-waypoints.js"></script>
    <script src="../javascript/jquery-countTo.js"></script>
    <script src="../javascript/jquery.countdown.js"></script>
    <script src="../javascript/jquery.flexslider-min.js"></script>
    <script src="../javascript/images-loaded.js"></script>
    <script src="../javascript/jquery.isotope.min.js"></script>
    <script src="../javascript/magnific.popup.min.js"></script>
    <script src="../javascript/jquery.hoverdir.js"></script>
    <script src="../javascript/owl.carousel.min.js"></script>
    <script src="../javascript/equalize.min.js"></script>
    <script src="../javascript/gmap3.min.js"></script>
    <script src="../../../maps.googleapis.com/maps/api/js3124?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&amp;region=GB"></script>
    <script src="../javascript/jquery-ui.js"></script>

    <script src="../javascript/jquery.cookie.js"></script>
    <script src="../javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="../rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="../rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
    <script src="../rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../rev-slider/js/extensions/revolution.extension.video.min.js"></script>
    </body>
</html>

