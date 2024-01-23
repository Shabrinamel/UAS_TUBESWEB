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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama', 50);
            $table->string('nip', 20);
            $table->string('unit_kerja', 50);
            $table->string('bidang_minat', 50);
            $table->date('tgll');
            $table->string('jk', 1);
            $table->integer('mgl');
            $table->integer('mgb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
