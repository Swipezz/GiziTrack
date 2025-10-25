<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyFoodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('survey_food')->insert([
            ['school' => 'SDN 01 Madiun', 'food' => 'Nasi Goreng', "total" => 1],
            ['school' => 'SDN 02 Madiun', 'food' => 'Sayur Sop', "total" => 2],
            ['school' => 'SMPN 1 Madiun', 'food' => 'Ayam Goreng', "total" => 3],
            ['school' => 'SMPN 2 Madiun', 'food' => 'Tempe Orek', "total" => 4],
            ['school' => 'SMA 1 Madiun', 'food' => 'Ikan Bakar', "total" => 5],
            ['school' => 'SMA 2 Madiun', 'food' => 'Sate Ayam', "total" => 6],
            ['school' => 'TK Aisyiyah 1', 'food' => 'Bubur Ayam', "total" => 7],
            ['school' => 'TK Bunga Bangsa', 'food' => 'Nasi Tim', "total" => 8],
            ['school' => 'SDN 03 Madiun', 'food' => 'Sayur Lodeh', "total" => 9],
            ['school' => 'SMPN 3 Madiun', 'food' => 'Soto Ayam', "total" => 10],
        ]);
    }
}
