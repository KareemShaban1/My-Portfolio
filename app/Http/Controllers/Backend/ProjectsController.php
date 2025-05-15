<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreProjectRequest;
use App\Http\Requests\Backend\UpdateProjectRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Project;
use App\Models\ProjectsProject;
use CyrildeWit\EloquentViewable\Contracts\Visitor as ContractsVisitor;
use CyrildeWit\EloquentViewable\Visitor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProjectsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $project = Project::query();
            return DataTables::of($project)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                               <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })
                ->addColumn('main_image', function ($row) {
                    $main_image = $row->getFirstMediaUrl('project_image');
                    return '<img src="' . $main_image . '" class="img-fluid" style="max-width: 100px; max-height: 100px;">';
                })
                ->rawColumns(['actions', 'main_image'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.project.index');
    }


    public function store(StoreProjectRequest $request)
    {

        $data = $request->except(['images', 'main_image']);
        $project = Project::create($data);

        // Store main image
        if ($request->hasFile('main_image')) {
            $project->addMedia($request->file('main_image'))
                ->toMediaCollection('project_image', 'media'); 
        }

        // Store multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('project_gallery', 'media');
            }
        }

        return response()->json(['success' => 'Project added successfully']);
    }



    public function edit($id)
    {
        $project = Project::findOrFail($id);
        
        return response()->json($project);
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->except(['images', 'main_image']);
    
        // Update main image (replace old one)
        if ($request->hasFile('main_image')) {
            $project->clearMediaCollection('project_image'); // Remove the old main image
            $project->addMedia($request->file('main_image'))
                    ->toMediaCollection('project_image', 'media');
        }
    
        // Update gallery images (remove old ones and add new ones)
        if ($request->hasFile('images')) {
            $project->clearMediaCollection('project_gallery'); // Remove old gallery images
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('project_gallery', 'media');
            }
        }
    
        $project->update($data);
        return response()->json(['success' => 'Project updated successfully']);
    }
    
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
    
        // Delete associated media
        $project->clearMediaCollection('project_image');
        $project->clearMediaCollection('project_gallery');
    
        // Delete the project
        $project->delete();
    
        return response()->json(['success' => 'Project deleted successfully']);
    }
    
}
