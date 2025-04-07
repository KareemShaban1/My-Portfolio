<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements Viewable,HasMedia
{
    use HasFactory;
    use InteractsWithViews;
    use InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','client','category_id','date',
    'github_link','live_link','info','images','main_image'];


    // public function getMainImageUrlAttribute()
    // {
    //     if (!$this->main_image) {
    //         return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
    //     }
    //     if (Str::startsWith($this->main_image, ['http://', 'https://'])) {
    //         return $this->main_image;
    //     }
    //     return asset('storage/projects/' . $this->main_image);
    // } // $project->main_image_url

   
    public function getMainImageUrlAttribute()
    {
        $media = $this->getFirstMedia('project_image'); // Corrected method usage

        return $media ? $media->getUrl() : 'https://placehold.co/300x300'; // Fallback image
    }

    public function getImagesAttribute()
    {
        return $this->getMedia('project_gallery')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }
    
    
    public function project_category(){
        
        return $this->belongsTo(ProjectsCategory::class ,'category_id','id');
    }

}