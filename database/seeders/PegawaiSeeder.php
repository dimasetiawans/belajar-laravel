<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB; 

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pegawai')->insert([
            'nama'=> 'Mary Jane',
            'jabatan'=> 'HRD',
            'umur'=> 35,
            'alamat'=> "Bekasi"
        ]);
    }
}
