<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\PersonalExperience;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class Template3Controller extends Controller
{
    //
    public function index()
    {
        $personalExperiences = PersonalExperience::get();
        $information = Information::where('type','general')->pluck('value','key')->toArray();
        $projects = Project::with('project_category', 'media')->get();
        $testimonials = Testimonial::get();

        return view('frontend.Template3.pages.index',compact(
            'information',
            'personalExperiences',
            'projects',
            'testimonials'
        ));
    }
}
