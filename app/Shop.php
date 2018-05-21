<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $table = 'shops';

    public  function  site()
    {
        return $this->belongsTo('App\Site');
    }
}
