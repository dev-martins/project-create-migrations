<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legend extends Model
{
    use HasFactory;

    protected $table = 'legends';

    protected $primaryKey = 'legend_id';

    protected $fillable = [
        'start_time',
        'end_time',
        'video_id',
        'legend',
    ];

}
