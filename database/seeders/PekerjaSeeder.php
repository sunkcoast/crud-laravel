<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerja')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
        ]);
    }
}
