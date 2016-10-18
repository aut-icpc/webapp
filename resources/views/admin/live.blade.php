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
            <ul class="collection">
                @foreach($posts as $post)
                    <li class="collection-item avatar">
                        @if(isset($post->picture))
                            <img src="{{ $post->picture }}" alt="" class="circle">
                        @else
                            <i class="material-icons circle">textsms</i>
                        @endif

                        <span class="title">{{ $post->title }}</span>
                        <p>
                            Published At: {{ \Carbon\Carbon::createFromTimestamp($post->published_at)->format("r") }}<br>
                            Published By: {{ $post->author->name }}
                        </p>
                        <div class="col s1 m1 l1 secondary-content">
                            <a href="{{ route('app::admin.live.edit', ['LivePost' => $post]) }}">
                                <i class="material-icons cyan-text text-darken-2">mode_edit</i>
                            </a>
                            <a href="{{ route('app::admin.live.delete', ['LivePost' => $post]) }}" onclick="return confirm('Dude, Really?');">
                                <i class="material-icons cyan-text text-darken-2">delete</i>
                            </a>
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
    });
</script>
@endpush