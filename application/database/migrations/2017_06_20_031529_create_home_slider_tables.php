<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSliderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_home_slider', function(Blueprint $table){
          $table->increments('id');
          $table->string('img_slider');
          $table->string('img_alt')->nullable();
          $table->integer('position')->unsigned();
          $table->date('publish_date');
          $table->integer('flag_publish')->unsigned();
          $table->integer('actor_id')->unsigned();
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
        //
    }
}
