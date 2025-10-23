<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('account')->insert([
            ['username' => 'budi', 'password' => '123456', 'office' => 'Dinas Gizi Madiun', 'employee' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'siti', 'password' => 'abcdef', 'office' => 'RSUD Kota Madiun', 'employee' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'agus', 'password' => 'rahasia', 'office' => 'Puskesmas Kartoharjo', 'employee' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'rini', 'password' => '123abc', 'office' => 'Sekolah Dasar 02', 'employee' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'dwi', 'password' => '321cba', 'office' => 'Sekolah Menengah 05', 'employee' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'tini', 'password' => 'tini123', 'office' => 'Dinas Pendidikan', 'employee' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'joko', 'password' => 'passjoko', 'office' => 'UPTD Gizi', 'employee' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'lina', 'password' => 'makan123', 'office' => 'Posyandu Mawar', 'employee' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'eko', 'password' => 'ekopass', 'office' => 'Kecamatan Taman', 'employee' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'nina', 'password' => 'nina123', 'office' => 'Balai Kesehatan Anak', 'employee' => 10, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
