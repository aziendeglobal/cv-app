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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Ej: EXPERIENCIA: WORKANA.COM
            $table->string('cover_image'); // La imagen principal para la tarjeta
            $table->timestamps();
        });

        Schema::create('qualification_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qualification_id')->constrained()->onDelete('cascade');
            $table->string('image_url'); // Usaremos URLs completas por ahora
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualification_images');
        Schema::dropIfExists('qualifications');
    }
};
