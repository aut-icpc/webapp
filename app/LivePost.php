<?php

namespace App;
use Carbon\Carbon;
use Moloquent\Eloquent\Model as Eloquent;



/**
 * Class LivePost
 * @package App
 * @property string title
 * @property string picture
 * @property mixed message
 * @property Carbon published_at
 * @property User author
 * @property boolean RTL
 */
class LivePost extends Eloquent
{

    /**
     * @var array
     */
    public $fillable = ['title', 'body', 'picture', 'RTL'];

    /**
     * @return \Moloquent\Relations\EmbedsOne
     */
    public function author() {
        return $this->embedsOne('App\User');
    }
}
