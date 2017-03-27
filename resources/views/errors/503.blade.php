@extends('layouts.app')

@section('parallax')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('img/icpc.png') }}">
        </div>
    </div>
@endsection

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid section">
            <div class="mast">
                <img class="responsive-img" style="width: 60%;" src="{{ asset('img/aut_icpc.png') }}">
                <h3>Whoooooooops...!</h3>
                <h4>Something went wrong!</h4>
                <p>
                    503 - Our servers might be temporarily down!
                </p>
                <br>
                <a href="{{ route('app::index') }}">
                    <button class="darken-2 waves-effect waves-light btn-large cyan" type="button" name="action">Get Back
                    </button>
                </a>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.tabs').tabs();
        $('.parallax').parallax();
    });
</script>
@endpush