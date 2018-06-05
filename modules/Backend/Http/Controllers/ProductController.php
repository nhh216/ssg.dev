<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/8/2018
 * Time: 12:48 AM
 */

namespace Modules\Backend\Http\Controllers;
use App\Attribute;
use App\Attribute_Value;
use App\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;

class ProductController
{
    public function listProduct()
    {
        $products = Product::with('manufacture')->get();
        return view('backend::pages.list_product',['listproduct'=>$products]);
    }

//    public  function getProduct(Request $request)
//    {
//
//        $product = Product::where('id',$request->id)->with('manufacture')->with('attribute_value')->get();
//        return $product;
//    }
//

    public  function getProduct($id)
    {

        $product = Product::where('id',$id)->with('manufacture')->get();
        $attr_value = Attribute_Value::where('product_id',$id)->with('attribute')->with('value')->get();
        $data = [
          'product'=>$product,
          'att_value'=> $attr_value
        ];
        return $data;
    }

    public  function  getListManufacture()
    {
        $listManufacture = Manufacture::all();
        return $listManufacture;
    }

    public  function  updateProduct(Request $request)
    {
        $product = Product::find($request->id);
        $attribute = Attribute::find($request->config_id);
        $attribute->id = $request->config_id;
        $attribute->resolution = $request->resolution;
        $attribute->front_cam = $request->front_cam;
        $attribute->behind_cam = $request->behind_cam;
        if (isset( $request->battery))
        {
            $attribute->battery = $request->battery;
        }
        $attribute->ram = $request->ram;
        if (isset($request->cpu_speed))
        {
            $attribute->cpu_speed = $request->cpu_speed;
        }
        if (isset($request->cpu_core))
        {
            $attribute->cpu_core = $request->cpu_core;
        }
        if (isset($request->chipset))
        {
            $attribute->chipset = $request->chipset;
        }

        $attribute->os = $request->os;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->manufacture_id = $request->manufacture;
        if (isset($request->thumb))
        {
            $file = $request->thumb;
            $file->move('upload/products', $file->getClientOriginalName());
            $product->thumb = '/upload/products/'. $file->getClientOriginalName();
        }
        $slug =$request->id.'-'.str_slug( $request->name,'-');
        $product->slug = $slug;
        $product->save();
        $attribute->save();
        return redirect()->back();
    }

    public  function  newProduct(Request $request)
    {
        dd($request);
        $product = new Product();
        $product->id = $request->id;
        $product->name = $request->name;
        $product->manufacture_id = $request->manufacture;
        if (isset($request->thumb))
        {
            $file = $request->thumb;
            $file->move('upload/products', $file->getClientOriginalName());
            $product->thumb = '/upload/products/'. $file->getClientOriginalName();
        }

        $slug =$request->id.'-'.str_slug( $request->name,'-');
        $product->slug = $slug;
        $product->save();
        return redirect()->back();
    }
}