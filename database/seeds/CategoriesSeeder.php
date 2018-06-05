<?php

use Illuminate\Database\Seeder;
use  App\Category;
class  CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catList=[
            [
                'id'=>'1',
                'title'=>'Chuyên Mục Mã Giảm Giá',
                'parent_id'=>'0'

            ],
            [
                'id'=>'2',
                'title'=>'Sách',
                'parent_id'=>'1'

            ],
            [
                'id'=>'4',
                'title'=>'Nội thất',
                'parent_id'=>'1'
            ],
            [
                'id'=>'5',
                'title'=>'Điện thoại di động',
                'parent_id'=>'1'
            ],
            [
                'id'=>'9',
                'title'=>'Ẩm Thực',
                'parent_id'=>'1'
            ],
            [
                'id'=>'10',
                'title'=>'Công Nghệ',
                'parent_id'=>'1'
            ],
            [
                'id'=>'11',
                'title'=>'Gia Dụng',
                'parent_id'=>'1'
            ],
            [
                'id'=>'12',
                'title'=>'Mẹ và Bé',
                'parent_id'=>'1'
            ],
            [
                'id'=>'13',
                'title'=>'Thời Trang',
                'parent_id'=>'1'
            ],
            [
                'id'=>'14',
                'title'=>'Văn Phòng Phẩm',
                'parent_id'=>'1'
            ],
            [
                'id'=>'15',
                'title'=>'Du lịch',
                'parent_id'=>'1'
            ],
            [
                'id'=>'16',
                'title'=>'Travel',
                'parent_id'=>'1'
            ],
            [
                'id'=>'17',
                'title'=>'Điện tử',
                'parent_id'=>'1'
            ],
            [
                'id'=>'18',
                'title'=>'Nhà cửa và đời sống',
                'parent_id'=>'1'
            ],
            [
                'id'=>'19',
                'title'=>'Điện gia dụng',
                'parent_id'=>'1'
            ],
            [
                'id'=>'21',
                'title'=>'Phụ kiện',
                'parent_id'=>'1'
            ],
            [
                'id'=>'22',
                'title'=>'Dịch vụ',
                'parent_id'=>'1'
            ],
            [
                'id'=>'23',
                'title'=>'Các Ngành Hàng',
                'parent_id'=>'1'
            ],
            [
                'id'=>'24',
                'title'=>'Tổng Hợp',
                'parent_id'=>'1'
            ],
            [
                'id'=>'25',
                'title'=>'Khác',
                'parent_id'=>'1'
            ],
            [
                'id'=>'26',
                'title'=>'Tin Tức',
                'parent_id'=>'0'

            ],
            [
                'id'=>'27',
                'title'=>'Điện Thoại Di Động',
                'parent_id'=>'26'

            ],
            [
                'id'=>'28',
                'title'=>'Điện Thoại Samsung',
                'parent_id'=>'26'

            ],
            [
                'id'=>'29',
                'title'=>'Điện Thoại Iphone',
                'parent_id'=>'26'

            ],
            [
                'id'=>'30',
                'title'=>'Cuộc Sống',
                'parent_id'=>'26'

            ],


        ];

        foreach($catList as $record) {
            $record['slug'] = $record['id'] .'-'. str_slug($record['title'],'-');
            Category::create($record);
        }

    }
}
