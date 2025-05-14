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
        
        $template1->addMedia(public_path('images\template1_image.png'))
            ->preservingOriginal()
            ->toMediaCollection('template_image');

        $template1->addMedia(public_path('images\template1_gallery_1.png'))
            ->preservingOriginal()
            ->toMediaCollection('template_gallery');
        
            $template1->addMedia(public_path('images\template1_gallery_2.png'))
            ->preservingOriginal()
            ->toMediaCollection('template_gallery');    

       $template2 = Template::create([
        'name' => 'Template 2',
        'description' => 'Template 2 Description',
       ]);

       $template3 = Template::create([
        'name' => 'Template 3',
        'description' => 'Template 3 Description',
       ]);
       
    //    $template2->addMedia(public_path('images\template2_image.png'))
    //         ->preservingOriginal()
    //         ->toMediaCollection('template_image');

    //     $template2->addMedia(public_path('images\template2_gallery_1.png'))
    //         ->preservingOriginal()
    //         ->toMediaCollection('template_gallery');
        
    //         $template2->addMedia(public_path('images\template2_gallery_2.png'))
    //         ->preservingOriginal()
    //         ->toMediaCollection('template_gallery');    
        
    }
}
