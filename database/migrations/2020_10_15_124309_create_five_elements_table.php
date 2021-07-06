<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiveElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('five_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_id');
            $table->integer('wood');
            $table->integer('fire');
            $table->integer('soil');
            $table->integer('gold');
            $table->integer('water');
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
        Schema::dropIfExists('five_elements');
    }
}
