@extends('layouts.app')

@section('content')
    <div id="non-skrollr">

        <div class="row">
            <div class="container-fluid">
                <div class="col s12 m12 l12">
                    <ul>
{{--                        @foreach($faqs as $faq)--}}
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>Student Scientific Association of Computer Engineering and IT Department:</h5>
                            <p>
                                Email: <a style="color: #ffeb3b;" href="mailto:ceit.ssc94@gmail.com">ceit.ssc94@gmail.com</a> <br>
                                Telegram : <a style="color: #ffeb3b;" href="https://t.me/ceitssc">https://t.me/ceitssc</a> <br>
                               
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>Computer Engineering Department of AUT</h5>
                            <p>
                                Address: #424 Hafez Avenue, P. O. Box 15875-4413, Tehran, IRAN <br>
                                Website: <a style="color: #ffeb3b;" href="http://ceit.aut.ac.ir">http://ceit.aut.ac.ir</a><br>
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>Amirkabir University of Technology (AUT)</h5>
                            <p>
                                Address: #424 Hafez Avenue, P. O. Box 15914, Tehran, IRAN<br>
                                Phone: +98(21)64540<br>
                                Fax: +98(21)66413969<br>
                                Web: <a style="color: #ffeb3b;" href="http://www.aut.ac.ir">http://aut.ac.ir</a><br>
                            </p>
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h5>ACM-ICPC Related Websites:</h5>
                            <p>
                                Asia Region, Tehran Site: <a style="color: #ffeb3b;" href="http://sharif.edu/~acmicpc" >http://icpc.sharif.edu<br>
                                </a>ICPC Asia: <a style="color: #ffeb3b;" href="http://icpcasia.blogspot.com/" >http://icpcasia.blogspot.com</a><br>
                                ACM International Collegiate Programming Contest Website:
                                <a style="color: #ffeb3b;" href="http://icpc.baylor.edu/welcome.icpc" >http://icpc.baylor.edu/welcome.icpc</a><br>
                            </p>
                        </li>
                        {{--@endforeach--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
