@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row">
            <h1><br>Frequently Asked Questions<br></h1>
            <div class="container-fluid">
                <div class="col s12 m12 l12">
                    <ul>
                        @foreach($faqs as $faq)
                            <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h4>{{ $faq->question() }}</h4>
                                {{ $faq->answer() }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection