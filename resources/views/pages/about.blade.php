@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        {{--<div class="container-fluid">--}}
            {{--<div class="mast">--}}
                {{--<h1>About ACM </h1>--}}
                {{--<h4>Amirkabir University of Technology</h4>--}}
                {{--free &amp; <b>open-source</b> way to a one-click blog/website on <b>GitHub</b> with Jekyll and MaterializeCSS--}}
                {{--<br>--}}
                {{--<h6>based on google&trade;'s <b>material design</b> specifications</h6>--}}
                {{--<h4><b>work-in-progress</b></h4>--}}
                {{--<a target="_blank" href="https://github.com/AUT-ICPC/ICPC-webApp" class="cyan darken-2 white-text text-darken-3 waves-effect waves-light btn"><i class="mdi-action-get-app"></i> View on github</a><br>--}}
                {{--<i class="mdi-navigation-arrow-drop-down" style="font-size: 200px;"></i>--}}
            {{--</div>--}}
        {{--</div>--}}



        <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style="background-image: url('img/think_re.png');">
                <div class="filter cyan" style="opacity: 0.7;">
                    <div class="cover-text cyan-text text-darken-4">
                        <span style="font-size: 50px;">< think /></span>
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    <h4>About the Contest</h4>
                </div>
                The ACM (Association for Computing Machinery) International Collegiate Programming Contest (ICPC) traces
                its roots to a competition held at Texas A&M in 1970 hosted by the Alpha Chapter of the UPE Computer
                Science Honor Society. The idea quickly gained popularity within the United States and Canada as an
                innovative initiative to assist in the development of top students in the emerging field of computer
                science.
                <br><br>
                The contest evolved into a multi-tier competition with the first Finals held at the ACM Computer Science
                Conference in 1977. Headquartered at Baylor University since the 1980s, the contest has expanded into a
                global network of universities hosting regional competitions that advance teams to the World Finals.
                <br><br>
                Since IBM began its sponsorship of the ACM-ICPC World Finals in 1997, the contest has increased by a
                factor of 7.5. Participation has grown to involve several tens of thousands of the finest students and
                faculty in computing disciplines at 1,756 universities from 82 countries on six continents.
                <br><br>
                The contest fosters creativity, teamwork, and innovation in building new software programs, and enables
                students to test their ability to perform under pressure. Quite simply, it is the oldest, largest, and
                most prestigious programming contest in the world.
                <br><br>
                Levels of Competition:
                <br>
                Universities choose teams or hold local contests to select one or more teams to represent them at the
                next level of competition. This selection is culled from a field of more than 300,000 students in
                computing disciplines worldwide. Regional contests were held September to December 2006. Participation
                in preliminary and regional contests increased by 10 percent from 5,606 to 6,099 teams, as compared to
                2005.
                <br><br>
            </div>
        </div>

        <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style="background-image: url('img/solve_re.png');">
                <div class="filter cyan" style="opacity: 0.7;">
                    <div class="cover-text cyan-text text-darken-4">
                        <span style="font-size: 50px;">< solve /></span>
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    <h4>About ACM</h4>
                </div>
                ACM, <a style="color: #f9f70b;" href="http://www.acm.org/" target="_blank">the Association for Computing Machinery</a>
                ,is an educational and
                scientific society uniting the world's computing educators, researchers and professionals to inspire
                dialogue, share resources and address the field's challenges. ACM strengthens the profession's
                collective voice through strong leadership, promotion of the highest standards, and recognition of
                technical excellence. ACM supports the professional growth of its members by providing opportunities for
                life-long learning, career development, and professional networking.
            </div>
        </div>

        <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style="background-image: url('img/balloon_re.png');">
                <div class="filter cyan" style="opacity: 0.7;">
                    <div class="cover-text cyan-text text-darken-4">
                        <span style="font-size: 50px;">< balloon /></span>
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    <h4>IBM's Commitment</h4>
                </div>
                IBM's sponsorship of the ACM-ICPC is an important component of the company's many academic initiatives,
                designed to stimulate open-source programming skills to develop a more competitive IT workforce capable
                of driving global innovation and economic growth.
                <br><br>
                For more information about other IBM college initiatives, please visit the IBM/ACM at
                <a style="color: #f9f70b" href="http://www.developer.ibm.com/university/students/" target="_blank">here</a>.
            </div>
        </div>


    </div>
@endsection