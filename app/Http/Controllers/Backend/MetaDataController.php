<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreMetaDataRequest;
use App\Http\Requests\Backend\UpdateMetaDataRequest;
use App\Models\MetaData;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MetaDataController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $metaData = MetaData::query();
            return DataTables::of($metaData)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="'.$row->id.'">'.__('Edit').'</button>
                            <button class="btn btn-sm btn-danger delete" data-id="'.$row->id.'">'.__('Delete').'</button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.metaData.index');
    }

    public function store(StoreMetaDataRequest $request)
    {
        $metaData = MetaData::create($request->all());
        return response()->json(['success' => 'MetaData added successfully']);
    }

    public function edit($id)
    {
        $metaData = MetaData::findOrFail($id);
        return response()->json($metaData);
    }

    public function update(UpdateMetaDataRequest $request, $id)
    {
        $metaData = MetaData::findOrFail($id);
        $metaData->update($request->all());
        return response()->json(['success' => 'MetaData updated successfully']);
    }

    public function destroy($id)
    {
        MetaData::destroy($id);
        return response()->json(['success' => 'MetaData deleted successfully']);
    }

}