<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => 'admin123',
            'phone' => '0905656',
            'fullname' => 'Caroline Bassey',
            'photo' => 'uploadImage/Profile/User.png'
        ]);
    }
}
