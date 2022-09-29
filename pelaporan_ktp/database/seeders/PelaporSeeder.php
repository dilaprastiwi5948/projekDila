<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PelaporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelapor')->insert([
            [
                'nik_pelapor' => '655555557',
                'jenis_pelaporan' => 'Dalam Daerah',
                'nama' => 'Piko',
                'tanggal_lahir' => '2000-03-10',
                'alamat' => 'jl. Itu',
                'kelurahan' => 'Mlinjo',
                'kecamatan' => 'Jati',
                'kota' => 'Jakarta',
                'pengajuan' => 'Dinas',
                'keterangan' => 'Pemula'

            ]
        ]);
    }
}
