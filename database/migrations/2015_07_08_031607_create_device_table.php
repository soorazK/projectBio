<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('device')){
        Schema::create('device', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('device', function (Blueprint $table){
           $table->string('device_id');
           $table->UnsignedBigInteger('api_id');
           $table->enum('status',['active','inactive']);
$table->engine = 'InnoDB';
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
        Schema::dropIfExists('device');
    }
}
