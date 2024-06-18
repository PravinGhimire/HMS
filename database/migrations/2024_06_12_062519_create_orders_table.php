<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_orders_table.php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('food');
        $table->string('customer_name');
        $table->string('customer_email');
        $table->string('customer_phone');
       
        $table->integer('quantity');
        $table->foreignId('resturant_id')->constrained()->onDelete('cascade');
        $table->string('status')->default('Pending');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
