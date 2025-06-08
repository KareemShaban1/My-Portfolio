<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use App\Models\PdfFiles;
use App\Models\PersonalExperience;
use App\Models\PortfolioImage;
use App\Models\Project;
use App\Models\ProjectsCategory;
use App\Models\Template;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class Template2Controller extends Controller
{
    //
    public function index()
    {
        $template = Template::where('id', 2)->first();
        $pages = Page::where('template_id', $template->id)->get();

        $aboutPage = Page::where('slug', 'about')
            ->where('template_id', $template->id)
            ->first();

        $factsPage = Page::where('slug', 'facts')
            ->where('template_id', $template->id)
            ->first();

        $skillsPage = Page::where('slug', 'skills')
            ->where('template_id', $template->id)
            ->first();

        $servicesPage = Page::where('slug', 'services')
            ->where('template_id', $template->id)
            ->first();

        $personalExperiences = PersonalExperience::get();

        $information = Information::pluck('value', 'key')->toArray();
        $generalInformation = Information::where('type', 'general')
            ->pluck('value', 'key')->toArray();

        $templateInformation = Information::where('type', 'template')
            ->where('entity_type', 'template')
            ->where('entity_id', $template->id)
            ->pluck('value', 'key')->toArray();

        $projects = Project::with('project_category', 'media')->get();
        $categories = ProjectsCategory::get(['name']);
        $testimonials = Testimonial::get();
        $homePage = Page::where('slug', 'home')->first();

        $portfolioImages = PortfolioImage::pluck('image', 'image_name')->toArray();


        $cv_pdf = PdfFiles::where('name', 'cv')->first();



        return view(
            'frontend.Template2.pages.index',
            compact(
                'information',
                'projects',
                'categories',
                'homePage',
                'testimonials',
                'portfolioImages',
                'cv_pdf',
                'aboutPage',
                'factsPage',
                'skillsPage',
                'servicesPage',
                'personalExperiences',
                'generalInformation',
                'templateInformation'
            )
        );
    }
}
