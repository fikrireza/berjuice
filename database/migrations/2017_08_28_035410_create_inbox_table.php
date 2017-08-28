<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_inbox', function(Blueprint $table){
          $table->increments('id');
          $table->string('email');
          $table->string('name');
          $table->string('messages');
          // True = Has read; False = Not Read yet;
          $table->boolean('flag_read')->default(false);
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
