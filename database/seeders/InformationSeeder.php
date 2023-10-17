<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Define the data you want to insert into the 'information' table
        $data = [
            [
                'key' => 'site_name',
                'value' => 'Kareem Shaban',
            ],
            [
                'key' => 'site_description',
                'value' => 'Your Site Description',
            ],
            [
                'key' => 'about_me',
                'value' => "Results-driven Junior Laravel Developer with a passion for building robust and efficient web applications using the Laravel framework. Proficient in PHP, HTML, CSS, and JavaScript, with a solid foundation in web development principles. Eager to contribute to a dynamic development team, learn from experienced professionals, and apply my skills in creating innovative solutions. Strong attention to detail, excellent problem-solving abilities, and a continuous learner committed to staying updated with emerging technologies and best practices in Laravel development.",
            ],
            [
                'key' => 'phone',
                'value' => '01090537304',
            ],

            [
                'key' => 'email',
                'value' => 'Kareemshaban120@gmail.com',
            ],
            [
                'key' => 'age',
                'value' => '24',
            ],

            [
                'key' => 'nationality',
                'value' => 'Egyptian',
            ],

            [
                'key' => 'website',
                'value' => '',
            ],

            [
                'key' => 'happy_clients',
                'value' => '',
            ],
            
            [
                'key' => 'projects',
                'value' => '',
            ],
            [
                'key' => 'experience_years',
                'value' => '',
            ],

            [
                'key' => 'html_value',
                'value' => '50',
            ],
            [
                'key' => 'css_value',
                'value' => '50',
            ],
            [
                'key' => 'javascript_value',
                'value' => '50',
            ],

            [
                'key' => 'jquery_value',
                'value' => '50',
            ],

            [
                'key' => 'bootstrap_value',
                'value' => '50',
            ],

            [
                'key' => 'php_value',
                'value' => '50',
            ],
            [
                'key' => 'laravel_value',
                'value' => '50',
            ],
            [
                'key' => 'flutter_value',
                'value' => '50',
            ],
            [
                'key' => 'c++_value',
                'value' => '50',
            ],
            [
                'key' => 'python_value',
                'value' => '50',
            ],
            [
                'key' => 'facebook_link',
                'value' => '',
            ],
            [
                'key' => 'github_link',
                'value' => '',
            ],
            [
                'key' => 'linkedIn_link',
                'value' => '',
            ],
            [
                'key' => 'facebook_link',
                'value' => '',
            ],
        ];

        // Insert data into the 'information' table
        DB::table('information')->insert($data);
    }
}