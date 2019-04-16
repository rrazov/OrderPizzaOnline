<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('username'); 
            $table-> string('email')->unique();
            $table-> string('name');
            $table-> string('address');
            $table-> string('tel');
            $table-> string('password');
            $table->enum('role',['user','admin']);
            $table->timestamps();
             $table->rememberToken();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
