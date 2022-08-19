<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsPagesImages extends Model
{
    use HasFactory;

    protected $table = 'ws_pages_images';

    protected $fillable = [
        'page_id',
        'image'      
    ];
}
