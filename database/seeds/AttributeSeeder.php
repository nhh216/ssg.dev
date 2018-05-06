<?php

use Illuminate\Database\Seeder;
use App\Attribute;
class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataAttributeList = [
            [
                'id'=>'1',
                'name'=>'Màn Hình'
            ],
            [
                'id'=>'2',
                'name'=>'Camera'
            ],
            [
                'id'=>'3',
                'name'=>'Pin'
            ],
            [
                'id'=>'4',
                'name'=>'Ram'
            ],
            [
                'id'=>'5',
                'name'=>'CPU'
            ],
            [
                'id'=>'6',
                'name'=>'HĐH'
            ],
            [
                'id'=>'7',
                'name'=>'Sim:'
            ]
        ];

        foreach($dataAttributeList as $record) {
            Attribute::create($record);
        }

    }
}
