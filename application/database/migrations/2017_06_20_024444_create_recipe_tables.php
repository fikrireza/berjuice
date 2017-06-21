<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_recipe', function(Blueprint $table){
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->string('name')->unique();
          $table->string('recipe_img');
          $table->text('ingredients');
          $table->text('directions');
          $table->date('publish_date');
          $table->integer('show_homepage')->unsigned();
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
