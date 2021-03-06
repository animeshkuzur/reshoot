<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio');
            $table->string('phone')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('city');
            $table->string('country');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('user_details',function($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
