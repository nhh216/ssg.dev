<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';
    protected  $guarded = [];


    public  function values()
    {
        return $this->belongsToMany('App\Value','attribute_value','attribute_id','value_id');
    }




}
