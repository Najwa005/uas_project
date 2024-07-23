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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->integer('semester');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliahs');
            $table->string('hari', 10);
            $table->string('ruangan', 10);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('dosens_nip');
            $table->foreign('dosens_nip')->references('nip')->on('dosens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
