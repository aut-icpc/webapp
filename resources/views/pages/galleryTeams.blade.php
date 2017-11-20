<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Images|Teams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />





    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{URL :: asset("gallery/css/animate.css")}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{URL :: asset("gallery/css/icomoon.css")}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL :: asset("gallery/css/bootstrap.css")}}">

    <link rel="stylesheet" href="{{URL :: asset("gallery/css/style.css")}}">
    <!-- this is for telegram icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src="{{URL :: asset("gallery/js/modernizr-2.6.2.min.js")}}"></script>
    <!-- FOR IE9 below -->
<!--[if lt IE 9]>
        <script src="{{URL :: asset("gallery/js/respond.min.js")}}"></script>
	<!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav id="fh5co-main-nav" role="navigation">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
    <div class="js-fullheight fh5co-table">
        <div class="fh5co-table-cell js-fullheight">
            <ul>
                <li>
                    <a href="{{ route('app::index') }}">ICPC at AUT</a>
                </li>
                <li>
                    <a href="{{ route('app::past') }}">Past Results</a></li>
                <li>
                    <a href="{{ route('app::local.history') }}">History</a>
                </li>
                <li>
                    <a href="{{ route('app::general.about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('app::live.feed') }}">Live Blog!</a>
                </li>
                @if(Auth::check())
                    <li>
                        <a href="{{ route('app::admin') }}">Admin Pannel</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div id="fh5co-page" style="background-color: #e0f7fa !important;">

    <div class="container" >

        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>

    </div>

    <div id="fh5co-portfolio-section" style="background-color: #e0f7fa !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>17th Amirkabir International Collegiate Programming Contest</h2>

                </div>
            </div>

            <div id="portfoliolist">
                @for($i= 1 ; $i < 69 ; $i++)
			@if($i != 46)
                <div class="portfolio all logo animate-box" data-cat="logo">
                    <div class="portfolio-wrapper">
                        <a href="{{URL::asset('/Teams/').'/'.$i.'.jpg'}}" <img style = " width: 350px; height: 250px" src="{{URL::asset('/Teams/').'/'.$i.'.jpg'}}" >

                    </div>
                </div>
		@endif
                @endfor

            </div>
        </div>
    </div>

</div>


<!-- jQuery -->
<script src="{{URL :: asset("gallery/js/jquery.min.js")}}"></script>
<!-- jQuery Easing -->
<script src="{{URL :: asset("gallery/js/jquery.easing.1.3.js")}}"></script>
<!-- Bootstrap -->
<script src="{{URL :: asset("gallery/js/bootstrap.min.js")}}"></script>
<!-- Waypoints -->
<script src="{{URL :: asset("gallery/js/jquery.waypoints.min.js")}}"></script>
<!-- Portfolio Filter Mixitup -->
<script type="text/javascript" src="{{URL :: asset("gallery/js/jquery.mixitup.min.js")}}"></script>

<!-- Main JS (Do not remove) -->
<script src="{{URL :: asset("gallery/js/main.js")}}"></script>

<script type="text/javascript">
    $(function () {
        var filterList = {
            init: function () {
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.all'
                    }
                });
            }
        };
        // Run the show!
        filterList.init();
    });
</script>

</body>
</html>
