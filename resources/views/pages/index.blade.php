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
                18th <b>Amirkabir</b> International Collegiate Programming Contest will be hold at <b>Computer Engineering and IT Department</b> of Amirkabir University of Technology
                <br>
                <b>November 2nd 2018</b>
               {{-- <h6>Registration links will be available during  <b>October 16th - October 28th</b></h6>--}}
                <div class="center" id="time"></div>
                <br>
                {{--  <a href="{{ route('app::past') }}">
                      <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Results and Scoreboard
                          <i class="material-icons right">supervisor_account</i>
                      </button>
                  </a>
                  <br>
              </div>
          </div>

          <div class="row" id="details">
              <div class="col s12 m12 l12">
                  <div class="card cyan darken-2 white-text">

                  </div>
              </div>--}}
               {{-- <div class="col s12 m7">
                    <div class="card cyan darken-2 white-text waves-effect full-width-card">
                        <div class="card-content">
                            <span class="card-title">Timings</span>
                            <p style="font-size: 20px;">Registration Dates</p>
                            <p style="font-size: 33px;">October 16 - 28, 2017</p>
                            <p style="font-size: 15px;">
                                Registration period of On-Site contest for Iranian teams is from October 11 until October 28.<br>
                                Others can register until November 2nd.
                            </p>

                            <hr><br>
                            <p style="font-size: 20px;">Orientation Day (Iranian Teams Only)</p>
                            <p style="font-size: 33px;">November 01, 2017</p>
                            <hr> <br>
                            <p style="font-size: 20px;">On-Site Contest</p>
                            <p style="font-size: 33px;">November 03, 2017</p>
                            <p style="font-size: 15px;">10:00:00 (UTC)</p>
                            <p style="font-size: 15px;">13:30:00 (GMT +3:30 - Iran Standard Time)</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col s12 m7">
                    <div class="card cyan darken-2 white-text waves-effect">
                        <div class="card-content">
                            <span class="card-title">Important Notes</span>-
                            <ol class="text-left">
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
                                    All Iranian team members in on-site contest, are required to be present on November 01, at the Orientation Day.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col s12 m7 center display-flex">
                    <div class="full-width-card card-margin-right">
                        <a href="{{ route('app::contest.registered') }}">
                            <button class="darken-2 waves-effect waves-light btn-large cyan full-width-card" type="button" name="action">View Registered Teams of On-Site Contest
                                <i class="material-icons right">toc</i>
                            </button>
                        </a>
                    </div>
                    <div class="full-width-card card-margin-left">
                        <a href="{{ route('app::online_contest.registered') }}">
                            <button class="darken-2 waves-effect waves-light btn-large cyan full-width-card" type="button" name="action">View Registered Teams of On-Line Contest
                                <i class="material-icons right">toc</i>
                            </button>
                        </a>
                    </div>--}}

                </div>
            </div>
        </div>
        @endsection

        @section('parallex')
            <div class="parallax-container">
                <div class="parallax"><img src="img/boys.jpg"></div>
            </div>
            <div class="section">
                {{--<div class="row container center cyan-text text-darken-2">--}}
                    {{--<h4>Organizers: </h4><br>--}}
                    {{--<div class="col s4 m4 l4">--}}
                        {{--<a href="https://www.kth.se" target="_blank">--}}
                            {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/kth.png') }}">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="center col s4 m4 l4">--}}
                        {{--<a href="http://aut.ac.ir" target="_blank">--}}
                            {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/aut.png') }}">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col s4 m4 l4">--}}
                        {{--<br>--}}

                        {{--<a href="https://www.tum.de/en/" target="_blank">--}}
                            {{--<img class="responsive-img" style="width: 150px;" src="{{ asset('img/T--LMU-TUM_Munich--tum-logo.jpg ') }}">--}}
                        {{--</a>--}}
                    {{--</div--}}


               {{-- </div>--}}
                {{--<div class="row container center cyan-text text-darken-2">--}}
                    {{--<h4>Event Sponsor: </h4><br>--}}
                    {{--<div class="col s3 m3 l3">--}}
                    {{--</div>--}}
                    {{--<div class="col s6 m6 l6">--}}
                        {{--<a href="http://asanpardakht.ir" target="_blank">--}}
                            {{--<img class="responsive-img" style="width: 200px;" src="{{ asset('img/sponsor.png') }}">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col s3 m3 l3">--}}
                    {{--</div>--}}
                {{--</div>--}}
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
    {{--<script type="text/javascript">--}}
    {{--$('#time').countdown('2016/11/17 13:30:00', function(event) {--}}
    {{--var $this = $(this).html(event.strftime(''--}}
    {{--+ '<b><span style="font-size: 100px;" >%D</b>Days </span>'--}}
    {{--+ '<b><span style="font-size: 100px;" > - %H</b></span>'--}}
    {{--+ '<b><span style="font-size: 100px;" >:%M<b></span>'--}}
    {{--+ '<b><span style="font-size: 100px;" >:%S</b></span>'));--}}
    {{--});--}}
    {{--</script>--}}
    @endpush
