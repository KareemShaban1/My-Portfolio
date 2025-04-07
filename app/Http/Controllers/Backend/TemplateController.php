<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Template;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $template = Template::withCount('pages')->get();
            return DataTables::of($template)
                ->addColumn('main_image', function ($row) {
                    return '<img src="' . $row->main_image_url . '" class="img-thumbnail" style="width: 100px; height: 100px;">';
                })
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                            <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })
                ->rawColumns(['actions', 'main_image'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.template.index');
    }

    public function store(StoreTemplateRequest $request)
    {
        $template = Template::create($request->all());
        if ($request->hasFile('main_image')) {
            $template->addMedia($request->file('main_image'))
                ->toMediaCollection('template_image', 'media');
        }

        // Store multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $template->addMedia($image)->toMediaCollection('template_gallery', 'media');
            }
        }
        return response()->json(['success' => 'Template added successfully']);
    }

    public function edit($id)
    {
        $template = Template::findOrFail($id);
        return response()->json($template);
    }

    public function update(UpdateTemplateRequest $request, $id)
    {
        $template = Template::findOrFail($id);
        $template->update($request->all());
        // Update main image (replace old one)
        if ($request->hasFile('main_image')) {
            $template->clearMediaCollection('template_image'); // Remove the old main image
            $template->addMedia($request->file('main_image'))
                ->toMediaCollection('template_image', 'media');
        }

        // Update gallery images (remove old ones and add new ones)
        if ($request->hasFile('images')) {
            $template->clearMediaCollection('template_gallery'); // Remove old gallery images
            foreach ($request->file('images') as $image) {
                $template->addMedia($image)->toMediaCollection('template_gallery', 'media');
            }
        }
        return response()->json(['success' => 'Template updated successfully']);
    }

    public function destroy($id)
    {
        $template = Template::findOrFail($id);
        $template = $template->destroy($id);
        $template->clearMediaCollection('template_image');
        $template->clearMediaCollection('template_gallery');
        return response()->json(['success' => 'Template deleted successfully']);
    }
}
