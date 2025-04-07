<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $page = Page::query();
            return DataTables::of($page)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                               <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })
                ->addColumn('main_image', function ($row) {
                    $main_image = $row->getFirstMediaUrl('page_image');
                    return '<img src="' . $main_image . '" class="img-fluid" style="max-width: 100px; max-height: 100px;">';
                })
                ->addColumn('template', function ($row) {
                    return $row->template->name;
                })
                ->rawColumns(['actions', 'main_image'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.page.index');
    }

    public function create()
    {
        return view('backend.dashboard.template2.pages.page.create');
    }


    public function store(StorePageRequest $request)
    {
        $data = $request->except(['images', 'main_image']);
        $data['slug'] = str()->slug($request->name);
        $page = Page::create($data);

        // Store main image
        if ($request->hasFile('main_image')) {
            $page->addMedia($request->file('main_image'))
                ->toMediaCollection('page_image', 'media');
        }

        // Store multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $page->addMedia($image)->toMediaCollection('page_gallery', 'media');
            }
        }

        // Store page information (key-value pairs)
        foreach ($request->info_keys as $index => $key) {
            // Make sure there's a corresponding value
            if (!empty($key) && isset($request->info_values[$index])) {
                $information = Information::create([
                    'key' => $key,
                    'value' => $request->info_values[$index],
                    'type' => 'page',
                ]);

                $page->pageInformation()->create([
                    'information_id' => $information->id,
                    'page_id' => $page->id
                ]);
            }
        }

        return response()->json(['success' => 'Page added successfully']);
    }


    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $page->load('pageInformation', 'media');
        return response()->json($page);
    }

    public function update(UpdatePageRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $data = $request->except(['images', 'main_image']);

        // Update main image (replace old one)
        if ($request->hasFile('main_image')) {
            $page->clearMediaCollection('page_image'); // Remove the old main image
            $page->addMedia($request->file('main_image'))
                ->toMediaCollection('page_image', 'media');
        }

        // Update gallery images (remove old ones and add new ones)
        if ($request->hasFile('images')) {
            $page->clearMediaCollection('page_gallery'); // Remove old gallery images
            foreach ($request->file('images') as $image) {
                $page->addMedia($image)->toMediaCollection('page_gallery', 'media');
            }
        }

        $page->update($data);

       // Update existing information
    foreach ($request->info_keys as $index => $key) {
        if (!empty($key) && isset($request->info_values[$index])) {
            $value = $request->info_values[$index];

            // Check if the information already exists for this page
            $existingInformation = $page->pageInformation()
                ->whereHas('information', function ($q) use ($key) {
                    $q->where('key', $key);
                })
                ->first();

            if ($existingInformation) {
                // Update the existing Information model
                $existingInformation->information->update([
                    'value' => $value,
                ]);
            } else {
                // Create new Information
                $information = Information::create([
                    'key' => $key,
                    'value' => $value,
                    'type' => 'page',
                ]);

                $page->pageInformation()->create([
                    'information_id' => $information->id,
                    'page_id' => $page->id
                ]);
            }
        }
    }

        return response()->json(['success' => 'Page updated successfully']);
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);

        // Delete associated media
        $page->clearMediaCollection('page_image');
        $page->clearMediaCollection('page_gallery');

        // Delete the page
        $page->delete();

        return response()->json(['success' => 'Page deleted successfully']);
    }
}
