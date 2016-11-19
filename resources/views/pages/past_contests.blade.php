@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div id="mainContent" class="container-fluid">

            <h4>Past Contests</h4>
            <h5>Local Contest</h5>
            <p>
                Pre-2005: No information available!<br>
                2005: <a href="http://ceit.aut.ac.ir/acm/files/past/05/problems.rar">Problems</a><br>
                2006: <a href="http://ceit.aut.ac.ir/acm/files/past/06/problems.zip">Problems</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/06/solutions.zip">Judge Solutions</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/06/data.zip">Test Data</a><br>
                2007: Series of individual contests were held. See
                <a href="history.php">history</a> for more information.<br>
                2008: <a href="http://ceit.aut.ac.ir/acm/files/past/08/problems.rar">Problems</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/08/summary.html">Final Ranklist</a>
                <br>
                2009: <a href="http://ceit.aut.ac.ir/acm/files/past/09/problems.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/09/summary.html">Final Ranklist</a>
                <br>
                2010: <a href="http://ceit.aut.ac.ir/acm/files/past/10/problems.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/10/summary.html">Final Ranklist</a> , <a href="http://ceit.aut.ac.ir/acm/files/past/10/TestData2010.rar">Test Data</a>
                <br>
                2011: <a href="http://ceit.aut.ac.ir/acm/files/past/11/problemset11.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/11/summary.html">Final Ranklist</a> , <a href="http://ceit.aut.ac.ir/acm/files/past/11/TestData2011.rar">Test Data</a>
                <br>
                2012: <a href="http://ceit.aut.ac.ir/acm/files/past/12/problemset12.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/12/">Final Ranklist</a> , Test Data
                <br>
                2013: <a href="http://ceit.aut.ac.ir/acm/files/past/13/problemset13.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/13/">Final Ranklist</a> , Test Data
                <br>
                2014: <a href="http://ceit.aut.ac.ir/acm/files/past/14/Local/problem-set.pdf">Problems</a>,  <a href="http://ceit.aut.ac.ir/acm/files/past/14/Local/Local.htm">Final Ranklist (Onsite)</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/14/Local/Online.htm">Final Ranklist (Online)</a> Test Data
                <br>
                2016: <a href="http://icpc.aut.ac.ir/files/aut2016.pdf">Problems</a>,  <a href="http://icpc.aut.ac.ir/files/onsite_ranking2016.html">Final Ranklist (Onsite)</a>
            </p>
            <div class="divider"></div>

            <h5>Amirkabir Programming Contest (APL)</h5>
            <p>
                2014: <a href="http://ceit.aut.ac.ir/acm/files/past/14/apl/day1">day1</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/14/apl/day2">day2</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/14/apl/day3">day3</a><br>
                2015: <a href="http://ceit.aut.ac.ir/acm/files/past/15/apl/day1">day1</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/15/apl/day2">day2</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/15/apl/day3">day3</a><br>
            </p>
            <div class="divider"></div>

            <h5>
                Amirkabir UT High School Programming Contest
            </h5>
            <p>
                2012: Problems, <a href="http://ceit.aut.ac.ir/acm/files/past/12/hs/summary.html">Final Ranklist</a>, <a href="#">Test Data</a><br>
            </p>

            <h5>
                Amirkabir UT Annual Programming Contest
            </h5>
            <p>Qualification Round: <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Qual/problems.zip">Problems</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Qual/solutions.rar">Judge Solutions</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Qual/data.rar">Test Data</a><br>
                Final Round:
                <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Final/problems.zip">Problems</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Final/solutions.rar">Judge Solutions</a>, <a href="http://ceit.aut.ac.ir/acm/files/past/AAPC-Final/data.rar">Test Data</a></p>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        debugger;
        $('#page-wrap').css('height', 'auto');
    });
</script>
@endpush