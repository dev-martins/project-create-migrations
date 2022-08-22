<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsSiteViewsOnline extends Model
{
    use HasFactory;

    protected $table = 'ws_siteviews_online';

    protected $primaryKey = 'online_id';

    protected $fillable = [
        'online_id',
        'online_user',
        'online_name',
        'online_startview',
        'online_endview',
        'online_ip',
        'online_url',
        'online_agent'
    ];
}
