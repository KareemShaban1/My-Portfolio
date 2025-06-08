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
            ['name' => 'Frontend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Backend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Full Stack', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Flutter', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}