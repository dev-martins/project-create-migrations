<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadClasse extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_classes';

    protected $fillable = [
        'class_title',
        'class_desc',
        'class_thumb',
        'pay',
        'course_id'
    ];
}
