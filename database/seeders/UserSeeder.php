<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Define user data
        $userData = [
            [
                'name' => 'kareem shaban',
                'email' => 'kareemshaban@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // You can change the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user data as needed
        ];

        // Insert data into the 'users' table
        DB::table('users')->insert($userData);
    }
}