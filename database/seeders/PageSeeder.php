<?php

namespace Database\Seeders;

use App\Models\Information;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $template1_page1 = Page::create([
            'name' => 'Home',
            'content' => 'Home content',
            'slug' => 'home',
            'template_id' => 1
        ]);

        $template1_page2 = Page::create([
            'name' => 'About',
            'content' => 'About content',
            'slug' => 'about',
            'template_id' => 1
        ]);

        $template1_page3 = Page::create([
            'name' => 'Services',
            'content' => 'Services content',
            'slug' => 'services',
            'template_id' => 1
        ]);

        $template1_page4 = Page::create([
            'name' => 'Portfolio',
            'content' => 'Portfolio content',
            'slug' => 'portfolio',
            'template_id' => 1
        ]);

        $template1_page5 = Page::create([
            'name' => 'Blog',
            'content' => 'Blog content',
            'slug' => 'blog',
            'template_id' => 1
        ]);

        $template1_page6 = Page::create([
            'name' => 'Content',
            'content' => 'Content content',
            'slug' => 'content',
            'template_id' => 1
        ]);



        $template2_page1 = Page::create([
            'name' => 'Home',
            'content' => 'Home content',
            'slug' => 'home',
            'template_id' => 2
        ]);

        $template2_page2 = Page::create([
            'name' => 'About',
            'content' => 'About content',
            'slug' => 'about',
            'template_id' => 2
        ]);

        // Create new Information
        $template2_page1_information1 = Information::create([
            'key' => 'website',
            'value' => 'https://example.com',
            'type' => 'page',
            'entity_id' => $template2_page1->id,
            'entity_type' => Page::class,
        ]);


        $template2_page3 = Page::create([
            'name' => 'Facts',
            'content' => 'Facts content',
            'slug' => 'facts',
            'template_id' => 2
        ]);

        $template2_page3_information1 = Information::create([
            'key' => 'Happy Clients',
            'value' => '10',
            'icon' => 'icofont-simple-smile',
            'type' => 'page',
            'entity_id' => $template2_page3->id,
            'entity_type' => Page::class,
        ]);

        $template2_page3_information2 = Information::create([
            'key' => 'Projects',
            'value' => '10',
            'icon' => 'icofont-document-folder',
            'type' => 'page',
            'entity_id' => $template2_page3->id,
            'entity_type' => Page::class,
        ]);

        $template2_page3_information3 = Information::create([
            'key' => 'Experience Years',
            'value' => '10',
            'icon' => 'icofont-live-support',
            'type' => 'page',
            'entity_id' => $template2_page3->id,
            'entity_type' => Page::class,
        ]);


        $template2_page4 = Page::create([
            'name' => 'Skills',
            'content' => 'Skills content',
            'slug' => 'skills',
            'template_id' => 2
        ]);

        $template2_page4_information1 = Information::create([
            'key' => 'HTML',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);
        $template2_page4_information2 = Information::create([
            'key' => 'CSS',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);
        $template2_page4_information3 = Information::create([
            'key' => 'JavaScript',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);
        $template2_page4_information4 = Information::create([
            'key' => 'Jquery',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);
        $template2_page4_information5 = Information::create([
            'key' => 'Bootstrap',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);
        $template2_page4_information6 = Information::create([
            'key' => 'PHP',
            'value' => '50',
            'type' => 'page',
            'entity_id' => $template2_page4->id,
            'entity_type' => Page::class,
        ]);

        $template2_page5 = Page::create([
            'name' => 'Services',
            'content' => 'Services content',
            'slug' => 'services',
            'template_id' => 2
        ]);

        $template2_page5_information1 = Information::create([
            'key' => 'Laravel Web Development',
            'value' => 'Building custom, dynamic websites and web applications using the Laravel framework.',
            'icon' => 'icofont-code-alt',
            'type' => 'page',
            'entity_id' => $template2_page5->id,
            'entity_type' => Page::class,
        ]);

        $template2_page5_information2 = Information::create([
            'key' => 'Website Customization',
            'value' => 'Customizing existing websites and scripts to meet your specific requirements.',
            'icon' => 'icofont-code',
            'type' => 'page',
            'entity_id' => $template2_page5->id,
            'entity_type' => Page::class,
        ]);

        $template2_page5_information3 = Information::create([
            'key' => 'Static and Dynamic Websites',
            'value' => 'Creating both static and dynamic websites tailored to your needs.',
            'icon' => 'icofont-web',
            'type' => 'page',
            'entity_id' => $template2_page5->id,
            'entity_type' => Page::class,
        ]);

        $template2_page6 = Page::create([
            'name' => 'Contact',
            'content' => 'Contact content',
            'slug' => 'contact',
            'template_id' => 2
        ]);


        $template3_page1 = Page::create([
            'name' => 'Home',
            'content' => 'Home content',
            'slug' => 'home',
            'template_id' => 3
        ]);

        $template3_page2 = Page::create([
            'name' => 'About',
            'content' => 'About content',
            'slug' => 'about',
            'template_id' => 3
        ]);

        $template3_page3 = Page::create([
            'name' => 'Projects',
            'content' => 'Projects content',
            'slug' => 'projects',
            'template_id' => 3
        ]);

        $template3_page4 = Page::create([
            'name' => 'Conatct',
            'content' => 'Conatct content',
            'slug' => 'conatct',
            'template_id' => 3
        ]);

        $template4_page1 = Page::create([
            'name' => 'Home',
            'content' => 'Home content',
            'slug' => 'home',
            'template_id' => 4
        ]);

        $template4_page2 = Page::create([
            'name' => 'Portfolio',
            'content' => 'Portfolio content',
            'slug' => 'portfolio',
            'template_id' => 4
        ]);

        $template4_page3 = Page::create([
            'name' => 'Gallery',
            'content' => 'Gallery content',
            'slug' => 'gallery',
            'template_id' => 4
        ]);

        $template4_page4 = Page::create([
            'name' => 'Projects',
            'content' => 'Projects content',
            'slug' => 'projects',
            'template_id' => 4
        ]);

        $template4_page5 = Page::create([
            'name' => 'About',
            'content' => 'About content',
            'slug' => 'about',
            'template_id' => 4
        ]);

        $template4_page6 = Page::create([
            'name' => 'Blog',
            'content' => 'Blog content',
            'slug' => 'blog',
            'template_id' => 4
        ]);
       
    }
}
