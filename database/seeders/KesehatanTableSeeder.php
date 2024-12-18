<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KesehatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data kesehatan untuk hewan pertama
        DB::table('kesehatan')->insert([
            'hewan_id' => 1, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(10), // Tanggal 10 hari yang lalu
            'gejala' => 'Batuk dan demam',
            'diagnosis' => 'Flu',
            'tindakan' => 'Pemberian obat flu',
            'catatan' => 'Hewan perlu istirahat lebih banyak',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kesehatan untuk hewan kedua
        DB::table('kesehatan')->insert([
            'hewan_id' => 2, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(5), // Tanggal 5 hari yang lalu
            'gejala' => 'Luka di kaki',
            'diagnosis' => 'Luka ringan',
            'tindakan' => 'Pembersihan luka dan pemberian salep',
            'catatan' => 'Luka sembuh dengan cepat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kesehatan untuk hewan ketiga
        DB::table('kesehatan')->insert([
            'hewan_id' => 3, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(2), // Tanggal 2 hari yang lalu
            'gejala' => 'Kehilangan nafsu makan',
            'diagnosis' => 'Stres',
            'tindakan' => 'Pemberian vitamin dan relaksasi',
            'catatan' => 'Perhatikan suhu lingkungan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kesehatan untuk hewan keempat
        DB::table('kesehatan')->insert([
            'hewan_id' => 4, // ID hewan yang ada di tabel hewan
            'tanggal' => Carbon::now()->subDays(7), // Tanggal 7 hari yang lalu
            'gejala' => 'Cacingan',
            'diagnosis' => 'Infeksi cacing',
            'tindakan' => 'Pemberian obat cacing',
            'catatan' => 'Pemilik disarankan untuk menjaga kebersihan kandang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
