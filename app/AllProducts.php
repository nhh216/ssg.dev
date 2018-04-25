<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllProducts extends Model
{
    protected $table = 'all_products';

    public  function manufactures()
    {
        return $this->belongsTo('App\Manufacture');
    }
}
