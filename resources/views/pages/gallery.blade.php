@extends('layouts.app')

@section('content')


<div class="center" style="padding-top: 15%">

    <label >Pre - 2014 </label>
    <a href="" class="grey lighten-1" >No pictures available!</a>
    <br>
     <img id="14" src="{{ asset('img/album14.png') }}" style="height: 100px ; width: 100px">
    <label for="14">2014</label>
    <a href="" class="grey lighten-1" >Coming soon!! </a>
    <br>
    <img id="15" src="{{ asset('img/album15.png') }}" style="height: 100px ; width: 100px">
    <label for="15">2015</label>
    <a href="" class="grey lighten-1" >Coming soon!! </a>
    <br>
    <img id="16" src="{{ asset('img/album16.png') }}" style="height: 100px ; width: 100px">
    <label for="16">2016</label>
    <a href="" class="grey lighten-1" >Coming soon!!</a>
    <br>
    <img id="17" src="{{ asset('img/album17.png') }}" style="height: 100px ; width: 100px">
<label for="17">2017</label>

    <a href="{{route('app::gallery.teams2017')}}"  light-blue darken-4 >Teams    </a>
,
    <a href="{{route('app::gallery.others2017')}}"  light-blue darken-4>    Others</a>






</div>
<br>
    <br><br>
<br><br>
<br><br>

@endsection


