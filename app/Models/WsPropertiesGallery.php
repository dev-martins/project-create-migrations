<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsPropertiesGallery extends Model
{
    use HasFactory;

    protected $table = 'ws_properties_gallery';

    protected $fillable = [
        'realty_id',
        'id',
        'image'
    ];
}
