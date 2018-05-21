<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateCoupon extends Model
{
    protected $table = 'cate_coupons';

    public function coupons()
    {
        return $this->belongsToMany('App\Coupon');
    }

}
