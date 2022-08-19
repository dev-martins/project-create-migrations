<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadEnrollments extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_enrollments';

    protected $fillable = [
        'user_id',
        'course_id',
        'enrollment_id',
        'enrollment_order',
        'enrollment_bonus',
        'enrollment_group',
        'enrollment_start',
        'enrollment_access',
        'enrollment_end',
        'enrollment_introcourse_watched'               
    ];
}
