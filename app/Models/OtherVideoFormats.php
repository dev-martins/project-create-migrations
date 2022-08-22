<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherVideoFormats extends Model
{
    use HasFactory;

    protected $table = 'other_video_formats';

    protected $primaryKey = 'id';

    protected $fillable = [
        'video_id',
        'format',
        'thumbnail_url',
        'url',
        'url_signed',
    ];
}
