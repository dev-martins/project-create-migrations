<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubtitleVideo extends Model
{
    use HasFactory;

    protected $table = 'subtitle_videos';

    protected $fillable = [
        "video_id",
        "extension",
        "url",
        "status",
        "url_signed"
    ];
}
