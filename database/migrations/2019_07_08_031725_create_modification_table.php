<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('modification')){
        Schema::create('modification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('modification', function (Blueprint $table){
        $table->UnsignedBigInteger('user_id');
        $table->engine = 'InnoDB';
        $table->foreign('user_id')->references('id')->on('users')->unsigned();
        $table->string('table_name');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modification');
    }
}
