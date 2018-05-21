<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $table = 'coupons';

    public  function  cate_coupons()
    {
        return $this->belongsToMany('App\CateCoupon');
    }
}
