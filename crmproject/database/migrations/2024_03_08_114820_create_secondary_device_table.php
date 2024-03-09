<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_device', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('technical_id');
            $table->foreign('technical_id')->references('id')->on('technicaldetails');
            $table->string('secondary_device')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('client_id')->nullable();
            $table->string('primary_device')->nullable();
            $table->string('customer_name')->nullable();
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
        Schema::dropIfExists('secondary_device');
    }
};
