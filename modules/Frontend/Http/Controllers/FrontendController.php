<?php

namespace Modules\Frontend\Http\Controllers;

use App\AllProducts;
use App\Attribute;
use App\Coupon;
use App\Manufacture;
use App\Product;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at','desc')->limit(5)->get();
        return view('frontend::pages.home',['listcoupon'=>$coupons]);
    }

    /**
     * Show the form for creating a new resource.
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('frontend::edit');
    }



    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {

    }
    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public  function showListProducts()
    {
        $product = Product::paginate(16);
        $manufacture = Manufacture::with('products')->get();
        $count = $product->count();
        return view('frontend::pages.dien_thoai',['listproduct'=>$product, 'listmanufacture'=>$manufacture]);
    }

    public function infoProdcut($id)
    {
        $product = Product::where('id',$id)->get();
        $config =  Attribute::where('product_id',$id)->get();
        $product_name = $product[0]['name'];
        $min = AllProducts::where('name','like','%'.$product_name.'%')->min('price');
        $max = AllProducts::where('name','like','%'.$product_name.'%')->max('price');
        $site = Site::with(['allProducts' => function($query) use ($product_name) {
            $query->where('name','like','%'.$product_name.'%');
        }])->get();
        $data = [
            'thisProduct'=>$product,
            'config'=>$config,
            'allProduct'=>$site,
            'min'=>$min,
            'max'=>$max,
        ];
        return view('frontend::pages.product_detail',$data);
    }

    public function setMinPrice()
    {
        $list_product = Product::all();
        foreach ($list_product as $product)
        {
           echo $product_name = $product['name'];
           echo '<br>';
             echo  $min_price = AllProducts::select('price')->where('name','like','%'.$product_name.'%')->min('price');
            echo '<br>';
             $product->min_price = $min_price;
            $product->save();
        }
    }

    public  function  filterByRes($res)
    {
        $attribute = Attribute::where('resolution','like','%'.$res.'%')->paginate(16);
        return $attribute;
    }

}
