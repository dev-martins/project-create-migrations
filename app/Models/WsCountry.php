<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsCountry extends Model
{
    use HasFactory;

    protected $table = 'ws_countries';

    protected $fillable = [
        'name',
        'dialCode',
        'isoCode',
        'flag'
    ];
}
