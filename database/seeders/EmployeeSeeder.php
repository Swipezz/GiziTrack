<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employee')->insert([
            ['name' => 'Budi Santoso'],
            ['name' => 'Siti Aminah'],
            ['name' => 'Agus Prasetyo'],
            ['name' => 'Rini Handayani'],
            ['name' => 'Dwi Lestari'],
            ['name' => 'Tini Rahayu'],
            ['name' => 'Joko Susilo'],
            ['name' => 'Lina Kartika'],
            ['name' => 'Eko Wibowo'],
            ['name' => 'Nina Febriani'],
        ]);
    }
}
