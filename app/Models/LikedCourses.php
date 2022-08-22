<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedCourses extends Model
{
    use HasFactory;

    protected $table = 'liked_courses';

    protected $primaryKey = 'idliked_video';

    protected $fillable = [
        'course_id',
        'user_id',
        'status',
    ];
}
