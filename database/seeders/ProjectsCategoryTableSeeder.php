<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('projects_category')->insert([
            ['name' => 'frontend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'backend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'flutter', 'created_at' => now(), 'updated_at' => now()],
            // Add more category records as needed
        ]);
    }
}