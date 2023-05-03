<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluargas')->insert([
            //1
            [
                'Nama' => 'Jordan',
                'Status_Hubungan' => 'Ayah',
                'Tanggal_Lahir' => '1985-11-15'
            ],
            //2
            [
                'Nama' => 'Kender',
                'Status_Hubungan' => 'Ibu',
                'Tanggal_Lahir' => '1940-08-21'
            ],
            //3
            [
                'Nama' => 'Lamelo',
                'Status_Hubungan' => 'Adik',
                'Tanggal_Lahir' => '2002-01-07'
            ]
        ]);
    }
}
