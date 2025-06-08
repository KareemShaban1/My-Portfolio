<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Template4Controller extends Controller
{
    //
    public function index(){
        return view('frontend.Template4.pages.index');
    }

    public function portfolio(){
        return view('frontend.Template4.pages.portfolio');
    }

    public function gallery(){
        return view('frontend.Template4.pages.gallery');
    }

    public function projects(){
        return view('frontend.Template4.pages.projects');
    }
}
