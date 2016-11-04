@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row section">
            <h4>Live Blog Posts</h4>
            <div class="col s12 m12 l12 center">
                <a href="{{ route('app::admin.live.new') }}" class="btn waves-effect waves-light btn-large cyan">
                    <i class="material-icons right">note_add</i> Add a new Post
                </a>
            </div>
        </div>
        <div class="row section">
            <div class="col s1 m1 l1"></div>
            <ul class="collapsible" data-collapsible="accordion">
                @foreach($posts as $post)
                    <li class="collection-item avatar">
                        <div class="collapsible-header">
                            @if(isset($post->picture))
                                <i class="material-icons">perm_media</i>
                            @else
                                <i class="material-icons">textsms</i>
                            @endif
                            {{ $post->title }}
                        </div>
                        <div class="collapsible-body">
                            @if(isset($post->picture))
                                <div class="row">
                                    <div class="col s8 m8 l8">
                                        {!! $post->body !!}
                                    </div>
                                    <div class="col s4 m4 l4">
                                        <p>
                                            <img class="materialboxed" width="200px" data-caption="{{ $post->title }}" src="{{ $post->getImgAddress() }}">
                                        </p>
                                    </div>
                                </div>
                            @else
                                {!! $post->body !!}
                            @endif
                            <p>
                                Published At: {{ \Carbon\Carbon::createFromTimestamp($post->published_at)->format("j M Y - H:i:s (T)")  }}<br>
                                Published By: {{ $post->author->name }}
                            </p>
                            <p>
                                <a href="{{ route('app::admin.live.edit', ['LivePost' => $post]) }}">
                                    <i class="material-icons cyan-text text-darken-2">mode_edit</i>
                                </a>
                                <a href="{{ route('app::admin.live.delete', ['LivePost' => $post]) }}" onclick="return confirm('Are you sure?');">
                                    <i class="material-icons cyan-text text-darken-2">delete</i>
                                </a>
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('input#input_text, textarea#textarea1').characterCounter();
        $('.collapsible').collapsible();
    });
    OneSignal.on('notificationDisplay', function (event) {
        console.warn('OneSignal notification displayed:', event);
        /*
         {
         "id": "ce31de29-e1b0-4961-99ee-080644677cd7",
         "heading": "OneSignal Test Message",
         "content": "This is an example notification.",
         "url": "https://onesignal.com?_osp=do_not_open",
         "icon": "https://onesignal.com/images/notification_logo.png"
         }
         */
    });
</script>
@endpush