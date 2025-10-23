<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'password' => '123456', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Siti Aminah', 'email' => 'siti@example.com', 'password' => 'abcdef', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Agus Prasetyo', 'email' => 'agus@example.com', 'password' => 'rahasia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rini Handayani', 'email' => 'rini@example.com', 'password' => '123abc', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dwi Lestari', 'email' => 'dwi@example.com', 'password' => '321cba', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tini Rahayu', 'email' => 'tini@example.com', 'password' => 'tini123', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Joko Susilo', 'email' => 'joko@example.com', 'password' => 'passjoko', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lina Kartika', 'email' => 'lina@example.com', 'password' => 'makan123', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eko Wibowo', 'email' => 'eko@example.com', 'password' => 'ekopass', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nina Febriani', 'email' => 'nina@example.com', 'password' => 'nina123', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
