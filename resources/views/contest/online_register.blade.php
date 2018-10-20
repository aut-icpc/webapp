@extends('layouts.app')

@section('content')
    <form name="online_register" class="col s12 m12 l12" action="{{ route('app::contest.register.online_post') }}" method="POST">
        {{ csrf_field() }}
        <div id="non-skrollr">
            <div class="row">
                <h3><br>OnLine Contest Registration<br></h3>
                <h5>18th Amirkabir Online Collegiate Programming Contest - 02 Nov 2018</h5>
                <p>
                    Please fill all of the following fields carefully and then press the 'Submit' button to make your team registered.<br>
                    If you are willing to just register in on-site contest, follow <a style="color: #00b0ff;" href="{{ route('app::contest.register') }}">this link</a>.
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
                            <input name="site" type="text" id="site" placeholder="Iran" class="validate">
                            <label for="site">Country</label>
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
//        {
//            name: 'institute_name',
//            display: 'Institution Name',
//            rules: 'required'
//        },
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
//        {
//            name: 'members[first][gender]',
//            display: 'First Contestant\'s Gender',
//            rules: 'required'
//        },
//            {
//                name: 'members[first][student_number]',
//                display: 'First Contestant\'s Student Number',
//                rules: 'required'
//            },
//        {
//            name: 'members[first][degree]',
//            display: 'First Contestant\'s Degree',
//            rules: 'required'
//        },
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
            rules: 'required',
            depends: function (field) {
                if ($('#mem1-email').val() == '')
                    return false;
                else
                    return true;
            }
        },
        // Contestant #2
//        {
//            name: 'members[second][first_name]',
//            display: 'Second Contestant\'s First Name',
//            rules: 'required'
//        },
//        {
//            name: 'members[second][last_name]',
//            display: 'Second Contestant\'s Last Name',
//            rules: 'required'
//        },
//        {
//            name: 'members[second][gender]',
//            display: 'Second Contestant\'s Gender',
//            rules: 'required'
//        },
//            {
//                name: 'members[second][student_number]',
//                display: 'Second Contestant\'s Student Number',
//                rules: 'required'
//            },
//        {
//            name: 'members[second][degree]',
//            display: 'Second Contestant\'s Degree',
//            rules: 'required'
//        },
        {
            name: 'members[second][email]',
            display: 'Second Contestant\'s Email Address',
            rules: 'required|valid_email',
            depends: function (field) {
                debugger;
                var test = $('#mem2-first-name').val();
                if ($('#mem2-first-name').val() == '' || $('#mem2-first-name').val() == null)
                    return false;
                return true;
            }
        },
//            {
//                name: 'members[second][phone]',
//                display: 'Second Contestant\'s Phone Number',
//                rules: 'required|numeric'
//            },
        {
            name: 'members[second][agreement]',
            display: 'Second Contestant\'s Agreement',
            rules: 'required',
            depends: function (field) {
                if ($('#mem2-email').val() == '')
                    return false;
                else
                    return true;
            }
        },
        // Contestant #3
//        {
//            name: 'members[third][first_name]',
//            display: 'Third Contestant\'s First Name',
//            rules: 'required'
//        },
//        {
//            name: 'members[third][last_name]',
//            display: 'Third Contestant\'s Last Name',
//            rules: 'required'
//        },
//        {
//            name: 'members[third][gender]',
//            display: 'Third Contestant\'s Gender',
//            rules: 'required'
//        },
//            {
//                name: 'members[third][student_number]',
//                display: 'Third Contestant\'s Student Number',
//                rules: 'required'
//            },
//        {
//            name: 'members[third][degree]',
//            display: 'Third Contestant\'s Degree',
//            rules: 'required'
//        },
        {
            name: 'members[third][email]',
            display: 'Third Contestant\'s Email Address',
            rules: 'required|valid_email',
            depends: function (field) {
                if ($('#mem3-first-name').val() == '')
                    return false;
                return true;
            }
        },
//            {
//                name: 'members[third][phone]',
//                display: 'Third Contestant\'s Phone Number',
//                rules: 'required|numeric'
//            },
        {
            name: 'members[third][agreement]',
            display: 'Third Contestant\'s Agreement',
            rules: 'required',
            depends: function (field) {
                if ($('#mem3-email').val() == '')
                    return false;
                else
                    return true;
            }
        }
    ];
    var validator = new FormValidator('online_register', constraints, function (errors, event) {
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
</script>
@endpush
