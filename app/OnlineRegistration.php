<?php

namespace App;
use Moloquent\Eloquent\Model as Eloquent;

/**
 * Class OnlineRegistration
 * @package App
 *
 * @property string team_name
 * @property string institute_name
 * @property string site
 * @property array members
 * @property array status
 * @property boolean register_is_ok
 */
class OnlineRegistration extends Eloquent
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
