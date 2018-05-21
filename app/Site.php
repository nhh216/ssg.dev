<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'sites';

    public function allProducts()
    {
        return $this->hasMany('App\AllProducts');
    }

    public  function products()
    {
        return $this->hasMany('App\Product');
    }
}
