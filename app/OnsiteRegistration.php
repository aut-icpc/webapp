<?php

namespace App;

use Moloquent\Eloquent\Model as Eloquent;


/**
 * Class OnsiteRegistration
 * @package App
 *
 * @property string team_name
 * @property string institute_name
 * @property string site
 * @property array members
 */
class OnsiteRegistration extends Eloquent
{

    protected $fillable = [
        'team_name',
        'institute_name',
        'site',
        'members',
    ];

}
