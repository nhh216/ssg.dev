<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute_Value extends Model
{
    protected $table = 'attribute_value';
    protected $guarded=[];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }

    public function value()
    {
        return $this->belongsTo('App\Value');
    }

}
