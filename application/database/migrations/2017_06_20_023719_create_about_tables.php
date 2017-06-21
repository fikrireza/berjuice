<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_about', function(Blueprint $table){
          $table->increments('id');
          $table->text('about_description');
          $table->string('director_img');
          $table->text('director_description');
          $table->string('certification_img');
          $table->text('milestones_1');
          $table->text('milestones_2');
          $table->text('milestones_3');
          $table->text('milestones_4');
          $table->text('milestones_5');
          $table->text('milestones_6');
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
