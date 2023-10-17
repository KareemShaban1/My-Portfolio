<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadImageTrait 
{
    
          private function handleManyImagesUpload($request, $model , $file_name , $storage_folder)
          {
              $oldImages = explode('|', $model->images);
              $newImages = [];
      
              if ($files = $request->file($file_name)) {
                  foreach ($files as $file) {
                      $newImages[] = $this->uploadImage($file,$storage_folder);
                  }
              }
      
              $this->deleteImages($oldImages, $newImages,$storage_folder);
      
              return implode('|', $newImages);
          }
      
          
          private function handleOneImageUpload($request, $model , $file_name , $storage_folder)
          {
              $oldImage = $model->file_name;
              $newImage = $this->uploadImage($request->file($file_name),$storage_folder);
      
              if (!empty($oldImage)) {
                  $this->deleteImage($oldImage,$storage_folder);
              }
      
              return $newImage;
          }
      
          private function uploadImage($file , $storage_folder)
          {
              $image_name = str_replace(' ', '_', strtolower($file->getClientOriginalName()));
              $file->storeAs($storage_folder, $image_name, ['disk' => 'public']);
      
              return $image_name;
          }
      
          private function deleteImages($oldImages, $newImages , $storage_folder)
          {
              $imagesToDelete = array_diff($oldImages, $newImages);
      
              foreach ($imagesToDelete as $image) {
                  $this->deleteImage($image,$storage_folder);
              }
          }
      
          private function deleteImage($image , $storage_folder)
          {
              Storage::disk('public')->delete($storage_folder.'/' . $image);
          }
}