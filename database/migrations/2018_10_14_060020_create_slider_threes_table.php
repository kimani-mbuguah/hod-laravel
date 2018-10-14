<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_threes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('text_one');
            $table->string('text_two');
            $table->string('text_three');
            $table->string('bg_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_threes');
    }
}
