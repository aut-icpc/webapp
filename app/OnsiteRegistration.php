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
 * @property array status
 * @property boolean register_is_ok
 */
class OnsiteRegistration extends Eloquent
{

    public static $PENDING = ['status' => 'Pending', 'style' => 'grey lighten-4'];
    public static $PAID = ['status' => 'Paid', 'style' => 'blue lighten-4'];
    public static $APPROVED = ['status' => 'Approved', 'style' => 'green lighten-4'];
    public static $REJECTED = ['status' => 'Rejected', 'style' => 'red lighten-4'];
    public static $RESERVED = ['status' => 'Reserved', 'style' => 'lime lighten-4'];

    /** Mass Assignable attributes
     * @var array
     */
    protected $fillable = [
        'team_name',
        'institute_name',
        'site',
        'members',
    ];

    /** Not Mass Assignable
     * @var array
     */
    protected $guarded = [
        'status'
    ];

}
