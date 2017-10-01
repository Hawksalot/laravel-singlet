<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'hash',
        'title',
        'postID',
        'userID'
    ];

    /*
     * the same image can be used in multiple posts
     */
    public function post()
    {
        $this->hasMany('post', 'id', 'postID');
    }

    /*
     * the same image can be used by multiple users
     */
    public function user()
    {
        $this->hasMany('user', 'id', 'userID');
    }
}
