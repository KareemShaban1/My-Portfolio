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
        ]);

        $template2_page2->pageInformation()->create([
            'information_id' => $template2_page1_information1->id,
            'page_id' => $template2_page2->id
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
        ]);

        $template2_page3_information2 = Information::create([
            'key' => 'Projects',
            'value' => '10',
            'icon' => 'icofont-document-folder',
            'type' => 'page',
        ]);

        $template2_page3_information3 = Information::create([
            'key' => 'Experience Years',
            'value' => '10',
            'icon' => 'icofont-live-support',
            'type' => 'page',
        ]);

        $template2_page3->pageInformation()->create([
            'information_id' => $template2_page3_information1->id,
            'page_id' => $template2_page3->id
        ]);
        $template2_page3->pageInformation()->create([
            'information_id' => $template2_page3_information2->id,
            'page_id' => $template2_page3->id
        ]);
        $template2_page3->pageInformation()->create([
            'information_id' => $template2_page3_information3->id,
            'page_id' => $template2_page3->id
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
        ]);
        $template2_page4_information2 = Information::create([
            'key' => 'CSS',
            'value' => '50',
            'type' => 'page',
        ]);
        $template2_page4_information3 = Information::create([
            'key' => 'JavaScript',
            'value' => '50',
            'type' => 'page',
        ]);
        $template2_page4_information4 = Information::create([
            'key' => 'Jquery',
            'value' => '50',
            'type' => 'page',
        ]);
        $template2_page4_information5 = Information::create([
            'key' => 'Bootstrap',
            'value' => '50',
            'type' => 'page',
        ]);
        $template2_page4_information6 = Information::create([
            'key' => 'PHP',
            'value' => '50',
            'type' => 'page',
        ]);

        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information1->id,
            'page_id' => $template2_page4->id
        ]);
        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information2->id,
            'page_id' => $template2_page4->id
        ]);
        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information3->id,
            'page_id' => $template2_page4->id
        ]);
        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information4->id,
            'page_id' => $template2_page4->id
        ]);
        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information5->id,
            'page_id' => $template2_page4->id
        ]);
        $template2_page4->pageInformation()->create([
            'information_id' => $template2_page4_information6->id,
            'page_id' => $template2_page4->id
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
        ]);

        $template2_page5_information2 = Information::create([
            'key' => 'Website Customization',
            'value' => 'Customizing existing websites and scripts to meet your specific requirements.',
            'icon' => 'icofont-code',
            'type' => 'page',
        ]);

        $template2_page5_information3 = Information::create([
            'key' => 'Static and Dynamic Websites',
            'value' => 'Creating both static and dynamic websites tailored to your needs.',
            'icon' => 'icofont-web',
            'type' => 'page',
        ]);

        $template2_page5->pageInformation()->create([
            'information_id' => $template2_page5_information1->id,
            'page_id' => $template2_page5->id
        ]);
        $template2_page5->pageInformation()->create([
            'information_id' => $template2_page5_information2->id,
            'page_id' => $template2_page5->id
        ]);
        $template2_page5->pageInformation()->create([
            'information_id' => $template2_page5_information3->id,
            'page_id' => $template2_page5->id
        ]);

        




       
    }
}
