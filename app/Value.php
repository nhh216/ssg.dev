<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    //
    protected $table = 'values';
    protected  $guarded = [];

    public  function  attributes()
    {
        return $this->belongsToMany('App\Attribute','attribute_value','value_id','attribute_id');
    }
}
