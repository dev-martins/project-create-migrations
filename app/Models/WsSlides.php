<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsSlides extends Model
{
    use HasFactory;

    protected $table = 'ws_slides';

    protected $primaryKey = 'slide_id';

    protected $fillable = [
        'slide_status',
        'slide_image',
        'slide_title',
        'slide_desc',
        'slide_link',
        'slide_date',
        'slide_start',
        'slide_end',      
    ];
}
