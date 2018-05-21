<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/17/2018
 * Time: 12:19 AM
 */

namespace Modules\Backend\Http\Controllers;


use App\Http\Controllers\Controller;

class NewController extends  Controller
{
    public  function showEditorPage()
    {
        return view('backend::pages.editor');
    }
}