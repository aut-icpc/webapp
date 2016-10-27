@extends('layouts.app')

@section('parallax')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('img/icpc.png') }}">
        </div>
    </div>
@endsection

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid section">
            <div class="mast">
                <img class="responsive-img" style="width: 60%;" src="{{ asset('img/aut_icpc.png') }}">
                <h1>ACM ICPC</h1>
                <h4>Amirkabir University of Technology</h4>
                16th <b>Amirkabir</b> International Collegiate Programming Contest held at <b>Computer Engineering and IT Department</b> of Amirkabir University of Technology
                <br> <br>
                {{--<h6>Registration links will be available during  <b>October 15th - October 28th</b></h6>--}}
                <br>
                <div class="center" id="time"></div>
                <a href="{{ route('app::contest.pre-register') }}">
                    <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Contest Registration
                        <i class="material-icons right">supervisor_account</i>
                    </button>
                </a>
                <br>
                <br>
                <br>
            </div>
        </div>

        <div class="row" id="details">
            <div class="col s12 m5">
                <div class="card cyan darken-2 white-text waves-effect">
                    <div class="card-content">
                        <span class="card-title">Timings</span>
                        <p>Registration Dates</p>
                        <p style="font-size: 33px;">October 17 - 28, 2016</p>
                        <p style="font-size: 20px;">Registration period for Iranian teams is from October 17 until October 28. Others can registers until October 31st.</p>
                        <hr>
                        <p>Orientation Day (Iranian Teams Only)</p>
                        <p style="font-size: 33px;">November 02, 2016</p>
                        <hr>
                        <p>On-Site Contest</p>
                        <p style="font-size: 33px;">November 04, 2016</p>
                        <p style="font-size: 20px;">10:00:00 (UTC)</p>
                        <hr>
                        <p>On-Line Contest (Delayed)</p>
                        <p style="font-size: 33px;">November 04, 2016</p>
                        <p style="font-size: 20px;">10:30:00 (UTC)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m7">
                <div class="card cyan darken-2 white-text waves-effect">
                    <div class="card-content">
                        <span class="card-title">Important Notes</span>
                        <ol>
                            <li>
                                The contest will be held both online and on-site. However the online contest will be held
                                at least two hours after the on-site contest. There is no limit in the online contest but
                                for registring in the on-site contest, teams must be present at one of the specified sites.
                            </li>
                            <li>
                                Participant teams in on-site contest must have exactly three members in order to be able
                                to participate in a programming contest, but the online contest has no limits.
                            </li>
                            <li>
                                All Iranian team members in on-site contest, are required to be present on November 02, at the Orientation Day.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col s12 m7 center">
                <a href="{{ route('app::contest.registered') }}">
                    <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">View Registered Teams
                        <i class="material-icons right">toc</i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('parallex')
    <div class="parallax-container">
        <div class="parallax"><img src="img/boys.jpg"></div>
    </div>
    <div class="section">
        <div class="row container center cyan-text text-darken-2">
            <h4>Organizers: </h4><br>
            <div class="col s4 m4 l4">
                <a href="https://www.kth.se" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/kth.png') }}">
                </a>
            </div>
            <div class="col s4 m4 l4">
                <a href="http://aut.ac.ir" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/aut.png') }}">
                </a>
            </div>
            <div class="col s4 m4 l4">
                <a href="http://tcs.uj.edu.pl/" target="_blank">
                    <img class="responsive-img" style="width: 150px;" src="{{ asset('img/tcs.png') }}">
                </a>
            </div>
            {{--<div class="col s4 m4 l4">--}}
                {{--<a href="http://aut.ac.ir" target="_blank">--}}
                    {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/aut.png') }}">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col s4 m4 l4">--}}
                {{--<a href="http://tcs.uj.edu.pl/" target="_blank">--}}
                    {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/tcs.png') }}">--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="row container center cyan-text text-darken-2">
            <h4>Event Sponsor: </h4><br>
            <div class="col s3 m3 l3">
            </div>
            <div class="col s6 m6 l6">
                <a href="http://chaapaar.ir/" target="_blank">
                    <img class="responsive-img" style="width: 200px;" src="{{ asset('img/sponsor.png') }}">
                </a>
            </div>
            <div class="col s3 m3 l3">
            </div>
        </div>
        {{--<div class="row container center cyan-text text-darken-2">--}}
            {{--<h4>Contest Sponsors: </h4><br>--}}
        {{--</div>--}}
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/parallax2.jpg"></div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.tabs').tabs();
        $('.parallax').parallax();
    });
</script>
<script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
<script type="text/javascript">
    $('#time').countdown('2016/11/04 13:30:00', function(event) {
        var $this = $(this).html(event.strftime(''
                + '<b><span style="font-size: 100px;" >%D</b>Days </span>'
                + '<b><span style="font-size: 100px;" > - %H</b></span>'
                + '<b><span style="font-size: 100px;" >:%M<b></span>'
                + '<b><span style="font-size: 100px;" >:%S</b></span>'));
    });
</script>
@endpush