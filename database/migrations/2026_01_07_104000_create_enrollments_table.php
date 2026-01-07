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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('price_id')->constrained('prices');
            $table->string('name');
            $table->enum('status', ['active', 'paused', 'finished'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
