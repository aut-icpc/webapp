@extends('layouts.app')

@section('content')
    <form name="onsite_register" class="col s12 m12 l12" action="{{ route('app::contest.register_post') }}" method="POST">
        {{ csrf_field() }}
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
                            <select name="site" class="icons" onchange="changeCountry(this);">
                                <option value="" disabled>Select your country</option>
                                <option value="Iran" data-icon="{{ URL::asset('img/iran.png') }}" class="left circle" selected>Iran</option>
                                <option value="Sweden" data-icon="{{ URL::asset('img/sweden.png') }}" class="left circle">Sweden</option>
                                <option value="Poland" data-icon="{{ URL::asset('img/poland.png') }}" class="left circle">Poland</option>
                                <option value="Other" data-icon="{{ URL::asset('img/dots.svg') }}" class="left circle">Other</option>
                            </select>
                            <label>Country</label>
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
                                <option value="" disabled>Gender</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 m2 l2" id="mem1-student-number-wrapper">
                            <input type="text" name="members[first][student_number]" id="mem1-student-number" class="validate">
                            <label for="mem1-student-number">Student Number</label>
                        </div>
                        <div class="input-field col s4 m3 l3">
                            <select name="members[first][degree]" id="mem1-degree">
                                <option value="" disabled>Current educational level</option>
                                <option value="BSc." selected>Undergraduate (BSc.)</option>
                                <option value="MSc.">Graduate (MSc.)</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s4 m2 l2" id="mem1-size-wrapper">
                            <select name="members[first][t-shirt_size]" id="mem1-size">
                                <option value="" disabled>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large" selected>X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input id="mem1-email" name="members[first][email]" type="email" class="validate">
                            <label for="mem1-email">Email</label>
                        </div>
                        <div class="input-field col s6 m2 l2">
                            <input id="mem1-phone" name="members[first][phone]" type="tel" class="validate">
                            <label for="mem1-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[first][agreement]" id="mem1-agreement" onchange="validateThis(this);"/>
                            <label for="mem1-agreement" id="mem1-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
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
                                <option value="" disabled>Gender</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 m2 l2" id="mem2-student-number-wrapper">
                            <input type="text" name="members[second][student_number]" id="mem2-student-number" class="validate">
                            <label for="mem2-second-name">Student Number</label>
                        </div>
                        <div class="input-field col s4 m3 l3">
                            <select name="members[second][degree]" id="mem2-degree">
                                <option value="" disabled>Current educational level</option>
                                <option value="BSc." selected>Undergraduate (BSc.)</option>
                                <option value="MSc.">Graduate (MSc.)</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s4 m2 l2" id="mem2-size-wrapper">
                            <select name="members[second][t-shirt_size]" id="mem2-size">
                                <option value="" disabled>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large" selected>X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input id="mem2-email" name="members[second][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate">
                            <label for="mem2-email">Email</label>
                        </div>
                        <div class="input-field col s6 m2 l2">
                            <input id="mem2-phone" name="members[second][phone]" type="tel" class="validate">
                            <label for="mem2-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[second][agreement]" id="mem2-agreement" onchange="validateThis(this);"/>
                            <label for="mem2-agreement" id="mem2-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
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
                                <option value="" disabled>Gender</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 m2 l2" id="mem3-student-number-wrapper">
                            <input type="text" name="members[third][student_number]" id="mem3-student-number" class="validate">
                            <label for="mem3-third-name">Student Number</label>
                        </div>
                        <div class="input-field col s4 m3 l3">
                            <select name="members[third][degree]" id="mem3-degree">
                                <option value="" disabled>Current educational level</option>
                                <option value="BSc." selected>Undergraduate (BSc.)</option>
                                <option value="MSc.">Graduate (MSc.)</option>
                            </select>
                            <label>Current Educational Level</label>
                        </div>
                        <div class="input-field col s4 m2 l2" id="mem3-size-wrapper">
                            <select name="members[third][t-shirt_size]" id="mem3-size">
                                <option value="" disabled>Select Size</option>
                                <option value="3X Large">3X Large</option>
                                <option value="2X Large">2X Large</option>
                                <option value="X Large" selected>X Large</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
                            <label>T-Shirt Size</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input id="mem3-email" name="members[third][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate">
                            <label for="mem3-email">Email</label>
                        </div>
                        <div class="input-field col s6 m2 l2">
                            <input id="mem3-phone" name="members[third][phone]" type="tel" class="validate">
                            <label for="mem3-phone">Phone Number</label>
                        </div>
                        <div class="input-field col s12 m12 l12 center">
                            <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[third][agreement]" id="mem3-agreement" onchange="validateThis(this);"/>
                            <label for="mem3-agreement" id="mem3-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                        </div>
                    </div>
                    <!-- Member 3 Info -->

                    <div class="divider"></div>

                    <div class="row center">
                        {{--<div class="g-recaptcha col s12 m12 l12 center" data-sitekey="6LeP_ikTAAAAAPu_EgFICSpE6FCKrPkhiYtkVZX-"></div>--}}
                        <center>
                            <div class="input-field col s12 m12 l12 ">
                                <div class="g-recaptcha" data-sitekey="6LfEJgkUAAAAAOVMfzDA_6E2Mw4jMtjYadVy5upA"></div>
                            </div>
                        </center>
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
    <script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });

        var constraints = [
            // Team Information
            {
                name: 'team_name',
                display: 'Team Name',
                rules: 'required'
            },
            {
                name: 'institute_name',
                display: 'Institution Name',
                rules: 'required'
            },
            {
                name: 'site',
                display: 'Site',
                rules: 'required'
            },
            // Contestant #1
            {
                name: 'members[first][first_name]',
                display: 'First Contestant\'s First Name',
                rules: 'required'
            },
            {
                name: 'members[first][last_name]',
                display: 'First Contestant\'s Last Name',
                rules: 'required'
            },
            {
                name: 'members[first][gender]',
                display: 'First Contestant\'s Gender',
                rules: 'required'
            },
//            {
//                name: 'members[first][student_number]',
//                display: 'First Contestant\'s Student Number',
//                rules: 'required'
//            },
            {
                name: 'members[first][degree]',
                display: 'First Contestant\'s Degree',
                rules: 'required'
            },
            {
                name: 'members[first][email]',
                display: 'First Contestant\'s Email Address',
                rules: 'required|valid_email'
            },
//            {
//                name: 'members[first][phone]',
//                display: 'First Contestant\'s Phone Number',
//                rules: 'required|numeric'
//            },
            {
                name: 'members[first][agreement]',
                display: 'First Contestant\'s Agreement',
                rules: 'required'
            },
            // Contestant #2
            {
                name: 'members[second][first_name]',
                display: 'Second Contestant\'s First Name',
                rules: 'required'
            },
            {
                name: 'members[second][last_name]',
                display: 'Second Contestant\'s Last Name',
                rules: 'required'
            },
            {
                name: 'members[second][gender]',
                display: 'Second Contestant\'s Gender',
                rules: 'required'
            },
//            {
//                name: 'members[second][student_number]',
//                display: 'Second Contestant\'s Student Number',
//                rules: 'required'
//            },
            {
                name: 'members[second][degree]',
                display: 'Second Contestant\'s Degree',
                rules: 'required'
            },
            {
                name: 'members[second][email]',
                display: 'Second Contestant\'s Email Address',
                rules: 'required|valid_email'
            },
//            {
//                name: 'members[second][phone]',
//                display: 'Second Contestant\'s Phone Number',
//                rules: 'required|numeric'
//            },
            {
                name: 'members[second][agreement]',
                display: 'Second Contestant\'s Agreement',
                rules: 'required'
            },
            // Contestant #3
            {
                name: 'members[third][first_name]',
                display: 'Third Contestant\'s First Name',
                rules: 'required'
            },
            {
                name: 'members[third][last_name]',
                display: 'Third Contestant\'s Last Name',
                rules: 'required'
            },
            {
                name: 'members[third][gender]',
                display: 'Third Contestant\'s Gender',
                rules: 'required'
            },
//            {
//                name: 'members[third][student_number]',
//                display: 'Third Contestant\'s Student Number',
//                rules: 'required'
//            },
            {
                name: 'members[third][degree]',
                display: 'Third Contestant\'s Degree',
                rules: 'required'
            },
            {
                name: 'members[third][email]',
                display: 'Third Contestant\'s Email Address',
                rules: 'required|valid_email'
            },
//            {
//                name: 'members[third][phone]',
//                display: 'Third Contestant\'s Phone Number',
//                rules: 'required|numeric'
//            },
            {
                name: 'members[third][agreement]',
                display: 'Third Contestant\'s Agreement',
                rules: 'required'
            }
        ];
        var validator = new FormValidator('onsite_register', constraints, function (errors, event) {
            errors.forEach(function (anError) {
                if (anError.id.includes("agreement")){
                    $('#'+anError.id+'-label').css('color', 'red');
                }
                else {
                    $('#'+anError.id).addClass('invalid');
                }
            });
        });

        function validateThis(element) {
            $('#'+element.id+'-label').css('color', '');
        }

        function changeCountry(element) {
            var country = $(element).val();
            if (country != 'Iran'){
                $('#mem1-student-number-wrapper').hide();
                $('#mem2-student-number-wrapper').hide();
                $('#mem3-student-number-wrapper').hide();
                $('#mem1-size-wrapper').hide();
                $('#mem2-size-wrapper').hide();
                $('#mem3-size-wrapper').hide();
            } else {
                $('#mem1-student-number-wrapper').show();
                $('#mem2-student-number-wrapper').show();
                $('#mem3-student-number-wrapper').show();
                $('#mem1-size-wrapper').show();
                $('#mem2-size-wrapper').show();
                $('#mem3-size-wrapper').show();
            }
        }
    </script>
@endpush