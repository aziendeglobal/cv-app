<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('headline');
            $table->string('photo');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('location');
            $table->string('location_link')->nullable();
            $table->date('birthday');
            $table->string('civil_status');
            $table->string('linkedin_url');
            $table->string('portfolio_url')->nullable();
            $table->text('profile_summary');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};