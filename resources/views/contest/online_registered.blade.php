@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row">
            <br>
            <h4>Registered Teams at Online Contest</h4>
            <p>
                Here is the list of registered teams for <b>Online contest</b> ordered by their registeration time.
                <br>
                <b>If you have not registered yet, you can <a style="color: #00b0ff;" href="{{ route('app::contest.register.online') }}">Register Here for Online Contest</a>.</b> <br>
                <b>If you don't see your team Information below, we are probably reviewing your information.</b>
            </p>
            @if(count($data) == 0)
                <div class="card waves-effect col s12 m12 l12">
                    <div class="card-content">
                        <ccenter><span class="card-title activator grey-text text-darken-4">No Registrations Yet!</span></ccenter>
                        <p class="center">
                            Be the first one to <a style="color: #00b0ff;" href="{{ route('app::contest.register.online') }}">register</a>!
                        </p>
                    </div>
                </div>
            @else
                @foreach($data as $record)
                    @if ($record->register_is_ok)
                        <div class="col s12 m6 l6">
                            <div class="card {{ $record->status['style'] }}">
                                <div class="card-content">
                                    <span class="card-title">{{ $record->status['status'] }}</span>
                                    <p>
                                        Team Name: <b>{{$record->team_name}}</b> <br>
                                        Institution: <b>{{$record->institute_name}}</b><br>
                                        Team Location: <b>{{$record->site}}</b><br>
                                    </p>
                                    <p>
                                        Registered at: <b>{{$record->created_at}} (UTC)</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>

</script>
@endpush