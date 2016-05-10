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

<header id="uthsc-header">

    @include('layout.partials.site-nav')
    @include('layout.partials.banner')

</header>

@yield('content')

<footer>

</footer>

<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/foundation.js"></script>
<script type="text/javascript" src="/assets/js/uthsc.js"></script>

@yield('scripts')

</body>
</html>