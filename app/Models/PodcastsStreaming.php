<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastsStreaming extends Model
{
    use HasFactory;

    protected $table = 'podcasts_streamings';

    protected $fillable = [
        'name',
        'image',
        'url',
        'podcast_id',
        'agregador_id'
    ];
}
