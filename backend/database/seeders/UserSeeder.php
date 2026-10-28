<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin Principal',
            'email' => 'admin@vetclinic.com',
            'password' => 'password123',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Dr. House',
            'email' => 'doctor@vetclinic.com',
            'password' => 'password123',
            'role' => 'admin',
        ]);
    }
}
