<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('login_history')){
        Schema::create('login_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('login_history', function (Blueprint $table){
          $table->UnsignedBigInteger('user_id');
          $table->engine = 'InnoDB';
          $table->foreign('user_id')->references('id')->on('users')->unsigned();
          $table->time('login_time');
          $table->time('logout_time');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_history');
    }
}
