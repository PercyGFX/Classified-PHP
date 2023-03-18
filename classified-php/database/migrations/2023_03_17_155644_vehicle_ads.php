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
        Schema::create('vehicle_ads', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('vehicle_type');
            $table->string('vehicle_condition');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_year');
            $table->string('price');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('engine_capacity');
            $table->string('mileage');
            $table->string('description');
            $table->string('name');
            $table->string('phone_number');
            $table->string('location');
            $table->string('is_active')->default('1');
            $table->string('is_paid')->default('0');
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
        Schema::drop('vehicle_ads');
    }
};
