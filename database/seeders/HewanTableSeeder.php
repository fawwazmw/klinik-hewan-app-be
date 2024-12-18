<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data hewan pertama
        DB::table('hewan')->insert([
            'nama_hewan' => 'Kucing Persia',
            'jenis' => 'Kucing',
            'pemilik' => 'Alice',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data hewan kedua
        DB::table('hewan')->insert([
            'nama_hewan' => 'Anjing Beagle',
            'jenis' => 'Anjing',
            'pemilik' => 'Bob',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data hewan ketiga
        DB::table('hewan')->insert([
            'nama_hewan' => 'Burung Lovebird',
            'jenis' => 'Burung',
            'pemilik' => 'Charlie',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data hewan sesuai kebutuhan
        DB::table('hewan')->insert([
            'nama_hewan' => 'Ikan Koi',
            'jenis' => 'Ikan',
            'pemilik' => 'David',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
