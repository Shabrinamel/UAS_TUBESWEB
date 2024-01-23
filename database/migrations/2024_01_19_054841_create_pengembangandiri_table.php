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
        Schema::create('pengembangandiri', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('Kegiatan');
            $table->date('tgl');
            $table->string('durasi');
            $table->integer('ak_penilaian');
            $table->integer('ak_instansi');
            $table->string('keterangan');
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembangandiri');
    }
};
