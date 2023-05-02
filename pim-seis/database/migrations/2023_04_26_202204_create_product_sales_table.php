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
        Schema::create('product_sales', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('register_product_id');
            $table->integer('quantity');
            $table->integer('sale_code');
            $table->float('total_price_product');

            $table->foreign('register_product_id')->references('id')->on('register_products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sales');
    }
};
