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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('model');
            $table->string('price');
            $table->string('year');
            $table->string('passenger');
            $table->string('manufaktur');
            $table->string('tipebbm')->nullable();
            $table->string('kapasitasbbm')->nullable();
            $table->string('wheelcount')->nullable();
            $table->string('luasbagasi')->nullable();
            $table->string('cargoarea')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
