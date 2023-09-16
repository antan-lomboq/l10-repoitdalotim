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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokumen', 60);
            $table->string('owner', 60);
            $table->string('author', 60);
            $table->integer('tahun');
            $table->text('deskripsi');
            $table->unsignedInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->string('file_upload', 60)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
