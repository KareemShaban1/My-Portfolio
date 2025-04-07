<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Template extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function getMainImageUrlAttribute()
    {
        $media = $this->getFirstMedia('template_image'); // Corrected method usage

        return $media ? $media->getUrl() : 'https://placehold.co/300x300'; // Fallback image
    }

    public function getGalleryImagesAttribute()
    {
        return $this->getMedia('template_gallery');

    }
}
