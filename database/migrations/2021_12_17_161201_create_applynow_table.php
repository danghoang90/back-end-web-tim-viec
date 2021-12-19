<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplynowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applynow', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->comment("id khách hàng");
            $table->unsignedBigInteger('employer_id')->comment('id nhà tuyển dụng');
            $table->unsignedBigInteger('post_id')->comment('id tin tuyển dụng');
            $table->text('cv')->nullable();
            $table->string('status')->default("1")->comment("1 là hiện hai là ẩn");
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('employer_id')->references('id')->on('employers');
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('applynow');
    }
}
