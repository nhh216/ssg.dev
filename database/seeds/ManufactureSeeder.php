<?php

use Illuminate\Database\Seeder;
use App\Manufacture;
class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufactureList=[
            [
                'id'=>'1',
                'name'=>'Apple'
            ],
            [
                'id'=>'2',
                'name'=>'SamSung'
            ],
            [
                'id'=>'3',
                'name'=>'Sony'
            ],
            [
                'id'=>'4',
                'name'=>'Oppo'
            ],
            [
                'id'=>'5',
                'name'=>'HTC'
            ],
            [
                'id'=>'6',
                'name'=>'Huawei'
            ],
            [
                'id'=>'7',
                'name'=>'Vivo'
            ],
            [
                'id'=>'8',
                'name'=>'Motorola'
            ],
            [
                'id'=>'9',
                'name'=>'Philips'
            ],
            [
                'id'=>'10',
                'name'=>'Mobistar'
            ],
            [
                'id'=>'11',
                'name'=>'Nokia'
            ],
            [
                'id'=>'12',
                'name'=>'Asus'
            ],
            [
                'id'=>'13',
                'name'=>'Xiaomi'
            ],
            [
                'id'=>'14',
                'name'=>'Masstel'
            ],
        ];

        foreach($manufactureList as $record) {
            Manufacture::create($record);
        }

    }
}
