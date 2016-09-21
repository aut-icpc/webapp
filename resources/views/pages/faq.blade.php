@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row">
            <h4><br>Frequently Asked Questions<br></h4>
            <div class="container-fluid">
                <div class="col s12 m12 l12">
                    <ul>
                        @foreach($faqs as $faq)
                            <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h5>Q. {{ $faq['q'] }}</h5>
                                <p><strong>A.</strong> {!! $faq['a']  !!}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection