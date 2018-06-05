<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $table = 'coupons';

    public  function  category()
    {
        return $this->belongsToMany('App\Category');
    }
}
