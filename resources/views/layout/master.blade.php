<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Tennessee Health Science Center</title>
    <link rel="stylesheet" type="text/css" href="css/uthsc.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400">

    @yield('styles')

    <script src="js/modernizr.js"></script>
</head>

<body>

<header id="uthsc-header">

    @include('layout.partials.banner')

</header>

@yield('content')


@yield('scripts')

</body>
</html>