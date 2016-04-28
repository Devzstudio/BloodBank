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
            $table->integer('age');
            $table->integer('weight');
            $table->string('group');
            $table->string('gender');
            $table->string('address');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('phone');
            $table->string('social');
            $table->tinyInteger('whatsapp');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('is_donor')->default('1');
            $table->tinyInteger('is_admin')->default('0');
            // add nullable to prevent bug in mysql 5.6 above
            $table->timestamp('last_donated')->nullable();
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
