<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data obat pertama
        DB::table('informasi')->insert([
            'title' => 'Si doggy yang senang bermain',
            'owner' => 'Budiono Siregar',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat kedua
        DB::table('informasi')->insert([
            'title' => 'Husky yang cerewet sekali',
            'owner' => 'Bayu Sapto Aji',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat ketiga
        DB::table('informasi')->insert([
            'title' => 'Bulldog yang sangat mengerikan',
            'owner' => 'Suep Priadi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat keempat
        DB::table('informasi')->insert([
            'title' => 'Snowy dog yang sangat dingin',
            'owner' => 'Supriyono Budi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
