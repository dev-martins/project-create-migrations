<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedCourses extends Model
{
    use HasFactory;

    protected $table = 'liked_courses';

    protected $fillable = [
        'idliked_video',
        'course_id',
        'status',
        'user_id'
    ];
}
