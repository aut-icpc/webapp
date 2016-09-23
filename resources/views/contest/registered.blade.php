@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row">
            <br>
            <h4>Registered Teams</h4>
            <p>
                Here is the list of registered teams.
            </p>
            @foreach($data as $record)
                <div class="col s6 m6 l6">
                    <div class="card {{ $record->status['style'] }}">
                        <div class="card-content">
                            <span class="card-title">{{ $record->status['status'] }}</span>
                            <p>
                                Team Name: <b>{{$record->team_name}}</b> <br>
                                Institution: <b>{{$record->institute_name}}</b><br>
                                Team Location: <b>{{$record->site}}</b><br>
                            </p>
                            <p>
                                Contestant #1: <b>{{$record->members['first']['first_name'] . ' ' . $record->members['first']['last_name']}}</b><br>
                                Contestant #2: <b>{{$record->members['second']['first_name'] . ' ' . $record->members['second']['last_name']}}</b><br>
                                Contestant #3: <b>{{$record->members['third']['first_name'] . ' ' . $record->members['third']['last_name']}}</b><br>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
<script>

</script>
@endpush