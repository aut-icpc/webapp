<?php

namespace App;
use Carbon\Carbon;
use Moloquent\Eloquent\Model as Eloquent;



/**
 * Class LivePost
 * @package App
 * @property string title
 * @property string picture
 * @property string original_picture
 * @property mixed body
 * @property Carbon published_at
 * @property User author
 */
class LivePost extends Eloquent
{

    public static $IMAGE_NAME_PREFIX = "AUT-ACM-ICPC";
    public static $IMAGE_ORIGINAL_SUFFIX = "_ORIGINAL";
    public static $IMAGE_COMPRESSED_SUFFIX = "_COMPRESSED";

    /**
     * @var array
     */
    public $fillable = ['title', 'body'];

    /**
     * @return \Moloquent\Relations\EmbedsOne
     */
    public function author() {
        return $this->embedsOne('App\User');
    }

    public function getImgAddress()
    {
        return asset($this->picture);
    }
}
