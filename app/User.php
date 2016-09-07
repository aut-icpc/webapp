<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 *
 * @property string name
 * @property string email
 * @property boolean admin
 * @property integer access_level
 * @property string img
 */

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Static Access Levels
     * @var int
     */
    public static $SIMPLE_USER = 1;
    public static $SUPER_ADMIN = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'access_level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param boolean $admin
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->admin;
    }
}
