<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTable extends Migration
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
          $table->integer('recipe_category_id');
          $table->string('recipe_name');
          $table->text('ingredients');
          $table->text('directions');
          $table->string('recipe_image');
          $table->string('recipe_image_thumb');
          $table->string('slug');
          $table->date('post_time');
          $table->string('active', 1)->default('Y');
          $table->string('show_homepage', 1)->default('N');
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
