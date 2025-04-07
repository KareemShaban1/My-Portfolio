<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PersonalExperience;
use App\Http\Requests\Backend\StorePersonalExperienceRequest;
use App\Http\Requests\Backend\UpdatePersonalExperienceRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PersonalExperienceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $personalExperience = PersonalExperience::query();
            return DataTables::of($personalExperience)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="'.$row->id.'">'.__('Edit').'</button>
                            <button class="btn btn-sm btn-danger delete" data-id="'.$row->id.'">'.__('Delete').'</button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.personalExperience.index');
    }

    public function store(StorePersonalExperienceRequest $request)
    {
        $personalExperience = PersonalExperience::create($request->all());
        return response()->json(['success' => 'PersonalExperience added successfully']);
    }

    public function edit($id)
    {
        $personalExperience = PersonalExperience::findOrFail($id);
        return response()->json($personalExperience);
    }

    public function update(UpdatePersonalExperienceRequest $request, $id)
    {
        $personalExperience = PersonalExperience::findOrFail($id);
        $personalExperience->update($request->all());
        return response()->json(['success' => 'PersonalExperience updated successfully']);
    }

    public function destroy($id)
    {
        PersonalExperience::destroy($id);
        return response()->json(['success' => 'PersonalExperience deleted successfully']);
    }
}
