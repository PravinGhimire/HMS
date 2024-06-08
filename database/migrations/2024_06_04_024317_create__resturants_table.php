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
        Schema::create('_resturants', function (Blueprint $table) {
            $table->id();
            $table->string('priority');
            $table->string('name');
            $table->string('food');
            $table->integer('quantity');
            $table->decimal('rate', 8, 2);
            $table->string('photopath');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_resturants');
    }
};
