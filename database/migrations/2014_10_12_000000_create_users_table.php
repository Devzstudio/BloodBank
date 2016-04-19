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
            $table->Integer('age');
            $table->Integer('weight');
            $table->String('group');
            $table->string('gender');
            $table->String('address');
            $table->String('state');
            $table->String('district');
            $table->String('city');
            $table->String('phone');
            $table->String('social');
            $table->TinyInt('whatsapp');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('is_donor')->default('1');
            $table->tinyInteger('is_admin')->default('0');
            $table->timestamp('last_donated');
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
