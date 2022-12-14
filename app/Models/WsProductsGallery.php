<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsGallery extends Model
{
    use HasFactory;

    protected $table = 'ws_products_gallery';

    protected $fillable = [
        'product_id',
        'id',
        'image'
    ];
}
