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
        Schema::create('book_equipment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('booked_for');
            $table->unsignedBigInteger('day_shift_id');
            $table->unsignedBigInteger('class_shift_id');
            $table->unsignedBigInteger('equipment_id');
            $table->unsignedBigInteger('status_id');

            $table->foreign('day_shift_id')->references('id')->on('day_shifts');

            $table->foreign('class_shift_id')->references('id')->on('class_shifts');

            $table->foreign('equipment_id')->references('id')->on('equipment');

            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_equipment');
    }
};
