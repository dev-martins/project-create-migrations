<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnotationVideo extends Model
{
    use HasFactory;

    protected $table = 'annotation_videos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'course_id',
        'class_id',
        'annotation',
        'time_video',
    ];
}
