<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsSearch extends Model
{
    use HasFactory;

    protected $table = 'ws_search';

    protected $primaryKey = 'search_id';

    protected $fillable = [
        'search_key',
        'search_count',
        'search_date',
        'search_commit'
    ];
}
