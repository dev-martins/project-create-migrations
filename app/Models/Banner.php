<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    protected $fillable = [
        'course_id', 
        'pro_id',
        'type_id', 
        'podcast_id', 
        'registered_by', 
        'enabled',
        'title', 
        'order', 
        'image_url', 
        'description',
        'created',
    ];
}
