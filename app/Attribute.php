<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';

    public  function value()
    {
        return $this->hasMany('App\Value');
    }

    public  function product()
    {
        return $this->belongsTo('App\Product');
    }

}
