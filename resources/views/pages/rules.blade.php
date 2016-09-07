@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1">
                <div class="filter cyan" style="opacity: 0.7;">
                    <div class="cover-text cyan-text text-darken-4">
                        <span style="font-size: 50px;">< rules /></span>
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    <h4>Regional Rules</h4>
                </div>
                <h5 id="section-Regional+Rules-Mission">Mission</h5>
                <p>
                    The ACM International Collegiate Programming Contest (ICPC) provides  college students with
                    opportunities to interact with students from  other universities and to sharpen and demonstrate their
                    problem-solving, programming, and teamwork skills. The contest provides  a platform for ACM, industry,
                    and academia to encourage and focus  public attention on the next generation of computing professionals
                    as  they pursue excellence.
                </p>
                <br>
                <h5>Introduction</h5>
                <p>
                    The contest is a two-tiered competition among teams of students  representing institutions of higher
                    education. Teams first compete in  regional contests held around the world from September to November
                    each  year. The winning team from each regional contest qualifies to advance  to the ACM International
                    Collegiate Programming Contest World Finals,  typically held the following March to mid-April.
                    Additional  high-ranking teams may be invited to the World Finals as wild card  teams.
                </p>
                <br>
                <h5 id="section-Regional+Rules-Organization">Organization</h5>
                <p>
                    The ICPC International Steering Committee is responsible for  establishing contest rules, policy and
                    guidelines. They oversee the  conducting of regional contests, resolve regional appeals, rule on
                    international issues, recommend ways to make the contest accessible and  attractive to international
                    participants and review variances in  regional rules. There are two standing subcommittees, the
                    Appeals  Committee and the Eligibility Committee.
                </p>
                <br>
                <p>
                    The ICPC is organized according to the
                    <a href="http://icpc.baylor.edu/icpc/Info/ppgs.pdf">ICPC Policies and Procedures</a>.
                    For each regional contest, the Regional Contest Director (RCD) is  charged with executing a regional
                    contest in accordance with the  regional rules and ICPC policies, procedures, and guidelines.
                    Regional  rules may vary to accommodate differences in educational systems and  host computing
                    facilities. Additional rules, exceptions, and other  information pertaining to a specific regional
                    contest can be found at  the
                    <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=Regionals">Regionals</a> Contest Website.
                    Those rules do not supersede these rules or the World Finals rules.
                </p>
                <br>
                <h5 id="section-Regional+Rules-Localization">Localization</h5>
                <p>
                    The language of the Contest is English. All written contest  materials will be in English. Additional
                    languages may be used in  regional contests. Terms which have undefined or different meanings
                    outside the United States must be defined or redefined appropriately in  that region's Region-Specific
                    Rules. Rules may vary at the regional  level to accommodate these differences.
                </p>
                <br>
                <h5 id="section-Regional+Rules-TeamComposition">Team Composition</h5>
                <p>
                    A representative of the sponsoring institution of higher education,  typically a faculty member, must
                    serve as or designate the team coach.  The coach certifies the eligibility of contestants and serves
                    as the  official point-of-contact with the team prior to and during contest  activities. A team may
                    only have one coach.
                </p>
                <p>
                    The coach must fully register teams in the <a href="http://icpc.baylor.edu">ICPC Registration System</a>
                    within the time set by the regional rules which, for all Regional  Contests, is no later than the
                    earlier date of 7 days before the  contest and November 8. A team is not eligible to compete in the
                    regional contest until the regional contest director has accepted the  team in the web registration
                    system. Teams failing to comply with any  of these requirements will be ruled ineligible to compete.
                    Only  registered reserves may be substituted for contestants. Such  substitutions must be entered in
                    the ICPC Registration System by the  regional contest director before the contest begins.
                </p>
                <p>Each team consists of three contestants who are eligible to compete in the ICPC World Finals as described under <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=Regional%20Rules#section-Regional+Rules-AdvancingToTheWorldFinals">Advancing to the World Finals</a>. The team's contestants must satisfy the following eligibility rules. </p>
                <h5> <strong>Contestant Eligibility Rules</strong> </h5>
                <p>Please refer to the <a href="http://icpc.baylor.edu/regionals/rules/EligibilityDecisionTree-2014.pdf">Eligibility Decision Tree</a> to more easily determine eligibility </p>
                <h5><strong>Basic Requirements</strong> </h5>
                <ul>
                    <li>A student must be willing and able to compete in the World Finals. </li>
                    <li>A student must be enrolled in a degree program at the  sponsoring institution with at least a half-time load. This rule is not  to be construed as disqualifying co-op students, exchange students, or  students serving internships. </li>
                    <li>A student may compete for only one institution during a contest year. </li>
                    <li>A student who has competed in two World Finals is NOT eligible to compete. </li>
                </ul>
                <ul>
                    <li>A student who has competed in five Regional Contests is NOT eligible to compete. </li>
                </ul>
                <h5><strong>Period of Eligibility</strong> </h5>
                <ul>
                    <li>A student who meets the Basic Requirements and  FIRST began post-secondary studies in  2006  or later is eligible to compete. </li>
                    <li>A student who meets the Basic Requirements and was born in  1987  or later is eligible to compete. </li>
                </ul>
                <h5><strong>Extending the Period of Eligibility</strong> </h5>
                <ul>
                    <li>A coach may petition the <a href="mailto:manager@icpc.baylor.edu?subject=Contestant%20Extension%20of%20Eligibility">ICPC Eligibility Committee</a> to extend the Period of Eligibility for a student whose full-time  studies have been interrupted or extended. This includes military or  civilian service, illness, work/studies, or personal reasons. </li>
                    <li>The coach must demonstrate that such an extension would not provide an unfair advantage to the team. </li>
                </ul>
                <ul>
                    <li>A petition will be approved routinely if the student  meets the Basic Requirements and has not completed more than the  equivalent of eight semesters of full-time study as of the date of the  regional contest. </li>
                    <li>To make such a request, the coach must petition the ICPC  Eligibility Committee at least three weeks before the regional contest.  The <a href="mailto:manager@icpc.baylor.edu?subject=Contestant%20Extension%20of%20Eligibility">ICPC Eligibility Committee</a> will render a decision within five business days. </li>
                </ul>
                <br>
                <h5 id="section-Regional+Rules-WhereToCompete">Where to Compete</h5>
                <p>Each team is expected to compete only within its defined region.  However, a team with a valid reason (e.g. driving distance) may request  to compete in a different region for a given year. The team coach must  submit such a request to the <a href="mailto:j.comer@tcu.edu?subject=Request%20to%20Move%20to%20a%20Different%20Region">Director of Regional Contests</a> (DRC), who will approve the request only if the decision is unanimous among all affected Directors. </p>
                <p>An institution may send contestants to only one regional contest in a given year. </p>
                <br>
                <h5 id="section-Regional+Rules-RegionalContestAttendance">Regional Contest Attendance</h5>
                <p>All team members must attend all contest activities as specified by  the regional contest director for that region. The coach is expected to  attend or be available by phone during contest activities. Failure to  attend any of the designated contest events will result in automatic  disqualification and forfeiture of any scholarships and prizes. </p>
                <br>
                <h5 id="section-Regional+Rules-ConductOfARegionalContest">Conduct of a Regional Contest</h5>
                <p>Solutions to problems submitted for judging are called runs. Each  run is judged as accepted or rejected by a judge, and the team is  notified of the results. </p>
                <p>Notification of accepted runs may be suspended at an appropriate  time to keep the final results secret. A general announcement to that  effect will be made during the contest. Notification of rejected runs  will continue until the end of the contest. </p>
                <p>A contestant may submit a claim of ambiguity or error in a problem  statement by submitting a clarification request to a judge. If the  judges agree that an ambiguity or error exists, a clarification will be  issued to all contestants. </p>
                <p>Contestants are not to converse with anyone except members of their  team and personnel designated by the regional contest director. Systems  support staff may advise contestants on system-related problems such as  explaining system error messages. </p>
                <p>While the contest is scheduled for a particular time length  (typically five hours), the regional contest director has the authority  to alter the length of the contest in the event of unforeseen  difficulties. Should the contest duration be altered, every attempt  will be made to notify contestants in a timely and uniform manner. </p>
                <p>A team may be disqualified by the regional contest director for any  activity that jeopardizes the contest such as dislodging extension  cords, unauthorized modification of contest materials, or distracting  behavior. </p>
                <p>At least six problems will be posed. So far as possible, problems  will avoid dependence on detailed knowledge of a particular  applications area or particular contest language. </p>
                <br>
                <h5 id="section-Regional+Rules-ScoringOfARegionalContest">Scoring of a Regional Contest</h5>
                <p>A problem is solved when it is accepted by the judges. The judges  are solely responsible for accepting or rejecting submitted runs. In  consultation with the judges, the Regional Contest Director determines  the winners of the regional contest. The regional contest director and  judges are empowered to adjust for or adjudicate unforeseen events and  conditions. Their decisions are final. </p>
                <p>Teams are ranked according to the most problems solved. For the  purposes of awards, or in determining qualifier(s) for the World  Finals, teams who solve the same number of problems are ranked by least  total time. The total time is the sum of the time consumed for each  problem solved. The time consumed for a solved problem is the time  elapsed from the beginning of the contest to the submittal of the  accepted run plus 20 penalty minutes for every rejected run for that  problem regardless of submittal time. There is no time consumed for a  problem that is not solved. </p>
                <p>It is the responsibility of the Regional Contest Director to specify  any additional tie-breakers. Tie-breaker policies must be announced to  contestants before the contest begins. </p>
                <br>
                <h5 id="section-Regional+Rules-RegionalContestComputingEnvironment">Regional Contest Computing Environment</h5>
                <p>The programming languages of the regional contest will include  C/C++. Additional programming languages may be used. The programming  languages of the World Finals are Java and C/C++. Prior to the World  Finals, the judges will have solved all problems in Java and C/C++. </p>
                <p>Each team will use a single workstation. The regional contest  director is responsible for determining that teams have reasonably  equivalent computing resources. </p>
                <p>Each Regional Contest Director determines whether contestants may  bring materials for use during the contest. Please see the specific  regional rules at the ICPC Regional Contest Web Site - <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=Regionals">regionals</a>.  At the World Finals, no printed materials or electronic devices may be  brought into the contest area. On-line reference materials will be made  available as described at the <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=Regional%20Rules-Reference%20Materials">ICPC World Finals Reference Materials Site</a>.  Each team will be permitted to provide a PDF of up to 25 pages of notes  within the limits described during Team Certification. Three copies  will be printed and placed at the team's workstation for use during the  World Finals. </p>
                <br>
                <h5 id="section-Regional+Rules-ComplaintsAppealsAndRemedies">Complaints, Appeals, and Remedies</h5>
                <p>If irregularities or misconduct are observed during the contest,  team members or coaches should bring them to the attention of the  contest officials so that action may be taken as soon as possible.  After the conclusion of the contest and the results have been made  public, coaches may file complaints or appeals as follows: </p>
                <dl>
                    <dt> <h6>Within 2 business days</h6></dt>
                    <dd>&nbsp;</dd>
                    <dd>The coach may file a complaint by sending an email containing a text message with no enclosures to the Contest Manager. The <a href="mailto:manager@icpc.baylor.edu">Contest Manager</a> will forward the complaint to the Regional Contest Director, Super  Regional Director, and Director of Regional Contests, copying the  coach. </dd>
                </dl>
                <dl>
                    <dt> <h6>Within 3 more business days</h6> </dt>
                    <dd>The RCD shall respond to the complaint.  </dd>
                </dl>
                <dl>
                    <dt> <h6>Within 1 more business day</h6> </dt>
                    <dd>The coach may file an appeal by sending email to the <a href="mailto:manager@icpc.baylor.edu">Contest Manager</a> who will forward the appeal to the Appeals Committee copying the coach and RCD. </dd>
                </dl>
                <dl>
                    <dt>
                    <h6>Within 4 more business day</h6>
                    </dt>
                    <dd>
                        he Appeals Committee will investigate the circumstances of the appeal and notify the coach and RCD of their decision.    </dd>
                </dl>
                <p> This process is governed as follows: </p>
                <ul>
                    <li>The results of the regional contest are not final until the complaints and appeals process has run its course. </li>
                    <li>Only coaches may file complaints and appeals. </li>
                </ul>
                <ul>
                    <li>An appeal must be based on one or more of the  following circumstances: violations of the Rules, misconduct by teams,  or gross misconduct by contest officials with the intent to do harm. </li>
                </ul>
                <ul>
                    <li>The decisions of the judges are final.  Specifically, a decision on a problem submission MAY NOT be appealed. </li>
                </ul>
                <ul>
                    <li>The Appeals Committee overturns decisions only under extraordinary circumstances. </li>
                </ul>
                <ul>
                    <li>The decision of the Appeals Committee is final. </li>
                </ul>
                <ul>
                    <li>No additional finals invitations will be given to remedy to a complaint. </li>
                </ul>
                <ul>
                    <li>All complaints will be acknowledged. </li>
                </ul>
                <p> The appeal will be automatically rejected if the above procedure is not followed. </p>
                <p>&nbsp;</p>
                <div class="hlineb"></div>
                <h5 id="section-Regional+Rules-AdvancingToTheWorldFinals">Advancing to the World Finals</h5>
                <p>Teams qualify to advance to the World Finals through Regional Contests and by satisfying all rules posted in <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=World%20Finals%20Rules">The Rules of the ACM-ICPC World Finals</a>.  Specifically: </p>
                <p>Only one team from a given institution may advance to the World  Finals. Team members will be provided free one-year memberships in <a href="http://www.acm.org">ACM</a> at On-Site Registration.  No team member on the qualifying team may have competed as a contestant in two previous World Finals. </p>
                <p>The coach of a qualifying team is the point-of-contact prior to and  during World Finals activities. The coach must complete certification  at the <a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=Certification%20for%20Teams%20Advancing%20to%20Finals">Team Certification Web Site</a> within five (5) business days of notification. Qualifying teams will be  issued an invitation by email and postal mail within one business day  of completing certification. </p>
                <p>Qualifying teams requiring visas must initiate the process of  applying for visas within 10 business days of being issued an  invitation. Teams failing to comply with any of these requirements will  be ruled ineligible to compete in the World Finals. Upon completion of  these requirements, a qualifying team will be advanced to the World  Finals. </p>
                <p>A team advancing to the World Finals will be comprised of the same  three members as when it qualified. In the event that a team member is  unwilling, unable or unfit to compete in the World Finals, the coach  must notify the <a href="mailto:manager@icpc.baylor.edu">ICPC Manager</a> in a timely manner. A team member who is unwilling or unfit to compete  in the World Finals will be disqualified from further ICPC  competitions. The team member may appeal disqualification to the  Appeals Committee. </p>
                <p>At on-site registration, participants must provide picture ID  (passport, drivers license, etc). Contestants must show proof of  enrollment at the university during the term of the regional contest at  which they qualified. A letter on university stationary with the  signature of a university official accompanied by an English  translation is sufficient. </p>

            </div>
        </div>
    </div>
@endsection