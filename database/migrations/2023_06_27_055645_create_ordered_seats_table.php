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
        Schema::create('ordered_seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained('films')->onDelete('cascade')->nullable();
            $table->foreignId('seat_id')->constrained('seats')->onDelete('cascade')->nullable();
            $table->boolean('is_ordered')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered_seats');
    }
};
