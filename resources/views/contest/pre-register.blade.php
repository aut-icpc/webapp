@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div id="mainContent" class="container-fluid">

            <h4>16th Amirkabir ACM ICPC Registration</h4>


            <h5>Checking Registration Status</h5>
            <p>
                If you have already registered and want to check your request status click
                <a href="{{ route('app::contest.registered') }}"> here</a>. <br>

                Note: If you see your registered team status is 'Pending' for more than 24 hours check your mail.
                If you have not recieved any mail from group let us know via
                <a href="mailto:ceit.ssc@aut.ac.ir">ceit.ssc@aut.ac.ir</a> <br>
                <center>
                    <a href="{{ route('app::contest.registered') }}">
                        <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Check Registration Status
                            <i class="material-icons right">toc</i>
                        </button>
                    </a>
                </center>
                <br>
            </p>
            <br>

            <h5>New Registration For On-Site Contest</h5>
            <p>
                To participate in the on-site contest please fill out <a href="{{ route('app::contest.register') }}">this</a>
                form completely with total care. Teams which their registration information are incomplete, will <b>NOT</b> be
                accepted to take part.
                <br>

                Participation fees for AUT teams would be 900,000 Rials, and for non-AUT teams 1,200,000 Rials. These
                fees only apply to Iranian contestants and payment information will be sent to teams via their email.<br>
                <center>
                    <a href="{{ route('app::contest.register') }}">
                        <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Register for On-Site Contest
                            <i class="material-icons right">supervisor_account</i>
                        </button>
                    </a>
                </center>
                <br>
            </p>
            <br>

            <h5>New Registration For On-Line Contest</h5>
            <p>
                To participate in the on-line contest, your coach has to register your team via <a href="{{ route('app::contest.register.online') }}">this form</a>.

                Internet contest has no participation fees.

                More details will be announced closer to the contest.

                <center>
                    <a href="{{ route('app::contest.register.online') }}">
                        <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Register for Online Contest
                            <i class="material-icons right">supervisor_account</i>
                        </button>
                    </a>
                </center>
            </p>
            <br>

        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        debugger;
        $('#page-wrap').css('height', 'auto');
    });
</script>
@endpush