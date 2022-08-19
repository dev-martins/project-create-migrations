<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsPost extends Model
{
    use HasFactory;

    protected $table = 'ws_posts';

    protected $fillable = [
        'post_name',
        'post_title',
        'post_subtitle',
        'post_content',
        'post_status',
    ];
}
