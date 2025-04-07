<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreTestimonialRequest;
use App\Http\Requests\Backend\UpdateTestimonialRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestimonialsController extends Controller
{
    use UploadImageTrait;
    //

    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $testimonials = Testimonial::query();
            return DataTables::of($testimonials)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                                  <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.testimonial.index');
    }

    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = new Testimonial;
        $data = $request->except('client_image');
        $client_image_path = $this->handleOneImageUpload($request, $testimonial, 'client_image', 'testimonials');


        $data['main_image'] =  $client_image_path;
        $testimonial->create($data);
        return response()->json(['success' => 'Testimonial added successfully']);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return response()->json($testimonial);
    }

    public function update(UpdateTestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->except('client_image');

        if ($request->client_image != null) {
            $main_image_path = $this->handleOneImageUpload($request, $testimonial, 'client_image', 'testimonials');
            $data['client_image'] =  $main_image_path ? $main_image_path : $testimonial->client_image;
        }
        $testimonial->update($data);
        return response()->json(['success' => 'Testimonial updated successfully']);
    }

    public function destroy($id)
    {
        Testimonial::destroy($id);
        return response()->json(['success' => 'Testimonial deleted successfully']);
    }
}
