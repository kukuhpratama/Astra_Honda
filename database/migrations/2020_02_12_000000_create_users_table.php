<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jabatan',['dealer','main_dealer','salesman','purifikator']);
            $table->unsignedBigInteger('id_dealer')->nullable();	
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_dealer')->references('id_dealer')->on('dealers')->onDelete('cascade')->onUpdate('cascade');
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
