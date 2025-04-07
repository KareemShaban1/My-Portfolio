<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'information_id',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function information()
    {
        return $this->belongsTo(Information::class);
    }
}
