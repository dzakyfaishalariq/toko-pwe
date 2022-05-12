<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id()->primaryKey();
            $table->foreignId('prodi_id')->constrained('prodis')->onDelete('cascade');
            $table->string('nama', 100);
            $table->string('npm', 10);
            $table->string('kelas', 10);
            $table->string('instansi', 100);
            $table->string('alamat', 100);
            $table->string('nama_orangtua', 100);
            $table->string('perkejaan_orangtua', 100);
            $table->string('tempat_tanggal_lahir', 50);
            $table->char('gol_darah', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
