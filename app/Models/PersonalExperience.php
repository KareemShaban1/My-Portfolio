<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'job_title',
        'start_date',
        'end_date',
        'description',
        'location',
    ];
    
}
