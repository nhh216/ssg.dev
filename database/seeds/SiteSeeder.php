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
                'name'=>'Lazada'
            ],
            [
                'id'=>'2',
                'link'=>'https://www.dienmayxanh.com/',
                'name'=>'Điện Máy Xanh'
            ],
            [
                'id'=>'3',
                'link'=>'https://fptshop.com.vn/',
                'name'=>'Fpt Shop'
            ],
            [
                'id'=>'4',
                'link'=>'https://www.adayroi.com/',
                'name'=>'A Đây Rồi!'
            ],
            [
                'id'=>'5',
                'link'=>'https://shopee.vn/',
                'name'=>'Shopee'
            ],
            [
                'id'=>'6',
                'link'=>'https://cellphones.com.vn/',
                'name'=>'CellPhone'
            ],
            [
                'id'=>'7',
                'link'=>'https://www.thegioididong.com/',
                'name'=>'Thế Giới Di Động'
            ],
            [
                'id'=>'8',
                'link'=>'https://tiki.vn/',
                'name'=>'Tiki'
            ],
            [
                'id'=>'9',
                'link'=>'https://hoanghamobile.com/',
                'name'=>'Hoàng Hà Mobile'
            ],
            [
                'id'=>'10',
                'link'=>'https://www.nguyenkim.com/',
                'name'=>'Nguyễn Kim'
            ],
            [
                'id'=>'11',
                'link'=>'https://www.dienthoaididong.com/',
                'name'=>'Nhật Cường'
            ],
        ];


        foreach($siteList as $record) {
            $record['slug'] = str_slug($record['name'],'-');
            Site::create($record);
        }

    }
}
