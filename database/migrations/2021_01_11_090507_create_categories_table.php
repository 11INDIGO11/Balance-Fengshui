<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('furniture_01');
            $table->string('furniture_02');
            $table->string('furniture_03');
            $table->string('furniture_04');
            $table->string('moodtone_01');
            $table->string('moodtone_02');
            $table->string('moodtone_03');
            $table->string('moodtone_04');
            $table->string('material_01');
            $table->string('material_02');
            $table->string('material_03');
            $table->string('material_04');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
