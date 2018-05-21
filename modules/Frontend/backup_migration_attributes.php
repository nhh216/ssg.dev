<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            /* Thông số cơ bản */
            $table->increments('id');
            $table->string('resolution')->nullable();
            $table->string('camera_front')->nullable();
            $table->string('camera_behind')->nullable();
            $table->string('cpu_speed')->nullable();
            $table->string('cpu_core')->nullable();
            $table->string('chipset')->nullable();
            $table->string('ram')->nullable();
            $table->string('gpu')->nullable();
            $table->string('rom')->nullable();
            $table->string('size')->nullable();
            $table->string('os')->nullable();
            /* Màn hình */
            $table->string('cn_monitor')->nullable();
            $table->string('mau_monitor')->nullable();
            $table->string('chuan_monitor')->nullable();
//            $table->string('resolution')->nullable();
            $table->string('cn_camung')->nullable();
            $table->string('loai_matkinh')->nullable();
            /* Camera trước */
//            $table->string('camera_front')->nullable();
            $table->string('info_camera_front')->nullable();
            /* Camera sau */
//            $table->string('camera_behind')->nullable();
            $table->string('video')->nullable();
            $table->string('flash')->nullable();
            $table->string('info_camera_behind')->nullable();
            /* Cấu hình phần cứng */
//            $table->string('cpu_speed')->nullable();
//            $table->string('cpu_core')->nullable();
//            $table->string('chipset')->nullable();
//            $table->string('ram')->nullable();
//            $table->string('gpu')->nullable();
            $table->string('sensor')->nullable();
            /* Bộ nhớ & Lưu trữ */
            $table->string('contact')->nullable();
//            $table->string('rom')->nullable();
            $table->string('bncl')->nullable();
            $table->string('the_nho')->nullable();
            $table->string('sp_the_nho')->nullable();
            /* Thiết kế & Trọng lượng */
            $table->string('kieudang')->nullable();
            $table->string('chatlieu')->nullable();
//            $table->string('size')->nullable();
            $table->string('trongluong')->nullable();
            $table->string('chongnuoc')->nullable();
            /* Thông tin Pin */
            $table->string('loai_pin')->nullable();
            $table->string('dung_luong')->nullable();
            $table->string('thao_roi')->nullable();
            $table->string('thoigian_cho')->nullable();
            $table->string('thoigian_damthoai')->nullable();
            $table->string('thoigian_sac')->nullable();
            $table->string('sac_nhanh')->nullable();
            /* Kết nối và cổng giao tiếp */
            $table->string('2G')->nullable();
            $table->string('3G')->nullable();
            $table->string('4G')->nullable();
            $table->string('hai_sim')->nullable();
            $table->string('khe_sim')->nullable();
            $table->string('wifi')->nullable();
            $table->string('gps')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('gprs/edge')->nullable();
            $table->string('nfc')->nullable();
            $table->string('congsac')->nullable();
            $table->string('in_output')->nullable();
            /* Giải trí và ứng dựng */
            $table->string('movie')->nullable();
            $table->string('music')->nullable();
            $table->string('record')->nullable();
            $table->string('fm_radio')->nullable();
//            $table->string('flash')->nullable();
            $table->string('chuc_nang_khac')->nullable();
            /* Bảo hành */
            $table->string('time_bh')->nullable();
            /* Hệ điều hành */
//            $table->string('os')->nullable();

            $table->string('product_id')->nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
