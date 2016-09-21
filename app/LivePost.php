<?php

namespace App;
use Carbon\Carbon;
use Moloquent\Eloquent\Model as Eloquent;


/**
 * Class LivePost
 * @package App
 * @property string title
 * @property string image
 * @property mixed message
 * @property Carbon published_at
 * @property User author
 */
class LivePost extends Eloquent
{

    /**
     * @var array
     */
    public $fillable = ['title', 'message', 'image', 'RTL'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author() {
        return $this->belongsTo('App\User');
    }
}
