<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobis')->insert([
            //1
            [
                'Nama_Hobi' => 'Basket',
                'Jenis_Hobi' => 'Olahraga',
                'Durasi_Hobi' => 'Pendek'
            ],
            //2
            [
                'Nama_Hobi' => 'Volly',
                'Jenis_Hobi' => 'Olahraga',
                'Durasi_Hobi' => 'Pendek'
            ],
            //3
            [
                'Nama_Hobi' => 'Volly',
                'Jenis_Hobi' => 'Olahraga',
                'Durasi_Hobi' => 'Pendek'
            ],
            //4
            [
                'Nama_Hobi' => 'Bermain Gitar',
                'Jenis_Hobi' => 'Seni Musik',
                'Durasi_Hobi' => 'Pendek'
            ],
            //5
            [
                'Nama_Hobi' => 'Yoga',
                'Jenis_Hobi' => 'Olahraga',
                'Durasi_Hobi' => 'Pendek'
            ],
            //6
            [
                'Nama_Hobi' => 'Camping',
                'Jenis_Hobi' => 'Outdoor',
                'Durasi_Hobi' => 'Panjang'
            ],
            //7
            [
                'Nama_Hobi' => 'Hiking',
                'Jenis_Hobi' => 'Outdoor',
                'Durasi_Hobi' => 'Panjang'
            ],
            //8
            [
                'Nama_Hobi' => 'Touring',
                'Jenis_Hobi' => 'Outdoor',
                'Durasi_Hobi' => 'Panjang'
            ]
        ]);
    }
}
