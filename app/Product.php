<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function detail()
    {
        return $this->belongsTo('App\Detail');
    }

    public  function attributes()
    {
        return $this->hasMany('App\Attribute');
    }
}
