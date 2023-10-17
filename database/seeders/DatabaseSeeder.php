<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MetaData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(InformationSeeder::class);
        $this->call(ProjectsCategoryTableSeeder::class);
        // $this->call(ProjectsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MetaDataSeeder::class);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}