@extends('layouts.email')

@section('title')
    Registration Pending
@endsection

@section('message-top')
    <p>Hi there,</p>
    <p>
        <strong>
            Your registration is complete now, and we are checking some credentials.<br>
            You will be notified as soon as we approve your registration.
        </strong>
    </p>
    <p>
        Here is the information you gave us:<br>
        Team Name: <b>{{$registration->team_name}}</b><br>
        Institution: <b>{{$registration->institute_name}}</b><br>
        Country: <b>{{$registration->site}}</b><br><br>
    </p>
    <p>
        Information: <br> <br>
        Contestant #1: <br>
        Full Name: <b>{{$registration->members['first']['first_name'] . ' ' . $registration->members['first']['last_name']}}</b> <br>
        Email: <b>{{ $registration->members['first']['email'] }}</b> <br> <br>

        Contestant #2: <br>
        Full Name: <b>{{$registration->members['second']['first_name'] . ' ' . $registration->members['second']['last_name']}}</b> <br>
        Email: <b>{{ $registration->members['second']['email'] }}</b> <br> <br>

        Contestant #3: <br>
        Full Name: <b>{{$registration->members['third']['first_name'] . ' ' . $registration->members['third']['last_name']}}</b> <br>
        Email: <b>{{ $registration->members['third']['email'] }}</b> <br> <br>
    </p>
@endsection

@section('call-to-action')

@endsection

@section('message-bottom')
    <p>
        All the best, <br>
        <b>AUT ACM-ICPC Group.</b>
    </p>
@endsection