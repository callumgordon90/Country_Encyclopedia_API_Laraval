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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            //Create columns for my countries table:
            $table->string('name');
            $table->string('capital');
            $table->string('national_sport');
            $table->string('national_food');
            $table->double('population');
            $table->boolean('nuclear_power');
            $table->string('continent');
            $table->string('government_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
