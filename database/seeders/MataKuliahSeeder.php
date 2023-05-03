<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliahs')->insert([
            //1
            [
                'Nama_Matkul' => 'Statistik Komputasi',
                'Nama_Dosen' => 'Elok Nur Hamdana',
                'Jumlah_SKS' => '2'
            ],
            //2
            [
                'Nama_Matkul' => 'Pemrograman Web Lanjut ',
                'Nama_Dosen' => ' Moch. Zawaruddin Abdullah',
                'Jumlah_SKS' => '3'
            ],
            //3
            [
                'Nama_Matkul' => 'Manajemen Proyek',
                'Nama_Dosen' => 'Candra Bella Vista',
                'Jumlah_SKS' => '2'
            ],
            //4
            [
                'Nama_Matkul' => 'Business Intelligence',
                'Nama_Dosen' => 'Endah Septa Sintiya',
                'Jumlah_SKS' => '2'
            ]

        ]);
    }
}
