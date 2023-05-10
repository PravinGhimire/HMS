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
        Schema::create('roomdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('priority');
            $table->longText('description');
            $table->integer('room_size');
            $table->string('bed_size');
            $table->string('view');
            $table->string('photopath');
            $table->foreignId('room_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomdetails');
    }
};
