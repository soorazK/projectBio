<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('transaction')){
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('transaction', function (Blueprint $table){
        $table->UnsignedBigInteger('user_id');
        $table->UnsignedBigInteger('device_id');
        $table->UnsignedBigInteger('api_id');
        $table->engine = 'InnoDB';
        $table->foreign('user_id')->references('id')->on('users')->unsigned();
        $table->foreign('device_id')->references('id')->on('device')->unsigned();
        $table->foreign('api_id')->references('id')->on('api')->unsigned();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
