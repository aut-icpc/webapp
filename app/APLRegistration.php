<?php

namespace App;

use Moloquent\Eloquent\Model as Eloquent;

/**
 * Class OnlineRegistration
 * @package App
 *
 * @property string institute_name
 * @property array members
 * @property array status
 * @property boolean register_is_ok
 */

class APLRegistration extends Eloquent
{

    /** Mass Assignable attributes
     * @var array
     */
    protected $fillable = [
        'team_name',
        'institute_name',
        'site',
        'members',
    ];
}
