@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row">
            <h4>Thanks for your registration :)</h4>
            <p>
                Here is the information you gave us.
            </p>
            <div class="col s12 m12 l12">
                <div class="card cyan darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Team Information</span>
                        <p>
                            Team Name: {{$data->team_name}} <br>
                            Institution: {{$data->institute_name}} <br>
                            Team Location During Contest: {{$data->site}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @foreach($data->members as $member)
                <div class="col s4 m4 l4">
                    <div class="card cyan">
                        <div class="card-content white-text">
                            <span class="card-title">Amirkabir ACM ICPC 2016</span>
                            <p>
                                Full Name: {{$member['first_name'] . ' ' . $member['last_name']}} <br>
                                Gender: {{$member['gender']}} <br>
                                Email: {{$member['email']}} <br>
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