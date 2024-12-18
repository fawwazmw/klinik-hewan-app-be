<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data obat pertama
        DB::table('obat')->insert([
            'nama_obat' => 'Paracetamol',
            'deskripsi' => 'Obat penurun demam dan pereda nyeri.',
            'harga' => 5000.00, // Harga dalam format 5000.00
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat kedua
        DB::table('obat')->insert([
            'nama_obat' => 'Amoxicillin',
            'deskripsi' => 'Antibiotik untuk mengobati infeksi.',
            'harga' => 15000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat ketiga
        DB::table('obat')->insert([
            'nama_obat' => 'Ibuprofen',
            'deskripsi' => 'Obat anti-inflamasi non-steroid (NSAID) untuk meredakan rasa sakit dan peradangan.',
            'harga' => 12000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data obat keempat
        DB::table('obat')->insert([
            'nama_obat' => 'Cetirizine',
            'deskripsi' => 'Obat antihistamin untuk mengatasi alergi.',
            'harga' => 8000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
