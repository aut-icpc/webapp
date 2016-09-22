@extends('layouts.app')

@section('content')
    <form class="col s12 m12 l12" action="{{ route('app::contest.register.online_post') }}">
    <div id="non-skrollr">

        <div class="row">
            <h3><br>Online Contest Registration<br></h3>
            <h5>16th Amirkabir Collegiate Programming Contest - 04 Nov 2016</h5>
            <p>
                If you are willing to register in On-Site contest, follow <a style="color: #00b0ff;" href="{{ route('app::contest.register') }}">this link</a>.
            </p>
            <div class="container-fluid">
                    <div class="divider"></div>

                    <!-- Contestant Info -->
                    <div class="row">
                        <h5><i class="material-icons">perm_identity</i> Contestant Information</h5>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="first_name" id="mem1-first-name" class="validate">
                            <label for="mem1-first-name">First Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="last_name" id="mem1-last-name" class="validate">
                            <label for="mem1-last-name">Last Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <select name="gender" id="mem1-gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="institute_name" id="institute-name" placeholder="Amirkabir University of Technology" class="validate">
                            <label for="institute-name">Institution</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <input type="text" name="student_number" id="mem1-student-number" class="validate">
                            <label for="mem1-student-number">Student Number</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <select name="degree" id="mem1-degree">
                                <option value="" disabled selected>Current educational level</option>
                                <option value="BSc.">BSc.</option>
                                <option value="MSc.">MSc.</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <input id="mem1-email" name="email" type="email" class="validate">
                            <label for="mem1-email" data-error="Wrong Mail Format" data-success="Correct Mail Format" >Email</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <input id="mem1-phone" name="phone" type="tel" class="validate">
                            <label for="mem1-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[first][agreement]" id="mem1-agreement"/>
                            <label for="mem1-agreement">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                        </div>
                    </div>
                    <!-- /Member 1 Info -->

                    <div class="divider"></div>

                    <div class="row center">
                        {{--<div class="g-recaptcha col s12 m12 l12 center" data-sitekey="6LeP_ikTAAAAAPu_EgFICSpE6FCKrPkhiYtkVZX-"></div>--}}
                        <div class="input-field col s12 m12 l12">
                            <button class="btn waves-effect waves-light btn-large cyan" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@endpush