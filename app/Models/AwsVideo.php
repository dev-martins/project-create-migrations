<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwsVideo extends Model
{
    use HasFactory;

    protected $table = 'aws_videos';

    protected $fillable = [
        'url',
        'url_signed',
        'thumbnail_url',
        'duration_in_seconds'
    ];
}
