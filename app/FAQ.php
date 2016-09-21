<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * Class FAQ
 * @package App
 *
 * @property string q
 * @property string a
 */
class FAQ extends Eloquent
{
    public static $data = [
        [
            'q' => 'What is ACM/ICPC?',
            'a' => 'ACM International Collegiate Programming Contest (abbreviated as  ACM/ICPC or just ICPC) is an
annual activity of the Association for Computing  Machinery (ACM) that provides college students with an opportunity to
 demonstrate and sharpen their problem-solving and computing skills. The event  is sponsored by IBM. See
 <a href="http://icpc.baylor.edu/">http://icpc.baylor.edu/</a> for details.'
        ],
        [
            'q' => 'Who can participate in the ACM/ICPC?',
            'a' => 'Everybody who can pass the
<a href="http://icpc.baylor.edu/download/regionals/rules/EligibilityDecisionTree-2014.pdf">Eligibility  Decision Tree</a>.'
        ],
        [
            'q' => 'Which  materials are allowed in contest day?',
            'a' => 'In fact in final round there are  complicated rules (you can see the rules
<a href="http://cm2prod.baylor.edu/ICPCWiki/Wiki.jsp?page=On-Site%20Registration">here</a>).  But in our local contest,
you are allowed to bring any printed material (team  notebook, reference books, note etc.) you want. But any electrical
device  (laptop, cell phone, PDA etc.) is forbidden.'
        ],
        [
            'q' => 'What is the  requirement for be a good team',
            'a' => '1) Knowledge of standard  algorithms and the ability to find an appropriate algorithm for every
problem  in the set <br />
2) Ability to code an  algorithm into a working program<br />
3) Having a strategy of cooperation with your  teammates'
        ],
        [
            'q' => 'Where can i  find appropriate book and paper to learn more about algorithms?',
            'a' => 'See the <a href="/links">useful links</a>!'
        ],
        [
            'q' => 'Is there  training website for ACM/ICPC?',
            'a' => 'Yes.  There is a lot of websites; you can see some  of them in the <a href="/links">useful links</a>
(Online judges).'
        ],
        [
            'q' => 'Am I supposed  to know English?',
            'a' => 'In official contests the problems  are in English. If you can read the problems it is enough.'
        ],
    ];

}
