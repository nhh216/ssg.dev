<?php

use App\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteList=[
            [
                'id'=>'1',
                'link'=>'https://www.lazada.vn/',
                'name'=>'Lazada',
                'logo'=>'upload/stores/lazada-logo.png'
            ],
            [
                'id'=>'2',
                'link'=>'https://www.dienmayxanh.com/',
                'name'=>'Điện Máy Xanh',
                'logo'=> 'https://img.sosanhgia.com/images/8453c49bf5724358b19a0607e0c90e53/dien-may-xanh.jpg'
            ],
            [
                'id'=>'3',
                'link'=>'https://fptshop.com.vn/',
                'name'=>'Fpt Shop',
                'logo'=>'https://img.sosanhgia.com/images/7ee7d4275bd84edf8ab0e8d73ad61a06/fpt-shop.jpg'
            ],
            [
                'id'=>'4',
                'link'=>'https://www.adayroi.com/',
                'name'=>'A Đây Rồi!',
                'logo'=>'https://img.sosanhgia.com/images/0e1f29b8e11d41628b40def541349db4/adayroi.jpg'
            ],
            [
                'id'=>'5',
                'link'=>'https://shopee.vn/',
                'name'=>'Shopee',
                'logo'=>'https://img.sosanhgia.com/images/1ef1aee0e2cb435893d32fe07031ec0c/shopee-mall.jpg'
            ],
            [
                'id'=>'6',
                'link'=>'https://cellphones.com.vn/',
                'name'=>'CellPhone',
                'logo'=>'https://img.sosanhgia.com/images/c86bbd6021784c708a4740c7276fc5f8/cellphones.jpg'
            ],
            [
                'id'=>'7',
                'link'=>'https://www.thegioididong.com/',
                'name'=>'Thế Giới Di Động',
                'logo'=>'https://img.sosanhgia.com/images/935cbadd4fce4cb795c84796e4862d1a/the-gioi-di-dong.jpg'
            ],
            [
                'id'=>'8',
                'link'=>'https://tiki.vn/',
                'name'=>'Tiki',
                'logo'=>'https://img.sosanhgia.com/images/2fe604500fe548aa94e52d2d3849a8ca/tiki.jpg'
            ],
            [
                'id'=>'9',
                'link'=>'https://hoanghamobile.com/',
                'name'=>'Hoàng Hà Mobile',
                'logo'=>'https://img.sosanhgia.com/images/cc0c612cbe2e4d60b771a22478877b96/hoang-ha-mobile.jpg'
            ],
            [
                'id'=>'10',
                'link'=>'https://www.nguyenkim.com/',
                'name'=>'Nguyễn Kim',
                'logo'=>'https://img.sosanhgia.com/images/4ece80f1c66b476990fe84de956afafb/nguyen-kim.jpg'
            ],
            [
                'id'=>'11',
                'link'=>'https://www.dienthoaididong.com/',
                'name'=>'Nhật Cường',
                'logo'=>'https://img.sosanhgia.com/images/b9926fe25fa24e8ea96b421cd6eaa7d3/nhat-cuong-mobile.jpg'
            ],


        ];


        foreach($siteList as $record) {
            $record['slug'] = str_slug($record['name'],'-');
            Site::create($record);
        }

    }
}
