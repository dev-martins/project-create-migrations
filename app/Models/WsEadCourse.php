<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadCourse extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_courses';

    protected $fillable = [
        'course_title',
        'course_author',
        'course_segment',
        'signature_id',
        'course_desc',
        'course_cover',
        'course_image_details',
        'course_name',
        'course_logo',
        'course_open',
        'course_created',
        'course_updated',
        'course_status',
        'course_order',
        'course_launch',
        'course_launch_priority',
        'course_slider',
        'course_slider_priority',
        'highlighted',
        'pay'
    ];
}
