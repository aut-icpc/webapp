@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row">
            <h4>Live Blog Posts</h4>
            <div class="col s12 m12 l12 center">
                <a href="{{ route('app::admin.live.new') }}" class="btn waves-effect waves-light btn-large cyan">
                    <i class="material-icons right">note_add</i> Add a new Post
                </a>
            </div>
            <ul class="collection">
                @foreach($posts as $post)
                    <li class="collection-item avatar">
                        @if($post->image != null)
                            <img src="{{ $post->image }}" alt="" class="circle">
                        @else
                            <i class="material-icons circle">textsms</i>
                        @endif

                        <span class="title">{{ $post->title }}</span>
                        <p>
                            Published At: {{ $post->published_at }}<br>
                            Published By: {{ $post->author()->name }}
                        </p>
                        <a href="#!" class="secondary-content">
                            <i class="material-icons">mode_edit</i>
                        </a>
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