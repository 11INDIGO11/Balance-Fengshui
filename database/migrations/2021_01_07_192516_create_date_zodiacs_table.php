<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateZodiacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_zodiacs', function (Blueprint $table) {
            $table->id();
            $table->string('year_month_day');
            $table->string('duration');
            $table->string('zodiac_data');
//            $table->string('images_zodiac');
            $table->bigInteger('id_zodiac');
            $table->bigInteger('id_element');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_zodiacs');
    }
}
