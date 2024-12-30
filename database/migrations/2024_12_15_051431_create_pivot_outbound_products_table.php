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
        Schema::create('pivot_outbound_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outbound_product_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('product_quantity');
            $table->integer('product_selling_price');
            $table->integer('subtotal');
            $table->timestamps();
        
            $table->foreign('outbound_product_id')->references('id')->on('outbound_products')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_outbound_products');
    }
};
