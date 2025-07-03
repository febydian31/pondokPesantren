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
            $table->string('nisn');
            $table->date('birth');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->text('address');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('father_address');
            $table->text('mother_address');
            $table->string('father_job');
            $table->string('mother_job');
            $table->string('no_telp');
            $table->enum('education_level', ['mts', 'ma', 'kuliah', 'lulus']);
            $table->enum('student_category', ['reguler', 'dhuafa', 'yatim_piatu']);
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
