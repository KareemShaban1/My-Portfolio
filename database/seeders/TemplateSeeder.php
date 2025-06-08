<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $template1 = Template::create([
            'name' => 'Template 1',
            'description' => 'Template 1 Description',
        ]);

        if (file_exists(public_path('images\template1_image.png'))) {
            $template1->addMedia(public_path('images\template1_image.png'))
                ->preservingOriginal()
                ->toMediaCollection('template_image');
        }

        if (file_exists(public_path('images\template1_gallery_1.png'))) {
            $template1->addMedia(public_path('images\template1_gallery_1.png'))
                ->preservingOriginal()
                ->toMediaCollection('template_gallery');
        }

        if (file_exists(public_path('images\template1_gallery_2.png'))) {
        $template1->addMedia(public_path('images\template1_gallery_2.png'))
            ->preservingOriginal()
            ->toMediaCollection('template_gallery');
        }

        $template2 = Template::create([
            'name' => 'Template 2',
            'description' => 'Template 2 Description',
        ]);

      

        if (file_exists(public_path('images\template2_image.png'))) {
            $template2->addMedia(public_path('images\template2_image.png'))
                ->preservingOriginal()
                ->toMediaCollection('template_image');
        }

        if (file_exists(public_path('images\template2_gallery_1.png'))) {
            $template2->addMedia(public_path('images\template2_gallery_1.png'))
                ->preservingOriginal()
                ->toMediaCollection('template_gallery');
        }

        if (file_exists(public_path('images\template2_gallery_2.png'))) {
            $template2->addMedia(public_path('images\template2_gallery_2.png'))
                ->preservingOriginal()
                ->toMediaCollection('template_gallery');
        }

        $template3 = Template::create([
            'name' => 'Template 3',
            'description' => 'Template 3 Description',
        ]);

        $template4 = Template::create([
            'name' => 'Template 4',
            'description' => 'Template 4 Description',
        ]);
    }
}
