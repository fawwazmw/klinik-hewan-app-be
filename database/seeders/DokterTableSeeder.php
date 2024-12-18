<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data dokter pertama
        DB::table('dokter')->insert([
            'nama' => 'Dr. Aisyah Putri',
            'spesialis' => 'Dokter Bedah',
            'tahun' => 10,
            'kepuasan' => 80,
            'harga' => 135000.00,
            'NIP' => '1234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data dokter kedua
        DB::table('dokter')->insert([
            'nama' => 'Dr. Budi Santoso',
            'spesialis' => 'Dokter Hewan',
            'tahun' => 5,
            'kepuasan' => 84,
            'harga' => 245000.00,
            'NIP' => '9876543210',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data dokter ketiga
        DB::table('dokter')->insert([
            'nama' => 'Dr. Citra Lestari',
            'spesialis' => 'Dokter Kulit',
            'tahun' => 14,
            'kepuasan' => 90,
            'harga' => 165000.00,
            'NIP' => '1122334455',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data dokter keempat
        DB::table('dokter')->insert([
            'nama' => 'Dr. Dwi Wijaya',
            'spesialis' => 'Dokter Organ Dalam',
            'tahun' => 20,
            'kepuasan' => 95,
            'harga' => 535000.00,
            'NIP' => '6677889900',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
