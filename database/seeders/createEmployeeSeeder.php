<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'fullname' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => 'john12345',
            'sex' => 'male',
            'phone' => '043493939',
            'dob' => '2017/10/02',
        ]);
    }
}
