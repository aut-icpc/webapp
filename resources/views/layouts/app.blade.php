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
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @stack('styles')

        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body class="cyan lighten-5">
        @include('includes.preloader')
        @include('includes.header')
        <a class="darken-2 scrollToTop btn-floating btn-large waves-effect waves-light cyan">
            <i class="mdi-hardware-keyboard-arrow-up"></i>
        </a>
        <div id="page-wrap">
            <div id="main-content">
                <div id="guts">
                    <div class="container">
                        <div class="wrapper cyan-text text-darken-3">
                            <div id="skrollr-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        @stack('scripts')
    </body>
</html>
