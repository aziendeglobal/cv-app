<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ej: "Backend", "DevOps"
            $table->integer('order')->default(0); // Para controlar en qué orden aparecen los grupos
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_skills');
    }
};