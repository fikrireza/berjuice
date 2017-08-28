<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar')->default('user.png');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('role_id')->unsigned();
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->integer('login_count')->unsigned();
            $table->string('active', 1)->default('Y');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
