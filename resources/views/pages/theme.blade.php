@extends('layout.master')

@section('styles')
<style>
    /*custom styles here*/
</style>
@endsection

@section('content')

<!-- Hero Image-->
<div class="hero hero-one"></div>
<!-- Page Heading-->
<div class="row">
    <div class="large-12 columns">
        <h1>Welcome to Laravel for UTHSC</h1>
    </div>
</div>

<!--Content Row 1-->
<div class="row">
    <div class="large-12 columns content-area">
        <h3>Congratulations!</h3>
        <p>If you're reading this, you're all set to build an amazing UTHSC application in Laravel, complete with CAS authentication and Foundation right out of the box</p>
        <p>So you've made it this far, now what?</p>
    </div>
</div>

<hr>

<div class="row">

    <div class="large-12 columns">
        <h4>Getting Started with Laravel</h4>
        <p>Laravel is an MVC framework written in PHP with a focus on convention over configuration</p>

        <ul>
            <li><p>Check out the routes in <code>/app/Http/routes.php</code> to see <a href="https://laravel.com/docs/5.2/routing">how Laravel routes requests</a>.</p></li>
            <li><p>Check out some boilerplate templates in <code>/resources/views</code> to get a feel for the <a href="https://laravel.com/docs/5.2/blade">blade templating engine.</a></p></li>
            <li><p>Browse the <code>/Database</code> directory and take a look at <code>/config/database.php</code> to see <a href="https://laravel.com/docs/5.2/database">how Laravel interacts with the database</a></p></li>
            <li><p>Look through the <code>/tests</code> directory to see how easy it is to <a href="https://laravel.com/docs/5.2/testing">write tests for Laravel</a> with phpunit</p></li>
            <li><p><a href="https://laravel.com/docs/5.2">Read the docs.</a>  The Laravel documentation is clean and simple and will have you building powerful applications in no time.</p></li>
        </ul>
    </div>

    <hr>

    <div class="large-12 columns">
    <h4>Getting Started with Foundation</h4>

    <p>This project comes with a customized version of Foundation, "The most advanced responsive front-end framework in the world"</p>

    <p>Foundation, includes a bunch of components you can use to build great looking mobile-first, responsive, accessible interfaces</p>
    <p>Learn More:</p>

    <ul>
        <li><p>Check out the <a href="http://foundation.zurb.com/sites/docs/">foundation docs</a> to learn about all of the components and see detailed examples of how to use them</p></li>
        <li><p>Unleash the power of <a href="http://foundation.zurb.com/sites/docs/grid.html">Foundation's grid system</a></p></li>
        <li><p>Thanks to<a href="http://fortawesome.github.io/Font-Awesome/"> Fontawesome&nbsp;<i class="fa fa-flag"></i></a> we can use these handy icons anywhere. Here's an example of a<a href=""> pdf link&nbsp;<i class="fa fa-file-pdf-o"></i></a>.</p></li>
        <li><p>Browse through <code>/resources/assets</code> and check out <code>gulpfile.js</code> to get an idea of how the public assets are built</p></li>

    </ul>
    </div>
</div>

<hr>

<!-- Content Row 2-->
<div class="row content-area">
    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>
        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button secondary radius">Apply Now&ensp;<i class="fa fa-graduation-cap"></i></a>
    </div>
    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>
        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button radius">Academic Calendar&ensp;<i class="fa fa-calendar"></i></a>
    </div>
    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>
        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button radius">Get Directions&ensp;<i class="fa fa-map-marker"></i></a>
    </div>
</div>


@endsection