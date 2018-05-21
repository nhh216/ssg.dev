<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/8/2018
 * Time: 12:48 AM
 */

namespace Modules\Backend\Http\Controllers;
use App\Attribute;
use App\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;

class ProductController
{
    public function listProduct()
    {
        $products = Product::with('manufacture')->with('attributes')->get();
        return view('backend::pages.listproduct',['listproduct'=>$products]);
    }

    public  function getProduct(Request $request)
    {

        $product = Product::where('id',$request->id)->with('manufacture')->with('attributes')->get();
        return $product;
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
        $attribute->camera = $request->camera;
        $attribute->pin = $request->pin;
        $attribute->ram = $request->ram;
        $attribute->cpu = $request->cpu;
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