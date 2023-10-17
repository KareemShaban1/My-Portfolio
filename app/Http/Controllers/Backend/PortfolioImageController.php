<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StorePortfolioImageRequest;
use App\Http\Requests\Backend\UpdatePortfolioImageRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;

class PortfolioImageController extends Controller
{
    use UploadImageTrait;
    //
    
    public function index(){
        $portfolioImages = PortfolioImage::all();
        return view('backend.pages.portfolioImages.index',compact('portfolioImages'));
        
    }

    public function show(){
        
    }

    public function add(){
        return view('backend.pages.portfolioImages.add');

    }


    public function store(StorePortfolioImageRequest $request){

        
        $portfolioImage = new PortfolioImage;
        
        $data = $request->except('image');
        
        $image_path = $this->handleOneImageUpload($request, $portfolioImage,'image','portfolioImages');
        
        $data['image'] =  $image_path;
        
        $portfolioImage->create($data);

        return redirect()->route('portfolioImages');
        
    }

    public function edit($id){
        $portfolioImage = PortfolioImage::findOrFail($id); 
        return view('backend.pages.portfolioImages.edit',compact('portfolioImage'));
    }

    public function update(UpdatePortfolioImageRequest $request , $id){
        
        $portfolioImage = PortfolioImage::findOrFail($id); 
        $data = $request->except('image');
        
        $image_path = $this->handleOneImageUpload($request, $portfolioImage,'image','portfolioImages');
        
        $data['image'] =  $image_path;
        $portfolioImage->update($data);

        return redirect()->route('portfolioImages');
    }

    public function delete(){
        
    }

}