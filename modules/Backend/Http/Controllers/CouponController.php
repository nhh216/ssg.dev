<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/25/2018
 * Time: 11:32 AM
 */

namespace Modules\Backend\Http\Controllers;


use App\Coupon;
use App\Http\Controllers\Controller;

class CouponController extends  Controller
{
    public function listCoupon()
    {
        $coupon = Coupon::all();
        return view('backend::pages.list_coupon');
    }

}