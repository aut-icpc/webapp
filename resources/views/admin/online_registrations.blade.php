@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row" style="height: auto;">
            <br>
            <h4>Registered Teams</h4>
            <p>
                AUT ACM ICPC 2016 Online Contest - Registered Teams.
            </p>
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
                                {{-- route('app::admin.registration.edit', $team) --}}
                                <a class="cyan-text text-darken-2" href="#" target="_blank">
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