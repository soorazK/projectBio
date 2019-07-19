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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username')->nullable();
            $table->integer('mobile_number')->unique()->nullable();
            $table->UnsignedBigInteger('shift_id')->nullable();
            $table->UnsignedBigInteger('department_id')->nullable();
            $table->UnsignedBigInteger('role_id')->nullable();
            $table->UnsignedBigInteger('branch_id')->nullable();
            $table->string('fingerprint_key')->nullable();
            $table->enum('status',['active','inactive'])->nullable();
            $table->string('RFID_key')->nullable();
            $table->string('image_key')->nullable();
            $table->foreign('department_id')->references('id')->on('department')->unsigned();
            $table->foreign('shift_id')->references('id')->on('shift')->unsigned();
            $table->foreign('role_id')->references('id')->on('role')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branch')->unsigned();

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
