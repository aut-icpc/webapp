@extends('layouts.email')

@section('title')
    {{ $title or '' }}
@endsection

@section('message-top')
    {{ $body or '' }}
@endsection

@section('call-to-action')
@endsection

@section('message-bottom')
    <p>
        All the best, <br>
        <b>AUT ACM-ICPC Group.</b>
    </p>
@endsection