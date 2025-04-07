<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Models\ProjectsCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProjectsCategoryController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $category = ProjectsCategory::query();
            return DataTables::of($category)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="'.$row->id.'">'.__('Edit').'</button>
                            <button class="btn btn-sm btn-danger delete" data-id="'.$row->id.'">'.__('Delete').'</button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.category.index');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = ProjectsCategory::create($request->all());
        return response()->json(['success' => 'Category added successfully']);
    }

    public function edit($id)
    {
        $category = ProjectsCategory::findOrFail($id);
        return response()->json($category);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = ProjectsCategory::findOrFail($id);
        $category->update($request->all());
        return response()->json(['success' => 'Category updated successfully']);
    }

    public function destroy($id)
    {
        ProjectsCategory::destroy($id);
        return response()->json(['success' => 'Category deleted successfully']);
    }
    
}