<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'name',
        //'privacy',
        //'postID',
        //'ownerID',
        //'subscriberID',
    ];

//    public function post()
//    {
//        $this->hasMany('post', 'id', 'postID');
//    }
}
