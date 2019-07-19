<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('roles')){
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    Schema::table('role', function (Blueprint $table){
        $table->string('role_name');
        $table->engine = 'InnoDB';
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
