@extends('layouts.app')

@section('content')
    <div id="non-skrollr">

        <div class="row">
            <div class="container-fluid">
                <div class="col s12 m12 l12">
                    <ul>
{{--                        @foreach($faqs as $faq)--}}
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>ACM-ICPC Group at Computer Engineering Department of AUT</h5>
                            <p>
                                Email: <a href="mailto:ceit.ssc@aut.ac.ir">ceit.ssc@aut.ac.ir</a>
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>Computer Engineering Department of AUT</h5>
                            <p>
                                Address: #424 Hafez Avenue, P. O. Box 15875-4413, Tehran, IRAN <br>
                                Website: <a href="http://ceit.aut.ac.ir">ceit.aut.ac.ir</a><br>
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>Amirkabir University of Technology (AUT)</h5>
                            <p>
                                Address: #424 Hafez Avenue, P. O. Box 15914, Tehran, IRAN<br>
                                Phone: +98(21)64540<br>
                                Fax: +98(21)66413969<br>
                                Web: <a href="http://www.aut.ac.ir">aut.ac.ir</a><br>
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>ACM-ICPC Related Websites:</h5>
                            <p>
                                Asia Region, Tehran Site: <a href="http://sharif.edu/~acmicpc" >http://sharif.edu/~acmicpc<br>
                                </a>ICPC Asia: <a href="http://icpcasia.blogspot.com/" >http://icpcasia.blogspot.com</a><br>
                                ACM International Collegiate Programming Contest Website:
                                <a href="http://icpc.baylor.edu/welcome.icpc" >http://icpc.baylor.edu/welcome.icpc</a><br>
                            </p>
                        </li>
                        {{--@endforeach--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection