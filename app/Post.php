<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public  function post_tag()
    {
        return $this->hasMany('App\Post_Tag');
    }

    public  function tags()
    {
        return $this->belongsToMany('App\Tag','post_tag','post_id','tag_id');
    }
}
