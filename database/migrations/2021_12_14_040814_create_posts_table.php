<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('title');
            $table->string('salary');
            $table->string('position');
            $table->string('experience');
            $table->date('expiration_date');
            $table->longText('description');
            $table->string('quantity');
            $table->string('gender');
            $table->string('status')->default('1');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('job_type_id');
            $table->unsignedBigInteger('employer_id');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('job_type_id')->references('id')->on('jobs');
            $table->foreign('employer_id')->references('id')->on('employers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
