<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('subheading')->nullable();
            $table->string('heading')->nullable();
            $table->string('autor')->nullable();
            $table->string('description')->nullable();
            $table->string('raisedMoney')->nullable();
            $table->string('goalMoney')->nullable();
            $table->string('photo');
            $table->decimal("price", 6, 2); 
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
};