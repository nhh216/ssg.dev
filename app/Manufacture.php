<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    //
    protected $table = 'manufactures';

    public  function all_products()
    {
        return $this->hasMany('App\AllProducts');
    }
}
