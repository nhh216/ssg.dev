<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';

    public  function values()
    {
        return $this->hasMany('App\Value');
    }

    public  function products()
    {
        return $this->belongsTo('App\Product');
    }

}
