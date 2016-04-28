<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient');
            $table->string('group');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('hospital');
            $table->string('doctor');
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('contact_email');
            // add nullable to prevent bug in mysql 5.6 above
            $table->timestamp('when')->nullable();
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
        Schema::drop('blood_requests');
    }
}
