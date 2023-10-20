<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreProjectRequest;
use App\Http\Requests\Backend\UpdateProjectRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Project;
use App\Models\ProjectsCategory;

class ProjectsController extends Controller
{
    use UploadImageTrait;
    //

       //
       public function index(){
        $projects = Project::with('project_category')->get();
        
        return view('backend.pages.projects.index',compact('projects'));
        
    }

    public function show(){
        
    }

    public function add(){
        $categories = ProjectsCategory::get(['id','name']);
        return view('backend.pages.projects.add',compact('categories'));

    }


    public function store(StoreProjectRequest $request){
        // dd($request->all());

        $project = new Project;
        $data = $request->except('images','main_image');
        
        $images_path = $this->handleManyImagesUpload($request, $project,'images','projects');
        $main_image_path = $this->handleOneImageUpload($request, $project,'main_image','projects');

        
        $data['images'] =  $images_path;
        $data['main_image'] =  $main_image_path;
    
        $project->create($data);
        return redirect()->route('projects');
        
    }

    public function edit($id){
        $project = Project::findOrFail($id); 
        $categories = ProjectsCategory::get(['id','name']);

        return view('backend.pages.projects.edit',compact('project','categories'));
    }

    public function update(UpdateProjectRequest $request , $id){
        
        
        $project = Project::findOrFail($id); 
        $data = $request->except('images','main_image');

        if($request->main_image != null){
            $main_image_path = $this->handleOneImageUpload($request, $project,'main_image','projects');
            $data['main_image'] =  $main_image_path ? $main_image_path : $project->main_image;


        }elseif($request->images != null){
            $images_path = $this->handleManyImagesUpload($request, $project,'images','projects');
        // dd($images_path);
            $data['images'] =  $images_path ? $images_path : $project->images;

        }
        
        
        
        $project->update($data);
        return redirect()->route('projects');
        
    }

    public function delete(){
        
    }

    
 
//       // function to handel upload rays
//       private function handleImagesUpload($request, $project)
//       {
        
//           $old_image = explode('|', $project->images);
//           $image_path = [];
  
//           if ($files = $request->file('images')) {
//             // dd($files);
//               foreach ($files as $file) {
//                   $image_name = strtolower($file->getClientOriginalName());
//                   $image_name = str_replace(' ', '_', $image_name); // Replace spaces with underscores
              
//                   $file->storeAs(
//                       'projects',
//                       $image_name,
//                       ['disk' => 'public']
//                   );
//                   $image_path[] = $image_name;
//               }
  
//               foreach ($old_image as $key => $value) {
//                   if ($image_path && !empty($value)) {
//                       Storage::disk('uploads')->delete('projects/' . $value);
//                   }
//               }
//           }
  
//           return $image_path ? implode('|', $image_path) : $project->images;
//       }

//       private function handleMainImageUpload($request, $project)
// {
//     $old_image = $project->images;
//     $image_path = null;

//     if ($file = $request->file('main_image')) { // Assuming the input field name is 'image'
//         $image_name = strtolower($file->getClientOriginalName());
//         $image_name = str_replace(' ', '_', $image_name); // Replace spaces with underscores

//         $file->storeAs(
//             'projects',
//             $image_name,
//             ['disk' => 'public']
//         );

//         if (!empty($old_image)) {
//             Storage::disk('uploads')->delete('projects/' . $old_image);
//         }

//         $image_path = $image_name;
//     }

//     return $image_path ? $image_path : $old_image;
// }

      
      
      
}