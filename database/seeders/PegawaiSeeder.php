<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB; 

use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create('id_ID');

        for($i=1; $i<=50; $i++){
            DB::table('pegawai')->insert([
                'nama'=> $faker->name,
                'jabatan'=> $faker->jobTitle,
                'umur'=> $faker->numberBetween(25,40),
                'alamat'=> $faker->address
            ]);
        }
    }
}
