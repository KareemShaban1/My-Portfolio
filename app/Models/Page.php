<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'name',
        'content',
        'slug',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'template_id',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function information()
    {
        return $this->morphMany(Information::class, 'entity');
    }
}
