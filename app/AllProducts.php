<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllProducts extends Model
{
    protected $table = 'all_products';

    public  function manufacture()
    {
        return $this->belongsTo('App\Manufacture');
    }
    public  function site()
    {
        return $this->belongsTo('App\Site');
    }

}
