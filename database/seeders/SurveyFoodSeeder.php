<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyFoodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('survey_food')->insert([
            ['school' => 'SDN 01 Madiun', 'food' => 'Nasi Goreng'],
            ['school' => 'SDN 02 Madiun', 'food' => 'Sayur Sop'],
            ['school' => 'SMPN 1 Madiun', 'food' => 'Ayam Goreng'],
            ['school' => 'SMPN 2 Madiun', 'food' => 'Tempe Orek'],
            ['school' => 'SMA 1 Madiun', 'food' => 'Ikan Bakar'],
            ['school' => 'SMA 2 Madiun', 'food' => 'Sate Ayam'],
            ['school' => 'TK Aisyiyah 1', 'food' => 'Bubur Ayam'],
            ['school' => 'TK Bunga Bangsa', 'food' => 'Nasi Tim'],
            ['school' => 'SDN 03 Madiun', 'food' => 'Sayur Lodeh'],
            ['school' => 'SMPN 3 Madiun', 'food' => 'Soto Ayam'],
        ]);
    }
}
