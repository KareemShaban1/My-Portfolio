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
        $testimonial->create($data);

        if ($request->hasFile('client_image')) {
            $testimonial->addMedia($request->file('client_image'))
                ->toMediaCollection('client_image', 'media');
        }
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
        $testimonial->update($data);

        if ($request->hasFile('client_image')) {
            $testimonial->clearMediaCollection('client_image'); // Remove the old main image
            $testimonial->addMedia($request->file('client_image'))
                    ->toMediaCollection('client_image', 'media');
        }
        return response()->json(['success' => 'Testimonial updated successfully']);
    }

    public function destroy($id)
    {
        Testimonial::destroy($id);
        return response()->json(['success' => 'Testimonial deleted successfully']);
    }
}
