<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/21/2018
 * Time: 3:17 PM
 */

namespace Modules\Backend\Http\Controllers;
use App\Manufacture;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;


class BannerController extends Controller
{

    public function  editBannerADS()
    {

        return view('backend::pages.edit_banner_top');
    }
}