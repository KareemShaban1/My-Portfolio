<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreMetaDataRequest;
use App\Http\Requests\Backend\UpdateMetaDataRequest;
use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
    //
    
    public function index(){
        $metaData = MetaData::all();
        return view('backend.pages.metaData.index',compact('metaData'));
        
    }

    public function show(){
        
    }

    public function add(){
        return view('backend.pages.metaData.add');

    }


    public function store(StoreMetaDataRequest $request){
        
        $metaData = MetaData::create($request->all());

        return redirect()->route('metaData');
        
    }

    public function edit($id){
        $metaData = MetaData::findOrFail($id); 
        return view('backend.pages.metaData.edit',compact('metaData'));
    }

    public function update(UpdateMetaDataRequest $request , $id){
        
        $metaData = MetaData::findOrFail($id); 
        $metaData->update($request->all());

        return redirect()->route('metaData');
    }

    public function delete(){
        
    }

}