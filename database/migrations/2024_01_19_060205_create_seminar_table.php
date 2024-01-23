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
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama_seminar');
            $table->date('tgl');
            $table->integer('angka_kredit');
            $table->integer('satuan_hasil');
            $table->integer('jumlah_ak');
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
        Schema::dropIfExists('seminar');
    }
};
