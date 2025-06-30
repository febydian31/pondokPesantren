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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_induk');
            $table->string('NISN');
            $table->date('birth');
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('father_address');
            $table->text('mother_address');
            $table->string('father_job');
            $table->string('mother_job');
            $table->string('no_telp');
            $table->string('education_level');
            $table->string('student_category');
            $table->string('file_upload')->nullable();
            // $table->string('file_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
