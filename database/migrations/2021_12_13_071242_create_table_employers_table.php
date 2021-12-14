<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_person_name');
            $table->string('phone_number');
            $table->string('name_employer')->unique();
            $table->string('address_employer');
            $table->string('city');
            $table->string('status')->default('2');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
