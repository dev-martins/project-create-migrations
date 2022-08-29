<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastsAggregators extends Model
{
    use HasFactory;

    protected $table = 'podcasts_aggregators';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'status',
        'aggregator_img',
    ];
}
