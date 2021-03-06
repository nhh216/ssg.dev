<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 4/23/2018
 * Time: 11:34 PM
 */

namespace App\Http\Controllers;

use App\AllProducts;
use App\Attribute;
use App\Attribute_Value;
use App\Http\Controllers\Controller;
use App\Manufacture;
use App\Product;
use App\Shop;
use App\Value;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use function simplehtmldom_1_5\file_get_html;
use Sunra\PhpSimple\HtmlDomParser;
use GuzzleHttp\Client;

class DomController extends Controller
{
    public function domHtml()
    {
//        $urlTiki = 'https://tiki.vn/dien-thoai-smartphone/c1795?order=price%2Casc';
//        $urlLazada = 'https://www.lazada.vn/dien-thoai-di-dong/apple--oppo--mobiistar--samsung--xiaomi--nokia--huawei/?page=1';
//        $urlLotte = 'https://els.lotte.vn/api/v1/categories/687/products';
//        $urlAdayroi  = 'https://www.adayroi.com/dien-thoai-di-dong-c323?q=%3Arelevance&page=';
//
//        $this->getPriceLazada($urlLazada);
//        $this->getDataTiki($urlTiki);
//        $this->getDataLotte($urlLotte);
//        $this->getPriceAdayroi($urlAdayroi);
//        $this->getPriceVuiVui();
        $this->HoangHa();
//        $this->Fpt();
//        $this->test();
//        $this->updateListProduct();
    }

    public function getPriceLazada($url)
    {
        $data = [];
        $content = "";
        $head = "";
        $curl = curl_init();
        ini_set('max_execution_time', 3000);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Postman-Token: 6474336c-800f-d4e8-46c1-8ef97c6d0fb2",
                "cookie: anon_uid=d39f628621bc1459d12c8729bd2b8dd2; fbm_1503824746501801=base_domain=.lazada.vn; fast-delivery-promote-popup-clicked=true; lzd_deliveryAddressInfo=%7B%22province_id%22%3A%22232%22%2C%22city_id%22%3A%22396%22%2C%22ward_id%22%3A%220%22%2C%22zip%22%3A%22%22%7D; fd_location_entered=Product+detail+page; sid=0.41144332397579; _vwo_uuid=C2A5E236D9E395AA87A7D5907C542DBA; lzd_visitor_type=returning; __utmx=234641283.yPVFvYy-QMa9j9XKzXTTcA$0:-1.1Ti-ZdWQTVK3NdFnrqKx4w$0:-1._r2A41u3RbSZFtpxjay3kg$0:-1.jEjlA0ZySHSw-X-xLr_WiA$0:-1.iw4H4CySR9qk-Fd5eAHsUg$0:2.UypbYCgwT16z6v4CJ84D3w$0:0.l61LTbvpRqyKwhkwyZyoqw$0:-1.1Am6pwIyT3GhjeeyBL3zmA$0:-1.etMaPAkmT_2fcVolBD8HKg$0:-1.wnknAYE4TcWJrys91hlF_g$0:-1.DRZGEpehTreW8acTJXgBxg$0:-1; __utmxx=234641283.yPVFvYy-QMa9j9XKzXTTcA$0:1498324350:8035200:.1Ti-ZdWQTVK3NdFnrqKx4w$0:1505102968:8035200:._r2A41u3RbSZFtpxjay3kg$0:1505102968:8035200:.jEjlA0ZySHSw-X-xLr_WiA$0:1505102968:8035200:.iw4H4CySR9qk-Fd5eAHsUg$0:1500182563:8035200:.UypbYCgwT16z6v4CJ84D3w$0:1505102968:8035200:.l61LTbvpRqyKwhkwyZyoqw$0:1503287758:8035200:.1Am6pwIyT3GhjeeyBL3zmA$0:1505102968:8035200:.etMaPAkmT_2fcVolBD8HKg$0:1506075000:8035200:.wnknAYE4TcWJrys91hlF_g$0:1506075000:8035200:.DRZGEpehTreW8acTJXgBxg$0:1506075000:8035200; cna=a1HQEeLMoywCASpyCk6Q21Lt; _vwo_uuid_v2=7C5ED67A101E2408FF5383F98EED8E4D|eecf2125ac96da772089c7caac8b4d6e; _ga=GA1.2.406154971.1497981803; rsk=es2srjqpstr1q6bf8inql34376; __utmc=234641283; s_cc=true; ga_exp_leila=New_Products_Sept_21||0; sessionid=1518275985040; t_fv=1518275985337; t_uid=d39f628621bc1459d12c8729bd2b8dd2; cto_lwid=89b2ab42-0458-4af9-8dd1-9fd4ede5543e; lzd_cid=3e0f35af-4466-4d60-f129-3d83405f540a; lzd_sid=1ca1086a87c0d6ec3258e3e9634abb59; _bl_uid=2djXpd0kzmeub9hCOh9RgzO6034p; _tb_token_=635bb4e785b5; cto_axid=LHFIU57ZSaLmt4zRej0CYUraIjr4zMZV; SnapABugHistory=1#; SnapABugVisit=1#1520857998; __utmz=234641283.1521465819.19.15.utmcsr=websosanh_vn|utmccn=(not%20set)|utmcmd=lazada_affiliate_program|utmctr=271|utmcct=4799; prod_multi_group=SE955ELAA2SH2ZVNAMZ; ki_r=; G_ENABLED_IDPS=google; 0ee66e160049abdbfe35edbbdaa14e2e=30a1d1659d9cd86453b03fc79707022adfab7c875bd9aad9a8c76ecc9c9b9918eaf07f185c272b16f783824c0248a9c2d443501de4200d961fdca1cabab4390a%3Ad4d43cfb47f358e2d91b4532cebfbeeb6fdda83585c818f5525c2dc53632fb43; lzd_first_purchase=0; t_lid=3640803; t_fpd=2018-03-17; t_lpd=2018-03-17; rr_rcs=eF4FwcERgCAMBMAPL3s5J4GQm3RgGyAw48OfWr-7abu_5xo7TaA1qzkZhW4IATS95yFFZ_WVkY0O8wgsGQ2TlUWbDev6A1hJEQI; ki_t=1497981810113%3B1521465826099%3B1521470968980%3B10%3B18; hng=VN|vi|VND|704; userLanguageML=vi; ho_lastclick_value=271%7CVN+Data-feed%7C61062%7CVN_Masoffer%7C1024bacc31f895b7dd2e4f21aca25a%7C%7C20180402103111%7Cd2047198572fd87b3955fa8b48a9d3ac11ef5dcf%7Cmo_wc7xKQEZtmJiFjx_42cJA8IXdOMJrQxABN2ePLqELKA; browserDetection=eyJ0eXBlIjoiYnJvd3NlciIsIm5hbWUiOiJDaHJvbWUiLCJjc3NDbGFzcyI6ImNocm9tZSIsInZlcnNpb24iOiI2NSIsIm9zIjoid2luZG93cyJ9; PHPSESSID_9660cdb704026c618a09bd6ad453be3f=8pjbsrjbo9j0k1gc357p41m7a0; 0ee66e160049abdbfe35edbbdaa14e2e=30a1d1659d9cd86453b03fc79707022adfab7c875bd9aad9a8c76ecc9c9b9918eaf07f185c272b16f783824c0248a9c2d443501de4200d961fdca1cabab4390a%3Ad4d43cfb47f358e2d91b4532cebfbeeb6fdda83585c818f5525c2dc53632fb43; _m_h5_tk=755ff70048c424e6e619423eb2a65be8_1522652382963; _m_h5_tk_enc=300fa99be3e655ea0c320820cc59692a; AMCV_126E248D54200F960A4C98C6%40AdobeOrg=-1506950487%7CMCMID%7C23713181687274652670315693475363898928%7CMCAAMLH-1523248906%7C3%7CMCAAMB-1523248906%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCAID%7CNONE; s_sq=%5B%5BB%5D%5D; t_sid=DBTzaeZVR1MUhNdwGKS0zWmT1Xc2oLNk; __utma=234641283.406154971.1497981803.1522644105.1522651082.23; gpv_pn=category%3A; s_vnum=1529517804028%26vn%3D22; s_invisit=true; _tsm=m%3DDirect%2520%252F%2520Brand%2520Aware%253A%2520Typed%2520%252F%2520Bookmarked%2520%252F%2520etc%7Cs%3Dlazada.vn%7Crp%3D%252F%7Crd%3Dlazada.vn; cookietest=1; JSESSIONID=F51B54EB6B2F4769BC4F76F7E3E56EF9; __utmt=1; __utmb=234641283.5.10.1522651082; isg=BMfHKiGdUZ82Itab6pRDsyKXVntRZJEEunU52Zm049Z9COfKoZwr_gXKrtBW-3Mm; s_ppvl=D%253Dch%2B%2522%253A%2522%2C18%2C18%2C647%2C724%2C647%2C1366%2C768%2C1%2CP; _uetsid=_uetcd4735c0; _ceg.s=p6jpwz; _ceg.u=p6jpwz; s_ppv=D%253Dch%2B%2522%253A%2522%2C21%2C18%2C747%2C724%2C647%2C1366%2C768%2C1%2CP",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        }
        $content = $response;
        preg_match("#<script>window.pageData=(.*)</script>#", $content, $match);
        $head = $response;
        preg_match("<link rel=\"next\" href=(.*)\">", $head, $match2);
        $data = [];
        if ($match && isset($match[1])) {
            $data = json_decode($match[1], true);
            for ($i = 0; $i < sizeof($data['mods']['listItems']); $i++) {
                $product = new AllProducts();
                $product_name = $data['mods']['listItems'][$i]['name'];
                $product->name = $product_name;
                $product_url = $data['mods']['listItems'][$i]['productUrl'];
                $product->url = $product_url;
                $product_image = $data['mods']['listItems'][$i]['image'];
                $product->thumb = $product_image;
                $product_price = intval($data['mods']['listItems'][$i]['price']);
                $product->price = $product_price;
                $product_shop_name = $data['mods']['listItems'][$i]['sellerName'];
                $product->shop_name = $product_shop_name;
                $product->site_id = 1;
                $product->save();
            }
        }
        $nextPage = [];
        if (isset($match2[0])) {
            $nextPage = preg_split('/"/', $match2[0]);
            $this->getPriceLazada($nextPage[3]);

        } else {
            echo "Done ------->";
        }
    }

    public function getDataTiki($url)
    {
        $client = new Client();
        $header = [
            'Accept-Encoding' => 'gzip, deflate, br',
            'Accept-Language' => 'vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/68.4.154 Chrome/62.4.3202.154 Safari/537.36',
            'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
        ];
        $reponse2 = $client->request('GET', $url, ['headers' => $header]); // Check lại chỗ này
        $respon = $reponse2->getBody()->getContents();
        $partOfContent = preg_split('<!--  BEGIN GOOGLE TAGMANAGER -->', $respon);
        file_put_contents(storage_path('html/tiki-head.html'), $partOfContent[0]);
        $partOfContentBody = [];
        $partOfContentBody = preg_split('</nav>', $partOfContent[1]);
        file_put_contents(storage_path('html/tiki-body.html'), $partOfContentBody[1]);
        $html = HtmlDomParser::file_get_html(storage_path('html/tiki-head.html'));
        $htmlBody = HtmlDomParser::file_get_html(storage_path('html/tiki-body.html'));
        $str = $html->find('link[rel=\'next\']');
        $listProduct = $htmlBody->find('div[class="product-item"]');
        $price = 'data-price';
        $title = 'data-title';
        $price = 'data-price';

        foreach ($listProduct as $listPr) {
            $product = new AllProducts();
            $product->url = $listPr->children[0]->href ;
            if (isset($listPr->children(0)->children(0)->children(0)->src)) {
                $product->thumb =  ($listPr->children(0)->children(0)->children(0))->src;
            }else{
                $product->thumb = '';
            }
            $product->name = $listPr->$title ;
            $product->site_id = 8 ;
            $product->price = $listPr->$price;
            $product->shop_name = 'Tiki';
            $product->save();

        }
        if (isset($str)) {
            if (isset($str['0'])) {
                echo $newUrl = $str['0']->attr['href'] . '<br>';
                $this->getDataTiki($newUrl);
            }
        }
    }

    public function getDataLotte($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"params\":{\"page\":0,\"hitsPerPage\":3000,\"facets\":[\"categories\",\"product_brand\",\"color\",\"size\",\"vendor\",\"product_brand_id\",\"vendor_id\"]}}",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json",
                "Postman-Token: d64f9340-e3f6-438c-ba42-b3dc558db4d8"
            ),
        ));

        $response = curl_exec($curl);
        $obj = json_decode($response, true);
        $data = array($obj);
        for ($i = 0; $i < count($data[0]['hits']); $i++) {
            $product = new AllProducts();
            $product_name = $data[0]['hits'][$i]['name'];
            $product->name = $product_name;
            $product_url = $data[0]['hits'][$i]['url'];
            $product->url = $product_url;
            $product_image = $data[0]['hits'][$i]['image_url'];
            $product->thumb = $product_image;
            $product_price = $data[0]['hits'][$i]['price_default'];
            $product->price = $product_price;
            $product->site_id = 12;
            $product_manu_name = $data[0]['hits'][$i]['product_brand'];
            $product_shop_name = 'Lotte Mall';
            $product->shop_name = $product_shop_name;
            $product->save();

        }

    }

    public function getPriceAdayroi($url)
    {

        $html = HtmlDomParser::file_get_html($url);
        $dom = $html->find('nav.navigation');
        $lastPage = $dom[3]->children[0]->lastChild()->children[0]->attr['href'];
        $lastIndex = preg_split('~page=~', $lastPage);
        for ($i = 0; $i < $lastIndex[1]; $i++) {
            $url = 'https://www.adayroi.com/dien-thoai-di-dong-c323?q=%3Arelevance&page=' . $i;
            $baseUrl =  'https://www.adayroi.com/';
            $html = HtmlDomParser::file_get_html($url);
            $dom = $html->find('div.product-item__container');
            foreach ($dom as $data) {
                $all_product = new AllProducts();
                $all_product->name = $data->children[1]->children[0]->plaintext;
                $all_product->price=(int) str_replace('.','',$data->children[1]->children[1]->children[0]->plaintext);
                if (isset( $data->children[0]->children[0]->attr['data-src'] ))
                {
                    $all_product->thumb = $data->children[0]->children[0]->attr['data-src'];
                }else{
                    $all_product->thumb= '';
                }
                $all_product->url= $baseUrl. $data->children[0]->attr['href'];
                $all_product->site_id=4;
                $all_product->shop_name= 'Adayroi';
                $all_product->save();
            }
        }

    }

    /*
     * Method get list product from Fpt-Shop
     *
     * Insert products into produtcs table
     */
    public function Fpt()
    {



        ini_set('max_execution_time', 3000);
        $url = 'https://fptshop.com.vn/dien-thoai?sort=gia-cao-den-thap&trang=2';
        $html = HtmlDomParser::file_get_html($url);
        $domLastPage = $html->find('div.f-cmtpaging');
        $lastPage = $domLastPage[0]->children[2]->attr['data-page'];
        $indexPage = 1;

        while ($indexPage < $lastPage - 2) {
            $url = 'https://fptshop.com.vn/dien-thoai?sort=gia-cao-den-thap&trang=' . $indexPage;
            $html = HtmlDomParser::file_get_html($url);
            $dom = $html->find('div.fs-lpil-if');
            $baseUrl = 'https://fptshop.com.vn';

            foreach ($dom as $data) {
                $dataProduct = [];
                $all_product = new AllProducts();
                $price = (int)str_replace('.', '', $data->children[0]->children[1]->plaintext);
                $all_product->price = $price;
                $name = $data->children[0]->children[0]->plaintext; // name
                $p = Product::where('name',$name)->first();
                if (isset($p))
                {
                  continue;
                }
                $all_product->name = $name;
                $all_product->shop_name = 'FPT Shop';
                $all_product->site_id = 3;
                $dataProduct['name'] = $name;

                $url = $baseUrl . $data->children[0]->children[0]->children[0]->attr['href'];

                $all_product->url = $url;
                $dataProduct['link_product'] = $url;

                if (isset($data->parent->children[0]->children[0]->children[0]->attr['data-original'])) { // URL thumb
                    $dataProduct['thumb'] = $data->parent->children[0]->children[0]->children[0]->attr['data-original'];
                    $all_product->thumb = $data->parent->children[0]->children[0]->children[0]->attr['data-original'];
                }

                if (strpos(strtolower($name), 'iphone') !== false) {
                    $manu_id = 1;
                }
                if (strpos(strtolower($name), 'samsung') !== false) {

                    $manu_id = 2;
                }
                if (strpos(strtolower($name), 'oppo') !== false) {

                    $manu_id = 4;
                }
                if (strpos(strtolower($name), 'htc') !== false) {

                    $manu_id = 5;
                }
                if (strpos(strtolower($name), 'huawei') !== false) {

                    $manu_id = 6;
                }
                if (strpos(strtolower($name), 'vivo') !== false) {

                    $manu_id = 7;
                }
                if (strpos(strtolower($name), 'xperia') !== false) {

                    $manu_id = 3;
                }
                if (strpos(strtolower($name), 'motorola') !== false) {

                    $manu_id = 8;
                }
                if (strpos(strtolower($name), 'philips') !== false) {

                    $manu_id = 9;
                }
                if (strpos(strtolower($name), 'mobiistar') !== false) {

                    $manu_id = 10;
                }
                if (strpos(strtolower($name), 'nokia') !== false) {

                    $manu_id = 11;
                }
                if (strpos(strtolower($name), 'asus') !== false) {

                    $manu_id = 12;
                }
                if (strpos(strtolower($name), 'xiaomi') !== false) {

                    $manu_id = 13;
                }
                if (strpos(strtolower($name), 'masstel') !== false) {

                    $manu_id = 14;
                }
                if (strpos(strtolower($name), 'mobell') !== false) {

                    $manu_id = 15;
                }
                if (strpos(strtolower($name), 'blackBerry') !== false) {

                    $manu_id = 16;
                }
                if (strpos(strtolower($name), 'itel') !== false) {

                    $manu_id = 17;
                }
                if (strpos(strtolower($name), 'meizu') !== false) {

                    $manu_id = 18;
                }
                if (strpos(strtolower($name), 'wiko') !== false) {

                    $manu_id = 20;
                }
                if (strpos(strtolower($name), 'lenovo') !== false) {

                    $manu_id = 19;
                }

                $dataProduct['manufacture_id'] = $manu_id;
                $product = Product::firstOrCreate($dataProduct);

                $html = HtmlDomParser::file_get_html($url);
                $dom = $html->find('ul.fs-dttsktul');
                $strDes = '';
                if (isset($dom[0]->children))
                {
                    foreach ($dom[0]->children as $element) {
                        $strDes = $strDes . $element;
                    }
                }

                $value =  new  Value();
                $attribute =  new  Attribute();
                for ($i = 1; $i < 79; $i++) {
                    if (isset($dom[0]->children[$i]->children[0]->plaintext)) {
                            $attr = $dom[0]->children[$i]->children[0]->plaintext;
                            $value = $dom[0]->children[$i]->children[1]->plaintext;
                            $attribute = Attribute::firstOrCreate(['name' => $attr]);
                            $value = Value::firstOrCreate(['value' => $value]);
                            Attribute_Value::firstOrCreate(['attribute_id' => $attribute->id,'value_id'=>$value->id,'product_id'=>$product->id]);
                    }
                }

                $all_product->save();
            }
           $indexPage++;
        }
    }

    public  function  updateListProduct()
    {
        $products = Product::all();

        foreach ($products as $product)
        {
            $product->updateMinPrice();
            if (!isset($product->slug))
            {
                $product->updateProduct();

            }

        }
    }


    public function test()
    {

//        ini_set('max_execution_time', 3000);
//        $product = Product::select('id', 'link_product')->get();
//        $fields = DB::getSchemaBuilder()->getColumnListing('attributes');
//        dd($fields);
//        $data = [];
////        foreach ($product as $key => $p) {
////            $url = $p->link_product;
//        $html = HtmlDomParser::file_get_html('https://fptshop.com.vn/dien-thoai/samsung-galaxy-a7-2017');
//        $dom = $html->find('ul.fs-dttsktul');
//        $arrConfig = [];
//        foreach ($dom[0] as $key => $ele) {
//            echo $ele;
//        }
//        array_push($data, $arrConfig);
////            $attribute = new Attribute();
////            $attribute::created($arrConfig);
//
//
////        }
//        dd($data);
    }

    public function getPriceVuiVui()
    {   ini_set('max_execution_time', 3000);
        $index = 1;
        while ($index < 6) {
            $url = 'https://www.vuivui.com/dien-thoai-di-dong/?page=' . $index . '&sort=PriceDesc';
            $html = HtmlDomParser::file_get_html($url);
            $dom = $html->find('div.itmpro');
            for ($i = 0; $i < sizeof($dom); $i++) {
                $product = new AllProducts();
                if (isset($dom[$i]->children(3)->children(0)->plaintext))
                {
                    $product->price = $price = (int) str_replace('.','',$dom[5]->children(3)->children(0)->plaintext);
                }else
                {
                    continue;
                }
                if (!isset($dom[$i]->children(0)->attr['href']))
                {
                    continue;
                }
                else
                {
                    $product->url =  $link_pro = $dom[$i]->children(0)->attr['href'] ;

                }
                $product->name = $name_pro = $dom[$i]->children(1)->plaintext ;
                if (!isset($dom[$i]->children(0)->children(0)->attr['data-src']))
                {
                    continue;

                }else{
                    $product->thumb  = $dom[$i]->children(0)->children(0)->attr['data-src'] ;

                }
                $product->site_id = 7;
                $product->shop_name= 'Vui VUi';
                $product->save();
            }
            $index++;
        }

    }

    public function HoangHa()
    {
        $url = 'https://hoanghamobile.com/dien-thoai-di-dong-c14.html?sort=11&p=1';
        $baseUrl = 'https://hoanghamobile.com';
        $html = HtmlDomParser::file_get_html($url);
        $nextPage = $html->find('div[class=\'paging\']');
        $lastPage = $nextPage[0]->children(6)->attr['href'];
        $listPage = preg_split('~p=~', $lastPage);
        $indexOfLastPage = $listPage[1];
        for ($i = 1; $i < $indexOfLastPage + 1; $i++) {
            $this->getPriceHoangHa('https://hoanghamobile.com/dien-thoai-di-dong-c14.html?sort=11&p=' . $i);
        }
    }
    public function getPriceHoangHa($url)
    {
        $html = HtmlDomParser::file_get_html($url);
        $baseUrl = 'https://hoanghamobile.com';
        foreach ($html->find('.list-item') as $element) {

            $product = new AllProducts();
            $product->name = $element->find('div.product-name',0)->text();
            $product->price =(int) str_replace('.','',$element->find('div.product-price',0)->text()) ;
            $product->url = $baseUrl . $element->find('a',0)->getAttribute('href');
            $product->thumb= $element->find('div.mosaic-backdrop img',0)->getAttribute('src');
            $product->site_id = 9;
            $product->shop_name = 'Hoàng Hà';
            $product->save();
        }
    }


}
