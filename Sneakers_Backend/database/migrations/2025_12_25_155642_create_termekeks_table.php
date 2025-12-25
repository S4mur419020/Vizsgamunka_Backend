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
        Schema::create('termekeks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('marka_id')->constrained('markaks')->onDelete('cascade');
            $table->string('kategoria_id');
            $table->text('leiras')->nullable();
            $table->string('nem');
            $table->string('anyag');
            $table->boolean('elerheto')->default(true);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termekeks');
    }
};
