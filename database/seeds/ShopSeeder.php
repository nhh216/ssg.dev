<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopList=[
            [
                'id'=>'1',
                'name'=>'Nguyễn Kim',
                'link'=>'https://www.nguyenkim.com',

            ],
           
        ];

        foreach($shopList as $record) {
            Shop::create($record);
        }

    }
}
