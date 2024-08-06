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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // $table->boolean('kunci'); 
            $table->boolean('is_locked')->default(false); // Renamed 'kunci' to 'is_locked' for clarity
            $table->string('evaluator_name')->nullable(); // Renamed 'nama_penilai' to 'evaluator_name' for clarity
            $table->string('evaluator_notes')->nullable(); // Changed 'jatatan_penilai' to 'evaluator_notes' and used text type for longer notes
            $table->json('score'); // Renamed 'nilai' to 'score' for clarity
            $table->string('file'); // nama file document
            $table->timestamps();             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};