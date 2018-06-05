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
                'name'=>'Độ phân giải màn hình'
            ],
            [
                'id'=>'2',
                'name'=>'Camera trước'
            ],
            [
                'id'=>'3',
                'name'=>'Camera sau'
            ],
            [
                'id'=>'4',
                'name'=>'Tốc độ CPU'
            ],
            [
                'id'=>'5',
                'name'=>'Số nhân'
            ],
            [
                'id'=>'6',
                'name'=>'Chipset'
            ],
            [
                'id'=>'7',
                'name'=>'GPU'
            ],
            [
                'id'=>'8',
                'name'=>'ROM'
            ],
            [
                'id'=>'9',
                'name'=>'Hệ điều hành'
            ],
            [
                'id'=>'10',
                'name'=>'Dung lượng pin'
            ],
            [
                'id'=>'11',
                'name'=>'Khe cắm sim'
            ],
            [
                'id'=>'12',
                'name'=>'Chức năng khác'
            ],
            [
                'id'=>'13',
                'name'=>'RAM '
            ]
        ];

        foreach($dataAttributeList as $record) {
            Attribute::create($record);
        }

    }
}
