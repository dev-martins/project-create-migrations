<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastsAggregators extends Model
{
    use HasFactory;

    protected $table = 'aggregators_podcasts';

    protected $fillable = [
        'name',
        'status',
        'aggregator_img'
    ];
}
