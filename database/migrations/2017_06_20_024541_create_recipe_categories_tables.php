<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_recipe_categories', function(Blueprint $table){
          $table->increments('id');
          $table->string('category_name');
          $table->string('category_description');
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
