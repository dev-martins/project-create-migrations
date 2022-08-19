<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsPostsImages extends Model
{
    use HasFactory;

    protected $table = 'ws_posts_images';

    protected $fillable = [
        'post_id',
        'image'
    ];
}
