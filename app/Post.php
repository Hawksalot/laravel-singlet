<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'type',
        'feedID',
        //'ownerID',
    ];

    /*
     * a post may have many comments
     */
//    public function comment()
//    {
//        $this->hasMany('comment', 'id', 'commentID');
//    }

    /*
     * a post may be on its original feed or hosted on another feed
     */
    public function feed()
    {
        $this->belongsToMany('App\Feed');
    }

    /*
     * a post may have 1 owner
     */
//    public function owner()
//    {
//        //
//    }
}
