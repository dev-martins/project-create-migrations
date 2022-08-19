<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalComment extends Model
{
    use HasFactory;

    protected $table = 'professional_comments';

    protected $fillable = [
        'comment_id',
        'pro_id',
        'class_id',
        'video_time_seconds',
        'comment',
    ];
}
