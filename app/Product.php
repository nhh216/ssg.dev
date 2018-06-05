<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $guarded = [];

    public function detail()
    {
        return $this->belongsTo('App\Detail');
    }

    public  function attribute_value()
    {
        return $this->hasMany('App\Attribute_Value');
    }

    public  function  manufacture()
    {
        return $this->belongsTo('App\Manufacture');
    }

    public  function site()
    {
        return $this-> hasMany('App\Site');
    }

//    public function getAttributes() {
//        $result = Attribute_Value::where('product_id', $this->id)->with('attribute')->with('value')->get();
//        return $result;
//    }

    public  function  updateProduct()
    {
        $str = $this->id . '-' .str_slug($this->name,'-');
        $this->slug = $str;
        $this->save();
    }
    public  function  updateMinPrice()
    {
        $all_pro = AllProducts::all();
        $min_price = AllProducts::where('name','like','%'.$this->name.'%')->orderBy('price','asc')->with('site')->first();
        $this->min_price = $min_price->price;
        $this->save();

    }
}
