<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('frames', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('material');
            $table->string('dimensions');
        });
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('material');
            $table->string('seat_number');
        });
        Schema::create('trunks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('material');
            $table->string('dimensions');
        });
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('type_of_vehicle');
            $table->string('vehicle_model');
        });
        Schema::create('upgrades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('upgrade_type');
        });
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('frame_id');
            $table->unsignedBigInteger('cabin_id');
            $table->unsignedBigInteger('trunk_id');
            $table->unsignedBigInteger('upgrade_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('frame_id')->references('id')->on('frames');
            $table->foreign('cabin_id')->references('id')->on('cabins');
            $table->foreign('trunk_id')->references('id')->on('trunks');
            $table->foreign('upgrade_id')->references('id')->on('trunks');
            $table->string('status');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upgrades');
        Schema::dropIfExists('cabins');
        Schema::dropIfExists('frames');
        Schema::dropIfExists('trunks');
        Schema::dropIfExists('types');
        Schema::dropIfExists('vehicles');
    }
};
