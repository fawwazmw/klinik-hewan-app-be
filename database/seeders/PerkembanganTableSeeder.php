<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerkembanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data perkembangan untuk hewan pertama
        DB::table('perkembangan')->insert([
            'hewan_id' => 1, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(10), // Tanggal 10 hari yang lalu
            'berat_badan' => 5.50, // Berat badan dalam kg
            'tinggi' => 40.25, // Tinggi badan dalam cm
            'foto' => 'path/to/foto_hewan1.jpg', // Path ke file foto
            'catatan' => 'Hewan sehat dan aktif.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data perkembangan untuk hewan kedua
        DB::table('perkembangan')->insert([
            'hewan_id' => 2, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(7), // Tanggal 7 hari yang lalu
            'berat_badan' => 3.75, // Berat badan dalam kg
            'tinggi' => 30.50, // Tinggi badan dalam cm
            'foto' => 'path/to/foto_hewan2.jpg', // Path ke file foto
            'catatan' => 'Sedang dalam masa penyembuhan.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data perkembangan untuk hewan ketiga
        DB::table('perkembangan')->insert([
            'hewan_id' => 3, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(5), // Tanggal 5 hari yang lalu
            'berat_badan' => 4.20, // Berat badan dalam kg
            'tinggi' => 35.00, // Tinggi badan dalam cm
            'foto' => 'path/to/foto_hewan3.jpg', // Path ke file foto
            'catatan' => 'Mulai tumbuh lebih besar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data perkembangan untuk hewan keempat
        DB::table('perkembangan')->insert([
            'hewan_id' => 4, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(2), // Tanggal 2 hari yang lalu
            'berat_badan' => 6.00, // Berat badan dalam kg
            'tinggi' => 45.00, // Tinggi badan dalam cm
            'foto' => 'path/to/foto_hewan4.jpg', // Path ke file foto
            'catatan' => 'Hewan tumbuh sangat cepat.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
