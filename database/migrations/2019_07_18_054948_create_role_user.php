<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->UnsignedBigInteger('role_id');
          $table->UnsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users')->unsigned();
          $table->foreign('role_id')->references('id')->on('role')->unsigned();
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
        Schema::dropIfExists('role_user');
    }
}
