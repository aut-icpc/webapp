@extends('layouts.app')

<div id="remove-modal" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        {{--<a href="{{ route('app::admin.registration.delete', ['team' => $team]) }}" class=" modal-action modal-close waves-effect waves-green btn-flat">YES</a>--}}
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">NO</a>
    </div>
</div>

@section('content')
    <form name="onsite_register" class="col s12 m12 l12" action="{{ route('app::admin.online_registration.save', $team) }}" method="POST">
        <div id="non-skrollr">
            <div class="row">
                <h3><br>On-Site Contest Registration Edit<br></h3>
                <h5>16th Amirkabir Collegiate Programming Contest - 04 Nov 2016</h5>
                <div class="divider"></div>
                <br>
                <div class="container-fluid">
                    <!-- Quick Actions -->
                    <div class="row">
                        <h5><i class="material-icons">perm_data_setting</i>Quick Actions</h5>
                        <div class="row center">
                            <div class="input-field col s12 m12 l12">
                                <select name="status">
                                    <option value="" disabled>Registration Status</option>
                                    <option value="{{\App\OnsiteRegistration::$PENDING['status']}}" class="grey lighten-4" {{$team->status['status'] == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="{{\App\OnsiteRegistration::$PAID['status']}}" class="blue lighten-4" {{$team->status['status'] == 'Paid' ? 'selected' : ''}}>Paid</option>
                                    <option value="{{\App\OnsiteRegistration::$APPROVED['status']}}" class="green lighten-4" {{$team->status['status'] == 'Approved' ? 'selected' : ''}}>Approved</option>
                                    <option value="{{\App\OnsiteRegistration::$REJECTED['status']}}" class="red lighten-4" {{$team->status['status'] == 'Rejected' ? 'selected' : ''}}>Rejected</option>
                                </select>
                                <label>Registration Status</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <a href="{{ route('app::admin.online_registrations.show')}}">
                                    <button class="btn waves-effect waves-light btn-large cyan"
                                            type="button">Back
                                        <i class="material-icons right">fast_rewind</i>
                                    </button>
                                </a>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <a href="{{ route('app::admin.online_registration.delete', ['team' => $team]) }}">
                                    <button class="btn waves-effect waves-light btn-large cyan"
                                            type="button">Delete This Registration
                                        <i class="material-icons right">delete</i>
                                    </button>
                                </a>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <button class="btn waves-effect waves-light btn-large cyan" type="submit" name="action">Verify Registration
                                    <i class="material-icons right">done_all</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /Quick Actions -->

                    <div class="divider"></div>

                    @if (isset($team->team_name))
                        <!-- Team Info -->
                        <div class="row">
                            <h5><i class="material-icons">group</i>Team Information</h5>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="team_name" id="team-name" class="validate" value="{{$team->team_name}}">
                                <label for="team-name">Team Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="institute_name" id="institute-name" placeholder="Amirkabir University of Technology" class="validate" value="{{$team->institute_name}}">
                                <label for="institute-name">Institution</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <select name="site" class="icons">
                                    <option value="" disabled>Select your site</option>
                                    <option value="Iran" data-icon="{{ URL::asset('img/iran.png') }}" class="left circle" {{$team->site == 'Iran' ? 'selected' : ''}}>Iran</option>
                                    <option value="Sweden" data-icon="{{ URL::asset('img/sweden.png') }}" class="left circle" {{$team->site == 'Sweden' ? 'selected' : ''}}>Sweden</option>
                                    <option value="Poland" data-icon="{{ URL::asset('img/poland.png') }}" class="left circle" {{$team->site == 'Poland' ? 'selected' : ''}}>Poland</option>
                                    <option value="Other" data-icon="{{ URL::asset('img/dots.svg') }}" class="left circle" {{$team->site == 'Other' ? 'selected' : ''}}>Other</option>
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
                                <input type="text" name="members[first][first_name]" id="mem1-first-name" class="validate" value="{{$team->members['first']['first_name']}}">
                                <label for="mem1-first-name">First Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="members[first][last_name]" id="mem1-last-name" class="validate" value="{{$team->members['first']['last_name']}}">
                                <label for="mem1-last-name">Last Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <select name="members[first][gender]" id="mem1-gender">
                                    <option value="" disabled>Gender</option>
                                    <option value="male" {{$team->members['first']['gender'] == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{$team->members['first']['gender'] == 'female' ? 'selected' : ''}}>Female</option>
                                </select>
                                <label>Gender</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s2 m2 l2">
                                <input type="text" name="members[first][student_number]" id="mem1-student-number" class="validate" value="{{$team->members['first']['student_number']}}">
                                <label for="mem1-student-number">Student Number</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <select name="members[first][degree]" id="mem1-degree">
                                    <option value="" disabled>Current educational level</option>
                                    <option value="BSc." {{$team->members['first']['degree'] == 'BSc.' ? 'selected' : ''}}>BSc.</option>
                                    <option value="MSc." {{$team->members['first']['degree'] == 'MSc.' ? 'selected' : ''}}>MSc.</option>
                                </select>
                                <label>Current Educational Level</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <input id="mem1-email" name="members[first][email]" type="email" class="validate" value="{{$team->members['first']['email']}}">
                                <label for="mem1-email">Email</label>
                            </div>
                            <div class="input-field col s2 m2 l2">
                                <input id="mem1-phone" name="members[first][phone]" type="tel" class="validate" value="{{$team->members['first']['phone']}}">
                                <label for="mem1-phone">Phone Number</label>
                            </div>
                            <div class="input-field col s12 m12 l12 center">
                                <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[first][agreement]" id="mem1-agreement" onchange="validateThis(this);" {{array_key_exists('agreement',$team->members['first']) ? 'checked="checked"' : ''}}/>
                                <label for="mem1-agreement" id="mem1-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                            </div>
                        </div>
                        <!-- /Member 1 Info -->

                        <div class="divider"></div>

                        <!-- Member 2 Info -->
                        <div class="row">
                            <h5><i class="material-icons">perm_identity</i> Contestant #2</h5>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="members[second][first_name]" id="mem2-first-name" class="validate" value="{{$team->members['second']['first_name']}}">
                                <label for="mem2-first-name">First Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="members[second][last_name]" id="mem2-last-name" class="validate" value="{{$team->members['second']['last_name']}}">
                                <label for="mem2-last-name">Last Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <select name="members[second][gender]" id="mem2-gender">
                                    <option value="" disabled>Gender</option>
                                    <option value="male" {{$team->members['second']['gender'] == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{$team->members['second']['gender'] == 'female' ? 'selected' : ''}}>Female</option>
                                </select>
                                <label>Gender</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s2 m2 l2">
                                <input type="text" name="members[second][student_number]" id="mem2-student-number" class="validate" value="{{$team->members['second']['student_number']}}">
                                <label for="mem2-second-name">Student Number</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <select name="members[second][degree]" id="mem2-degree">
                                    <option value="" disabled>Current educational level</option>
                                    <option value="BSc." {{$team->members['second']['degree'] == 'BSc.' ? 'selected' : ''}}>BSc.</option>
                                    <option value="MSc." {{$team->members['second']['degree'] == 'MSc.' ? 'selected' : ''}}>MSc.</option>
                                </select>
                                <label>Current Educational Level</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <input id="mem2-email" name="members[second][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate" value="{{$team->members['second']['email']}}">
                                <label for="mem2-email">Email</label>
                            </div>
                            <div class="input-field col s2 m2 l2">
                                <input id="mem2-phone" name="members[second][phone]" type="tel" class="validate" value="{{$team->members['second']['phone']}}">
                                <label for="mem2-phone">Phone Number</label>
                            </div>
                            <div class="input-field col s12 m12 l12 center">
                                <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[second][agreement]" id="mem2-agreement" onchange="validateThis(this);" {{array_key_exists('agreement',$team->members['second']) ? 'checked="checked"' : ''}}/>
                                <label for="mem2-agreement" id="mem2-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
                            </div>
                        </div>
                        <!-- Member 2 Info -->

                        <div class="divider"></div>

                        <!-- Member 3 Info -->
                        <div class="row">
                            <h5><i class="material-icons">perm_identity</i> Contestant #3</h5>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="members[third][first_name]" id="mem3-first-name" class="validate" value="{{$team->members['third']['first_name']}}">
                                <label for="mem3-first-name">First Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <input type="text" name="members[third][last_name]" id="mem3-last-name" class="validate" value="{{$team->members['third']['last_name']}}">
                                <label for="mem3-last-name">Last Name</label>
                            </div>
                            <div class="input-field col s4 m4 l4">
                                <select name="members[third][gender]" id="mem3-gender">
                                    <option value="" disabled>Gender</option>
                                    <option value="male" {{$team->members['third']['gender'] == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{$team->members['third']['gender'] == 'female' ? 'selected' : ''}}>Female</option>
                                </select>
                                <label>Gender</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s2 m2 l2">
                                <input type="text" name="members[third][student_number]" id="mem3-student-number" class="validate" value="{{$team->members['third']['student_number']}}">
                                <label for="mem3-third-name">Student Number</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <select name="members[third][degree]" id="mem3-degree">
                                    <option value="" disabled>Current educational level</option>
                                    <option value="BSc." {{$team->members['third']['degree'] == 'BSc.' ? 'selected' : ''}}>BSc.</option>
                                    <option value="MSc." {{$team->members['third']['degree'] == 'MSc.' ? 'selected' : ''}}>MSc.</option>
                                </select>
                                <label>Current Educational Level</label>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <input id="mem3-email" name="members[third][email]" data-error="Wrong Mail Format" data-success="Correct Mail Format" type="email" class="validate" value="{{$team->members['third']['email']}}">
                                <label for="mem3-email">Email</label>
                            </div>
                            <div class="input-field col s2 m2 l2">
                                <input id="mem3-phone" name="members[third][phone]" type="tel" class="validate" value="{{$team->members['third']['phone']}}">
                                <label for="mem3-phone">Phone Number</label>
                            </div>
                            <div class="input-field col s12 m12 l12 center">
                                <input type="checkbox" value="I do have read and accept the Regional contest rules and AUT local contest rules." name="members[third][agreement]" id="mem3-agreement" onchange="validateThis(this);" {{array_key_exists('agreement',$team->members['second']) ? 'checked="checked"' : ''}}/>
                                <label for="mem3-agreement" id="mem3-agreement-label">I have read and accept <a style="color: #00b0ff;" href="{{ route('app::general.rules') }}">Regional Rules</a> and <a style="color: #00b0ff;" href="{{ route('app::local.rules') }}">Local Rules</a>.</label>
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
                    @else
                        <p>
                            This Registration is outdated. <br>
                            Contestant: {{ $team->members['first']['first_name'] . $team->members['first']['last_name'] }} <br>
                            Email: {{ $team->members['first']['email'] }} <br>
                            Phone: {{ $team->members['first']['phone'] }}
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>
<script>
    debugger;
    $(document).ready(function() {
        $('select').material_select();
        $('.modal-trigger').leanModal();
    });


    //    var constraints = [
    //        // Team Information
    //        {
    //            name: 'team_name',
    //            display: 'Team Name',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'institute_name',
    //            display: 'Institution Name',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'site',
    //            display: 'Site',
    //            rules: 'required'
    //        },
    //        // Contestant #1
    //        {
    //            name: 'members[first][first_name]',
    //            display: 'First Contestant\'s First Name',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][last_name]',
    //            display: 'First Contestant\'s Last Name',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][gender]',
    //            display: 'First Contestant\'s Gender',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][student_number]',
    //            display: 'First Contestant\'s Student Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][degree]',
    //            display: 'First Contestant\'s Degree',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][email]',
    //            display: 'First Contestant\'s Email Address',
    //            rules: 'required|valid_email'
    //        },
    //        {
    //            name: 'members[first][phone]',
    //            display: 'First Contestant\'s Phone Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[first][agreement]',
    //            display: 'First Contestant\'s Agreement',
    //            rules: 'required'
    //        },
    //        // Contestant #2
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
    //        {
    //            name: 'members[second][student_number]',
    //            display: 'Second Contestant\'s Student Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[second][degree]',
    //            display: 'Second Contestant\'s Degree',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[second][email]',
    //            display: 'Second Contestant\'s Email Address',
    //            rules: 'required|valid_email'
    //        },
    //        {
    //            name: 'members[second][phone]',
    //            display: 'Second Contestant\'s Phone Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[second][agreement]',
    //            display: 'Second Contestant\'s Agreement',
    //            rules: 'required'
    //        },
    //        // Contestant #3
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
    //        {
    //            name: 'members[third][student_number]',
    //            display: 'Third Contestant\'s Student Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[third][degree]',
    //            display: 'Third Contestant\'s Degree',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[third][email]',
    //            display: 'Third Contestant\'s Email Address',
    //            rules: 'required|valid_email'
    //        },
    //        {
    //            name: 'members[third][phone]',
    //            display: 'Third Contestant\'s Phone Number',
    //            rules: 'required'
    //        },
    //        {
    //            name: 'members[third][agreement]',
    //            display: 'Third Contestant\'s Agreement',
    //            rules: 'required'
    //        }
    //    ];
    //    var validator = new FormValidator('onsite_register', constraints, function (errors, event) {
    //        errors.forEach(function (anError) {
    //            if (anError.id.includes("agreement")){
    //                $('#'+anError.id+'-label').css('color', 'red');
    //            }
    //            else {
    //                $('#'+anError.id).addClass('invalid');
    //            }
    //        });
    //    });
    //
    //    function validateThis(element) {
    //        $('#'+element.id+'-label').css('color', '');
    //    }
</script>
@endpush