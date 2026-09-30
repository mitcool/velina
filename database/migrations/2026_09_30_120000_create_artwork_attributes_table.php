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
        Schema::create('artwork_attributes', function (Blueprint $table) {
            $table->id();
            // unique() enforces the one-to-one relation at the database level
            $table->foreignId('artwork_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('alt')->nullable();
            $table->string('alt_en')->nullable();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artwork_attributes');
    }
};
