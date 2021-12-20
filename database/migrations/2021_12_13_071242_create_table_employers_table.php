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
            $table->string('contact_person_name')->comment('Tên người liên lạc');
            $table->string('phone_number');
            $table->string('name_employer')->unique()->comment('Tên công ty');
            $table->string('address_employer')->comment('Địa chỉ');
            $table->string('city')->comment('Thành Phố');
            $table->string('status')->default('2')->comment('Trạng Thái');
            $table->string('personnel_size')->nullable()->comment('Quy mô nhân sự');
            $table->longText('company_profile')->nullable()->comment('Sơ lược về công ty');
            $table->string('logo')->nullable();
            $table->string('website')->nullable()->comment('website');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
