<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="{{ asset('frontend/assets/fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/fonts/elegant-fonts.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css">

    <title> YeniteStudio </title>

    @stack('css')
</head>

<body>

<div class="page-wrapper">

    <div class="loading-overlay"></div>

    @include("frontend.common.nav")

    @yield("content")
    @yield("offScreenContent")

</div>
<!--end page-wrapper-->

<!-- Modal -->
<div class="modal fade" id="modal-blog" tabindex="-1" role="dialog" aria-labelledby="modal-blog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <iframe data-src="blog.html"></iframe>
        </div>
    </div>
</div>
<!--end modal-->

<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-2.2.1.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function ($) {
        "use strict";
    });

    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "frontend/assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";
    google.maps.event.addDomListener(window, "load", simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));

</script>

@stack('js')

</body>