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
    	Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar');
            $table->integer('organization_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
        $table->foreign('organization_id')->references('id')->on('organizations');
        $table->foreign('role_id')->references('id')->on('user_roles');
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
