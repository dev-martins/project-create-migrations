<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoNote extends Model
{
    use HasFactory;

    // protected $table = 'video_notes';

    protected $fillable = [
        'subtitle',
        'video',
    ];
}
