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
        Schema::create('items_shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->float('bulky_price', 8,2);

            $table->foreign('product_id')->references('id')->on('register_products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
