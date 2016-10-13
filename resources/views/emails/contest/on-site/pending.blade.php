@extends('layouts.email')

@section('title')
    Registration Pending
@endsection

@section('message-top')
    <center>
        <img src="{{ asset('img/aut_icpc.png') }}">
    </center>
    <p>Hi there,</p>
    <p>
        This is the information you gave us:<br>
        Team Name: <b>{{$registration->team_name}}</b><br>
        Institution: <b>{{$registration->institute_name}}</b><br>
        Country: <b>{{$registration->site}}</b><br><br>
    </p>
    <p>
        Members Information: <br> <br>
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
    <a href="http://htmlemail.io" target="_blank">Call To Action</a>
@endsection

@section('message-bottom')
    <p>This is a really simple email template. Its sole purpose is to get the recipient to click the button with no distractions.</p>
    <p>Good luck! Hope it works.</p>
@endsection