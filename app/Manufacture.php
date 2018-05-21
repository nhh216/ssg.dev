<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    //
    protected $table = 'manufactures';

    public  function all_product()
    {
        return $this->hasMany('App\AllProducts');
    }
    public  function products()
    {
        return $this->hasMany('App\Product');
    }

}
