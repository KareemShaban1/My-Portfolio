<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['client_name','client_job','text'];

    public function getClientImageUrlAttribute()
    {
        $media = $this->getFirstMedia('client_image'); // Corrected method usage

        return $media ? $media->getUrl() : 'https://placehold.co/300x300'; // Fallback image
    }
}