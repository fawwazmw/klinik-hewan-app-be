<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            HewanTableSeeder::class,
            KesehatanTableSeeder::class,
            PerkembanganTableSeeder::class,
            ObatTableSeeder::class,
            DokterTableSeeder::class,
            InformasiTableSeeder::class,
        ]);
    }
}
