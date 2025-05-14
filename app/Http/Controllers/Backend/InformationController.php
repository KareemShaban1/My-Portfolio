<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreInformationRequest;
use App\Http\Requests\Backend\UpdateInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $information = Information::where('type', 'general');
            return DataTables::of($information)
            ->addColumn('value', function ($row) {
                return \Str::words(strip_tags($row->value), 5, '...');
            })
            
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="'.$row->id.'">'.__('Edit').'</button>
                            <button class="btn btn-sm btn-danger delete" data-id="'.$row->id.'">'.__('Delete').'</button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.information.index');
    }

    public function store(StoreInformationRequest $request)
    {
        $information = Information::create($request->all());
        return response()->json(['success' => 'Information added successfully']);
    }

    public function edit($id)
    {
        $information = Information::findOrFail($id);
        return response()->json($information);
    }

    public function update(UpdateInformationRequest $request, $id)
    {
        $information = Information::findOrFail($id);
        $information->update($request->all());
        return response()->json(['success' => 'Information updated successfully']);
    }

    public function destroy($id)
    {
        Information::destroy($id);
        return response()->json(['success' => 'Information deleted successfully']);
    }
}
