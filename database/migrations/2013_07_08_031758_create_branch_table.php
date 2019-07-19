<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('branch')){
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('branch', function (Blueprint $table){
          $table->string('branch_name');
          $table->engine = 'InnoDB';
          $table->string('location');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
}
