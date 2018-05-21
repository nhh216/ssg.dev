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
        Schema::dropIfExists('attributes');
        Schema::create('attributes', function (Blueprint $table) {
            /* Thông số cơ bản */
            $table->increments('id');
            $table->integer('product_id');
            $table->string('resolution')->nullable();
            $table->string('behind_cam')->nullable();
            $table->string('front_cam')->nullable();
            $table->string('cpu_speed')->nullable();
            $table->string('cpu_core')->nullable();
            $table->string('chipset')->nullable();
            $table->string('ram')->nullable();
            $table->string('gpu')->nullable();
            $table->string('rom')->nullable();
            $table->string('os')->nullable();
            $table->string('battery')->nullable();
            $table->string('sim')->nullable();
            $table->text('des')->nullable();
            $table->timestamps();
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
