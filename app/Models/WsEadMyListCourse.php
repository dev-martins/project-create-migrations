<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadMyListCourse extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_my_list_courses';

    protected $fillable = [
        'user_id',
        'course_id',
        'class_id',
        'my_list_status'
    ];

}
