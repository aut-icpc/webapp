@extends('layouts.app')

@section('content')


<div class="center" style="padding-top: 15%">

    <label >Pre - 2015 </label>
    <a href="" style="font-size: 20px; color: gray"; >No pictures available!</a>
    <img id="15" src="{{ asset('img/album15.png') }}" style="height: 100px ; width: 100px">
    <label for="15">2015</label>
    <a href="" style="font-size: 20px; color: gray"; >Coming soon!! </a>
    <img id="16" src="{{ asset('img/album16.png') }}" style="height: 100px ; width: 100px">
    <label for="16">2016</label>
    <a href="" style="font-size: 20px; color: gray"; >Coming soon!!</a>
    <img id="17" src="{{ asset('img/album17.png') }}" style="height: 100px ; width: 100px">
<label for="17">2017</label>

    <a href="{{route('app::gallery.others2017')}}" style="font-size: 20px; color: #0D47A1"; >Teams    </a>
,
    <a href="{{route('app::gallery.teams2017')}}" style="font-size: 20px ; color: #0D47A1">    Others</a>






</div>
<br>
    <br><br>
<br><br>
<br><br>

@endsection


