<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected  $guarded = [];

    public function post_tag()
    {
        return $this->hasMany('App\Post_Tag');
    }

    public  function posts()
    {
        return $this->belongsToMany('App\Post','post_tag','tag_id','post_id');
    }
}
