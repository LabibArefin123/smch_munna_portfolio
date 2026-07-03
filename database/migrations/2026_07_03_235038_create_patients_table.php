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
        Schema::create('patients', function (Blueprint $table) {

            $table->id();

            // Basic Information
            $table->string('name');
            $table->enum('sex', ['Male', 'Female']);
            $table->string('phone', 20);
            $table->unsignedTinyInteger('age');

            // Profile Image
            $table->string('patient_image')->nullable();

            // Description
            $table->longText('description')->nullable();

            // Recommendation
            $table->boolean('recommended')->default(false);
            $table->string('recommended_doctor')->nullable();
            $table->longText('recommendation_information')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
