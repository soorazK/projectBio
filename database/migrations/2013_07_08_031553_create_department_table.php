<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('department')){
        Schema::create('department', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('department', function (Blueprint $table){
        $table->string('department_name');
        $table->engine = 'InnoDB';
        $table->unsignedBigInteger('shift_id');
        $table->foreign('shift_id')->references('id')->on('shift')->unsigned();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
