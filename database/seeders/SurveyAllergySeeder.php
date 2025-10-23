<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyAllergySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('survey_allergy')->insert([
            ['school' => 'SDN 01 Madiun', 'allergy' => 'Kacang'],
            ['school' => 'SDN 02 Madiun', 'allergy' => 'Susu'],
            ['school' => 'SMPN 1 Madiun', 'allergy' => 'Telur'],
            ['school' => 'SMPN 2 Madiun', 'allergy' => 'Udang'],
            ['school' => 'SMA 1 Madiun', 'allergy' => 'Kedelai'],
            ['school' => 'SMA 2 Madiun', 'allergy' => 'Gluten'],
            ['school' => 'TK Aisyiyah 1', 'allergy' => 'Susu'],
            ['school' => 'TK Bunga Bangsa', 'allergy' => 'Kacang'],
            ['school' => 'SDN 03 Madiun', 'allergy' => 'Udang'],
            ['school' => 'SMPN 3 Madiun', 'allergy' => 'Telur'],
        ]);
    }
}
