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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('email')->nullable();
            $table->string('visited')->nullable();
            $table->string('dateVisited')->nullable();
            $table->string('medicine')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
