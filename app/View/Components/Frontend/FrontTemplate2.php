<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontTemplate2 extends Component
{
    // public $metaData; // Define a public property to hold the metadata

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        // $this->metaData = MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('frontend.Template2.layouts.front');
    }
}