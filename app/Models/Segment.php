<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;
    
    protected $table = 'segments';

    protected $fillable = [
        'segment_title',
        'segment_name',
        'segment_color',
        'segment_created',
    ];
}
