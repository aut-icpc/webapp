@extends('layouts.app')

@section('content')
    <form class="col s12 m12 l12" action="{{ route('app::contest.register_post') }}" method="POST">
    <div id="non-skrollr">
        <div class="row">
            <h3><br>On-Site Contest Registration<br></h3>
            <h5>16th Amirkabir Collegiate Programming Contest - 04 Nov 2016</h5>
            <p>
                Please fill all of the following fields carefully and then press the 'Submit' button to make your team registered.<br>
                If you are willing to just register in online contest, follow <a style="color: #00b0ff;" href="{{ route('app::contest.register.online') }}">this link</a>.
            </p>
            <div class="divider"></div>
            <br>
            <div class="container-fluid">
                    <!-- Team Info -->
                    <div class="row">
                        <h5><i class="material-icons">group</i>Team Information</h5>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="team_name" id="team-name" class="validate">
                            <label for="team-name">Team Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="institute_name" id="institute-name" placeholder="Amirkabir University of Technology" class="validate">
                            <label for="institute-name">Institution</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <select name="site" class="icons">
                                <option value="" disabled selected>Select your site</option>
                                <option value="Tehran" data-icon="{{ URL::asset('img/tehran.png') }}" class="left circle">Tehran</option>
                                <option value="Munich" data-icon="{{ URL::asset('img/munich.png') }}" class="left circle">München</option>
                                <option value="Paris" data-icon="{{ URL::asset('img/paris.jpg') }}" class="left circle">Paris</option>
                                <option value="Madrid" data-icon="{{ URL::asset('img/dots.svg') }}" class="left circle">Another city and so on ...</option>
                            </select>
                            <label>Where the team solves the problems</label>
                        </div>
                    </div>
                    <!-- /Team Info -->

                    <div class="divider"></div>

                    <!-- Member 1 Info -->
                    <div class="row">
                        <h5><i class="material-icons">perm_identity</i> Contestant #1</h5>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[first][first_name]" id="mem1-first-name" class="validate">
                            <label for="mem1-first-name">First Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[first][last_name]" id="mem1-last-name" class="validate">
                            <label for="mem1-last-name">Last Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <select name="members[first][gender]" id="mem1-gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2 m2 l2">
                            <input type="text" name="members[first][student_number]" id="mem1-student-number" class="validate">
                            <label for="mem1-student-number">Student Number</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <select name="members[first][degree]" id="mem1-degree">
                                <option value="" disabled selected>Current educational level</option>
                                <option value="BSc.">BSc.</option>
                                <option value="MSc.">MSc.</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <select name="members[first][t-shirt_size]" id="mem1-size">
                                <option value="" disabled selected>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large">X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <input id="mem1-email" name="members[first][email]" type="email" class="validate">
                            <label for="mem1-email" data-error="Wrong Mail Format" data-success="Correct Mail Format" >Email</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <input id="mem1-phone" name="members[first][phone]" type="tel" class="validate">
                            <label for="mem1-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[first][agreement]" id="mem1-agreement"/>
                            <label for="mem1-agreement">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                        </div>
                    </div>
                    <!-- /Member 1 Info -->

                    <div class="divider"></div>

                    <!-- Member 2 Info -->
                    <div class="row">
                        <h5><i class="material-icons">perm_identity</i> Contestant #2</h5>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[second][first_name]" id="mem2-first-name" class="validate">
                            <label for="mem2-first-name">First Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[second][last_name]" id="mem2-last-name" class="validate">
                            <label for="mem2-last-name">Last Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <select name="members[second][gender]" id="mem2-gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2 m2 l2">
                            <input type="text" name="members[second][student_number]" id="mem2-student-number" class="validate">
                            <label for="mem2-second-name">Student Number</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <select name="members[second][degree]" id="mem2-degree">
                                <option value="" disabled selected>Current educational level</option>
                                <option value="BSc.">BSc.</option>
                                <option value="MSc.">MSc.</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <select name="members[second][t-shirt_size]" id="mem2-size">
                                <option value="" disabled selected>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large">X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <input id="mem2-email" name="members[second][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate">
                            <label for="mem2-email">Email</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <input id="mem2-phone" name="members[second][phone]" type="tel" class="validate">
                            <label for="mem2-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[second][agreement]" id="mem2-agreement"/>
                            <label for="mem2-agreement">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                        </div>
                    </div>
                    <!-- Member 2 Info -->

                    <div class="divider"></div>

                    <!-- Member 3 Info -->
                    <div class="row">
                        <h5><i class="material-icons">perm_identity</i> Contestant #3</h5>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[third][first_name]" id="mem3-first-name" class="validate">
                            <label for="mem3-first-name">First Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <input type="text" name="members[third][last_name]" id="mem3-last-name" class="validate">
                            <label for="mem3-last-name">Last Name</label>
                        </div>
                        <div class="input-field col s4 m4 l4">
                            <select name="members[third][gender]" id="mem3-gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2 m2 l2">
                            <input type="text" name="members[third][student_number]" id="mem3-student-number" class="validate">
                            <label for="mem3-third-name">Student Number</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <select name="members[third][degree]" id="mem3-degree">
                                <option value="" disabled selected>Current educational level</option>
                                <option value="BSc.">BSc.</option>
                                <option value="MSc.">MSc.</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <select name="members[third][t-shirt_size]" id="mem3-size">
                                <option value="" disabled selected>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large">X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <input id="mem3-email" name="members[third][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate">
                            <label for="mem3-email">Email</label>
                        </div>
                        <div class="input-field col s2 m2 l2">
                            <input id="mem3-phone" name="members[third][phone]" type="tel" class="validate">
                            <label for="mem3-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[third][agreement]" id="mem3-agreement"/>
                            <label for="mem3-agreement">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                        </div>
                    </div>
                    <!-- Member 3 Info -->

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