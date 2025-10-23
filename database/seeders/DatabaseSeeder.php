<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class,
            AccountSeeder::class,
            AccountEmployeeSeeder::class,
            SchoolSeeder::class,
            SurveyAllergySeeder::class,
            SurveyFoodSeeder::class,
            UserSeeder::class,
        ]);
    }
}
