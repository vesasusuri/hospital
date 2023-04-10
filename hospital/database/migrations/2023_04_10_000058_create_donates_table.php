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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('subheading')->nullable();
            $table->string('heading')->nullable();
            $table->string('autor')->nullable();
            $table->string('description')->nullable();
            $table->string('raisedMoney')->nullable();
            $table->string('goalMoney')->nullable();
            $table->string('donateMoney')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donates');
    }
};
