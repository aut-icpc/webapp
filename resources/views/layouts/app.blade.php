<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="The Official AUT ACM ICPC website">

        <!-- Title -->
        <title>ICPC at AUT</title>

        <!-- Global Styles -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.min.css') }}" media="screen,projection" />
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @stack('styles')
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body class="cyan lighten-5">
        @include('includes.preloader')
        @include('includes.header')
        <a class="darken-2 scrollToTop btn-floating btn-large waves-effect waves-light cyan">
            <i class="material-icons">expand_less</i>
        </a>
        {{--@yield('parallax')--}}
        <div id="page-wrap" style="height: auto !important;">
            <div class="container">
                <div class="wrapper cyan-text text-darken-3">
                    <div id="skrollr-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @yield('parallex')
        @include('includes.footer')

        <!-- Global Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.nicescroll.plus.js') }}"></script>
        <script src="{{ URL::asset('js/velocity.min.js') }}"></script>
        <script src="{{ URL::asset('js/skrollr.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.scrolline.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-85608253-1', 'auto');
            ga('send', 'pageview');

        </script>
        @stack('scripts')
    </body>
</html>
