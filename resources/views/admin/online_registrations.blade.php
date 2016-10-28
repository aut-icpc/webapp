@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row" style="height: auto;">
            <br>
            <h4>Registered Teams</h4>
            <p>
                AUT ACM ICPC 2016 Online Contest - Registered Teams.
            </p>
            <div class="row section">
                <center>
                    <h4>
                        TODO: Review these registrations:
                    </h4>
                </center>
                <ul class="collection">
                    @foreach($data as $team)
                        @if(!$team->register_is_ok)
                            <li class="collection-item avatar">
                                <i class="material-icons circle">textsms</i>
                                <span class="title">{{ $team->team_name }}</span>
                                <p>
                                    Institution: {{ $team->institute }}<br>
                                    Country: {{ $team->site }}
                                </p>
                                <a href="{{ route('app::admin.registration.edit', $team) }}" class="secondary-content">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <table class="highlight bordered centered">
                <thead>
                <tr>
                    <th data-field="number">#</th>
                    <th data-field="name">Name</th>
                    <th data-field="institute">Institution</th>
                    <th data-field="country">Email</th>
                    <th data-field="status">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $team)
                    <tr class="{{$team->status['style']}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$team->members['first']['first_name'] . ' ' . $team->members['first']['last_name']}}</td>
                        <td>{{$team->institute_name}}</td>
                        <td>{{$team->members['first']['email']}}</td>
                        <td>
                            <center>
                                <a class="cyan-text text-darken-2" href="{{ route('app::admin.online_registration.edit', $team) }}" target="_blank">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </center>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection