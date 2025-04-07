<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('projects')->insert([
            [
                'title' => 'Project 1',
                'client' => 'Client 1',
                'date' => '2023-01-15',
                'url' => 'https://example.com/project1',
                'info' => 'Description of Project 1',
                // 'main_image' => 'image1.jpg',
                // 'images' => null,
                'category_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 2',
                'client' => 'Client 2',
                'date' => '2023-02-20',
                'url' => 'https://example.com/project2',
                'info' => 'Description of Project 2',
                // 'main_image' => 'image3.jpg',
                'images' => null,
                'category_id'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more project records as needed
        ]);
    }
}