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
        Schema::create('termek_valtozatoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('termek_id')->constrained('termekeks')->onDelete('cascade');
            $table->string('nev');  //pl: méret, szín, egyéb megkülönböztetés
            $table->boolean('elerheto')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termek_valtozatoks');
    }
};
