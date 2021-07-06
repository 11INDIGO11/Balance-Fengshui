<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('low_elements', function (Blueprint $table) {
            $table->id();
//            $table->string('images_low');
            $table->string('low_element_value');
//            $table->string('age_range');
            $table->string('low_element');
//            $table->bigInteger('filter_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('low_elements');
    }
}
