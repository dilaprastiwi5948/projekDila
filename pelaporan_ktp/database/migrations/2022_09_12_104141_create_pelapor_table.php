<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapor', function (Blueprint $table) {
            $table->id('nik_pelapor');
            $table->enum('jenis_pelaporan', ['Dalam Daerah', 'Luar Daerah']);
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->enum('pengajuan', ['Online', 'Dinas', 'Kelurahan', 'MPP'])->default('Dinas');
            $table->enum('keterangan', ['Rusak', 'Kehilangan', 'Pemula', 'Perubahan data', 'Paket', 'Surat keterangan'])->default('Pemula');
            $table->timestamp('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelapor');
    }
}
