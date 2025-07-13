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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('history')->nullable();
            $table->json('vision')->nullable();
            $table->json('mission')->nullable();
            $table->json('programs')->nullable();
            $table->json('donations')->nullable();
            $table->json('social_media')->nullable();
            $table->string('organizational_structure')->nullable(); // untuk file gambar
            $table->string('ig')->nullable();
            $table->string('fb')->nullable();
            $table->string('email')->nullable();
            $table->string('wa')->nullable();
            $table->string('location')->nullable();
            $table->string('tiktok')->nullable();
            $table->longText('vidio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
