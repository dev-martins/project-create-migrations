<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClasses extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_student_classes';

    protected $fillable = [
        'user_id',
        'course_id',
        'class_id',
        'module_id',
        'enrollment_id',
        'student_class_id',
        'student_class_play',
        'student_class_free',
        'student_class_seconds',
        'student_class_check',
        'viewing_order',
    ];
}
