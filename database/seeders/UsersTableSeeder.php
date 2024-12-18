<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data pengguna pertama
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'mobile_number' => '08123456789',
            'email_verified_at' => now(), // Set email sebagai terverifikasi
            'password' => Hash::make('password123'), // Pastikan password di-hash
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data pengguna kedua
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'user@user.com',
            'mobile_number' => '08198765432',
            'email_verified_at' => now(), // Set email sebagai terverifikasi
            'password' => Hash::make('password123'), // Pastikan password di-hash
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data pengguna sesuai kebutuhan
        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'email' => 'user1@user.com',
            'mobile_number' => '08234567890',
            'email_verified_at' => now(),
            'password' => Hash::make('password456'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
