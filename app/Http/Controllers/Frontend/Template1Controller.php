<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Template1Controller extends Controller
{
    //

    public function index()
    {
        return view('frontend.Template1.pages.index');
    }
}
