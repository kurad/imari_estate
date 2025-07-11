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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('location');
            $table->decimal('price', 15, 2);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            
            $table->integer('size');
            $table->string('status');
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->string('images')->nullable();
            $table->string('images_name')->nullable();
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
