<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 4/23/2018
 * Time: 11:34 PM
 */

namespace App\Http\Controllers;

use App\AllProducts;
use App\Http\Controllers\Controller;
use App\Manufacture;
use App\Product;
use App\Shop;
use function simplehtmldom_1_5\file_get_html;
use Sunra\PhpSimple\HtmlDomParser;
use GuzzleHttp\Client;

class DomController extends Controller
{
    public function domHtml()
    {
//        $urlTiki = 'https://tiki.vn/dien-thoai-smartphone/c1795?order=price%2Casc';
//        $urlLazada = 'https://www.lazada.vn/dien-thoai-di-dong/apple--oppo--mobiistar--samsung--xiaomi--nokia--huawei/?page=1';
        $urlLotte = 'https://els.lotte.vn/api/v1/categories/687/products';
//        $urlAdayroi  = 'https://www.adayroi.com/dien-thoai-di-dong-c323?q=%3Arelevance&page=';

//        $this->getPriceLazada($urlLazada);
//        $this->getDataTiki($urlTiki);
        $this->getDataLotte($urlLotte);
//        $this->getPriceAdayroi($urlAdayroi);
//        $this->Fpt();
    }
    public function getPriceLazada($url)
    {
        $data = [];
        $content = "";
        $head = "";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 6000,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
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
//                $shop = new Shop();
                $product_name = $data['mods']['listItems'][$i]['name'];
                $product->name = $product_name;
                $product_url = $data['mods']['listItems'][$i]['productUrl'];
                $product->url = $product_url;
                $product_image = $data['mods']['listItems'][$i]['image'];
                $product->image = $product_image;
                $product_price = $data['mods']['listItems'][$i]['price'];
                $product->price = $product_price;
                $product_manu_name = $data['mods']['listItems'][$i]['brandName'];
                $manu_id = Manufacture::select('id')->where('name', $product_manu_name)->get();
//                dd($manu_id);
                $product->manu_id = $manu_id[0]->id;
                $product_shop_name = $data['mods']['listItems'][$i]['sellerName'];
                $product->shop_name = $product_shop_name;
                $product->site_id = 1;
//                 $shop->
//                print_r( $data['mods']['listItems'][$i]['description']);
                $product->save();

//             echo       $manu_id = Manufacture::select('id')->where('name',$product_manu_name)->get() . '<br>';
//                echo '<br>';
            }
        }
        $nextPage = [];
        if (isset($match2[0])) {
            $nextPage = preg_split('/"/', $match2[0]);
//            echo $nextPage[3] . '<br>';;
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
        $brand = 'data-brand';
        foreach ($listProduct as $listPr) {
            echo $listPr->children[0]->href . '<br>';
            if (isset($listPr->children(0)->children(0)->children(0)->src)) {
                echo $img = ($listPr->children(0)->children(0)->children(0))->src . '<br>';
            }
            echo $listPr->$title . '<br>';
            echo $listPr->$price . '<br>';
            echo $listPr->$brand . '<br>';
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
            $product->image = $product_image;
            $product_price = $data[0]['hits'][$i]['price_default'];
            $product->price = $product_price;
            $product->site_id = 4;
            $product_manu_name = $data[0]['hits'][$i]['product_brand'];
            $manu_id = Manufacture::select('id')->where('name', $product_manu_name)->get();
            if(isset( $manu_id[0]))
            {
                $product->manu_id = $manu_id[0]->id;
            }
            else {
                $product->manu_id = 0;
            }
            $product_shop_name = 'Lotte Mall';
            $product->shop_name = $product_shop_name;
            $product->save();

//            echo ($data[0]['hits'][$i]['name']) . '<br>';
//            echo ($data[0]['hits'][$i]['image_url']) . '<br>';
//            echo ($data[0]['hits'][$i]['url']) . '<br>';
//            echo ($data[0]['hits'][$i]['product_brand']) . '<br>';
//            echo ($data[0]['hits'][$i]['price_default']) . '<br>';
        }

    }
    public function getPriceAdayroi($url)
    {

        $html = HtmlDomParser::file_get_html($url);
        $dom = $html->find('nav.navigation');
        $lastPage = $dom[3]->children[0]->lastChild()->children[0]->attr['href'];
        $lastIndex = preg_split('~page=~',$lastPage);
        echo $lastIndex[1];
        for($i=0; $i< $lastIndex[1] ; $i++)
        {
            $url = 'https://www.adayroi.com/dien-thoai-di-dong-c323?q=%3Arelevance&page=' . $i;
            $html = HtmlDomParser::file_get_html($url);
            $dom = $html->find('div.product-item__container');
            foreach ($dom as $data)
            {
                echo $data->children[1]->children[0]->plaintext . '<br>';
                echo $data->children[1]->children[1]->children[0]->plaintext . '<br>';
                echo $data->children[0]->children[0]->attr['data-src']. '<br>';
                echo $data->children[0]->attr['href'] . '<br>';
            }
        }

    }
    public  function Fpt()
    {

        $url = 'https://fptshop.com.vn/dien-thoai?sort=gia-thap-den-cao&trang=2';
        $html = HtmlDomParser::file_get_html($url);
        $domLastPage = $html->find('div.f-cmtpaging');
        $lastPage = $domLastPage[0]->children[2]->attr['data-page'];
        $i=1;
        while ($i < $lastPage-2)
        {
            $url = 'https://fptshop.com.vn/dien-thoai?sort=gia-cao-den-thap&trang='.$i;
            $html = HtmlDomParser::file_get_html($url);
            $dom = $html->find('div.fs-lpil-if');
            $baseUrl = 'https://fptshop.com.vn';
            foreach ($dom as $data)
            {
                $product = new Product();
                echo $name = $data->children[0]->children[0]->plaintext . '<br>'; // name
                $find   = 'iphone';
                switch ($find){
                    case "iphone":
                        $pos = strpos($name, "iphone" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Apple')->get();
                        }
                        break;
                    case "samsung":
                        $pos = strpos($name, "samsung" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','SamSung')->get();
                        }
                        break;
                    case "Xperia":
                        $pos = strpos($name, "Xperia" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Sony')->get();
                        }
                        break;
                    case "Oppo":
                        $pos = strpos($name, "Oppo" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Oppo')->get();
                        }
                        break;
                    case "HTC":
                        $pos = strpos($name, "HTC");
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','HTC')->get();
                        }
                        break;
                    case "Huawei":
                        $pos = strpos($name, "Huawei");
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Huawei')->get();
                        }
                        break;
                    case "Vivo":
                        $pos = strpos($name,"Vivo" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Vivo')->get();
                        }
                        break;
                    case "Motorola":
                        $pos = strpos($name,"Motorola" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Motorola')->get();
                        }
                        break;
                    case "Philips":
                        $pos = strpos($name,"Philips" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Philips')->get();
                        }
                        break;
                    case "Mobiistar":
                        $pos = strpos($name,"Mobiistar" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Mobiistar')->get();
                        }
                        break;
                    case "Nokia":
                        $pos = strpos($name,"Nokia" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Nokia')->get();
                        }
                        break;
                    case "Asus":
                        $pos = strpos($name,"Asus" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Asus')->get();
                        }
                        break;
                    case "Xiaomi":
                        $pos = strpos($name, "Xiaomi");
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Xiaomi')->get();
                        }
                        break;
                    case "Masstel":
                        $pos = strpos($name, "Masstel" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Masstel')->get();
                        }
                        break;
                    case "Mobell":
                        $pos = strpos($name,"Mobell" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Mobell')->get();
                        }
                        break;
                    case "BlackBerry":
                        $pos = strpos($name,  "BlackBerry");
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','BlackBerry')->get();
                        }
                        break;
                    case "Itel":
                        $pos = strpos($name,"Itel" );
                        if ($pos !== false) {
                            $manu_id = $manu_facture = Manufacture::select('id')->where('name','Itel')->get();
                        }
                        break;
                }


//                echo $baseUrl . $data->children[0]->children[0]->children[0]->attr['href'] . '<br>'; // Url
//                if(isset($data->children[1]->children[0]->children[0]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[0]->children[0]->plaintext . '<br>'; // Màn Hình
//                }
//                if(isset($data->children[1]->children[0]->children[0]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[0]->children[1]->plaintext . '<br>'; // Kích thước màn hình
//                }
//                if(isset($data->children[1]->children[0]->children[1]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[1]->children[0]->plaintext . '<br>'; // Camera
//                }
//                if(isset($data->children[1]->children[0]->children[1]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[1]->children[1]->plaintext . '<br>'; // Độ phân giải camera
//                }
//                if(isset($data->children[1]->children[0]->children[2]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[2]->children[0]->plaintext . '<br>'; // Pin
//                }
//                if(isset($data->children[1]->children[0]->children[2]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[2]->children[1]->plaintext . '<br>'; // Dung Lượng Pin
//                }
//                if(isset($data->children[1]->children[0]->children[3]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[3]->children[0]->plaintext . '<br>'; // Ram:
//                }
//                if(isset($data->children[1]->children[0]->children[3]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[3]->children[1]->plaintext . '<br>'; // Dung Lượng Ram:
//                }
//                if(isset($data->children[1]->children[0]->children[4]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[4]->children[0]->plaintext . '<br>'; // CPU:
//                }
//                if(isset($data->children[1]->children[0]->children[4]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[4]->children[1]->plaintext . '<br>'; // Tốc Độ CPU:
//                }
//                if(isset($data->children[1]->children[0]->children[5]->children[0]))
//                {
//                    echo $data->children[1]->children[0]->children[5]->children[0]->plaintext . '<br>'; // Hệ Điều Hành:
//                }
//                if(isset($data->children[1]->children[0]->children[5]->children[1]))
//                {
//                    echo $data->children[1]->children[0]->children[5]->children[1]->plaintext . '<br>'; // Phiên Bản
//                }
            }
//            $i++;
        }
    }

}
