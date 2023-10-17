<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreInformationRequest;
use App\Http\Requests\Backend\UpdateInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class InformationController extends Controller
{
    //

    public function index(){
        $information = Information::all();
        return view('backend.pages.information.index',compact('information'));
        
    }

    public function show(){
        
    }

    public function add(){
        return view('backend.pages.information.add');

    }


    public function store(StoreInformationRequest $request){
        
        $information = Information::create($request->all());

        return redirect()->route('information');
        
    }

    public function edit($id){
        $information = Information::findOrFail($id); 
        return view('backend.pages.information.edit',compact('information'));
    }

    public function update(UpdateInformationRequest $request , $id){
        
        $information = Information::findOrFail($id); 
        $information->update($request->all());

        return redirect()->route('information');
    }

    public function delete(){
        
    }

    
}