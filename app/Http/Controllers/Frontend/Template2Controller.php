<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\PortfolioImage;
use App\Models\Project;
use App\Models\Projects;
use App\Models\ProjectsCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class Template2Controller extends Controller
{
    //
    public function index(){
        
        $information = Information::pluck('value', 'key')->toArray();
        $projects = Project::with('project_category')->get();
        $categories = ProjectsCategory::get(['name']);
        $testimonials = Testimonial::get();
        // $portfolioImages = PortfolioImage::pluck('image', 'image_name')->toArray();

        $portfolioImages = PortfolioImage::pluck('image', 'image_name')->toArray();
        // Map the array to add the image_url attribute to each element
        $portfolioImages = collect($portfolioImages)->map(function ($image, $image_name) {
            $portfolioImage = new PortfolioImage();
            $portfolioImage->image = $image;
            $portfolioImage->image_name = $image_name;
            // Add the image_url attribute
            $portfolioImage->image_url = $portfolioImage->image_url;
            return $portfolioImage;
        })->toArray();


        return view('frontend.Template2.pages.index',
        compact('information','projects','categories','testimonials','portfolioImages'));
    }

    public function projectDetails($id){
        
        $project = Project::findOrFail($id);
        
        views($project)
        ->record();
        
        return view('frontend.Template2.pages.project_details',compact('project'));

    }
}