<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountEmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('account_employee')->insert([
            ['account_id' => 1, 'employee_id' => 1],
            ['account_id' => 2, 'employee_id' => 2],
            ['account_id' => 3, 'employee_id' => 3],
            ['account_id' => 4, 'employee_id' => 4],
            ['account_id' => 5, 'employee_id' => 5],
            ['account_id' => 6, 'employee_id' => 6],
            ['account_id' => 7, 'employee_id' => 7],
            ['account_id' => 8, 'employee_id' => 8],
            ['account_id' => 9, 'employee_id' => 9],
            ['account_id' => 10, 'employee_id' => 10],
        ]);
    }
}
