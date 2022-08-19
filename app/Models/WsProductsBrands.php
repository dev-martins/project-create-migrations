<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsBrands extends Model
{
    use HasFactory;

    protected $table = 'ws_products_brands';

    protected $fillable = [
        'brand_id',
        'brand_title',
        'brand_name',
        'brand_created'
    ];
}
