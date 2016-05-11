<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Tennessee Health Science Center</title>
    <link rel="stylesheet" type="text/css" href="assets/css/uthsc.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400">

    @yield('styles')

</head>

<body>

<!--******************-->
<!--Off canvas wrapper-->
<!--******************-->
<div id="uthsc-off-canvas-wrapper" class="uthsc-off-canvas-wrapper">

@include('layout.partials.site-nav')
@include('layout.partials.banner')

@yield('content')

@include('layout.partials.footer')

</div>
<!--*******************-->
<!--/Off canvas wrapper-->
<!--*******************-->

@include('layout.partials.off-canvas.left-menu')
@include('layout.partials.off-canvas.right-menu')
@include('layout.partials.off-canvas.mask')
@include('layout.partials.off-canvas.buttons')

<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/foundation.js"></script>
<script type="text/javascript" src="/assets/js/uthsc.js"></script>

@yield('scripts')

</body>
</html>