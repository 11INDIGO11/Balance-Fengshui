<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('year_month_day');
            $table->string('duration_data');
            $table->string('zodiac_data');
            $table->string('earth_element');
            $table->string('metal_element');
            $table->string('water_element');
            $table->string('wood_element');
            $table->string('fire_element');
            $table->string('images_zodiac');
            $table->string('images_low');
            $table->string('Low_element_01');
            $table->string('Low_element_02');
            $table->string('Age');
            $table->string('Age_range');
            $table->string('Direction');
            $table->string('Room_image_01');
            $table->string('Room_image_02');


//          Bedroom 24+18 = 42
            $table->string('F_B1');
            $table->string('F_B2');
            $table->string('F_B3');
            $table->string('F_B4');

            $table->string('M_B1');
            $table->string('M_B2');
            $table->string('M_B3');
            $table->string('M_B4');

            $table->string('MT_B1');
            $table->string('MT_B2');
            $table->string('MT_B3');
            $table->string('MT_B4');

//            Livingroom
            $table->string('F_L1');
            $table->string('F_L2');
            $table->string('F_L3');
            $table->string('F_L4');

            $table->string('M_L1');
            $table->string('M_L2');
            $table->string('M_L3');
            $table->string('M_L4');

            $table->string('MT_L1');
            $table->string('MT_L2');
            $table->string('MT_L3');
            $table->string('MT_L4');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birth_datas');
    }
}
