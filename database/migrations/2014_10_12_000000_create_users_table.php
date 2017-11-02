<?php

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
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('phonenumber')->unique()->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('address')->nullable();
            $table->string('addresscomp')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin', 'accountant']);
            $table->enum('member', [0, 1]);
            $table->rememberToken();
            $table->timestamps();
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
