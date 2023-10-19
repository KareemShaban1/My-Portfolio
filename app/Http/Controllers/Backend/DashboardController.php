<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectsCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){

        $projects_count = Project::all()->count();
        $projects_categories_count = ProjectsCategory::all()->count();
        $testimonials_count = Testimonial::all()->count();


        return view('backend.pages.dashboard.index',compact(
            'projects_count','projects_categories_count','testimonials_count'));
    }
}