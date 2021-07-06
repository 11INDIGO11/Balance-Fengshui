<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoredatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storedatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('m_user_id');
            $table->bigInteger('m_low_element_id');
            $table->bigInteger('m_age_range_id');
            $table->bigInteger('m_element_id');
            $table->bigInteger('m_birth_data_id');
            $table->string('m_name');
            $table->string('m_relationship');
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
        Schema::dropIfExists('storedatas');
    }
}
