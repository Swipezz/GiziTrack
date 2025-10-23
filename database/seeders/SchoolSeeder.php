<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('schools')->insert([
            ['name' => 'SDN 01 Madiun', 'location' => 'Jl. Pahlawan No.10', 'total_student' => 200, 'total_meal' => 190, 'type_allergy' => 'Kacang', 'logo' => 'sdn01.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SDN 02 Madiun', 'location' => 'Jl. Diponegoro No.5', 'total_student' => 180, 'total_meal' => 175, 'type_allergy' => 'Susu', 'logo' => 'sdn02.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SMPN 1 Madiun', 'location' => 'Jl. Imam Bonjol No.15', 'total_student' => 250, 'total_meal' => 240, 'type_allergy' => 'Telur', 'logo' => 'smpn1.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SMPN 2 Madiun', 'location' => 'Jl. Merdeka No.7', 'total_student' => 220, 'total_meal' => 210, 'type_allergy' => 'Udang', 'logo' => 'smpn2.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SMA 1 Madiun', 'location' => 'Jl. Soekarno Hatta No.8', 'total_student' => 300, 'total_meal' => 280, 'type_allergy' => 'Kedelai', 'logo' => 'sma1.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SMA 2 Madiun', 'location' => 'Jl. Kartini No.9', 'total_student' => 270, 'total_meal' => 260, 'type_allergy' => 'Gluten', 'logo' => 'sma2.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TK Aisyiyah 1', 'location' => 'Jl. Mangga No.2', 'total_student' => 60, 'total_meal' => 58, 'type_allergy' => 'Susu', 'logo' => 'tk1.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TK Bunga Bangsa', 'location' => 'Jl. Jeruk No.4', 'total_student' => 55, 'total_meal' => 53, 'type_allergy' => 'Kacang', 'logo' => 'tk2.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SDN 03 Madiun', 'location' => 'Jl. Kalimantan No.6', 'total_student' => 190, 'total_meal' => 180, 'type_allergy' => 'Udang', 'logo' => 'sdn03.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SMPN 3 Madiun', 'location' => 'Jl. Bali No.12', 'total_student' => 230, 'total_meal' => 220, 'type_allergy' => 'Telur', 'logo' => 'smpn3.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
