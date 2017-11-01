@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid">
            <div class="mast">
                <h1>ACM ICPC</h1>
                <h4>Amirkabir University of Technology</h4>
                Adminstration Panel <br> <br>
                <div class="divider"></div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l4">
                <a href="{{ route('app::admin.live') }}">
                    <div class="card cyan darken-2 waves-effect waves-light">
                        <div class="card-content white-text">
                            <span class="card-title">Live Blogging</span>
                            <p>View, Edit and publish posts on live blog.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @if(Auth::user()->access_level == \App\User::$SUPER_ADMIN)
            <div class="row">
                <div class="col s3 m3 l3">
                    <a href="{{ route('app::admin.registrations.export') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">Registrations to JSON</span>
                                <p>Export all team information into JSON.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s3 m3 l3">
                    <a href="{{ route('app::admin.registrations.show') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">On-Site Registrations</span>
                                <p>View and edit On-Site Registrations and their team information.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s3 m3 l3">
                    <a href="{{ route('app::admin.online_registrations.show') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">On-Line Registrations</span>
                                <p>View and edit On-Line Registrations and their team information.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s3 m3 l3">
                    <a href="{{ route('app::admin.APL_registrations.show') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">APL Registrations</span>
                                <p>View and edit APL Registrations and their information.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4 l4">
                    <a href="{{ route('app::admin.mail.group.form') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">Group Email Form</span>
                                <p>Send Email to all or some specific group of contestants (using ceit.ssc94@gmail.com)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s4 m4 l4">
                    <a href="{{ route('app::admin.mail.custom.form') }}">
                        <div class="card cyan darken-2 waves-effect waves-light">
                            <div class="card-content white-text">
                                <span class="card-title">Custom Email Form</span>
                                <p>Send Email to contestants (using ceit.ssc94@gmail.com)</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    </div>
@endsection
