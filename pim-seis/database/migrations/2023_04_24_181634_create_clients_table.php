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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('address');
            $table->string('neighborhood');
            $table->string('zip');
            $table->string('city');
            $table->unsignedBigInteger('country_state_id');
            $table->string('phone');
            $table->string('email');

            $table->foreign('country_state_id')->references('id')->on('country_states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
