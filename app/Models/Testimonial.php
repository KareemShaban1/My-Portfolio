<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['client_name','client_job','client_image','text'];

    public function getClientImageUrlAttribute()
    {
        if (!$this->client_image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->client_image, ['http://', 'https://'])) {
            return $this->client_image;
        }
        return asset('storage/testimonials/' . $this->client_image);
    } // $testimonial->client_image_url
}