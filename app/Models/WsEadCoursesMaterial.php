<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadCoursesMaterial extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_courses_material';

    protected $fillable = [
        'course_id',
        'module_id',
        'class_id',
        'material_id',
        'material_title',
        'material_thumb',
        'material_file',
        'material_type',
        'material_order',
        'material_sended',
    ];
}
