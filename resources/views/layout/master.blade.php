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

@include('layout.partials.off-canvas-nav')
<header id="uthsc-header">

    @include('layout.partials.banner')

</header>

@yield('content')

    <footer>
        @include('layout.partials.top-footer')
        @include('layout.partials.bottom-footer')
    </footer>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uthsc.foundation.min.js"></script>
<script type="text/javascript">
    (function ($) {
        $(document).foundation({
                    "magellan-expedition": {
                        active_class: 'gellin' // specify the class used for active sections
                    }
                }
        );
    })(jQuery);
</script>
<script type="text/javascript">$(document).foundation('equalizer', 'reflow');</script>

@yield('scripts')

</body>
</html>