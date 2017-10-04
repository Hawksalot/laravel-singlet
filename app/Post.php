<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'type',
        //'commentID',
        'feedID',
        //'imageID',
        //'ownerID',
        //'textID',
        //'videoID',
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
     * a post may have 0+ images
     */
//    public function image()
//    {
//        $this->hasMany('image', 'id', 'imageID');
//    }

    /*
     * a post may have 1 owner
     */
//    public function owner()
//    {
//        //
//    }

    /*
     * a post may have 0+ texts
     */
//    public function text()
//    {
//        $this->hasMany('text', 'id', 'textID');
//    }

    /*
     * a post may have 0+ videos
     */
//    public function video()
//    {
//        $this->hasMany('video', 'id', 'videoID');
//    }
}
