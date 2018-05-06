<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    //
    protected $table = 'values';

    public  function  attributes()
    {
        return $this->belongsTo('App\Attribute');
    }
}
