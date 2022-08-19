<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsImages extends Model
{
    use HasFactory;

    protected $table = 'ws_products_images';

    protected $fillable = [
        'product_id',
        'id',
        'image'
    ];
}
