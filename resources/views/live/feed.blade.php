@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="mast">
                <h1>ACM ICPC</h1>
                <h4>Amirkabir University of Technology</h4>
                Follow news of AUT ACM ICPC On-Site contest live from <b>Tehran</b>, <b>Stockholm</b> and <b>Kraków</b> at the same time!
                <div class="divider"></div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="center" id="time"></div>
        </div>

        <div class="row">
            @if(count($newsGroup) == 0)
                <div class="card waves-effect col s12 m12 l12">
                    <div class="card-content">
                        <ccenter><span class="card-title activator grey-text text-darken-4 center">Just wait a little!</span></ccenter>
                        <p class="center">
                            The On-Site contest starts at 10:00 AM (UTC Time) November 04, 2016. <br>
                            So be patient and check back soon! <br>
                            By the way you can see the behind the scenes stuff with
                            #AUTICPC on social media.
                        </p>
                    </div>
                </div>
            @else
                @foreach($newsGroup as $news)
                        <div class="card waves-effect col s6 m6 l4" style="padding-left: 0px; padding-right: 0px;">
                            @if(isset($news->picture))
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="{{ asset($news->picture) }}" target="_blank"><img src="{{ asset($news->picture) }}"></a>
                                    {{--<img class="activator" src="{{ asset('img/iran.png') }}">--}}
                                </div>
                            @endif
                            <div class="card-content">
                                <b>{{ \Carbon\Carbon::createFromTimestamp($news->published_at)->format("j M Y - H:i:s (T)") }}</b><br>
                                <span class="card-title activator grey-text text-darken-4">{{$news->title}}<i class="material-icons right">more_vert</i></span>
                                <p dir="{{ $news->RTL ? 'RTL' : 'LTR' }}">
                                    {{ $news->body }}
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">{{ $news->title }}<i class="material-icons right">close</i></span>
                                <p>
                                    {{$news->body }}
                                </p>
                            </div>
                        </div>
                @endforeach
            @endif
        </div>

        <div class="row">
        </div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
<script type="text/javascript">
    $('#time').countdown('2016/11/04 13:30:00', function(event) {
        var $this = $(this).html(event.strftime(''
                + '<b><span style="font-size: 80px;" >%D</b></span>'
                + '<b><span style="font-size: 80px;" >:%H</b></span>'
                + '<b><span style="font-size: 80px;" >:%M<b></span>'
                + '<b><span style="font-size: 80px;" >:%S</b></span>'));
    });
</script>
@endpush