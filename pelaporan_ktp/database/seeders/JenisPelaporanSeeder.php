<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPelaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_pelaporan= [
            ['nama_jenis' => 'Dalam Daerah',],
            ['nama_jenis' => 'Luar Daerah',],           
        ];
        DB::table('jenis_pelaporan')->insert($jenis_pelaporan);
    }
}
