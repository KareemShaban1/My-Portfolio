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
                'title' => 'Golden Medal',
                'client' => 'Golden Medal Company',
                'date' => '2023-01-15 - now',
                'live_link' => 'https://goldenmedalco.com/',
                'github_link' => '',
                'info' => '',
                'category_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sevo',
                'client' => 'Sevo Company',
                'date' => '2023-01-15 - now',
                'live_link' => 'https://sevotranslation.com/',
                'github_link' => '',
                'info' => '',
                'category_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Translation Content Managent System',
                'client' => '',
                'date' => '2023-01-15 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Banners Management System',
                'client' => '',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sevo App',
                'client' => 'El Tab3een Company',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ElAbed Poultry',
                'client' => 'El Abed Company',
                'date' => '2023-01-15 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'aliafandy (e-commerce)',
                'client' => '',
                'date' => '2023-01-15 - now',
                'live_link' => 'https://aliafandy.com/',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Elevators Website',
                'client' => 'International Elevators Company (Saudi Arabia)',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Resala Charity Management System',
                'client' => 'Resala Charity',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Educational center',
                'client' => '',
                'date' => '2023-01-15 - now',
                'live_link' => 'https://edu-center.kareemsoft.org/',
                'github_link' => '',
                'info' => 'Description of Project 1',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clinic Managment System (saas)',
                'client' => '',
                'date' => '2023-02-20 - now',
                'live_link' => 'https://clinic.kareemsoft.org/',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Portfolio',
                'client' => '',
                'date' => '2023-02-20 - now',
                'live_link' => 'https://portfolio.kareemsoft.org/',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Find-X',
                'client' => '',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Blog Management System',
                'client' => '',
                'date' => '2023-02-20 - now',
                'live_link' => '',
                'github_link' => '',
                'info' => '',
                'category_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}