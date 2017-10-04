<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'hash',
        'postID'
    ];

    /*
     * the same image can be used in multiple posts
     */
    public function post()
    {
        $this->belongsToMany('post', 'posts', 'id', 'postID');
    }
}
