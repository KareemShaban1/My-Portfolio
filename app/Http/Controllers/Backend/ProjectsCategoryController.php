<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Models\ProjectsCategory;

class ProjectsCategoryController extends Controller
{
    //
    public function index(){
        $categories = ProjectsCategory::all();
        return view('backend.pages.categories.index',compact('categories'));
        
    }

    public function show(){
        
    }

    public function add(){
        return view('backend.pages.categories.add');

    }


    public function store(StoreCategoryRequest $request){
        
        $categories = ProjectsCategory::create($request->all());

        return redirect()->route('categories');
        
    }

    public function edit($id){
        $category = ProjectsCategory::findOrFail($id); 
        return view('backend.pages.categories.edit',compact('category'));
    }

    public function update(UpdateCategoryRequest $request , $id){
        
        $category = ProjectsCategory::findOrFail($id); 
        $category->update($request->all());

        return redirect()->route('categories');
    }

    public function delete(){
        
    }

    
}