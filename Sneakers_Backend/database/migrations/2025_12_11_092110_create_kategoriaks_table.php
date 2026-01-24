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
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id();
            $table->string('marka', 50);
            $table->string('tipus', 50);
            $table->timestamps();

            $table->unique(['marka', 'tipus']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriaks');
    }
};
