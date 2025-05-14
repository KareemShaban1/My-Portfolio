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
        $data['content'] = "test";
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
                    'entity_id' => $page->id,
                    'entity_type' => Page::class,
                ]);
            }
        }

        return response()->json(['success' => 'Page added successfully']);
    }


    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $page->load('information', 'media');
        return response()->json($page);
    }

    public function update(UpdatePageRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $data = $request->except(['images', 'main_image']);
        $data['slug'] = str()->slug($request->name);
        $page->update($data);

        // Update main image if provided
        if ($request->hasFile('main_image')) {
            $page->clearMediaCollection('page_image');
            $page->addMedia($request->file('main_image'))
                ->toMediaCollection('page_image', 'media');
        }

        // Add new gallery images if provided
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $page->addMedia($image)->toMediaCollection('page_gallery', 'media');
            }
        }

        // Delete existing info entries of type 'page' for this page
        $page->information()->where('type', 'page')->delete();


        // Re-create page information
        foreach ($request->info_keys as $index => $key) {
            if (!empty($key) && isset($request->info_values[$index])) {
                Information::create([
                    'key' => $key,
                    'value' => $request->info_values[$index],
                    'type' => 'page',
                    'entity_id' => $page->id,
                    'entity_type' => Page::class,
                ]);
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
