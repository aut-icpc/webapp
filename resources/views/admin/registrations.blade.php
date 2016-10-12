@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row" style="height: auto;">
            <br>
            <h4>Registered Teams</h4>
            <p>
                AUT ACM ICPC 2016 Registered Teams.
            </p>
            <table>
                <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($data as $team)
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                <div class="col s6 m6 l6">
                    <div class="card {{ $team->status['style'] }}">
                        <div class="card-content">
                            <span class="card-title">{{ $team->status['status'] }}</span> <a href="{{ route('app::admin.registration.edit', $team) }}" class="secondary-content"><i class="material-icons">mode_edit</i></a>
                            <p>
                                Team Name: <b>{{$team->team_name}}</b><br>
                                Institution: <b>{{$team->institute_name}}</b><br>
                                Team Location: <b>{{$team->site}}</b><br>
                            </p>
                            <h6 class="teal-text darken-4"><b>Contestant #1</b></h6>
                            <p>
                                Full Name: <b>{{$team->members['first']['first_name'] . ' ' . $team->members['first']['last_name']}}</b><br>
                                Gender: <b>{{$team->members['first']['gender']}}</b><br>
                                Education: <b>{{$team->members['first']['degree'] . ' Student No. ' . $team->members['first']['student_number']}}</b><br>
                                Email: <b>{{$team->members['first']['email']}}</b><br>
                                Phone: <b>{{$team->members['first']['phone']}}</b><br>
                                T-Shirt Size: <b>{{$team->members['first']['t-shirt_size']}}</b>
                            </p>
                            <h6 class="teal-text darken-4"><b>Contestant #2</b></h6>
                            <p>
                                Full Name: <b>{{$team->members['second']['first_name'] . ' ' . $team->members['second']['last_name']}}</b><br>
                                Gender: <b>{{$team->members['second']['gender']}}</b><br>
                                Education: <b>{{$team->members['second']['degree'] . ' Student No. ' . $team->members['second']['student_number']}}</b><br>
                                Email: <b>{{$team->members['second']['email']}}</b><br>
                                Phone: <b>{{$team->members['second']['phone']}}</b><br>
                                T-Shirt Size: <b>{{$team->members['second']['t-shirt_size']}}</b>
                            </p>
                            <h6 class="teal-text darken-4"><b>Contestant #3</b></h6>
                            <p>
                                Full Name: <b>{{$team->members['third']['first_name'] . ' ' . $team->members['third']['last_name']}}</b><br>
                                Gender: <b>{{$team->members['third']['gender']}}</b><br>
                                Education: <b>{{$team->members['third']['degree'] . ' Student No. ' . $team->members['third']['student_number']}}</b><br>
                                Email: <b>{{$team->members['third']['email']}}</b><br>
                                Phone: <b>{{$team->members['third']['phone']}}</b><br>
                                T-Shirt Size: <b>{{$team->members['third']['t-shirt_size']}}</b>
                            </p>
                        </div>
                    </div>
                </div>


        </div>
    </div>
@endsection

{{--@push('styles')--}}
{{--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">--}}
{{--@endpush--}}
{{--@push('scripts')--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--var data = [--}}
            {{--[--}}
                {{--"Tiger Nixon",--}}
                {{--"System Architect",--}}
                {{--"Edinburgh",--}}
                {{--"5421",--}}
                {{--"2011/04/25",--}}
                {{--"$3,120"--}}
            {{--],--}}
            {{--[--}}
                {{--"Garrett Winters",--}}
                {{--"Director",--}}
                {{--"Edinburgh",--}}
                {{--"8422",--}}
                {{--"2011/07/25",--}}
                {{--"$5,300"--}}
            {{--]--}}
        {{--]--}}
        {{--$('#onSite').DataTable( {--}}
            {{--data: data--}}
        {{--} );--}}
    {{--} );--}}
{{--</script>--}}
{{--@endpush--}}