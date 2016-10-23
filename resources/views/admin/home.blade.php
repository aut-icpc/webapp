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
            <div class="col s4 m4 l4">
                <a href="{{ route('app::admin.live') }}">
                    <div class="card cyan white-text waves-effect">
                        <div class="card-content text-center">
                            <span class="card-title">Live Blog</span>
                        </div>
                    </div>
                </a>
            </div>
            @if(Auth::user()->access_level == \App\User::$SUPER_ADMIN)
                <div class="col s4 m4 l4">
                    <a href="{{ route('app::admin.registrations.show') }}">
                        <div class="card cyan white-text waves-effect">
                            <div class="card-content text-center">
                                <span class="card-title">OnSite Registrations</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s4 m4 l4">
                    <a href="{{ route('app::admin.mail.form') }}">
                        <div class="card cyan white-text waves-effect">
                            <div class="card-content text-center">
                                <span class="card-title">Email</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s4 m4 l4">
                    <a href="{{ route('app::admin.registrations.online.show') }}">
                        <div class="card cyan white-text waves-effect">
                            <div class="card-content text-center">
                                <span class="card-title">Online Registrations</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection