<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsPages extends Model
{
    use HasFactory;

    protected $table = 'ws_pages';

    protected $fillable = [
        'page_id',
        'page_title',
        'page_subtitle',
        'page_name',
        'page_content',
        'page_date',
        'page_revision',
        'page_order',
        'page_status',
        'page_cover'
    ];
}
