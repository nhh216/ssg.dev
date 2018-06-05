<?php

namespace Modules\Frontend\Http\Controllers;

use App\AllProducts;
use App\Attribute;
use App\Attribute_Value;
use App\Category;
use App\Coupon;
use App\Manufacture;
use App\Post;
use App\Post_tag;
use App\Product;
use App\Site;
use App\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at','desc')->limit(5)->get();
        $post  = Post::orderBy('created_at','desc')->limit(8)->get();
        return view('frontend::pages.home_page',['listcoupon'=>$coupons,'posts'=>$post]);
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
        $post  = Post::orderBy('created_at','desc')->limit(4)->get();
        $count = $product->count();
        return view('frontend::pages.products',['listproduct'=>$product, 'listmanufacture'=>$manufacture,'posts'=>$post]);
    }

    public function infoProdcut($id)
    {
        $product = Product::where('id',$id)->get();
        $config = Attribute_Value::where('product_id', $id)->with('attribute')->with('value')->get();
        $product_name = $product[0]['name'];
        $min = AllProducts::where('name','like','%'.$product_name.'%')->orderBy('price','asc')->with('site')->first();
        $max = AllProducts::where('name','like','%'.$product_name.'%')->max('price');
        $count = AllProducts::where('name','like','%'.$product_name.'%')->count();
        $site = Site::with(['allProducts' => function($query) use ($product_name) {
            $query->where('name','like','%'.$product_name.'%');
        }])->get();

        $data = [
            'thisProduct'=>$product,
            'config'=>$config,
            'allProduct'=>$site,
            'min'=>$min,
            'max'=>$max,
            'count'=>$count,
        ];
        return view('frontend::pages.detail_products',$data);
    }

    public function setMinPrice()
    {
        $list_product = Product::all();
        foreach ($list_product as $product)
        {
           echo $product_name = $product['name'];
           echo '<br>';
             echo  $min_price = AllProducts::where('name','like','%'.$product_name.'%')->min('price');
            echo '<br>';
             $product->min_price = $min_price;
            $product->save();
        }
    }


    public  function  getProductByName($name){
        $result = Product::where('name','like','%'.$name.'%')->get();
        return $result;
    }

    public  function  showListNews()
    {
        $new_orderby = Post::orderBy('created_at', 'desc')->limit(6)->paginate(10);
        $new = Post::orderBy('created_at', 'desc')->get();
        $categorie = Category::with('post')->get();
        $data = [
          'new'=>$new,
            'categories'=>$categorie,
                'list_new'=>$new_orderby

        ];
        return view('frontend::pages.new_page',$data);
    }

    public  function readNew($id)
    {
        $new = Post::where('id',$id)->get();
        $categorie = Category::with('post')->get();
        $tag = Post_tag::with('tag')->where('post_id',$id)->get();
        $new_orderby = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $tagValue = [];
        $productLq = [];

        foreach ($tag as $key=> $item)
        {
            if ($key<6)
            {
                $sp_lq = Product::where('name','like','%'.trim($item->tag->value).'%')->get();
                array_push($productLq,$sp_lq);
            }else{
                break;
            }
        }
        $arrPro=[];
        $i=0;
        foreach ($productLq as $value)
        {
            foreach ($value as  $v)
            {
                if ($i < 8){
                    array_push($arrPro, $v);
                }else{
                    break;
                }
                $i++;
            }
        }
        $data = [
          'new'=>$new,
          'categories'=>$categorie,
           'tag'=>$tag,
            'splq'=>$arrPro,
            'list_new'=>$new_orderby
        ];

        return view('frontend::pages.detail_news_page',$data);
    }

    public function listByCategory($id)
    {
        $new_orderby = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $new_by_category = Post::where('category_id',$id)->get();
        $categorie = Category::with('post')->get();
        $data = [
          'new'=>$new_by_category,
          'categories'=>$categorie,
          'list_new'=>$new_orderby
        ];
        return view('frontend::pages.news_by_category',$data);
    }

    public  function listCoupon()
    {
        $coupon = Coupon::paginate(10);
        $new_orderby = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $categorie = Category::with('coupons')->get();
        $data = [
            'categories'=>$categorie,
            'list_new'=>$new_orderby,
            'listcoupon'=>$coupon,
        ];
        return view('frontend::pages.coupons_page',$data);
    }



    public  function filterPro(Request $request)
    {

        $manufacture = Manufacture::with('products')->get();
        $post  = Post::orderBy('created_at','desc')->limit(4)->get();

        if (isset($request->pr))
        {
            $data = [
                'listproduct'=>$this->filterPrice($request->pr),
                'listmanufacture'=>$manufacture,
                'posts'=>$post

            ];
            return view('frontend::pages.products',$data);
        }

        if (isset($request->r))
        {
            $data = [
                'listproduct'=>$this->filterResolution($request->r),
                'listmanufacture'=>$manufacture,
                'posts'=>$post

            ];
            return view('frontend::pages.products',$data);
        }
        if (isset($request->p))
        {
            $data = [
                'listproduct'=>$this->filterBattery($request->p),
                'listmanufacture'=>$manufacture,
                'posts'=>$post

            ];
            return view('frontend::pages.products',$data);
        }



            $product = Product::paginate(16);
            $manufacture = Manufacture::with('products')->get();
            $post  = Post::orderBy('created_at','desc')->limit(4)->get();
            $count = $product->count();
            return view('frontend::pages.products',['listproduct'=>$product, 'listmanufacture'=>$manufacture,'posts'=>$post]);

    }

    public  function  filterResolution($str)
    {
        $value = (int) $str;
        $value_id = Value::select('id')->where('value','like','%'.$value.'%')->get();
        // Danh sách sản phẩm
        $arrProduct=[];
        foreach ($value_id as $id)
        {
            $product = Attribute_Value::select('product_id')->where('value_id',$id->id)->get();
            array_push($arrProduct,$product);
        }
        // Danh sách chi tiết sản phẩm
        $listID = [];
        foreach ($arrProduct as $product)
        {
            array_push($listID,$product[0]->product_id );
        }

        $listPro =  Product::whereIn ('id',$listID )->paginate(16);
        return $listPro;
    }

    public  function filterBattery($str)
    {

        $battery = Value::where('value','like','%mah%')->get();
        $arr2k = [];
        $arr2k3k = [];
        $arr3k4k = [];
        $arr4k = [];
        foreach ( $battery as $b)
        {

            if( (int)$b ->value > 4000 )
            {
                array_push($arr4k, $b->id);
            }
            if(3000< (int)$b ->value &&  (int)$b ->value < 4000 )
            {
                array_push($arr3k4k, $b->id);
            }
            if(2000< (int)$b ->value &&  (int)$b ->value < 3000 )
            {
                array_push($arr2k3k, $b->id);
            }

            if( (int)$b ->value < 2000 )
            {
                array_push($arr2k, $b->id);
            }

        }

        switch ($str)
        {
            case 1;
                $arr_product = Attribute_Value::select('product_id')->whereIn('value_id',$arr2k)->with('product')->get();
                break;
            case 2;
                $arr_product = Attribute_Value::select('product_id')->whereIn('value_id',$arr2k3k)->get();
                break;
            case 3;
                $arr_product= Attribute_Value::select('product_id')->whereIn('value_id',$arr3k4k)->get();
                break;
            case 4;
                $arr_product= Attribute_Value::select('product_id')->whereIn('value_id',$arr4k)->get();
                break;

        }
        $listID = [];
        foreach ($arr_product as $product)
        {
            array_push($listID,$product->product_id );
        }

        $listPro =  Product::whereIn ('id',$listID )->paginate(16);

        return $listPro;

    }

    public  function  filterPrice($id)
    {
         switch ((int)$id) {
            case 1;
                $product = Product::where('min_price','<',3000000)->paginate(16);
                break;
            case 2;
                $product = Product::where('min_price','<',3000000)->paginate(16);
                break;
            case 3;
                $product = Product::where('min_price','>',3000000)->where('min_price','<',50000000)->paginate(16);
                break;
            case 4;
                $product = Product::where('min_price','>',5000000)->where('min_price','<',100000000)->paginate(16);
                break;
            case 5;
                $product = Product::where('min_price','>',10000000)->where('min_price','<',150000000)->paginate(16);
                break;
            case 6;
                $product = Product::where('min_price','>',15000000)->where('min_price','<',200000000)->paginate(16);
                break;
            case 7;
                $product = Product::where('min_price','>',200000000)->paginate(16);
                break;
        }

        return $product;

    }

}
