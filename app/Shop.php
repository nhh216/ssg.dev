<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $table = 'shops';

    public  function  sites()
    {
        return $this->belongsTo('App\Site');
    }
}
