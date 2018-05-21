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
                'name'=>'Mobiistar'
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
            [
                'id'=>'15',
                'name'=>'Mobell'
            ],
            [
                'id'=>'16',
                'name'=>'BlackBerry'
            ],
            [
                'id'=>'17',
                'name'=>'Itel'
            ],
            [
                'id'=>'18',
                'name'=>'Meizu'
            ],
            [
                'id'=>'19',
                'name'=>'Lenovo'
            ],
            [
                'id'=>'20',
                'name'=>'Wiko'
            ],
        ];

        foreach($manufactureList as $record) {
            $record['slug'] = $record['id'].'-'. str_slug($record['name'],'-');
            Manufacture::create($record);
        }

    }
}
