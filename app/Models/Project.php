<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements Viewable, HasMedia
{
    use HasFactory;
    use InteractsWithViews;
    use InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'client',
        'category_id',
        'date',
        'github_link',
        'live_link',
        'info',
    ];

    protected $appends = ['main_image_url', 'images_urls'];


    public function getMainImageUrlAttribute()
    {
        $media = $this->getFirstMedia('project_image'); // Corrected method usage

        return $media ? $media->getUrl() : 'https://placehold.co/300x300'; // Fallback image
    }

    public function getImagesUrlsAttribute()
    {
        return $this->getMedia('project_gallery')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }


    public function project_category()
    {

        return $this->belongsTo(ProjectsCategory::class, 'category_id', 'id');
    }
}
