<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
               //
        //
         // Define the data you want to insert into the 'information' table
        $data = [
            [
                'image_name' => 'personal',
                'image' => 'img1.jpg',
            ],    
        ];

        // Insert data into the 'information' table
        DB::table('portfolio_images')->insert($data);
    }
}