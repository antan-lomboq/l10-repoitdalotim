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
        Schema::create('profil_instansi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_instansi', 60);
            $table->string('visi_misi', 100);
            $table->string('nama_pimpinan', 60);
            $table->string('nip_pimpinan', 18);
            $table->text('alamat_instansi');
            $table->string('kontak', 16);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_instansi');
    }
};
