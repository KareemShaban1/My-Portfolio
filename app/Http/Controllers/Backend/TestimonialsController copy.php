<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreTestimonialRequest;
use App\Http\Requests\Backend\UpdateTestimonialRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    use UploadImageTrait;
    //

       //
       public function index(){
        $testimonials = Testimonial::get();
        
        return view('backend.pages.testimonials.index',compact('testimonials'));
        
    }

    public function show(){
        
    }

    public function add(){
        
        return view('backend.pages.testimonials.add');

    }


    public function store(StoreTestimonialRequest $request){
        // dd($request->all());

        $testimonial = new Testimonial();
        $data = $request->except('client_image');
        
        $image_path = $this->handleOneImageUpload($request, $testimonial,'client_image','testimonials');

        
        $data['client_image'] =  $image_path;
    
        $testimonial->create($data);
        return redirect()->route('testimonials');
        
    }

    public function edit($id){
        $testimonial = Testimonial::findOrFail($id); 

        return view('backend.pages.testimonials.edit',compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request , $id){
        
        
        $testimonial = Testimonial::findOrFail($id); 
        $data = $request->except('client_image');
        
        $image_path = $this->handleOneImageUpload($request, $testimonial,'client_image','testimonials');
        
        $data['client_image'] =  $image_path;
        
        $testimonial->update($data);
        return redirect()->route('testimonials');
    
    }

    public function delete(){
        
    }

}